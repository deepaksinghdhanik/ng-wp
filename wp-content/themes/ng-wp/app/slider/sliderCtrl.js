(function () {
	angular.module("ngWpApp")
			.controller("sliderCtrl",
				["$scope",function($scope) {
					var slider = this;
					
					slider.title = "hello this is title"
				}]
			);
}());