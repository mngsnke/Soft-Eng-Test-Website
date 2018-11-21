var app = angular.module('main', ['ngRoute', 'ngAnimate']);

app.config(['$routeProvider',
    function($routeProvider) {
        $routeProvider
            .when('/', {
                templateUrl: 'components/login.php'
            })
            .when('/register', {
                templateUrl: 'components/register-user.php'
            })
            .otherwise({
                redirectTo: '/'
            })
    }
])