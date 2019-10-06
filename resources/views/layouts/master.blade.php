<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Todo</title>
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <style>
    .d-flex
    {
        display: -webkit-box !important;
        display: -webkit-flex !important;
        display: -ms-flexbox !important;
        display:         flex !important;
    }

    .d-inline-flex
    {
        display: -webkit-inline-box !important;
        display: -webkit-inline-flex !important;
        display: -ms-inline-flexbox !important;
        display:         inline-flex !important;
    }
    </style>
</head>
<body>
{{-- Đây là giao diện sau khi cắt layout --}}
    @include('layouts.header')  {{-- Mình include file header.blade--}}
    @yield('content') {{-- đây là ô trống tạo sẵn để nhét phần nội dung vào--}}
    @include('layouts.footer') {{-- Mình include file footer.blade--}}

</body>
<script src="//code.jquery.com/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</html>