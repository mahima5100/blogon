<html>
    <head>
        <style>
            .navbar-brand
            {
                position: relative;
                width: 100px;
                left: 10px;

            }
            nav .navbar-nav a
            {
                color: white;
            }
            .navbar-custom {

                background: transparent;
                background-color:rgba(0,0,0,0.5);

            }

        </style>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>

                        <nav class="navbar navbar-custom navbar-expand-sm sticky-top align-top">
                            <div class="container-fluid ">
                                <img src="{{asset('assect/img/logo.jpg')}}" class="navbar-brand">
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
                                            <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Category</a>
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

        @yield('content')

    </body>
</html>
