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

{{--            <form method="post" enctype="multipart/form-data" action="?page=search" class="form-inline my-2 my-lg-0">--}}
{{--                <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">--}}
{{--                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>--}}
{{--            </form>--}}
        </div>
    </nav>
</head>
<body>


<div class="container">
    <div class="card">
        <div class="card-header" style="background-color: cornflowerblue">
            <h3>Thêm Khách Hàng</h3>
        </div>
        <div class="card-body">

<form action="{{route('customer.store')}}" method="post" enctype="multipart/form-data">
    <div class="form-group">
        @csrf
        <label>Name</label>
        <input type="text" class="form-control" name="name" required>
    </div>
    <div class="form-group">
        <label>Age</label>
        <input type="number" class="form-control" name="age" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Phone</label>
        <input type="number" class="form-control" name="phone" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="text" class="form-control" name="email" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Address</label>
        <input type="text" class="form-control" name="address" class="form-control" required>
    </div>

        <div class="form-group">
            <label for="inputFileName">File Name</label>
            <input type="text"
                   class="form-control"
                   id="inputFileName"
                   name="inputFileName">
            <input type="file"
                   class="form-control-file"
                   id="inputFile"
                   name="inputFile">
        </div>

        <input type="submit" class="btn btn-primary" value="Thêm mới">
        <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>

    </div>
</form>


{{--    name:<input type="text" name="name">--}}
{{--    age:<input type="number" name="age">--}}
{{--    phone:<input type="number" name="phone">--}}
{{--    email:<input type="text" name="email">--}}
{{--    address:<input type="text" name="address">--}}
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


{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <title>Title</title>--}}
{{--    <!-- Required meta tags -->--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">--}}

    <!-- Bootstrap CSS -->
{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"--}}
{{--          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">--}}
{{--    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>--}}
{{--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>--}}
{{--</head>--}}
{{--<body>--}}


{{--<form action="{{route('customer.store')}}" method="post">--}}
{{--    @csrf--}}
{{--    name:<input type="text" name="name">--}}
{{--    age:<input type="number" name="age">--}}
{{--    phone:<input type="number" name="phone">--}}
{{--    email:<input type="text" name="email">--}}
{{--    address:<input type="text" name="address">--}}
{{--    <input type="submit">--}}
{{--</form>--}}




<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
{{--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"--}}
{{--        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"--}}
{{--        crossorigin="anonymous"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"--}}
{{--        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"--}}
{{--        crossorigin="anonymous"></script>--}}
{{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"--}}
{{--        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"--}}
{{--        crossorigin="anonymous"></script>--}}
{{--</body>--}}
{{--</html>--}}
{{--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>--}}
{{--<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>--}}
{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>--}}
