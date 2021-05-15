@extends('layouts.masterlayout')
@section('title','CD TABLE')
@section('content')
<div class="main">
<h2 class="h2title">UPDATE CDS</h2>
<form method="post"  action="/cd_update/{{$cdArr['id']}}">
	@csrf
	@method('put')
<br>
<label>Title :</label><input type="text" name="title" value="{{$cdArr->title}}"><br>
<label>First Name :</label><input  type="text" name="fname" value="{{$cdArr->firstname}}"><br>
<label>Main Name :</label><input  type="text" name="sname" value="{{$cdArr->mainname}}"><br>
<label>Price :</label><input type="text" name="price" value="{{$cdArr->price}}"><br>
<label>Playlength :</label><input type="text" name="playlength" value="{{$cdArr->playlength}}"><br>
<input class="button" type="submit" name="submit" value="UPDATE" ><br>
</form>

<form method="post" action="/cd_delete/{{$cdArr['id']}}">
	@csrf
	@method('delete')
	<input class="buttondelete" type="submit" name="submit" value="DELETE" ><br>
</form>


</div>
@endsection