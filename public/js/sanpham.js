var app = angular.module('myapp', []).constant('api', 'http://localhost:8000/api/sanpham/');
app.directive("fileread", [function () {
    return {
        scope: {
            fileread: "="
        },
        link: function (scope, element, attributes) {
            element.bind("change", function (changeEvent) {
                var reader = new FileReader();
                reader.onload = function (loadEvent) {
                    scope.$apply(function () {
                        scope.fileread = loadEvent.target.result;
                    });
                }
                reader.readAsDataURL(changeEvent.target.files[0]);
            });
        }
    }
}]);
app.controller('mycontroller', ['$scope', '$http', 'api', mycontroller]);

function mycontroller($scope, $http, api) {
    
    $http({
        method: "GET",
        url: api,
    }).then(function(res) {
        $scope.sanphams = res.data;
        console.log(res.data);
    });

    $scope.showModal = function(id) {
        $scope.id = id;
        if (id == 0) {
            $scope.modalTitle = "Tạo Mới Sản Phẩm";
            if ($scope.sanpham) {
                delete $scope.sanpham;
            }
        } else {
            $scope.modalTitle = "Chỉnh Sửa Sản Phẩm";
            $http({
                method: "GET",
                url: api + id,
            }).then(function(res) {
                $scope.sanpham = res.data;
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
                data: $scope.sanpham,
                'content-Type': 'application/json'
            }).then(function(res) {
                $scope.sanpham = res.data;
                location.reload();
            });
        } else {
            $http({
                method: "PUT",
                url: api + $scope.id,
                data: $scope.sanpham,
                'content-Type': 'application/json'
            }).then(function(res) {
                $scope.sanpham = res.data;
                location.reload();
            });
        }
        $('#modelId').modal('hide');
    }

    $scope.deleteClick = function(id) {
        var hoi = confirm("Bạn có chắc xóa sản phẩm này không?");
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