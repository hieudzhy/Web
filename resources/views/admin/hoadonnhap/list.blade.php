@extends('admin_layout')
@section('content')

<!--start content-->
<main class="page-content" ng-app="myapp" ng-controller="mycontroller">
    <!--breadcrumb-->
    
    <!--end breadcrumb-->

    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <h5 class="mb-0">Hóa Đơn Nhập</h5>
                <p style="margin-left:20px; margin-top:16px"><button ng-click="showModal(0)" class="btn btn-primary fa fa-plus" > Thêm</button></p>
                <form class="ms-auto position-relative">
                    <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-search"></div>
                    <input ng-model ="timKiem" class="form-control ps-5" type="text" placeholder="Tìm kiếm">
                </form>
            </div>
            <div class="table-responsive mt-3">
                <table class="table align-middle">
                    <thead class="table-secondary">
                        <tr>
                            <th>STT</th>
                            <th>Tên Nhà Cung Cấp</th>
                            <th>Tên Nhân Viên</th>
                            <th>Ngày đặt</th>
                            <th>Tổng tiền</th>
                            <th>Hình thức thanh toán</th>
                            <th>Chức Năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr ng-repeat='hdn in hoadonnhaps | filter: timKiem'>
                            <td>@{{$index+1}}</td>
                            <td>
                                <div class="d-flex align-items-center gap-3 cursor-pointer">
                                    <div class="">
                                        <p class="mb-0">@{{hdn.ten_ncc}}</p>
                                    </div>
                                </div>
                            </td>
                            <td>@{{hdn.id_nhanvien}}</td>        
                            <td>@{{hdn.date_order}}</td>
                            <td>@{{hdn.tong_tien}}</td>
                            <td>@{{hdn.thanh_toan}}</td>
                            <td>
                                <button class="btn btn-info fa fa-pencil" ng-click="showModal(hdn.id)"> </button>
                                <button class="btn btn-danger fa fa-trash" ng-click="deleteClick(hdn.id)"> </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Modal -->
        <!-- Modal -->
        <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">@{{ modalTitle }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Tên nhà cung cấp</label>
                        </div>
                        <input type="text" ng-model="hoadonnhap.id_ncc" class="form-control">
                        <div class="form-group">
                            <label for="">Tên nhân viên</label>
                        </div>
                        <input type="text" ng-model="hoadonnhap.id_nhanvien" class="form-control">
                        <div class="form-group">
                            <label for="">Ngày đặt</label>
                        </div>
                        <input type="text" ng-model="hoadonnhap.date_order" class="form-control">
                        <div class="form-group">
                            <label for="">Tổng tiền</label>
                        </div>
                        <input type="text" ng-model="hoadonnhap.tong_tien" class="form-control">
                        <div class="form-group">
                            <label for="">Hình thức thanh toán</label>
                        </div>
                        <input type="text" ng-model="hoadonnhap.thanh_toan" class="form-control">
     
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                        <button type="button" class="btn btn-primary" ng-click="saveData()">Lưu</button>
                    </div>
                </div>
            </div>
        </div>


        <script>
            $('#exampleModal').on('show.bs.modal', event => {
                var button = $(event.relatedTarget);
                var modal = $(this);
            });
        </script>
    </div>


</main>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
<script src="/js/hoadonnhap.js"></script>
<!--end page main-->




@stop