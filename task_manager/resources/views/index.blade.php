<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>



    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
    <title>Document</title>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Danh Sách Khách Hàng VIPPRO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('customer.index')}}">Trang Chủ<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('customer.create')}}">Thêm Mới</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Thông Tin Khách Hàng
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Khách hàng Vip</a>
                        <a class="dropdown-item" href="#">Khách Hàng Thương gia</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"> Khách Hàng Thường </a>

                    </div>
                </li>

            </ul>

                <form method="post" enctype="multipart/form-data" action="?page=search" class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
        </div>
    </nav>
</head>
<body>
{{--<h1>Danh sách khách hàng vippro</h1>--}}
<div class="container-fixed">
     <div class="table">
{{--         <a href="{{'/'}}">Trang Chu</a> <br>--}}
{{--         <a href="{{'/add'}}">Them Khach Hang</a>--}}
{{--<a class="btn btn-success" href="{{route('customer.create')}}">Thêm Mới</a>--}}
<table class="table">
    <thead>
    <tr>
        <th>STT</th>
        <th>Họ và tên</th>
        <th>Age</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Address</th>
        <th>Image</th>
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
        <img src='{{asset("$customer->img")}}' alt="" style="width: 100px">
    </td>

    <td>
        <a class="btn btn-warning" href="{{route('customer.edit',$customer->id)}}"> Edit</a>
        <a class="btn btn-danger" href="{{route('customer.destroy',$customer->id)}}"
            onclick="return confirm('Bạn Có Muốn Xóa Khách Hàng Này Không?')" class="btn btn-danger">Delete</a>
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
