<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .bg {
            background-image: url('{{ asset('assect/img/6086fd5c0da8f400180337fb.jpg') }}');
            background-repeat: no-repeat;
            width: 100%;

            background-position: center center;
            background-size: 1450px 550px;
            height: 550px;
        }

        .shade {
            width: 1400px;
            height: 550px;
            background: rgba(0, 0, 0, 0.5);
            position: absolute;
            top: 0;
            left: 0;
        }

        .box {
            width: 1350px;
            height: 435px;
        }

        p {
            color: white;
            font-size: 32px;
            margin-left: ($spacer * .85) !important;
            text-align: center;
            top: 0%;
            left: 50%;
        }

        .navbar-inner {
            background-color: transparent;
            background-color: rgba(0, 0, 0, 0.6);
        }

        .navbar-brand {
            position: relative;
            width: 100px;
            left: 10px;
        }

        nav .navbar-nav a {
            color: white;
        }
    </style>
    <title>BloggOn</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="bg">
    <div class="box">
        <div class="shade">
            <nav class="navbar navbar-expand-sm sticky-top navbar-inner">
                <div class="container-fluid">
                    <img src="{{ asset('assect/img/logo.jpg') }}" class="navbar-brand">
                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href={{route("blogs.create")}}>Create</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href={{route("blogs.allblogs")}}>Blogs</a>
                            </li>
                            <li class="nav-item dropdown ">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown">Category</a>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="dropdown-item" href="#">News</a></li>
                                    <li><a class="dropdown-item" href="#">Sports</a></li>
                                    <li><a class="dropdown-item" href="#">Technology</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div style="text-align: center; font-family: Times New Roman; color: white; margin-top: 130px;">
                <h1>Don't focus on having a great blog ,<br>Focus on producing a blog that's<br> great for your readers
                </h1>
            </div>
            <div class="text-center">
                <a href="Blogs/create" class="btn btn-outline-light">Create Blog</a>
            </div>
        </div>
    </div>

</body>

</html>
