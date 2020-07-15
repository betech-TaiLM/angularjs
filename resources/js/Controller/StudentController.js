app.controller("StudentController", function ($scope, $http) {
    // var url = window.location.pathname.split("/");
    // var id = url[url.length - 1];

   $scope.getStudent = function () {
    $http({
        url: '/demo/get-student',
        method: 'POST',
        data: JSON.stringify({ id: id })
    }).then(function successCallBack(response) {
        $scope.student = response.data;
    }, function errorCallback(err) {
        console.log(err);
    });
    }



});
