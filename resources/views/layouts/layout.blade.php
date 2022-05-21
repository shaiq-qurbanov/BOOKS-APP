<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <title>Document</title>
    <script src="/js/app.js"></script>
</head>
<body>
 @section('header') 
 <h1>header</h1>

 @stop
@yield("content")
@yield("client")
@section('footer') 
 <h1>footer</h1>
 <!-- <script src="{{ asset('js/app.js') }}"></script>  -->

 @stop

</body>