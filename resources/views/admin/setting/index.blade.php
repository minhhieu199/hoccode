@extends('admin.layout.main')
@section('content')
    <section class="content-header">
        <h1>
            Thông tin cấu hình website
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thông tin danh mục</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{route('admin.setting.update', ['id' => $setting->id ])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên Công Ty</label>
                                <input value="{{ $setting->company }}" type="text" class="form-control" id="company"
                                       name="company" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Địa chỉ 1</label>
                                <input value="{{ $setting->address }}" type="text" class="form-control" id="address"
                                       name="address" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Địa chỉ 2</label>
                                <input value="{{ $setting->address2 }}" type="text" class="form-control" id="address2"
                                       name="address2" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">SĐT</label>
                                <input value="{{ $setting->phone }}" type="text" class="form-control" id="phone"
                                       name="phone" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Hotline</label>
                                <input value="{{ $setting->hotline }}" type="text" class="form-control" id="hotline"
                                       name="hotline" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input value="{{ $setting->email }}" type="text" class="form-control" id="email"
                                       name="email" placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">giới thiệu công ty</label>
                                <textarea name="summary" class="form-control">{{ $setting->summary }}</textarea>
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Lưu</button>
                        </div>
                    </form>
                </div>
                <!-- /.box -->


            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </section>
@endsection
