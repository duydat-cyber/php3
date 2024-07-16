@extends('layouts.admin')

@section('content')
<h2>Danh sach SP</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Mã sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá </th>
                    <th>Số lượng</th>
                    <th>Ngày nhập</th>
                    <th>Mô tả</th>
                    <th>Trạng thái</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listSanPham as $item)
                    <tr>
                        <td> {{ $item->id }} </td>
                        <td> {{ $item->ma_san_pham }} </td>
                        <td> {{ $item->ten_san_pham }} </td>
                        <td> {{ $item->gia }} </td>
                        <td> {{ $item->so_luong }} </td>
                        <td> {{ $item->ngay_nhap }} </td>
                        <td> {{ $item->mo_ta }} </td>
                        <td> {{ $item->trang_thai }} </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endsection