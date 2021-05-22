@extends('layouts.masterlayout')
@section('title','cds')
@section('content')
<div class="container">
		<h2 class="h2title">You Can Find Your Cds Here:</h2>
		@foreach($cdArr as $cd)
	<div style="text-align: center;" class="col-mid-12">
		<hr style="border: 10px solid green;border-radius: 5px;">
		<img class="imgdata" src="{{'images/' . $cd->imagecd}}"	>
		<h3 style="text-transform: uppercase;">{{$cd->title}}</h3>
		<p>{{$cd->firstname}}{{ " "}}{{$cd->mainname}}</p>
		<b>{{"$"}}{{$cd->price}}</b>
		<h4><span>{{"PLAY LENGTH :"}}</span>{{$cd->playlength}}{{" minutes"}}</h4>
	</div>
	@endforeach
</div>
@endsection