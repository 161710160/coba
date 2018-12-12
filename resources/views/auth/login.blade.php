<!DOCTYPE html>
<!--[if IE 9]> <html class="ie9 no-js" lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<head>
            <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <meta http-equiv="X-UA-Compatible" content="ie=edge">
                        <title>@yield("title")</title>
        <link rel="stylesheet" href="{{asset('polished/polished.min.css')}}">
        <link rel="stylesheet" href="{{asset('polished/iconic/css/open-iconic-bootstrap.min.css')}}">
<style>
.grid-highlight {
padding-top: 1rem;
padding-bottom: 1rem;
background-color: #5c6ac4;
border: 1px solid #202e78;
color: #fff;
}
hr {
margin: 6rem 0;
}
hr+.display-3,
hr+.display-2+.display-3 {
margin-bottom: 2rem;
}
</style>
<script type="text/javascript">
document.documentElement.className =
document.documentElement.className.replace('no-js', 'js') +
(document.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#BasicStructure", "1.1") ? ' svg' : ' no-svg');
</script>

</head>
        <body>
        <nav class="navbar navbar-expand p-0">
    <a class="navbar-brand text-center col-xs-12 col-md-3 col-lg-2 mr-0"href="#"> AS Leather Shop </a>
    <button class="btn btn-link d-block d-md-none" data-toggle="collapse"data-target="#sidebar-nav" role="button" >
    <span class="oi oi-menu"></span>
        </button>
    </nav>
        <div class="container-fluid h-100 p-0">
            <div style="min-height: 100%" class="flex-row d-flex align-items-stretch m-0">
                <div class="col-lg-12 col-md-12 p-4">
                <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <div class="card bg-white border">
                {{-- <div class="card-header bg-transparent border-0">{{__('Login') }}</div> --}}
            <div class="card-body">
        <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
            @csrf
                <div class="form-group row">
            <div class="col-md-12">
                <label for="email" class="col-sm-12 col-form-label pl-0">{{ __('E-Mail Address') }}</label>
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : ''}}" name="email"value="{{ old('email') }}" required autofocus>
                @if ($errors->has('email'))
            <span class="invalid-feedback"role="alert">
                <strong>{{ $errors->first('email')}}</strong>
            </span>
                @endif
        </div>
    </div>
        <div class="form-group row">
            <div class="col-md-12">
                <label for="password" class="col-md-4 col-form-label text-md-left pl-0">{{ __('Password') }}</label>
            <input id="password" type="password"class="form-control{{ $errors->has('password') ? 'is-invalid' : '' }}"name="password" required>
                @if ($errors->has('password'))
                    <span class="invalid-feedback"role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
        </div>
    </div>
            <div class="form-group row">
            <div class="col-md-12">
        <div class="checkbox">
                   <input type="checkbox" id="remember"name="remember" {{ old('remember') ? 'checked' : ''}}> <labelfor="remember">{{ __('Remember Me') }}</label>
                </div>
            </div>
        </div>
                <div class="form-group row mb-0">
                    <div class="col-md-12">
                <button type="submit" class="btn-block btn btn-primary">
                    {{ __('Login') }}
            </button>
                <br>
            <p> Akun?</p>
            <div class="btn text-center">
            <a href="{{ route('register') }}" class="txt1 hov2">
                register
                </a>
                                </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
            </div>
        </div>
    </div>

<script
src="https://code.jquery.com/jquery-3.3.1.min.js"integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous"></script>

<script
src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-
cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"crossorigin="anonymous">
</script>

<script
src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"crossorigin="anonymous">
</script>
    
    </body>
</html>
