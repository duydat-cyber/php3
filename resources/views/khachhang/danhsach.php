<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Danh sách khách hàng</h1>
    <table border="1px">
        <thead>
            <tr>
                <th>Mã khách hàng</th>
                <th>Tên khách hàng</th>
                <th>Số điện thoại</th>
                <th>Địa chỉ</th>
                <th>Email</th>
                <th><a href="<?= route('them_kh') ?>">Thêm mới khách hàng</a></th>


            </tr>
        </thead>
        <tbody>
            <?php foreach ($danhSach as $kh) : ?>
                <tr>
                    <td><?= $kh->ma_khach_hang ?></td>
                    <td><?= $kh->ten_khach_hang ?></td>
                    <td><?= $kh->so_dien_thoai ?></td>
                    <td><?= $kh->dia_chi ?></td>
                    <td><?= $kh->email ?></td>
                    <td>
                        <a href="<?= route('sua_kh',['id' => $kh->id]) ?>">Sửa</a>
                    </td>

                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

</body>

</html>