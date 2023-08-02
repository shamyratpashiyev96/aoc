<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Panel</title>
    <!-- core:css -->
    <link rel="stylesheet" href="{{asset('admin_assets/vendors/core/core.css')}}">
    <link rel="stylesheet" href="{{asset('admin_assets/fonts/feather-font/css/iconfont.css')}}">
    <link rel="stylesheet" href="{{asset('admin_assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('admin_assets/css/demo_1/style.css')}}">
    @yield('css')
    <style>
        a {
            text-decoration: none;
            color: inherit;
        }

        svg {
            cursor: pointer !important;
            transition: 0.3s;
        }

        svg:hover {
            color: #727cf5
        }

        table td img {
            border-radius: unset!important;
            width: 80px!important;
            height: 80px!important;
        }

        .edit-img {
            margin-top: 20px;
        }
        .navbar {
            top: 0;
        }
    </style>
</head>
<body>
<div class="main-wrapper">
    <nav class="sidebar">
        <div class="sidebar-header">
            <a href="#" class="sidebar-brand">
                Admin
            </a>
            <div class="sidebar-toggler not-active">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="sidebar-body">
            <ul class="nav">
                <li class="nav-item nav-category">Administrasiýa</li>
                <li class="nav-item">
                    <a href="{{route('news.index')}}" class="nav-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                        <span class="link-title mt-1">Habarlar</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>


    <div class="page-wrapper">

        <!-- partial:../../includes/_navbar.html -->
        <nav class="navbar">
            <a href="#" class="sidebar-toggler">
                <i data-feather="menu"></i>
            </a>
            <div class="navbar-content">
                <ul class="navbar-nav">


                    <li class="nav-item dropdown nav-profile">
                        <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Logout
                        </a>
                        <div class="dropdown-menu" aria-labelledby="profileDropdown">
                            <div class="dropdown-header d-flex flex-column align-items-center">
                                <div class="figure mb-3">
{{--                                    <img src="https://via.placeholder.com/80x80" alt="">--}}
                                </div>
                                <div class="info text-center">
                                    <p class="name font-weight-bold mb-0">Amiah Burton</p>
                                    <p class="email text-muted mb-3">amiahburton@gmail.com</p>
                                </div>
                            </div>
                            <div class="dropdown-body">
                                <ul class="profile-nav p-0 pt-3">
                                    <li class="nav-item">
                                        <a href="{{ route('logout') }}" class="nav-link">
                                            <i data-feather="log-out"></i>
                                            <span>Log Out</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- partial -->

        @yield('content')

        <!-- partial:../../includes/_footer.html -->
        <footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between">

        </footer>
        <!-- partial -->

    </div>
</div>
<script src="{{asset('admin_assets/vendors/core/core.js')}}"></script>
<script src="{{asset('admin_assets/vendors/feather-icons/feather.min.js')}}"></script>
<script src="{{asset('admin_assets/js/template.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="{{asset('admin_assets/vendors/tinymce/tinymce.min.js')}}"></script>
<script src="{{asset('admin_assets/js/tinymce.js')}}"></script>
@yield('js')

<script>
    $(document).ready(function(){
        $('#file-upload-browse').click(function(){ $('#file-upload-default').trigger('click')});
        $('#m-file-upload-browse').click(function(){ $('#m-file-upload-default').trigger('click')});
    })
</script>
</body>
</html>
