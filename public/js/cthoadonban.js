var app = angular.module('myapp', []).constant('api', 'http://localhost:8000/api/cthoadonban/');
app.controller('mycontroller', ['$scope', '$http', 'api', mycontroller]);

function mycontroller($scope, $http, api) {
    $http({
        method: "GET",
        url: api,
    }).then(function(res) {
        $scope.cthoadonbans = res.data;
        for (let i = 0; i < $scope.cthoadonbans.length; i++) {

            $http({
                method: "GET",
                url: 'http://localhost:8000/api/khachhang/' + $scope.cthoadonbans[i].id_kh,
            }).then(function(res) {
                $scope.cthoadonbans[i].tenkhachhangv = res.data.ten_kh;
            });

        }
        console.log(res.data);
    });

    $scope.showModal = function(id) {
        $scope.id = id;
        if (id == 0) {
            $scope.modalTitle = "Tạo Mới Hóa Đơn Bán";
            if ($scope.cthoadonban) {
                delete $scope.cthoadonban;
            }
        } else {
            $scope.modalTitle = "Chỉnh Sửa Hóa Đơn Bán";
            $http({
                method: "GET",
                url: api + id,
            }).then(function(res) {
                $scope.cthoadonban = res.data;
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
                data: $scope.cthoadonban,
                'content-Type': 'application/json'
            }).then(function(res) {
                $scope.cthoadonban = res.data;
                location.reload();
            });
        } else {
            $http({
                method: "PUT",
                url: api + $scope.id,
                data: $scope.cthoadonban,
                'content-Type': 'application/json'
            }).then(function(res) {
                $scope.cthoadonban = res.data;
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