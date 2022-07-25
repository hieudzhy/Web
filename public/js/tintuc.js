var app = angular.module('myapp', []).constant('api', 'http://localhost:8000/api/tintuc/');
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
    }).then(function (res) {
        $scope.tintucs = res.data;
        console.log(res.data);
    });

    $scope.showModal = function (id) {
        $scope.id = id;
        if (id == 0) {
            $scope.modalTitle = "Tạo Mới Tin Tức";
            if ($scope.tintuc) {
                delete $scope.tintuc;
            }
        } else {
            $scope.modalTitle = "Chỉnh Sửa Tin Tức";
            $http({
                method: "GET",
                url: api + id,
            }).then(function (res) {
                $scope.tintuc = res.data;
                console.log(res.data);
            });
        }
        $('#modelId').modal('show');
    }

    // hàm xem chi tiết 
    $scope.showModal1 = function (id) {
        $scope.modalTitle = "xem Tin Tức";
        $http({
            method: "GET",
            url: api + id,
        }).then(function (res) {
            $scope.tintuc = res.data;
            console.log(res.data);
        });
        $('#modelId1').modal('show');
    }

    $scope.saveData = function () {
        if ($scope.id == 0) {
            $http({
                method: "POST",
                url: api,
                data: $scope.tintuc,
                'content-Type': 'application/json'
            }).then(function (res) {
                $scope.tintuc = res.data;
                location.reload();
            });
        } else {
            $http({
                method: "PUT",
                url: api + $scope.id,
                data: $scope.tintuc,
                'content-Type': 'application/json'
            }).then(function (res) {
                $scope.tintuc = res.data;
                location.reload();
            });
        }
        $('#modelId').modal('hide');
    }

    $scope.deleteClick = function(id) {
        var hoi = confirm("Bạn có chắc xóa tin tức này không?");
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