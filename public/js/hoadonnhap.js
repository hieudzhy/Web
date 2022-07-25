var app = angular.module('myapp', []).constant('api', 'http://localhost:8000/api/hoadonnhap/');
app.controller('mycontroller', ['$scope', '$http', 'api', mycontroller]);

function mycontroller($scope, $http, api) {
    $http({
        method: "GET",
        url: api,
    }).then(function(res) {
        $scope.hoadonnhaps = res.data;
        console.log(res.data);
    });

    $scope.showModal = function(id) {
        $scope.id = id;
        if (id == 0) {
            $scope.modalTitle = "Tạo Mới Hóa Đơn Bán";
            if ($scope.hoadonnhap) {
                delete $scope.hoadonnhap;
            }
        } else {
            $scope.modalTitle = "Chỉnh Sửa Hóa Đơn Bán";
            $http({
                method: "GET",
                url: api + id,
            }).then(function(res) {
                $scope.hoadonnhap = res.data;
                console.log(res.data);
            });
        }
        $('#modelId').modal('show');
    }

    $scope.saveData = function() {
        if ($scope.id == 0) {
            $http({
                method: "POST",
                url: api,
                data: $scope.hoadonnhap,
                'content-Type': 'application/json'
            }).then(function(res) {
                $scope.hoadonnhap = res.data;
                location.reload();
            });
        } else {
            $http({
                method: "PUT",
                url: api + $scope.id,
                data: $scope.hoadonnhap,
                'content-Type': 'application/json'
            }).then(function(res) {
                $scope.hoadonnhap = res.data;
                location.reload();
            });
        }
        $('#modelId').modal('hide');
    }

    $scope.deleteClick = function(id) {
        var hoi = confirm("Bạn có chắc xóa hóa đơn bán này không?");
        if (hoi) {
            $http({
                method: "DELETE",
                url: api + id,
            }).then(function(res) {
                $scope.messave = res.data;
                location.reload();
            });
        }

    }
}