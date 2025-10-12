@push('styles')
<link rel="stylesheet" href="{{asset('admin')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="{{asset('admin')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="{{asset('admin')}}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endpush

<div>
    <style>
        .custom-select.form-control-border,
        .form-control.form-control-border {
            box-shadow: none;
            outline: none;
            border: none;
            background: #f2f2f2;
        }
    </style>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Danh sách đơn hàng</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Họ tên</th>
                                <th>Số điện thoại</th>
                                <th>Địa chỉ</th>
                                <th>Trạng thái</th>
                                <th>Sản phẩm</th>
                                <th>Tác vụ</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ( $orders as $order )

                            <tr>
                                <td>{{$order->name}}</td>
                                <td> {{ $order->phone }} </td>
                                <td> {{ $order->address }} </td>
                                <td>
                                    <div class="form-group mb-0">
                                        <select class="custom-select form-control-border">
                                            <option @if($order->status == 1) selected @endif value="1">Chưa giải quyết
                                            </option>
                                            <option @if($order->status == 2) selected @endif value="2">Đang thực hiện
                                            </option>
                                            <option @if($order->status == 3) selected @endif value="3">Hoàn thành
                                            </option>
                                            <option @if($order->status == 4) selected @endif value="4">Thất bại</option>
                                            <option @if($order->status == 5) selected @endif value="5">Chờ tư vấn lại
                                            </option>
                                        </select>
                                    </div>
                                </td>
                                <td> {{ $order->product->name }} </td>
                                <td>
                                    <i class="fas fa-trash fs-3" onclick="confirmDelete({{ $order->id }})"></i>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Rendering engine</th>
                                <th>Browser</th>
                                <th>Platform(s)</th>
                                <th>Engine version</th>
                                <th>CSS grade</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->


            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
</div>


@push('scriptsFooter')

<!-- DataTables  & Plugins -->
<script src="{{asset('admin')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('admin')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('admin')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('admin')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{asset('admin')}}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{asset('admin')}}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{asset('admin')}}/plugins/jszip/jszip.min.js"></script>
<script src="{{asset('admin')}}/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{asset('admin')}}/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{asset('admin')}}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{asset('admin')}}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{asset('admin')}}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- AdminLTE for demo purposes -->

<!-- Page specific script -->
<script>
    $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

<script>
    function confirmDelete(id) {
        Swal.fire({
            title: "Bạn có chắc muốn xóa?",
            text: "Hành động này không thể hoàn tác!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Xóa",
            cancelButtonText: "Hủy",
            confirmButtonColor: "#d33",
            cancelButtonColor: "#3085d6",
        }).then((result) => {
            if (result.isConfirmed) {
                Livewire.dispatch('deleteConfirmed', { id: id });
            }
        });
    }
</script>

<script>

    Livewire.on('swal', data => {
         Swal.fire({
                title: data[0].title,
                icon: data[0].icon ?? 'danger',
                text:  data[0].text ?? '',
                confirmButtonText: 'OK',
            })
    });
</script>

@endpush
