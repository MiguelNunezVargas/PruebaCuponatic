angular.module('cnc-myapp.functions', [])
	.controller('NavigationCtrl', function ($scope, $location) {
    	$scope.isCurrentPath = function (path) {
	      var cleanPath = $location.path().replace('/','');
	      return cleanPath == path;
	    };    	
    });