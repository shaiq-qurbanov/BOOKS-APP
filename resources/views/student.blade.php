@extends('layouts.layout')
@section('content')
<h1>student</h1>
<div class="tableS">
@if(isset($students) && !empty($students))
<table id="table_s">
    <tr>
        <th>id</th>
        <th>country</th>
        <th>city</th>
        <th>street</th>
        <th>update</th>
        <th>delete</th>
</tr>
@foreach($students as $student)
<tr>      
<td>{{ $student->id }}</td>
<td><a href ="student/{{ $student->id }}">{{ $student->country }}</a></td>
<td><a href ="student/{{ $student->id }}">{{ $student->city }}</a></td>
<td><a href ="student/{{ $student->id }}">{{ $student->street }}</a></td>
<td><div id="updateUp" data-id="{{ $student->id }}" class="update">up</div></td>
<td><div id="delS" data-id="{{ $student->id }}" class="del">del</div></td>
</tr>
@endforeach
</table>
@endif
<div>
</div>
</div>
<div class="">
<lable for="country">country</lable><br>
 <input type="text" value="" id="country" name="country"><br>
 <lable for=city>city</lable><br>
 <input type="text" value="" id="city" name="city"><br>
 <lable for="street">street</lable><br>
 <input type="text" value="" id="street" name="street"> 
 <button id="student">create</button>
 <button id="updated_s">update</button>
</div> 
