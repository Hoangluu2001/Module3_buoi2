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
         <a href="{{'/'}}">Trang Chu</a> <br>
         <a href="{{'/add'}}">Them Khach Hang</a>

<table class="table">
    <thead>
    <tr>
        <th>STT</th>
        <th>Họ và tên</th>
        <th>Số điện thoại</th>
        <th>Email</th>
        <th>Thao tác</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>1</td>
        <td>Hoàng Thế Lưu</td>
        <td>0123456789</td>
        <td>hoangtheluu@mail.com</td>
        <td>
            <a href="{{'/xem'}}">Xem</a> | <a href="{{'/sua'}}">Sửa</a> | <a href="{{'/xoa'}}">Xóa</a>
        </td>
    </tr>
    <tr>
        <td>2</td>
        <td>Tống Văn Dũng </td>
        <td>0123456789</td>
        <td>tongvandung@mail.com</td>
        <td>
            <a href="{{'/xem'}}">Xem</a> | <a href="{{'/sua'}}">Sửa</a> | <a href="{{'/xoa'}}">Xóa</a>
        </td>
    </tr>
    <tr>
        <td>3</td>
        <td>Nguyễn Đình Tuấn  ( con gà nam định , gà đông tảo )</td>
        <td>0123456789</td>
        <td>nguyendinhtuan@mail.com</td>
        <td>
            <a href="{{'/xem'}}">Xem</a> | <a href="{{'/sua'}}">Sửa</a> | <a href="{{'/xoa'}}">Xóa</a>
        </td>
    </tr>
    <tr>
        <td>4</td>
        <td>Nguyễn Duy Trường</td>
        <td>0123456789</td>
        <td>ngguyenduytruong@mail.com</td>
        <td>
            <a href="{{'/xem'}}">Xem</a> | <a href="{{'/sua'}}">Sửa</a> | <a href="{{'/xoa'}}">Xóa</a>
        </td>
    </tr>
    <tr>
        <td>5</td>
        <td>Lê Đức Tâm </td>
        <td>0123456789</td>
        <td>leductam@mail.com</td>
        <td>
            <a href="{{'/xem'}}">Xem</a> | <a href="{{'/sua'}}">Sửa</a> | <a href="{{'/xoa'}}">Xóa</a>
        </td>
    </tr>
    </tbody>
</table>
     </div>
 </div>
</body>

</html>
