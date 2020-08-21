

<!DOCTYPE html>
<html class='no-js' lang='en'>
  <head>
    <meta charset='utf-8'>
    <meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible'>
    <title>Sign in</title>
    <meta content='lab2023' name='author'>
    <meta content='' name='description'>
    <meta content='' name='keywords'>
    <link href="{{ asset('/public/stylesheets/application-a07755f5.css')}}" rel="stylesheet" type="text/css" />
    <link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/public/images/favicon.ico') }}" rel="icon" type="image/ico" />
    
  </head>
  <body class='login'>
    <div class='wrapper'>
      <div class='row'>
        <div class='col-lg-12'>
          <div class='brand text-center'>
            <h1>
              <div class='logo-icon'>
                <i class='icon-beer'></i>
              </div>
              Quản lý PSC
            </h1>
          </div>
        </div>
      </div>
      <div class='row'>
      <div class='col-lg-12'>
            <form method="POST" action="{{ route('login') }}">
            @csrf
            <fieldset class='text-center'>
                <legend>Login to your account</legend>
                <div class='form-group'>
                <input name="email" class='form-control' placeholder='Email address' type='text'>
                </div>
                <div class='form-group'>
                <input name="password" class='form-control' placeholder='Password' type='password'>
                </div>
                <div class='text-center'>
                <div class='checkbox'>
                    <label>
                    <input type='checkbox'>
                    Remember me on this computer
                    </label>
                </div>
                    <button type="submit" class="btn btn-primary">
                                            Đăng nhập
                    </button>
                <br>
                <!-- <a href="forgot_password.html">Forgot password?</a> -->
                </div>
            </fieldset>
            </form>
        </div>
      </div>
    </div>
    <!-- Footer -->
    <!-- Javascripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js" type="text/javascript"></script>
    <script src="{{ asset('/public/javascripts/application-985b892b.js') }}" type="text/javascript"></script>
    <!-- Google Analytics -->
    <!-- <script>
      var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
      (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
      g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
      s.parentNode.insertBefore(g,s)}(document,'script'));
    </script> -->
  </body>
</html>
