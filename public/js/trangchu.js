var app = angular.module('myapptt', [])
app.controller('mycontrollertt', ['$scope', '$http', mycontroller]);

function mycontroller($scope, $http) {
    $http({
        method: "GET",
        url: 'http://localhost:8000/api/sanpham',
    }).then(function(res) {
        $scope.sanPhamNew = res.data;
        console.log($scope.sanPhamNew);
    });

}