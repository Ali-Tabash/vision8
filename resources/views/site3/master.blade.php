<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>@yield('title',env('APP_NAME'))</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('site3assets/css/styles.css') }}" rel="stylesheet" />
        @yield('styles')
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="{{ route('site3.index') }}">
                <span class="d-block d-lg-none">Clarence Taylor</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="{{ asset('site3assets/assets/img/profile.jpg') }}" alt="..." /></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    {{-- {{ request()->url() }} --}}
                       {{-- {{ route('site3.index') }} --}}
                    <li class="nav-item"><a class="nav-link js-scroll-trigger
{{-- {{  request()->url() == route('site3.index') ? 'active' : ''  }} --}}

{{request()->routeIs('site3.index') ? 'active' : ''}}
                         "href="{{ route('site3.index') }}">About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger
{{  request()-> routeIs('site3.experience') ? 'active' : ''  }}
                         "href="{{ route('site3.experience')}}">Experience</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger
{{  request()-> routeIs('site3.education') ? 'active' : ''  }}
                          "href="{{ route('site3.education') }}">Education</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger
{{  request()-> routeIs('site3.skills') ? 'active' : ''  }}
                          " href="{{ route('site3.skills') }}">Skills</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger
{{  request()-> routeIs('interests.skills') ? 'active' : ''  }}
                           " href="{{ route('site3.interests') }}">Interests</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger
{{  request()-> routeIs('site3.awards') ? 'active' : ''  }}
                        " href="{{ route('site3.awards') }}">Awards</a></li>
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            @yield('content')
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('site3assets/js/scripts.js') }}"></script>
        @yield('script')
    </body>
</html>
