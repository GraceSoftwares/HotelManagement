'use strict';
 
angular.module('myForm').factory('angularservice', ['$http', '$q', function($http, $q){
 
    var REST_SERVICE_URI = 'http://localhost/hm/index.php/';
 
    var factory = {
        createGuest: createGuest,
    };
 
    return factory;
 
 
    function createGuest(guest) {
        var deferred = $q.defer();
        $http.post(REST_SERVICE_URI+'restpostcontroller/add_guest', guest)
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