'use strict';
var form = angular.module('myForm',[]).controller('formValidation',['$scope', 'service', function($scope, service)
{

    $scope.gateway= ["Walk in", "OYO", "Other"];
    $scope.nationality=["INDIAN", "FOREIGNER", "NRI"];
    $scope.names = ["Apollo", "Munnar", "Lake View", "Anna Nagar", "Park Town", "Le Grace MDU"];
    $scope.change = function(){
        $scope.needId = ($scope.selectedName === $scope.gateway[0]) ? false : true;
    }
    $scope.dashboard="active";
    $scope.contentChange = function(url, content){
        $scope.dashboard="";
        $scope.add="";
        $scope.checkout="";
        $scope.reports="";
        $scope.template=url;
        switch(content){
            case "dashboard":
                    $scope.dashboard="active";
                    break;
            case "add":
                    $scope.add = "active";        
                    break;
            case "checkout":
                    $scope.checkout = "active";        
                    break;
            case "reports"        :
                    $scope.reports = "active";
                    break;
        }
    }

    var self = this;
    self.customer = {  name:'',contact:'', email:'', selectedp:'', roomtype:'', roomno:'', checkIn:'', checkOut:'', guest_count:'', selectedName:'', booking_id:'', days:'', price:'', id_num:'' , extra:'', id_type:'', id_address:'',id_contact:''};
    self.getroom = {id :''};
    self.submit = submit;
    self.roomsearch = roomsearch;

    function getTax(){
        var gstp = [28, 18, 12];
        var gsttax = [7500, 2500, 1000];
        var pricepd = (self.customer.price);
        for(var i = 0; i < gsttax.length; i++){
            if(pricepd >= gsttax[i]){
                return gstp[i];
            }
        }
        return 0;
    }

    $scope.updateprice = function(){
        $scope.cgstpct = getTax();
        $scope.ppd = self.customer.price;
        $scope.cgstamt = ($scope.ppd * self.customer.days) * ($scope.cgstpct/100);
        $scope.sgstpct = 0;
        $scope.sgstamt = 0;
        $scope.tp = ($scope.ppd * self.customer.days)+$scope.cgstamt; 
    }

    function createBooking(guest){
    	service.createBooking(guest)
            .then(
            function(errResponse){
                console.error('Error while creating contact');
            }
        );
    }
 
    function getdays(date1, date2) {
        var d1 = date1.split('-');
        var d2 = date2.split('-');
        var oneDay = 24*60*60*1000;
        var firstDate = new Date(d1[0],d1[1],d1[2]);
        var secondDate = new Date(d2[0],d2[1],d2[2]);
        return Math.round(Math.abs((firstDate.getTime() - secondDate.getTime())/(oneDay)));
    }

    function getDetail(number){
        service.getDetail(number)
            .then(
            function(d) {
                self.info = d;
                self.info.daysleft = getdays(self.info.checkindate, self.info.checkoutdate);
                console.log('date', self.info.daysleft);
            },
            function(errResponse){
                console.error('Error while fetching contacts');
            }
        );
    }

    function submit() {
        console.log('Saving New Contact', self.customer);
        createBooking(self.customer);
    }

    function roomsearch(){
        console.log('Saving New Contact', self.getroom);
        getDetail(self.getroom);
    }

}]);



