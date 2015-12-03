'use strict';

// Declare app level module which depends on views, and components
angular.module('myApp', [
  'ngRoute',
  'myApp.nflTeam',
  'myApp.optaSoccer',
  'myApp.landing',
  'myApp.version',
  'cb.x2js'
]).
config(['$routeProvider', function($routeProvider) {
  $routeProvider.otherwise({redirectTo: '/home'});
}]);
