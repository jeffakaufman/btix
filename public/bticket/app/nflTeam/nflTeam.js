'use strict';

angular.module('myApp.nflTeam', ['ngRoute','ui.materialize'])

.config(['$routeProvider', function($routeProvider) {
  $routeProvider.when('/nflTeam', {
    templateUrl: 'nflTeam/nflTeam.html',
    controller: 'nflTeamCtrl'
  });
}])

 .controller('nflTeamCtrl', function($scope,$http,$location,$filter,x2js) {
 
      $scope.nflTeams = [];
      $scope.includeID = true;
      $scope.includeVenue = true;
      $scope.filename = "default"
 
      $scope.init = function(){
        $http.get('/api/v1/nfl_team').success(function(data){
          $scope.total=data.total;
          $scope.per_page=data.per_pag;
          $scope.current_page=data.current_page;
          $scope.last_page=data.last_page;
          $scope.next_page_url=data.next_page_url;
          $scope.nflTeams=data.data;
        });
      }
 
      $scope.init();
      $scope.getJson = function (filetype) {
         var teamList = angular.copy($scope.nflTeams);
         for (var i=0; i < teamList.length; i++){
            if (!$scope.includeID) {
               delete teamList[i]['nflTeam_id'];
            }
               
            if (!$scope.includeVenue) {
               delete teamList[i]['venue_name'];
            }
         }
         $scope.savedJSON = angular.toJson($filter('filter')(teamList, $scope.searchText));
         if (filetype == 'xml') {
            var blob = new Blob([x2js.json2xml_str(JSON.parse($scope.savedJSON))], {
               type: "text/html;charset=utf-8"
            });
         } else {
            var blob = new Blob([$scope.savedJSON], {
            type: "text/html;charset=utf-8"
         }); } 
                
         saveAs(blob, $scope.filename+'.'+filetype);
      };
     
    });
    
