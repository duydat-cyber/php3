<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>danh sach danh muc</title>
</head>
<body>
    <h1>danh muc</h1>
    <table border="1">
        <tr>
            <th>#ID</th>
            <th>Name</th>
            <th>
                <a href="#">Them moi</a>
            </th>
        </tr>

        @foreach ($categories as $cate)
            <tr>
                <td>{{$cate->id}}</td>
                <td>{{$cate->name}}</td>
                <td>
                    Edit
                    Delete
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>