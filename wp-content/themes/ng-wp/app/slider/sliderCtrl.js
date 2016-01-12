(function () {
	angular.module("ngWpApp")
			.controller("sliderCtrl",
				["$scope" ,'sliderService',function($scope , sliderService) {
					
					slider = this;
					
					sliderService.getServiceObject().query().$promise.then(function(data){
						
						slider.list = data;
					
					});

				}]
			)
	.directive('loadImage', function($http) {
    return {
      restrict: "EA",
      link: function(scope, elm, attrs) {
        // by default the values will come in as undefined so we need to setup a
        // watch to notify us when the value changes
        scope.$watch(attrs.imageid, function(value) {

          // let's do nothing if the value comes in empty, null or undefined
          if ((value !== null) && (value !== undefined) && (value !== '') && (value !== 0)) {

            // get the photos for the specified car using the styleID.
            // This returns a collection of photos in photoSrcs.
            $http.get('http://localhost/ng-wp/wp-json/wp/v2/media/'+value)
              .then(function(response) {
				
				console.info(response.data.source_url)
				var imageData = response.data.source_url; 

              var tag = '<img alt="" src="' + imageData + '" />'
              // insert the tag into the element
              elm.append(tag);
            }, function(error) {
              
            });
			
          } 
        });
      }
    }; 
  });
			
			
			
}());