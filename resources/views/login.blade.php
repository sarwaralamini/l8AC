<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('dist/css/main.css') }}">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title>Login - LARA 8 AJAX CRUD</title>
    <style>
        /* Start by setting display:none to make this hidden.
        Then we position it in relation to the viewport window
        with position:fixed. Width, height, top and left speak
        for themselves. Background we set to 80% white with
        our animation centered, and no-repeating */
        .modal {
            display:    none;
            position:   fixed;
            z-index:    1000;
            top:        0;
            left:       0;
            height:     100%;
            width:      100%;
            background: rgba( 255, 255, 255, .8 )
                        url({{ asset('dist/images/Bars-1s-74px.gif') }})
                        50% 50%
                        no-repeat;
        }

        /* When the body has the loading class, we turn
        the scrollbar off with overflow:hidden */
        body.loading .modal {
            overflow: hidden;
        }

        /* Anytime the body has the loading class, our
        modal element will be visible */
        body.loading .modal {
            display: block;
        }
    </style>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>L8AC</h1>
      </div>
      <div class="login-box">
        <form id="login-form" class="login-form" action="{{ route('login') }}" method="POST">
          @csrf
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
          <div class="form-group">
            <label class="control-label">USERNAME</label>
            <input class="form-control" name="email" type="text" placeholder="Email" autofocus>
            <span class="text-danger error-text email_error"></span>
          </div>
          <div class="form-group">
            <label class="control-label">PASSWORD</label>
            <input class="form-control" name="password" type="password" placeholder="Password">
            <span class="text-danger error-text password_error"></span>
          </div>
          <div class="form-group">
          </div>
          <div class="form-group btn-container">
            <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
          </div>
          <div class="alert text-center mt-2 mb-5 animate__animated" id="alert"></div>
        </form>
      </div>
    </section>
    <div class="modal"><!-- This modal is the actual custom loader working When Ajax request sent --></div>
    <!-- Essential javascripts for application to work-->
    <script src="{{ asset('dist/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('dist/js/popper.min.js') }}"></script>
    <script src="{{ asset('dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('dist/js/main.js') }}"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script data-pace-options='{ "elements": { "selectors": [".selector"] }, "startOnPageLoad": false }' src="{{ asset('dist/js/plugins/pace.min.js') }}"></script>
    <script>
         // global app configuration object
         const config = {
            route: "{{ route('dashboard') }}"
        };
    </script>
    <script src="{{ asset('dist/js/script.js') }}"></script>
  </body>
</html>
