
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css')}}">
</head>
<body style="">
    <div class="card card-default widget">
        <div class="card-heading">
            
        </div>
        <div class="card-body">
             <form method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}                
        </div>
    </div>
<div class="login-wrap">
    <div class="login-html">
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab"><center>Sign In</center></label>
        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
        <div class="login-form">
            <div class="sign-in-htm">
                <div class="group">
                    <label for="user" class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">Email</label>
                    <input id="email" type="text" class="input" name="email" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                </div>
                <!-- <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> -->
                <div class="group">
                    <label for="password" class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">Password</label>
                    <input id="password" type="password" class="input" name="password" required>
                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                </div>
                <!-- <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> -->
                <div class="group">
                    <input id="check" type="checkbox" class="check" checked>
                    <label for="check"><span class="icon"></span> Keep me Signed in</label>
                </div>
                <div class="group">
                    <button type="submit" class="button">
                                    Login
                                </button>
                </div>
                <div class="hr"></div>
                <div class="foot-lnk">
                    <a class="btn btn-link" href="{{ route('password.request') }}" style="color: #fff;">
                                    Forgot Your Password?
                                </a>
                </div>
            </div>
            
            </div>
        </div>
    </div>
</form>
</div>
</body>
</html>
