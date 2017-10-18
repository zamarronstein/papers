<html>
    <header>
        <title>Papers blog</title>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </header>

    <body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#salesNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Paper's Blog</a>
            </div>
            <div class="collapse navbar-collapse" id="salesNavbar">
                <ul class="nav navbar-nav">
                    <!-- <li class="active"><a href="#"></a></li>
                    <li><a href="#">Page 1</a></li>
                    TODO: Add more li tags for new options
                    -->
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#" id='inventory'><span class="glyphicon glyphicon-file"></span> Categorias</a></li>
                    <li><a href="#" id='logout'><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>
        @yield('js_scripts')
    </body>
</html>