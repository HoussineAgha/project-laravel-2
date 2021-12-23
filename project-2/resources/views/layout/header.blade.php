<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" >
    <title>@yield('title')</title>
</head>
<body>
    @yield('header')

        <nav class="navbar navbar-expand-lg navbar-light bg-light ">
            <a class="navbar-brand" href="#">@lang('translation.Navbar')</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ">
                <li class="nav-item active">
                <a class="nav-link" href="/">@lang('translation.url_home') <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">@lang('translation.url_cars')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/en">@lang('translation.url_en')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/ar">@lang('translation.url_ar')</a>
                </li>
            </ul>
            </div>
        </nav>

        <div> @yield('content') </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

    @yield('footer')
        <footer class="pt-4 my-md-5 pt-md-5 border-top">
            <div id="con" class="container">
                <div class="row">
                    <div class="col-12 col-md">
                        <img class="mb-2" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
                        <small class="d-block mb-3 text-muted">© 2017-2018</small>
                    </div>
                    <div class="col-6 col-md">
                        <h5>@lang('translation.Features')</h5>
                        <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#">@lang('translation.Cool stuff')</a></li>
                        <li><a class="text-muted" href="#">@lang('translation.Random feature')</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md">
                        <h5>@lang('translation.Resources')</h5>
                        <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#">@lang('translation.Resources')</a></li>
                        <li><a class="text-muted" href="#">@lang('translation.Resource name')</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md">
                        <h5>@lang('translation.About')</h5>
                        <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#">@lang('translation.Team')</a></li>
                        <li><a class="text-muted" href="#">@lang('translation.Locations')</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
</html>
