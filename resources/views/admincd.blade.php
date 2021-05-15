@extends('layouts.masterlayout')
@section('title','CD TABLE')
@section('content')
<x-sidebar/>
<div class="main">
       @if(Session::get('msg'))
           <span class="msg">{{Session::get('msg')}}</span>
       @endif
       <span class="spantitle">CD TABLE</span>
	<table id = "customers">
    <tr>
        <td>Id</td>
        <td>Title</td>
        <td>FirstName</td>
        <td>MainName</td>
        <td>Price($)</td>
        <td>Playlength(min)</td>
        <td>Action</td>
    </tr>
    @foreach($cdArr as $cd)
        <tr>
        <td>{{$cd->id}}</td>
        <td>{{$cd->title}}</td>
        <td>{{$cd->firstname}}</td>
        <td>{{$cd->mainname}}</td>
        <td>{{$cd->price}}</td>
        <td>{{$cd->playlength}}</td>
        <td>
            <a href="cd_edit/{{$cd->id}}">SELECT</a>
        </td>
        </tr>
     @endforeach
    </table>

</div>
@endsection