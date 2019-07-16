'use strict';
angular.module('myForm',[]).controller('formValidation',['$scope', 'angularservice', function($scope, angularservice)
{

    $scope.gateway= ["Walk in", "OYO", "Other"];
    $scope.nationality=["INDIAN", "FOREIGNER", "NRI"];
    $scope.names = ["Apollo", "Munnar", "Lake View", "Anna Nagar", "Park Town", "Le Grace MDU"];
    $scope.change = function(){
        $scope.needId = ($scope.selectedName === $scope.gateway[0]) ? false : true;
    }


    var self = this;
    self.customer = {  name:'',contact:'', email:'', selectedp:'', roomtype:'', roomno:'', checkIn:'', checkOut:'', guest_count:'', selectedName:'', booking_id:'', days:'', price:'', id_num:'' , extra:'', id_type:'', id_address:'',id_contact:''};
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



