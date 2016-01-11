(function() {
 'use strict';
  angular
	.module('ngWpApp',
				['ui.router', 'ngResource' , 'ngSanitize', 'angular.filter'])
	.config(["$stateProvider",
			"$urlRouterProvider"
			,"$locationProvider",
				function ($stateProvider, $urlRouterProvider, $locationProvider) 
				{
					
					console.info(app.filePath);
					$urlRouterProvider.otherwise("/");
					$stateProvider
						.state('home',{
								url:'/',
								views:{
									'header':{
										templateUrl:app.filePath+"/slider/slider.html",
										controller: "sliderCtrl as slider"
									},'slider':{
										templateUrl:app.filePath+"/slider/slider.html",
										controller: "sliderCtrl as slider"
									},
									'service':{
										templateUrl:app.filePath+"/service/servicelist.html",
										controller: "serviceCtrl as service",
									},,
									'footer':{
										templateUrl:app.filePath+"/service/servicelist.html",
										controller: "serviceCtrl as service",
									},
									
									
								}
									
						})

				}
			]);  
})();