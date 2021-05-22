@extends('layouts.masterlayout')
@section('title','addproduct')
@section('content')
<x-sidebar/>
<div class="container pt-3">
<h1 style="text-align: center;">WELCOME :: {{Auth::user()->name}} </h1>
</div>
@endsection