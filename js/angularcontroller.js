'use strict';
angular.module('myForm').controller('fetch',['$scope', 'angularservice', function($scope, angularservice) { 



    var self = this;
    self.customer = {  name:'',contact:'', email:'', selectedp:'', roomtype:'', roomno:'', checkIn:'', checkOut:'', guest_count:'', booking_id:'', price:'', id_num:'' , id_type:'', id_address:'',id_contact:''};
    self.submit = submit;

    function createBooking(guest){
    	angularservice.createBooking(guest)
            .then(
            function(){
                console.error('Error while creating contact');
            }
        );
    }
 
    function submit() {
        console.log('Saving New Contact', self.customer);
        createBooking(self.customer);
    }
 
 
}]);