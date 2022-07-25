var myApp = angular.module('myApp', ['angularUtils.directives.dirPagination']);
myApp.controller('MyController', MyController);
function MyController($scope,$http) {
    $scope.currentPage = 1;
    $scope.pageChangeHandler = function(num) {
            $scope.currentPage = num;
        };
    $scope.pageSize = 5;
    $http({
        method: "GET",
        url: 'http://localhost:8000/api/sanpham/',
    }).then(function(res) {
        $scope.sanphams = res.data;
        console.log(res.data);
    });
    // Loai SP
    function LoadLoaiSP(){
        $http({
            method: "GET",
            url: 'http://localhost:8000/api/loaisanpham/',
        }).then(function(res) {
            $scope.loaisanphams = res.data;
            console.log(res.data);
        });
    }
    LoadLoaiSP();
    // nha cung cap
    function LoadNCC(){
        $http({
            method: "GET",
            url: 'http://localhost:8000/api/nhacungcap/',
        }).then(function(res) {
            $scope.nhacungcaps = res.data;
            console.log(res.data);
        });
    }
    LoadNCC();
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
                url: 'http://localhost:8000/api/sanpham/' + id,
            }).then(function(res) {
                $scope.sanpham = res.data;
                console.log(res.data);
            });
        }
        $('#modelId').modal('show');
    }
    $scope.showModal1 = function (id) {
        $scope.id = id;
        $scope.modalTitle = "Chỉnh Sửa Sản Phẩm";
            $http({
                method: "GET",
                url: 'http://localhost:8000/api/sanpham/' + id,
            }).then(function(res) {
                $scope.sanpham = res.data;
                console.log(res.data);
            });
        $('#modelId1').modal('show');
    }

    $scope.saveData = function() {
        if ($scope.id == 0) {
            $http({
                method: "POST",
                url: 'http://localhost:8000/api/sanpham/',
                data: $scope.sanpham,
                'content-Type': 'application/json'
            }).then(function(res) {
                $scope.sanpham = res.data;
                location.reload();
            });
        } else {
            $http({
                method: "PUT",
                url: 'http://localhost:8000/api/sanpham/' + $scope.id,
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
                url: 'http://localhost:8000/api/sanpham/' + id,
            }).then(function(res) {
                $scope.messave = res.data;
                location.reload();
            });
        }

    }
}
myApp.directive("fileread", [function () {
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