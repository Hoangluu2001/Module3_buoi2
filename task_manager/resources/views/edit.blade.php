<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>


<body>
<div class="container">
    <div class="card">
        <div class="card-header" style="background-color: cornflowerblue">
            <h3>Sửa Thông Tin Khách Hàng</h3>
        </div>
        <div class="card-body">
            <form action="{{route('customer.update',$customer->id)}}" method="post">
                <div class="form-group">
                    @csrf
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" value="{{$customer->name}}"  required>
                </div>
                <div class="form-group">
                    <label>Age</label>
                    <input type="number" class="form-control" name="age" value="{{$customer->age}}"  required>
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="number" class="form-control" name="phone" value="{{$customer->age}}"  required>
                </div>
                <div class="form-group">
                    <label>email</label>
                    <input type="text" class="form-control" name="email" value="{{$customer->email}}"  required>
                </div>
                <div class="form-group">
                    <label>age</label>
                    <input type="text" class="form-control" name="address" value="{{$customer->address}}"  required>
                </div>

                <input type="submit" class="btn btn-primary" value="Thay Đổi Thông Tin">
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
            </form>



{{--<form action="{{route('customer.update',$customer->id)}}" method="post">--}}
{{--    @csrf--}}
{{--    name:<input value="{{$customer->name}}" type="text" name="name">--}}
{{--    age:<input value="{{$customer->age}}" type="number" name="age">--}}
{{--    age:<input value="{{$customer->phone}}" type="number" name="phone">--}}
{{--    age:<input value="{{$customer->email}}" type="text" name="email">--}}
{{--    address:<input value="{{$customer->address}}" type="text" name="address">--}}
{{--    <input type="submit">--}}
{{--</form>--}}


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>

