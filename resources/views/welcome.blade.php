
@extends('layouts.layout')
@section('content')
<h1>welcome</h1>
<div class="table">
<table>
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
    <td></td>
    <td><div id="del"  data-id="{{ $book->id }}" class="del"> del</div></td>
</tr>
@endforeach
</table>
</div>
<div class="">
<lable for="name">firstname</lable><br>
 <input type="text" value="" id="name"><br>
 <lable for=lname>lastname</lable><br>
 <input type="text" value="" id="lname"><br>
 <lable for="email">email</lable><br>
 <input type="email" value="" id="email"> 
 <button id="test">send</button>
</div> 
{{ $books->links() }}  
@stop


