<?php

class AuthController extends BaseController
{
    /**
     * Account sign in.
     *
     * @return View
     */
    public function getSignin()
    {
        // Is the user logged in?
        if (Sentry::check()) {
            return Redirect::route('dashboard');
        }

        // Show the page
        return View::make('admin.login');
    }

    /**
     * Account sign in form processing.
     *
     * @return Redirect
     */
    public function postSignin()
    {
        // Declare the rules for the form validation
        $rules = array(
            'email'    => 'required|email',
            'password' => 'required|between:3,32',
        );

        // Create a new validator instance from our validation rules
        $validator = Validator::make(Input::all(), $rules);

        // If validation fails, we'll exit the operation now.
        if ($validator->fails()) {
            // Ooops.. something went wrong
            return Redirect::back()->withInput()->withErrors($validator);
        }

        try {
            // Try to log the user in
            Sentry::authenticate(Input::only('email', 'password'), Input::get('remember-me', 0));

            // Get the page we were before
            $redirect = Session::get('loginRedirect', 'account');

            // Unset the page we were before from the session
            Session::forget('loginRedirect');

            if(!Cache::has('funcionalidades' . Sentry::getUser()->id)){
                $funcionalidades = null;
                foreach (Sentry::getUser()->perfil->funcionalidades as $funcionalidade){
                    $funcionalidades[] = $funcionalidade->metodo;
                }
                Cache::put('funcionalidades' . Sentry::getUser()->id, $funcionalidades, 120);
            }

            //registrar log de acesso
            $log = new LogAcesso();
            $log->savarLogAcesso(Sentry::getUser()->id);

            // Redirect to the users page
            //return Redirect::to($redirect)->with('success', Lang::get('auth/message.signin.success'));
            return Redirect::route("portal")->with('success', Lang::get('auth/message.signin.success'));
        } catch (Cartalyst\Sentry\Users\UserNotFoundException $e) {
            $this->messageBag->add('email', Lang::get('auth/message.account_not_found'));
        } catch (Cartalyst\Sentry\Users\UserNotActivatedException $e) {
            $this->messageBag->add('email', Lang::get('auth/message.account_not_activated'));
        } catch (Cartalyst\Sentry\Throttling\UserSuspendedException $e) {
            $this->messageBag->add('email', Lang::get('auth/message.account_suspended'));
        } catch (Cartalyst\Sentry\Throttling\UserBannedException $e) {
            $this->messageBag->add('email', Lang::get('auth/message.account_banned'));
        }

        // Ooops.. something went wrong
        return Redirect::back()->withInput()->withErrors($this->messageBag);
    }

    /**
     * Account sign up form processing.
     *
     * @return Redirect
     */
    public function postSignup()
    {
        // Create a new validator instance from our validation rules
        $validator = Validator::make(Input::all(), User::getRules()); //User::getRules() centralização das rules na classe User

        // If validation fails, we'll exit the operation now.
        if ($validator->fails()) {
            // Ooops.. something went wrong
            return Redirect::to(URL::previous() . '#toregister')->withInput()->withErrors($validator);
        }

        try {
            $dados = array(
                'first_name'     => Input::get('first_name'),
                'last_name'      => Input::get('last_name'),
                'email'          => Input::get('email'),
                'password'       => Input::get('password'),
                'activated'      => 0, // make it 0 if you don't want to activate user on registration
                'dt_nascimento'  => Util::toMySQL(Input::get('dt_nascimento')),
                'genero'         => Input::get('genero'),
                'perfil_id'      => 2
            );

            if(Session::has('utm.source')) {
                $dados['utm_source'] = Session::get('utm.source');
            }
            if(Session::has('utm.medium')) {
                $dados['utm_medium'] = Session::get('utm.medium');
            }
            if(Session::has('utm.term')) {
                $dados['utm_term'] = Session::get('utm.term');
            }
            if(Session::has('utm.content')) {
                $dados['utm_content'] = Session::get('utm.content');
            }
            if(Session::has('utm.campaign')) {
                $dados['utm_campaign'] = Session::get('utm.campaign');
            }

            // Register the user
            $user = Sentry::register($dados);


            //un-comment below code incase if user have to activate manually

            // Data to be used on the email view
            $data = array(
                'user'          => $user,
                'activationUrl' => URL::route('activate', $user->getActivationCode()),
            );

            // Send the activation code through email
            Mail::send('emails.auth.register-activate', $data, function ($m) use ($user) {
                $m->to($user->email, $user->first_name . ' ' . $user->last_name);
                $m->subject('Bem Vindo ' . $user->first_name);
            });

            //limpar sessão RUS-012
            Session::forget('utm');

            //Redirect to login page
            return Redirect::to("admin/login")->with('success', Lang::get('auth/message.signup.success'));



            // login user automatically

            // Find the user using the user id
            $user = Sentry::findUserByLogin(Input::get('email'));

            // Log the user in
            Sentry::login($user, false);

            // Redirect to the home page with success menu
            return Redirect::route("dashboard")->with('success', Lang::get('auth/message.signup.success'));

        } catch (Cartalyst\Sentry\Users\UserExistsException $e) {
            $this->messageBag->add('email', Lang::get('auth/message.account_already_exists'));
        }

        // Ooops.. something went wrong
        return Redirect::back()->withInput()->withErrors($this->messageBag);
    }

