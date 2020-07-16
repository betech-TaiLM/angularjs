app.controller("StudentController", function ($scope, $http) {
    $scope.getStudents = function () {
        $http({
            url: '/angularjs/get-students',
            method: 'POST',
        }).then(function successCallBack(response) {
            $scope.students = response.data;
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
            data: { student : JSON.parse(angular.toJson($scope.student)) }
        }).then(function successCallBack(response) {
            $scope.message = "Update successful";
            $scope.classAlert = "alert-success";
            $scope.reset();
        });
    }

    $scope.addStudent = function () {
        $http({
            url: '/angularjs/add-student',
            method: 'POST',
            data: JSON.stringify({ student :$scope.student })
        }).then(function successCallBack(response) {
            $scope.message = "Add successful";
            $scope.classAlert = "alert-primary";
            $scope.reset();
        });
    }

    $scope.deleteStudent = function (data) {
        $http({
            url: '/angularjs/delete-student',
            method: 'POST',
            data: JSON.stringify({ student : data })
        }).then(function successCallBack(response) {
            $scope.message = "Delete successful";
            $scope.classAlert = "alert-danger";
            $scope.getStudents();
        });
    }

    $scope.editStudent = function (student) {
        $scope.student = student;
    }

    $scope.reset = function () {
        $scope.getStudents();
        $scope.student = {};
    }
});
