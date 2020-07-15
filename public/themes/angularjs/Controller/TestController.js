app.controller("TestController", function ($scope, $http) {
    $scope.getScoreStudent = function () {
        $http({
            url: '/angularjs/get-score-student',
            method: 'GET',
        }).then(function successCallBack(response) {
            $scope.datas = response.data;
        });
    }

    $scope.isGoodScore = function (score) {
        return (score > 7) ? true : false;
    }
});


