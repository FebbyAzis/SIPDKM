<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in - SIPDKM</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    
    <link rel="shortcut icon" href="{{asset('logo1.jpg')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
</head>

<body>
    <div id="auth">
        
<div class="container">
    <div class="row">
        <div class="col-md-5 col-sm-12 mx-auto" >
        
            <div class="card">
                <div class="card-body mb-3">
                    <div class="text-center mb-2">
                        <img src="{{asset('logo1.jpg')}}" height="120" class='mb-2'>
                        <h3>Register success!</h3>
                        <p>Please sign in to continue to SIPDKM.</p>
                    </div>
                    <center>
                        <a class="btn btn-primary float-center" href="{{ route('login') }}">
                                        {{ __('Login') }}
                                    </a>

                    </center>
                    
                </div>
            </div>
        </div>
    </div>
</div>

    </div>
    <script src="{{asset('assets/js/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('assets/js/app.js')}}"></script>
    
    <script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>
