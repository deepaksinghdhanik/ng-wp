(function() {
 'use strict';
  angular
	.module('ngWpApp',
				['ui.router'
				  ])
	.config(["$stateProvider",
		  "$urlRouterProvider"
		  "$locationProvider",
			  function ($stateProvider, $urlRouterProvider, $locationProvider) {
				  
			  $locationProvider.html5Mode(true);
			  $urlRouterProvider.otherwise("/");
			  $stateProvider
				  .state("service", {
					  url: "/",
					  templateUrl: path.app+"service/servicelist.html",
					  controller: "serviceCtrl as service",
				  })
				  
			}]);
})();