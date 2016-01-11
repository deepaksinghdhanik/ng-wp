(function () {
	angular.module("ngWpApp")
			.controller("commonCtrl",
				["$scope",function($scope) {
					
					var common = this;
					
					common.path = {
						header:app.filePath+'/header/header.html',	
						footer:app.filePath+'/footer/footer.html'	
					}
				}]
			);
}());