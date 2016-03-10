<ul class="nav navbar-nav navbar-left sidebar-toggle-ul">
    <li class="navbar-main hidden-lg hidden-md">
        <a href="javascript:void(0);" id="sidebar-toggle">
            <span class="meta">
                <span class="icon"><i class="fa fa-bars"></i> <span class="MenuText">MENU</span></span>
            </span>
        </a>
    </li>

    <li class="navbar-main hidden-sm hidden-xs">
        <a href="javascript:void(0);" id="sidebar-collapse">
            <span class="meta">
                <span class="icon"><i class="fa fa-outdent"></i></span>
            </span>
        </a>
    </li>
</ul>
<a class="MobileLogo" href="{{URL::to('/')}}"><img src="{{URL::to('/')}}/assets/images/MobileLogo.png"></a>

<div class="col-md-6">
    <div class="row">
        <form class="navbar-form navbar-left margintop" role="search">
            <div class="input-group">
                <input type="text" id="search_box" class="form-control" placeholder="Search for a bet (Football team, Jocky, Horse, Boxer etc...) ">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-default" onClick="return get_search();">Go!</button>
                </span>
            </div>
        </form>
    </div>
    <div class="row" id="searchResults">
        <div class="panel panel-default" style="border-radius: 0;">
            <div class="panel-body">
                <table class="table table-striped BetTable">
                    <thead>
                        <tr>
                            <th>Team</th>
                            <th>Time</th>
                            <th>Home</th>
                            <th>Draw</th>
                            <th>Away</th>
                            <th>Watch</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="col-md-2">
    <div class="WhatCanI">
        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target=".example-modal-sm">What can I search for?</button>
        <!-- Small modal -->
        <div class="modal fade example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">What can I search for?</h4>
                    </div>
                    <div class="modal-body">
                        <ul><li>Event time - 15:00</li><li>Event date - 09/05/2015</li><li>Venue - Stamford Bridge</li><li></li><li>Football team</li><li>Football player</li></ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="LoginButtons">
        @if(Auth::check())
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="form-elements.html#"><i class="fa fa-user"></i> <?php echo $_SESSION['username']; ?> <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="{{URL::to('/')}}/user/profile"><i class="fa fa-user"></i> Profile</a></li>
                    <li><a href="{{URL::to('/')}}/user/manage-bookmakers"><i class="fa fa-gear"></i> Manage Bookmakers</a></li>
                    <li><a href='{{URL::to('/')}}/auth/logout' class=''><i class='fa fa-share'></i> Logout</a></li>
                </ul>
            </li>
        </ul>
        @else

        <div class="LoginButtonsNot">
            <button class="btn btn-warning FreeBets cmn-t-pulse" onclick="window.location.href='free-bets '" ><strong style="color:#000"><i class="fa fa-gbp"></i> FREE BETS!</strong>	</button>
            <button class="btn btn-primary btn-lg btn-success" data-toggle="modal" data-target="#modalform"><i class="fa fa-lock"></i> Login</button>

            <!-- Modal Form -->
            <div class="modal fade" id="modalform" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Login</h4>
                        </div>
                        <div class="modal-body" style="margin-bottom:-30px;">
                            <form class="form-horizontal" role="form" id="login_form_popup">
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Email / Username</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="email" id="inputEmail3" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" name="pass" id="inputPassword3" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember"> Remember me
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="button" class="btn btn-primary btn-success" onClick="return check_login();"><i class="fa fa-lock"></i>
                                            Login</button>
                                     </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary btn-lg btn-danger FloatLeft" data-dismiss="modal" data-toggle="modal" data-target="#modalform2"><i class="fa fa-pencil-square-o"></i>  Forgot password</button>
                            <button type="button" class="btn btn-primary" id="registerModal" data-dismiss="modal" data-toggle="modal" data-target="#modalform1"><i class="fa fa-pencil-square-o"></i>  Sign up</button>
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary btn-lg btn-success SignUpButton" data-toggle="modal" data-target="#modalform1"><i class="fa fa-pencil-square-o"></i>  Sign up</button>
            <!-- Modal Form -->
            <div class="modal fade" id="modalform1" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Sign up</h4>
                        </div>
                        <div class="modal-body" style="margin-bottom:-30px;">
                            <div class="panel-body">

                                <div class="form-group social-register">
                                    <a class="btn btn-block btn-social btn-facebook">
                                        <i class="fa fa-facebook"></i> Facebook
                                    </a>
                                </div>

                                <div class="form-group social-register">
                                    <a class="btn btn-block btn-social btn-google-plus">
                                        <i class="fa fa-google-plus"></i> Google
                                    </a>
                                </div>

                                <div class="form-group social-register">
                                    <a class="btn btn-block btn-social btn-twitter">
                                        <i class="fa fa-twitter"></i> Twitter
                                    </a>
                                </div>
                                <hr>
                                <form role="form" method="POST" action="" id="register_form_popup">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="text" class="form-control primary" name="name" id="exampleInputEmail1" placeholder="Enter name" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Username</label>
                                        <input type="email" class="form-control primary" name="username" id="exampleInputEmail1" placeholder="Enter userename">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control primary" name="email" id="exampleInputEmail1" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control primary" name="pass" id="exampleInputPassword1" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Confirm Password</label>
                                        <input type="password" class="form-control primary" name="con_pass" id="exampleInputPassword1" placeholder="Confirm password">
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="terms"> I agree to terms
                                        </label>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-success" onclick="return do_register();"><i class="fa fa-pencil-square-o"></i>  Sign up</button>
                                </form>


                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#modalform">Already have an account?</button>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        <!-- Modal Form -->
        <div class="modal fade" id="modalform2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Forgot password</h4>
                    </div>
                    <div class="modal-body" style="margin-bottom:-30px;">
                        <div class="panel-body">

                            <form role="form" method="POST" action="" id="forgot_form_popup">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Please enter your email address below to reset your password.</label>
                                    <input type="email" class="form-control primary" name="email" id="exampleInputPassword1" placeholder="Email Address">
                                </div>
                                <button type="submit" class="btn btn-primary btn-success" onClick="return forgot_password();">Submit</button>
                            </form>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#modalform">Already have an account?</button>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
