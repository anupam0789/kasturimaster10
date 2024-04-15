<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <title>Kasturi Master| Login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}">
  <style>
    .error-login {padding: 13px; background: darksalmon;} 
  </style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="{{ url('/') }}"><b>Kasturi</b> Master</a>
  </div>
  <!-- /.login-logo --> 
  @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="error-login">{{$error}}</div>
        @endforeach
    @endif
  <div class="card"> 
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p> 
      <form method="POST" action="{{ route('mmx_login') }}">
        @csrf
        <div class="input-group mb-3"> 
            <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" autocomplete="email" autofocus> 
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                </div>
            </div>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="input-group mb-3">
            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="current-password" placeholder="Password">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
            </div>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form> 
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
 
<!-- jQuery -->
<script src=".{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src=".{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src=".{{ asset('dist/js/adminlte.min.js') }}"></script>
<script>
$(document).on('submit', 'form', function () {
   
  var actionUrl  = $(this).attr('action');
  var formMethod = $(this).attr('method');
  var value = $("form").serialize();
  
  $.ajax({

      type:formMethod,
      url: actionUrl,
      data: $("form").serialize() 
      success:function(data){
        console.log(data)
        return false;
      },
      error: function (xhr) {
        alert()
        return false;
        console.log(xhr);
   $('#validation-errors').html('');
        $.each(xhr.responseJSON.errors, function(key,value) {
          $('#validation-errors').append('<div class="alert alert-danger">'+value+'</div');
      }); 
      }
  })
    var name = $('#address_input_slpw_adv').val();
    if (!name.trim()) {
        alert('You must enter a zip code or city name.');
        return false;
    } else {
        alert('Proceed with submit');
    }
});
  </script>
</body>
</html>
