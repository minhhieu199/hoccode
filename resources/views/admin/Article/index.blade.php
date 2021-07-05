@extends('admin.layout.main')
@section('content')
    <style>tr td:first-child {max-width: 250px}</style>
    <section class="content-header">
        <h1>
            Danh Sách Tin Tức <a href="{{route('admin.article.create')}}" class="btn btn-info"><i class="fa fa-plus"></i> Thêm Bài Viết</a>
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <div class="box-tools">
                            <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control pull-right"
                                       placeholder="Search">

                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tbody>
                            <tr>
                                <th>TT</th>
                                <th style="max-with:200px">Tên SP</th>
                                <th>Hình ảnh</th>
                                <th>Loại</th>
                                <th>Vi trí</th>
                                <th>Trạng thái</th>
                                <th class="text-center">Hành động</th>
                            </tr>
                            </tbody>
                            <!-- Lặp một mảng dữ liệu pass sang view để hiển thị -->
                            @foreach($data as $key => $item)
                                <tr class="item-{{ $item->id }}"> <!-- Thêm Class Cho Dòng -->
                                    <td>{{ $key }}</td>
                                    <td>{{ substr($item->title, 0, 50) }}</td>
                                    <td>
                                    @if ($item->image) <!-- Kiểm tra hình ảnh tồn tại -->
                                        <img src="{{asset($item->image)}}" width="50" height="50">
                                        @endif
                                    </td>
                                    <td>
                                        @if ($item->type === 1)
                                            <span>Tin tức</span>
                                        @elseif ($item->type === 2)
                                            <span>Tin khuyến mại</span>
                                        @else
                                            <span>Tin nổi bật</span>
                                        @endif
                                    </td>
                                    <td>{{ $item->position }}</td>
                                    <td>{{ ($item->is_active == 1) ? 'Hiển thị' : 'Ẩn' }}</td>
                                    <td class="text-center">
                                        <a href="{{route('admin.article.edit', ['id'=> $item->id])}}" class="btn btn-flat btn-info"><i class="fa fa-edit"></i></a>
                                        <!-- Thêm sự kiện onlick cho nút xóa -->
                                        <a href="javascript:void(0)" class="btn btn-flat btn-danger btnDelete"data-id="{{$item->id}}"  >
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                    <!-- /.box-body -->

                </div>
                <!-- /.box -->
                {{ $data->links() }}
            </div>
        </div>
        <!-- /.row -->
    </section>
@endsection
@section('my_js')
    <script type="text/javascript">
        $( document ).ready(function() {

            // đính kèm token vào mỗi request ajax
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // suAbidEneUPjfI5mHvWdFbSQ1PsM4OYSm73vF7kZ
                }
            });
            $('.btnDelete').click(function () {
                var id = $(this).attr('data-id'); // lấy thuộc tính của thẻ HTML
                var me = this;
                var result = confirm("Bạn có chắc chắn muốn xóa ?");
                $.ajax({
                    url: './article/' + id,
                    type: 'DELETE', // method
                    data: {}, // dữ liệu truyền sang nếu có
                    dataType: "json", // kiểu dữ liệu nhận về
                    success: function (res) { // success : kết quả trả về sau khi gửi request ajax
                        //code
                        if (res.status == true) {
                            $(me).closest('tr').remove();
                        }

                      }

                });

            });
        });
    </script>
@endsection
