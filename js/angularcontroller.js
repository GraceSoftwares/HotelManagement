'use strict';
 
angular.module('myForm').controller('FormValidation',['$scope', 'angularservice', function($scope, angularservice) {


    var self = this;
    self.guest = {  guest_count:'' };
    self.submit = submit;


    function createGuest(guest){
    	angularservice.createGuest(guest)
            .then(
            function(errResponse){
                console.error('Error while creating contact');
            }
        );
    }
 
    function submit() {
        console.log('Saving New Contact', self.guest);
        createGuest(self.guest);
    }
 
 
}]);