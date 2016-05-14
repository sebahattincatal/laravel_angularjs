var app=angular.module("sebo",['ngRoute']);

app.config(function($routeProvider, $locationProvider){

    $routeProvider.when('/',{
            title:"Anasayfa",
            templateUrl:"templates/home.html",
            controller:"HomeController"
        })
        .when('/settings',{
            templateUrl:"resources/errors/503",
            controller:"SettingsController"
        })
        .otherwise({
            redirectTo:'/'
        });

    $locationProvider.html5Mode(true);
});

app.controller('HomeController',function($scope){

});

app.controller('SettingsController',function($scope){

});