@extends('layouts.layout')
@section('content')
<h1>Info</h1>
<p>country: {{ $data->country }}</p>
<p>city: {{ $data->city }}</p>
<p>street: {{ $data->street }}</p>
@if(isset($data->student_info))
<p>tel: {{ $data->student_info->tel }}</p>
<p>login: {{ $data->student_info->login }}</p>
<p>specialty: {{ $data->student_info->specialty }}</p>
@endif
<div class="info">
    <table id="info">
     <tr>
         <th>id</th>
         <th>student_id</th>
         <th>tel</th>
         <th>login</th>
         <th>specialty</th>
         <th>update</th>
         <th>delete</th>
        <tr>
            <td>{{ $data->id }}</td>
            <td>n</td>
            <td>{{ $data->student_info ? $data->student_info->tel: ''}}</td>
            <td>{{ $data->student_info ? $data->student_info->login: ''}}</td>
            <td>{{ $data->student_info ? $data->student_info->specialty: ''}}</td>
            <td><div id="up" class="update">up</div></td>
            <td><div class="del">del</div></td>
        </tr>
    </table>
    <div class="">
 <lable for="student_id">student_id</lable><br>
 <input type="hidden" id="student_id" value="{{ $data->id }}"  name="st"><br>
 <lable for=tel>tel</lable><br>
 <input type="text" value="{{ $data->student_info ? $data->student_info->tel: ''}}" id="tel" name="tel"><br>
 <lable for="login">login</lable><br>
 <input type="login" value="{{ $data->student_info ? $data->student_info->login: ''}}" id="login" name="login"><br>
 <lable for="specialty">specialty</lable><br>
 <input type="specialty" value="{{ $data->student_info ? $data->student_info->specialty: ''}}" id="specialty" name="specialty"><br> 
 <button id="cre">create</button>
 <button id="uptel">update</button>
</div> 
</div>