(function () {
	angular.module("ngWpApp")
			.controller("serviceCtrl",
				["$scope",function($scope) {
					
					var service = this;
					
					service.pageName = 'service'; 
					
				}]
			);
}());