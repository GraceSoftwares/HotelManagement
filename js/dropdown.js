'use strict';
var app = angular.module('myForm',[]).controller('formValidation',['$scope', function($scope)
{
    $scope.gateway= ["Walk in", "OYO", "Other"];
    $scope.nationality=["INDIAN", "FOREIGNER", "NRI"];
    $scope.names = ["Apollo", "Munnar", "Lake View", "Anna Nagar", "Park Town", "Le Grace MDU"];
    $scope.change=function(){$scope.needId = ($scope.selectedName === $scope.gateway[0]) ? false : true;
    }
}]);



