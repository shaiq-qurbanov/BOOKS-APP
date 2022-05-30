
@extends('layouts.layout')
@section('content')

<h1>welcome</h1>
<a href='/student'>student</a>
<div class="table">
<table id="table">
    <tr>
        <th>id</th>
        <th>firstname</th>
        <th>lastname</th>
        <th>email</th>
        <td>up</td>
         <td >del</td>
</tr>
@foreach($books as $book)
<tr>
    <td>{{ $book->id }}</td>
    <td>{{ $book->firstname }}</td>
    <td>{{ $book->lastname  }}</td>
    <td>{{ $book->email  }}</td>
    <td><div id="update"  data-id="{{ $book->id }}" class="update">up</div></td>
    <td><div id="del"  data-id="{{ $book->id }}" class="del"> del</div></td>
</tr>
@endforeach
</table>
</div>
<div class="">
<lable for="fname">firstname</lable><br>
 <input type="text" value="" id="name" name="fname"><br>
 <lable for=lname>lastname</lable><br>
 <input type="text" value="" id="lname" name="lname"><br>
 <lable for="email">email</lable><br>
 <input type="email" value="" id="email" name="email"> 
 <button id="test">create</button>
 <button id="updated">update</button>
</div> 
{{ $books->links() }}  
@stop


