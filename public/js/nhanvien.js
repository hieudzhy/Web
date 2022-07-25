var app = angular.module('myapp', []).constant('api', 'http://localhost:8000/api/nhanvien/');
app.controller('mycontroller', ['$scope', '$http', 'api', mycontroller]);

function mycontroller($scope, $http, api) {
    $http({
        method: "GET",
        url: api,
    }).then(function(res) {
        $scope.nhanviens = res.data;
        console.log(res.data);
    });

    $scope.showModal = function(id) {
        $scope.id = id;
        if (id == 0) {
            $scope.modalTitle = "Tạo Mới nhân viên";
            if ($scope.nhanvien) {
                delete $scope.nhanvien;
            }
        } else {
            $scope.modalTitle = "Chỉnh Sửa nhân viên";
            $http({
                method: "GET",
                url: api + id,
            }).then(function(res) {
                $scope.nhanvien = res.data;
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
                data: $scope.nhanvien,
                'content-Type': 'application/json'
            }).then(function(res) {
                $scope.nhanvien = res.data;
                location.reload();
            });
        } else {
            $http({
                method: "PUT",
                url: api + $scope.id,
                data: $scope.nhanvien,
                'content-Type': 'application/json'
            }).then(function(res) {
                $scope.nhanvien = res.data;
                location.reload();
            });
        }
        $('#modelId').modal('hide');
    }

    $scope.deleteClick = function(id) {
        var hoi = confirm("Bạn có chắc xóa nhân viên này không?");
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