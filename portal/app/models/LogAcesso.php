<?php

class LogAcesso extends BaseModel
{
    protected $table = 'usuario_log_acesso';

    protected $fillable = array('user_id','ip','user_agent', 'log');

    /**
     * Salva log de acesso do usuario no sistema
     * @param $user_id = id do usuario
     */
    public function savarLogAcesso($user_id)
    {
        $this->create(array(
            "user_id" => $user_id,
            "ip" => Request::getClientIp(),
            "user_agent" => $_SERVER['HTTP_USER_AGENT']
        ));
    }

}