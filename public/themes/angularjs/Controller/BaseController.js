app.controller("BaseController", function ($scope, $rootScope, $http) {
    $rootScope.getScoreStudent = function () {
        $http({
            url: '/angularjs/get-score-student',
            method: 'GET',
        }).then(function successCallBack(response) {
            $rootScope.scoreStudents = response.data;
        });
    }
    $rootScope.testBase = "AngularJS";



});
