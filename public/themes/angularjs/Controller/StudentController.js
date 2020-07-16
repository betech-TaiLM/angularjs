app.controller("StudentController", function ($scope, $http) {
    var url = window.location.pathname.split("/");
    var id = url[url.length - 1];

    $scope.getStudent = function () {
        $http({
            url: '/angularjs/get-student',
            method: 'POST',
            data: JSON.stringify({ id: id })
        }).then(function successCallBack(response) {
            $scope.student = response.data;
        });
    }

    $scope.getClass = function () {
        $http({
            url: '/angularjs/get-class',
            method: 'GET',
        }).then(function successCallBack(response) {
            $scope.class = response.data;
        });
    }

    $scope.updateStudent = function () {
        $http({
            url: '/angularjs/update-student',
            method: 'POST',
            data: JSON.stringify({ student : $scope.student })
        }).then(function successCallBack(response) {
            $scope.message = "Update successful";
        });
    }
});