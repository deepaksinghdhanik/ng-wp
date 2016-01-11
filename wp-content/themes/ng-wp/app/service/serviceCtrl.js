(function () {
	angular.module("ngWpApp")
			.controller("serviceCtrl",
				["$scope", "Services" , 
				function($scope , Services ) {
					
					var service = this;
					
					Services.getServiceObject().query().$promise.then(function(data){
						
						service.heading = "<h1>Service</h1>";
						service.list = data;
						
					});
					
				}]
			);
}());