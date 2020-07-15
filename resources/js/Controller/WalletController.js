app.controller("TestController", function ($scope, $http, $timeout) {
    /**
    * AJAX retrieves data Years
    */
    $scope.getAddressInfo = function (wallet) {
        $http({
            url: 'https://api.ethplorer.io/getAddressInfo/' + wallet + '?apiKey=EK-fbPah-xwEuhuS-JNCmC',
            method: 'POST'
        }).then(function successCallBack(response) {
            var data = response.data;
            $scope.infos.push(data);
        }, function errorCallback(err) {
            console.log(err);
        });
    }
});


