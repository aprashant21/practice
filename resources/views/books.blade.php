@extends('layouts.masterlayout')
@section('title','Books')
@section('content')
<div class="container">
	<h2 class="h2title">You Can Find Your Books Here:</h2>

	@foreach($bookArr as $book)
	<div style="text-align: center;" class="col-mid-12">
		<hr style="border: 10px solid green;border-radius: 5px;">
        <img class="imgdata" src="{{'images/' . $book->imagebook}}"	>
        <h3 style=" text-transform: uppercase;">{{$book->title}}</h3>
		<p>{{$book->firstname}}{{ " "}}{{$book->mainname}}</p>
		<b>{{"$"}}{{$book->price}}</b>
		<h4><span>{{"PAGES :"}}</span>{{$book->numpages}}</h4>
	</div>
	@endforeach
</div>
@endsection