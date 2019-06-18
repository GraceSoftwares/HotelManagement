angular.module('form',[]).controller('validator',['$scope', function($scope)
{
    $scope.gateway= ["Walk in", "OYO", "Other"];
    $scope.nationality=["INDIAN", "FOREIGNER", "NRI"];
    $scope.change=function(){
        $scope.needId = ($scope.selectedName === $scope.gateway[0]) ? false : true;
    }
}]);



