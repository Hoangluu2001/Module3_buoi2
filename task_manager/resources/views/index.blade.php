<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</head>
<body>
<h1>Danh sách khách hàng vippro</h1>
<div class="container-fixed">
     <div class="table">
{{--         <a href="{{'/'}}">Trang Chu</a> <br>--}}
{{--         <a href="{{'/add'}}">Them Khach Hang</a>--}}
<a class="btn btn-success" href="{{route('customer.create')}}">Thêm Mới</a>
<table class="table">
    <thead>
    <tr>
        <th>STT</th>
        <th>Họ và tên</th>
        <th>Age</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Address</th>
        <th>Thao tác</th>
    </tr>
    </thead>
    <tbody>
    @forelse($customers as $key=>$customer)
<tr>
    <td>{{++$key}}</td>
    <td>{{$customer->name}}</td>
    <td>{{$customer->age}}</td>
    <td>{{$customer->phone}}</td>
    <td>{{$customer->email}}</td>
    <td>{{$customer->address}}</td>

    <td>
        <a href="{{route('customer.edit',$customer->id)}}"> Edit</a>
        <a href="{{route('customer.destroy',$customer->id)}}">Delete</a>
    </td>

{{--    <td>--}}
{{--        <a href="{{route('customer.edit',$customer->id)}}" class=" btn btn-primary">Edit</a>--}}
{{--        <a href="{{route('customer.destroy',$customer->id}} "--}}
{{--           onclick="return confirm('Bạn Có Muốn Xóa Khách Hàng Này Không?')" class="btn btn-danger">Delete</a>--}}

{{--    </td>--}}

</tr>

    @empty
        <tr>
            <td> No data </td>
        </tr>

    @endforelse
    </tbody>
</table>
     </div>
 </div>
</body>

</html>
