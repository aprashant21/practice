@extends('layouts.masterlayout')
@section('title','BOOK TABLE')
@section('content')
<x-sidebar/>
<div class="main">
    @if(Session::get('msg'))
        <span class="msg">{{Session::get('msg')}}</span>
    @endif
   <span class="spantitle">BOOK TABLE</span>
	<table id = "customers">
    <tr>
        <td>Id</td>
        <td>Title</td>
        <td>FirstName</td>
        <td>MainName</td>
        <td>Price($)</td>
        <td>Pages</td>
        <td>Action</td>
    </tr>
    @foreach($bookArr as $book)
        <tr>
        <td>{{$book->id}}</td>
        <td>{{$book->title}}</td>
        <td>{{$book->firstname}}</td>
        <td>{{$book->mainname}}</td>
        <td>{{$book->price}}</td>
        <td>{{$book->numpages}}</td>
        <td>
            <a href="book_edit/{{$book->id}}">SELECT</a>
        </td>
        </tr>
    @endforeach
    </table>

</div>
@endsection