    /**
     * User account activation page.
     *
     * @param string $actvationCode
     * @return
     */
    public function getActivate($activationCode = null)
    {

        // Is the user logged in?
        if (Sentry::check()) {
            return Redirect::route('account');
        }

        try {
            // Get the user we are trying to activate
            $user = Sentry::getUserProvider()->findByActivationCode($activationCode);

            // Try to activate this user account
            if ($user->attemptActivation($activationCode)) {
                // Redirect to the login page
                return Redirect::route('signin')->with('success', Lang::get('auth/message.activate.success'));
            }

            // The activation failed.
            $error = Lang::get('auth/message.activate.error');
        } catch (Cartalyst\Sentry\Users\UserNotFoundException $e) {
            $error = Lang::get('auth/message.activate.error');
        }

        // Ooops.. something went wrong
        return Redirect::route('signin')->with('error', $error);
    }

    /**
     * Forgot password page.
     *
     * @return View
     */
    public function getForgotPassword()
    {
        // Show the page
        return View::make('frontend.auth.forgot-password');
    }

    /**
     * Forgot password form processing page.
     *
     * @return Redirect
     */
    public function postForgotPassword()
    {
        // Declare the rules for the validator
        $rules = array(
            'email' => 'required|email',
        );

        // Create a new validator instance from our dynamic rules
        $validator = Validator::make(Input::all(), $rules);

        // If validation fails, we'll exit the operation now.
        if ($validator->fails()) {
            // Ooops.. something went wrong
            return Redirect::to(URL::previous() . '#toforgot')->withInput()->withErrors($validator);
        }

        try {
            // Get the user password recovery code
            $user = Sentry::getUserProvider()->findByLogin(Input::get('email'));

            // Data to be used on the email view
            $data = array(
                'user'              => $user,
                'forgotPasswordUrl' => URL::route('forgot-password-confirm', $user->getResetPasswordCode()),
            );

            // Send the activation code through email
            Mail::send('emails.auth.forgot-password', $data, function ($m) use ($user) {
                $m->to($user->email, $user->first_name . ' ' . $user->last_name);
                $m->subject('Nova solicitação de senha');
            });
        } catch (Cartalyst\Sentry\Users\UserNotFoundException $e) {
            // Even though the email was not found, we will pretend
            // we have sent the password reset code through email,
            // this is a security measure against hackers.
        }

        //  Redirect to the forgot password
        return Redirect::to(URL::previous() . '#toforgot')->with('success', Lang::get('auth/message.forgot-password.success'));
    }

    /**
     * Forgot Password Confirmation page.
     *
     * @param  string $passwordResetCode
     * @return View
     */
    public function getForgotPasswordConfirm($passwordResetCode = null)
    {

        try {
            // Find the user using the password reset code
            $user = Sentry::getUserProvider()->findByResetPasswordCode($passwordResetCode);
        } catch (Cartalyst\Sentry\Users\UserNotFoundException $e) {
            // Redirect to the forgot password page
            return Redirect::route('forgot-password')->with('error', Lang::get('auth/message.account_not_found'));
        }

        // Show the page
        return View::make('forgot-password-confirm')->with('passwordResetCode', $passwordResetCode);
    }

    /**
     * Forgot Password Confirmation form processing page.
     *
     * @param  string   $passwordResetCode
     * @return Redirect
     */
    public function postForgotPasswordConfirm($passwordResetCode = null)
    {
        $passwordResetCode = Input::get('passwordResetCode');

        // Declare the rules for the form validation
        $rules = array(
            'password'         => 'required',
            'password_confirm' => 'required|same:password'
        );

        // Create a new validator instance from our dynamic rules
        $validator = Validator::make(Input::all(), $rules);

        // If validation fails, we'll exit the operation now.
        if ($validator->fails()) {
            // Ooops.. something went wrong
            return Redirect::route('forgot-password-confirm', $passwordResetCode)->withInput()->withErrors($validator);
        }

        try {
            // Find the user using the password reset code
            $user = Sentry::getUserProvider()->findByResetPasswordCode($passwordResetCode);

            // Attempt to reset the user password
            if ($user->attemptResetPassword($passwordResetCode, Input::get('password'))) {
                // Password successfully reseted
                return Redirect::route('signin')->with('success', Lang::get('auth/message.forgot-password-confirm.success'));
            } else {
                // Ooops.. something went wrong
                return Redirect::route('signin')->with('error', Lang::get('auth/message.forgot-password-confirm.error'));
            }
        } catch (Cartalyst\Sentry\Users\UserNotFoundException $e) {
            // Redirect to the forgot password page
            return Redirect::route('forgot-password')->with('error', Lang::get('auth/message.account_not_found'));
        }
    }

    /**
     * Logout page.
     *
     * @return Redirect
     */
    public function getLogout()
    {

        //ACL
        if(Cache::has('funcionalidades' . Sentry::getUser()->id)) {
            Cache::forget('funcionalidades' . Sentry::getUser()->id);
        }

        // Log the user out
        Sentry::logout();

        // Redirect to the users page
        return Redirect::route('portal')->with('success', Lang::get('auth/message.logout.success'));
    }

}
