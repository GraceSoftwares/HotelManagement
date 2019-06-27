'use strict';
 
angular.module('myForm').factory('angularservice', ['$http', '$q', function($http, $q){
 
    var REST_SERVICE_URI = 'http://localhost/hm/index.php/';
 
    var factory = {
        createBooking: createBooking,
    };
 
    return factory;
 
 
    function createBooking(guest) {
        var deferred = $q.defer();
        $http.post(REST_SERVICE_URI+'restpostcontroller/add_booking', guest)
            .then(
            function (response) {
                deferred.resolve(response.data);
            },
            function(errResponse){
                console.error('Error while creating Guest');
                deferred.reject(errResponse);
            }
        );
        return deferred.promise;
    }
 
 
}]);