@extends('admin.layout.index')

@section('content')
<!-- Them loaitin -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Loại tin
                    <small>thêm mới</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                            {{$err}}<br>
                        @endforeach
                    </div>
                @endif

                @if(session('thongbao'))
                    <div class="alert alert-success">
                        {{session('thongbao')}}
                    </div>
                @endif

                <form action="admin/loaitin/them" method="POST">
                <input type="hidden" name="_token" value="{{csrf_token()}}" /> 
                    <div class="form-group">
                        <div class="form-group">
                            <label>Thể loại</label>
                            <select class="form-control" name="TheLoai">
                                @foreach($theloai as $tl)
                                    <option value="{{$tl->id}}">{{$tl->Ten}}</option>
                                @endforeach
                            </select>
                        </div>
                        <label>Tên loại tin</label>
                        <input class="form-control" name="Ten" placeholder="Nhập tên loại tin" />
                    </div>
                    <button type="submit" class="btn btn-default">Thêm mới</button>
                    <button type="reset" class="btn btn-default">Hủy bỏ</button>
                </form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection
    
