<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TODO</title>
        <link rel="stylesheet" href="http://todo.local:8080/css/bootstrap-3.3.4/bootstrap.min.css">
        <link rel="stylesheet" href="http://todo.local:8080/css/bootstrap-3.3.4/bootstrap-theme.min.css">
        <link rel="stylesheet" href="http://todo.local:8080/css/style.css">
        <script src="http://todo.local:8080/js/angular.min.js"></script>
        <script src="http://todo.local:8080/js/app/app.js"></script>
        <script src="http://todo.local:8080/js/app/components/task/taskController.js"></script>
        <?php /*
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="https:///bootstrap-3.3.4/js/bootstrap.min.js"></script> */?>
    </head>
    <body>

        <nav id="myNavbar" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Tutorial Republic</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('project.index') }}">Projects</a></li>
                        <li><a href="{{ route('task.index') }}">Tasks</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    <!--        <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="{{ route('home') }}">Home</a>
                    </div>
                    <div class="nav navbar-nav navbar-right">
                        <li><a href="{{ route('page') }}">Page</a></li>
                        <li><a href="{{ route('tasks.index') }}">Tasks</a></li>
                    </div>
                </div>
            </nav>-->

        <main>
            <div class="container" ng-app="myApp">
                @yield('content')
            </div>
        </main>
        <footer id="footer">@copyright</footer>
    </body>
</html>