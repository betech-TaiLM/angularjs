app.controller("TestController", function ($scope, $http) {
    $scope.isGoodScore = function (score) {
        return (score > 7) ? true : false;
    }
    $scope.testTest = $scope.testBase;
});


