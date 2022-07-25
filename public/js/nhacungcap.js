var app = angular.module('myapp', []).constant('api', 'http://localhost:8000/api/nhacungcap/');
app.controller('mycontroller', ['$scope', '$http', 'api', mycontroller]);

function mycontroller($scope, $http, api) {
    $http({
        method: "GET",
        url: api,
    }).then(function(res) {
        $scope.nhacungcaps = res.data;
        console.log(res.data);
    });

    $scope.showModal = function(id) {
        $scope.id = id;
        if (id == 0) {
            $scope.modalTitle = "Tạo Mới Nhà Cung Cấp";
            if ($scope.nhacungcap) {
                delete $scope.nhacungcap;
            }
        } else {
            $scope.modalTitle = "Chỉnh Sửa Nhà Cung Cấp";
            $http({
                method: "GET",
                url: api + id,
            }).then(function(res) {
                $scope.nhacungcap = res.data;
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
                data: $scope.nhacungcap,
                'content-Type': 'application/json'
            }).then(function(res) {
                $scope.nhacungcap = res.data;
                location.reload();
            });
        } else {
            $http({
                method: "PUT",
                url: api + $scope.id,
                data: $scope.nhacungcap,
                'content-Type': 'application/json'
            }).then(function(res) {
                $scope.nhacungcap = res.data;
                location.reload();
            });
        }
        $('#modelId').modal('hide');
    }

    $scope.deleteClick = function(id) {
        var hoi = confirm("Bạn có chắc xóa nhà cung cấp này không?");
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