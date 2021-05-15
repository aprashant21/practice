@extends('layouts.masterlayout')
@section('title','ADD BOOK')
@section('content')
<x-sidebar/>
<div class="main">
<h2 class="h2title">ADD BOOKS</h2>
<form method="post" action="/book_submit">
	@csrf
<br>
<input placeholder="Title" type="text" name="title" required=""><br>
<input Placeholder="Firstname(optional)" type="text" name="fname"><br>
<input Placeholder= "Surname" type="text" name="sname" required=""><br>
<input placeholder="Price" type="text" name="price" required=""><br>
<input placeholder="pages" type="text" name="pages" required=""><br>
<input class="button" type="submit" name="submit" value="Add New"><br>

</form>
</div>
@endsection