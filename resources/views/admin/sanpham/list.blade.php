@extends('admin_layout')
@section('content')

<!--start content-->
<main class="page-content" ng-app="myApp" ng-controller="MyController">
    

    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <h5 class="mb-0">Sản Phẩm</h5>
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
                            <th>Tên Sản Phẩm</th>  
                            
                            <th>Loại SP</th>
                            <th>NCC</th>
                            <th>Ảnh</th>                        
                            <th>Giá</th>
                            <th>Số Lượng</th>
                            {{-- <th>new</th> --}}
                            <th>Chức Năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr  dir-paginate="sp in sanphams| filter:timKiem | itemsPerPage: pageSize" current-page="currentPage">
                            <td>@{{$index+1+(currentPage-1)*pageSize}}</td>
                            <td>
                                <div class="d-flex align-items-center gap-3 cursor-pointer">
                                    <div class="">
                                        <p class="mb-0">@{{sp.name}}</p>
                                    </div>
                                </div>
                            </td>
                            
                            <td hidden="true">@{{sp.mota_sp}}</td>
                            
                            <td>@{{sp.loai_sp.tenloai}}</td>
                            <td>@{{sp.nhacungcap.ten_ncc}}</td>
                            <td><img src="/storage/image/@{{sp.image}}" style="width: 100px; height: 100px" alt=""></td>
                            <td>@{{sp.unit_price|number : 0}} VND</td>
                            <td>@{{sp.so_luong}}</td>                            
                            <td hidden="true">@{{sp.don_vi}}</td>
                            <td hidden="true">@{{sp.Delet}}</td>
                            <td hidden="true">@{{sp.new}}</td>
                            <td>
                                <button class="btn btn-info fa fa-table" ng-click="showModal1(sp.id)"></button>
                                <button class="btn btn-info fa fa-pencil" ng-click="showModal(sp.id)"> </button>
                                <button class="btn btn-danger fa fa-trash" ng-click="deleteClick(sp.id)"> </button>    
                            </td>
                        </tr>
                    </tbody>
                </table>
                <dir-pagination-controls max-size='7' id="abuttonv" on-page-change="pageChangeHandler(newPageNumber)"></dir-pagination-controls>

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
                            <label for="">Tên sản phẩm</label>
                            <input type="text" ng-model="sanpham.name" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label for="">ID_loai</label>    
                            <select ng-model="sanpham.id_loai_sp" class="form-select" style="border: 1px solid #ced4da; width: 100%; height: 35px; border-radius: 3px">
                                <option class="form-control" ng-repeat="loaisanpham in loaisanphams" value="@{{loaisanpham.id}}">
                                    @{{loaisanpham.tenloai}}
                                </option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">ID_Ncc</label>
                            <select ng-model="sanpham.id_ncc" class="form-select" style="border: 1px solid #ced4da; width: 100%; height: 35px; border-radius: 3px">
                                <option class="form-control" ng-repeat="nhacungcap in nhacungcaps" value="@{{nhacungcap.id}}">
                                    @{{nhacungcap.ten_ncc}}
                                </option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Mô tả</label>
                            <input type="text" ng-model="sanpham.mota_sp" class="form-control">

                        </div>
                        <div class="form-group">
                            <label for="">Giá</label>
                            <input type="text" ng-model="sanpham.unit_price" class="form-control">

                        </div>
                        <div class="form-group">
                            <label for="">Gia KM</label>
                            <input type="text" ng-model="sanpham.gia_km" class="form-control">

                        </div>
                        <div class="form-group">
                            <label for="">Số lượng</label>
                            <input type="text" ng-model="sanpham.so_luong" class="form-control">

                        </div>
                        <div class="form-group">
                            <label for="">Ảnh</label>
                            <input type="file" fileread="sanpham.image" class="form-control">

                        </div>
                        <div class="form-group">
                            <label for="">Đơn vị tính</label>
                            <input type="text" ng-model="sanpham.don_vi_tinh" class="form-control">

                        </div>
                        <div class="form-group">
                            <label for="">Delet</label>
                            <input type="text" ng-model="sanpham.Delet" class="form-control">

                        </div>
                        <div class="form-group">
                            <label for="">New</label>
                            <input type="text" ng-model="sanpham.new" class="form-control">

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                        <button type="button" class="btn btn-primary" ng-click="saveData()">Lưu</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modelId1" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Chi Tiết</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div style="padding:20px;">
                    <label for="">Tên sản phẩm: </label>
                    <span style="color: black;">@{{sanpham.name}}</span><br>
                    <hr>
                    
                    <label for="">Ảnh: </label>
                    <span><img src="/storage/image/@{{sanpham.image}}" width="100px" height="100px" alt=""></span><br>
                    <hr>
                    <label for="">Số Lượng: </label>
                    <span style="color: black;">@{{sanpham.so_luong}}</span><br>
                    <hr>
                    <label for="">Giá: </label>
                    <span style="color: black;">@{{sanpham.unit_price}}</span><br>
                    <hr>
                    
                    
                    {{-- <label for="">ID_NCC: </label>
                    <span style="color: black;">@{{sanpham.id_ncc}}</span><br>
                    <hr>
                    <label for="">ID_Loai: </label>
                    <span style="color: black;">@{{sanpham.id_loai_sp}}</span><br>
                    <hr> --}}
                </div>

            </div>
        </div>
    </div>


   
    </div>


</main>
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.8.3/angular.min.js" integrity="sha512-KZmyTq3PLx9EZl0RHShHQuXtrvdJ+m35tuOiwlcZfs/rE7NZv29ygNA8SFCkMXTnYZQK2OX0Gm2qKGfvWEtRXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script data-require="angular-ui-bootstrap@0.3.0"
    data-semver="0.3.0" src= "http://angular-ui.github.io/bootstrap/ui-bootstrap-tpls-0.3.0.min.js">
    </script>
    <script src="https://rawgit.com/michaelbromley/angularUtils-pagination/master/dirPagination.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="/js/angular.min.js"></script>
    <script src="/js/san_pham.js"></script>
    <script>
    
</script>
<!--end page main-->




@stop