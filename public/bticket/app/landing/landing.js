'use strict';

angular.module('myApp.landing', ['ngRoute','ui.materialize'])

.config(['$routeProvider', function($routeProvider) {
  $routeProvider.when('/home', {
    templateUrl: 'landing/landing.html',
    controller: 'landingCtrl'
  });
}])

 .controller('landingCtrl', function($scope,$http,$location,$filter,x2js) {
 
     
    });
    
