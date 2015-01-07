@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Form Controls
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
@stop


{{-- Page content --}}
@section('content')
<section class="content-header">
    <!--section starts-->
    <h1>Form Controls</h1>
    <ol class="breadcrumb">
        <li>
            <a href="index"> <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                Home
            </a>
        </li>
        <li>
            <a href="#">Forms</a>
        </li>
        <li class="active">Form Controls</li>
    </ol>
</section>
<!--section ends-->
<section class="content">
    <!--main content-->
    <div class="row">
        <!--row starts-->
        <div class="col-lg-6">
            <!--lg-6 starts-->
            <!--basic form starts-->
            <div class="panel panel-primary" id="hidepanel1">
                <div class="panel-heading">
                    <h3 class="panel-title"> <i class="livicon" data-name="clock" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        Basic form #1
                    </h3>
                    <span class="pull-right">
                        <i class="glyphicon glyphicon-chevron-up clickable"></i>
                        <i class="glyphicon glyphicon-remove removepanel1"></i>
                    </span>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" action="#" method="post">
                        <fieldset>
                            <!-- Name input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="name">Name</label>
                                <div class="col-md-9">
                                    <input id="name" name="name" type="text" placeholder="Your name" class="form-control"></div>
                            </div>
                            <!-- Email input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="email">Your E-mail</label>
                                <div class="col-md-9">
                                    <input id="email" name="email" type="text" placeholder="Your email" class="form-control"></div>
                            </div>
                            <!-- Message body -->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="message">Your message</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
                                </div>
                            </div>
                            <!-- Form actions -->
                            <div class="form-group">
                                <div class="col-md-12 text-right">
                                    <button type="submit" class="btn btn-responsive btn-primary btn-sm">Submit</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
            <!--basic form 2 starts-->
            <div class="panel panel-info" id="hidepanel2">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="livicon" data-name="help" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        Basic Form #2
                    </h3>
                    <span class="pull-right">
                        <i class="glyphicon glyphicon-chevron-up clickable"></i>
                        <i class="glyphicon glyphicon-remove removepanel2"></i>
                    </span>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" action="#" method="post">
                        <fieldset>
                            <!-- Name input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="name1">E-Mail Address</label>
                                <div class="col-md-9">
                                    <input id="name1" name="name" type="text" placeholder="Enter your Email" class="form-control"></div>
                            </div>
                            <!-- Email input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="password">Password</label>
                                <div class="col-md-9">
                                    <input id="password" name="password" type="password" placeholder="Enter your Password" class="form-control"></div>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox">Stay signed in</label>
                            </div>
                            <!-- Form actions -->
                            <div class="form-group">
                                <div class="col-md-12 text-right">
                                    <button type="submit" class="btn btn-responsive btn-info btn-sm">Sign in</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <!--panel body ends--> </div>
            <!--input form starts-->
            <div class="panel panel-warning" id="hidepanel5">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="livicon" data-name="gift" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        Form Inputs
                    </h3>
                    <span class="pull-right">
                        <i class="glyphicon glyphicon-chevron-up clickable"></i>
                        <i class="glyphicon glyphicon-remove removepanel5"></i>
                    </span>
                </div>
                <div class="panel-body">
                    <form role="form">
                        <div class="form-group input-group">
                            <span class="input-group-addon">@</span>
                            <input type="text" class="form-control" placeholder="Username"></div>
                        <div class="form-group input-group">
                            <input type="text" class="form-control">
                            <span class="input-group-addon">.00</span>
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-eur"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Font Awesome Icon"></div>
                        <div class="form-group input-group">
                            <span class="input-group-addon">$</span>
                            <input type="text" class="form-control">
                            <span class="input-group-addon">.00</span>
                        </div>
                        <div class="form-group input-group">
                            <input type="text" class="form-control">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--md-6 ends-->
        <div class="col-md-6">
            <!--md-6 starts-->
            <!--form control starts-->
            <div class="panel panel-success" id="hidepanel6">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="livicon" data-name="share" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        Form controls
                    </h3>
                    <span class="pull-right">
                        <i class="glyphicon glyphicon-chevron-up clickable"></i>
                        <i class="glyphicon glyphicon-remove removepanel6"></i>
                    </span>
                </div>
                <div class="panel-body">
                    <form role="form">
                        <div class="form-group">
                            <label>Text Input</label>
                            <input class="form-control">
                            <p class="help-block">Example block-level help text here.</p>
                        </div>
                        <div class="form-group">
                            <label>Text Input with Placeholder</label>
                            <input class="form-control" placeholder="Enter text"></div>
                        <div class="form-group">
                            <label>Static Control</label>
                            <p class="form-control-static">email@example.com</p>
                        </div>
                        <div class="form-group">
                            <label>Text area</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Checkboxes</label>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="">Checkbox 1</label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="">Checkbox 2</label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="">Checkbox 3</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Inline Checkboxes</label>
                            <label class="checkbox-inline">
                                <input type="checkbox">1</label>
                            <label class="checkbox-inline">
                                <input type="checkbox">2</label>
                            <label class="checkbox-inline">
                                <input type="checkbox">3</label>
                        </div>
                        <div class="form-group">
                            <label>Radio Buttons</label>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>Radio 1</label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Radio 2</label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">Radio 3</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Inline Radio Buttons</label>
                            <label class="radio-inline">
                                <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>1</label>
                            <label class="radio-inline">
                                <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">2</label>
                            <label class="radio-inline">
                                <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline3" value="option3">3</label>
                        </div>
                        <div class="form-group">
                            <label>Selects</label>
                            <select class="form-control">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Multiple Selects</label>
                            <select multiple class="form-control">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-responsive btn-default">Submit Button</button>
                        <button type="reset" class="btn btn-responsive btn-default">Reset Button</button>
                    </form>
                </div>
            </div>
        </div>
        <!--md-6 ends-->
        <div class="col-md-6">
            <!--md-6 starts-->
            <!--validation states starts-->
            <div class="panel panel-danger" id="hidepanel4">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="livicon" data-name="rocket" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        Validation states
                    </h3>
                    <span class="pull-right">
                        <i class="glyphicon glyphicon-chevron-up clickable"></i>
                        <i class="glyphicon glyphicon-remove removepanel4"></i>
                    </span>
                </div>
                <div class="panel-body">
                    <form role="form">
                        <div class="form-group has-success">
                            <label class="control-label" for="inputSuccess">Input with success</label>
                            <input type="text" class="form-control" id="inputSuccess"></div>
                        <div class="form-group has-warning">
                            <label class="control-label" for="inputWarning">Input with warning</label>
                            <input type="text" class="form-control" id="inputWarning"></div>
                        <div class="form-group has-error">
                            <label class="control-label" for="inputError">Input with error</label>
                            <input type="text" class="form-control" id="inputError"></div>
                    </form>
                </div>
            </div>
        </div>
        <!--md-6 ends-->
        <div class="col-md-6">
            <div class="panel panel-default" id="hidepanel3">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="livicon" data-name="leaf" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        Disabled fieldsets
                    </h3>
                    <span class="pull-right">
                        <i class="glyphicon glyphicon-chevron-up clickable"></i>
                        <i class="glyphicon glyphicon-remove removepanel3"></i>
                    </span>
                </div>
                <div class="panel-body">
                    <form role="form">
                        <fieldset disabled>
                            <div class="form-group">
                                <label for="disabledSelect">Disabled input</label>
                                <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input" disabled></div>
                            <div class="form-group">
                                <label for="disabledSelect">Disabled select menu</label>
                                <select id="disabledSelect" class="form-control">
                                    <option>Disabled select</option>
                                </select>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox">Disabled Checkbox</label>
                            </div>
                            <button type="submit" class="btn btn-responsive btn-custom">Disabled Button</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--main content ends-->
</section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
<script type="text/javascript">
    //removing/hiding panel1
    $('.removepanel1').click(function() {
        $('#hidepanel1').hide();
    });
    $('.removepanel2').click(function() {
        $('#hidepanel2').hide();
    });
    $('.removepanel3').click(function() {
        $('#hidepanel3').hide();
    });
    $('.removepanel4').click(function() {
        $('#hidepanel4').hide();
    });
    $('.removepanel5').click(function() {
        $('#hidepanel5').hide();
    });
    $('.removepanel6').click(function() {
        $('#hidepanel6').hide();
    });
    </script>
@stop