<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Site Metas -->
    <title>Tech Blog - Stylish Magazine Blog Template</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Design fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('resources/assets/css/bootstrap.css') }}" rel="stylesheet">

    <!-- FontAwesome Icons core CSS -->
    <link href="{{ asset('resources/assets/css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('resources/assets/style.css') }}" rel="stylesheet">

    <!-- Responsive styles for this template -->
    <link href="{{ asset('resources/assets/css/responsive.css') }}" rel="stylesheet">

    <!-- Colors for this template -->
    <link href="{{ asset('resources/assets/css/colors.css') }}" rel="stylesheet">

    <!-- Version Tech CSS for this template -->
    <link href="{{ asset('resources/assets/css/version/tech.css') }}" rel="stylesheet">

    <script type="text/javascript" src="{{ asset('resources/assets/ckeditor/ckeditor.js') }}"></script>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>
<body>

<div id="wrapper">
    <header class="tech-header header">
        <div class="container-fluid">
            <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                        data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="tech-index.html"><img
                        src="{{ asset('resources/assets/images/version/tech-logo.png') }}" alt=""></a>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/test') }}">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/gadgets') }}">Gadgets</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/videos') }}">Videos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/reviews') }}">Reviews</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/contact') }}">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/admin/addCategory') }}">Add category</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/admin/viewCategory') }}">View category</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/admin/addTag') }}">Add Tag</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/admin/viewTag') }}">View Tag</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/admin/addArticle') }}">Add article</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/admin/viewArticle') }}">View article</a>
                        </li>

                    </ul>

                    <ul class="navbar-nav mr-2">
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-rss"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-android"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-apple"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div><!-- end container-fluid -->
    </header><!-- end market-header -->

