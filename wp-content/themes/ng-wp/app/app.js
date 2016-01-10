(function() {
 'use strict';
  angular
	.module('ngWpApp',
				['ui.router'])
	.config(["$stateProvider",
			"$urlRouterProvider"
			,"$locationProvider",
				function ($stateProvider, $urlRouterProvider, $locationProvider) 
				{
	

					$urlRouterProvider.otherwise("/");
					$stateProvider
						.state("home",
									{
										url: "/",
										templateUrl:aeJS.api+"/service/servicelist.html",
										controller: "serviceCtrl as service",
									}
							   )

				}
			]);  
})();