  angular
      .module('ngWpApp')
      .factory('Services',['$resource', function Services($resource) {

		  var service = {
			  getServiceObject: getServiceObject
		  };
		  return service;


	    	// get service
		  function getServiceObject() {
			  console.info(app.apiurl);
			 return $resource(
						app.apiurl+'/service:id', 
						{id: '@id'},{
							update: {
								  method: 'PUT' // To send the HTTP Put request when calling this custom update method.
							}							 
						}
					);
				};
  



	  }]);

	 