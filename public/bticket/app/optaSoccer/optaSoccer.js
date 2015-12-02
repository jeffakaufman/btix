'use strict';

angular.module('myApp.optaSoccer', ['ngRoute','ui.materialize'])

.config(['$routeProvider', function($routeProvider) {
  $routeProvider.when('/optaSoccer', {
    templateUrl: 'optaSoccer/optaSoccer.html',
    controller: 'optaSoccerCtrl'
  });
}])

 .controller('optaSoccerCtrl', function($scope,$http,$location,$filter,x2js) {
 
      $scope.optaSoccerPlayers = [];
      $scope.includeID = true;
      $scope.includeStats = false;
      $scope.filename = "default"
 
      $scope.init = function(){
        $http.get('/api/v1/talex_opta_player').success(function(data){
          $scope.total=data.total;
          $scope.per_page=data.per_pag;
          $scope.current_page=data.current_page;
          $scope.last_page=data.last_page;
          $scope.next_page_url=data.next_page_url;
          $scope.optaSoccerPlayers=data.data;
          
          for(var i=0; i< $scope.optaSoccerPlayers.length; i++) {
	          $scope.optaSoccerPlayers[i].shortStats = _.filter($scope.optaSoccerPlayers[i].optaPlayerStats, function(optaPlayerStats){ return optaPlayerStats.season == "2015\/2016"; });
          }
          
        });
      }
 
      $scope.init();
      $scope.getJson = function (filetype) {
         var playerList = angular.copy($scope.optaSoccerPlayers);
         for (var i=0; i < playerList.length; i++){
            if (!$scope.includeStats) {
               delete playerList[i]['optaPlayerStats'];
            } else {
            	delete playerList[i]['shortStats'];
            }
         }
         $scope.savedJSON = angular.toJson($filter('filter')(playerList, $scope.searchText));
         if (filetype == 'xml') {
            var blob = new Blob([x2js.json2xml_str(JSON.parse($scope.savedJSON))], {
               type: "text/html;charset=utf-8"
            });
         } else {
            var blob = new Blob([$scope.savedJSON], {
            type: "text/html;charset=utf-8"
         }); } 
                
         //console.log(x2js.json2xml_str(JSON.parse($scope.savedJSON) ));
         saveAs(blob, $scope.filename+'.'+filetype);
      };
     
    });
    
