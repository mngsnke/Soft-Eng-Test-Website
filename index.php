<!DOCTYPE html>
<html ng-app="main">
    <head>
        <title>Student Organization Registration Form</title>
        <link rel='stylesheet' href="css/bootstrap.min.css">
        <link rel='stylesheet' href="css/animate.css">
        <script src="angular/angular.min.js"></script>
        <script src="angular/angular-route.min.js"></script>
        <script src="angular/angular-animate.js"></script>  
        <script src="app.js"></script>
        <style>
            body, html {
                height:100%;
                overflow: hidden;
            }

            .bg {
                background-image: url("1694.jpg");
                height: 100%;
                background-position: relative;
                background-repeat: no-repeat;
                background-size: cover;
            }
            .layer {
                background-color: rgba(248, 247, 216, 0.7);
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }
        </style>
    </head>

    <body class="bg">
        <div class="layer">
            <div class="row">
                <div class="col align-middle" style="padding-top:10%;padding-left: 10%;">
                    <h1 style="color: #e6df55;font-size: 80px">Welcome to the<br> Student Organization</h1>
                </div>
                <div class="col-6">
                    <div id="routeAnimate" ng-view></div>       
                </div>
                    
            </div>
        </div>
    </body>
</html>