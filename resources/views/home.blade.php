@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in') }}


                       @if(Auth::user()->id==1)
                            <form class="" method="post" action="/add">
                                @csrf
                                @method('get')
                                <input class="button" name="add" type="submit" value="ADMIN PANEL">
                            </form>
                       @endif
 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
