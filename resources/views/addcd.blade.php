@extends('layouts.masterlayout')
@section('title','ADD CD')
@section('content')
<x-sidebar/>
<div class="main">
<h2 class="h2title">ADD CDS</h2>
<form method="post" action="/cd_submit">
@csrf
<br>
<input placeholder="Title" type="text" name="title" ><br>
<input Placeholder="Firstname(optional)" type="text" name="fname"><br>
<input Placeholder= "mainname/Band" type="text" name="sname"><br>
<input placeholder="Price" type="text" name="price"><br>
<input placeholder="playlength" type="text" name="playlength" ><br>
<input class="imagesbrowser" type="file" accept="images/*" name="imgcd"/><br>
<input class="button" type="submit" name="submit" value="Add New"><br>

</form>
</div>
@endsection