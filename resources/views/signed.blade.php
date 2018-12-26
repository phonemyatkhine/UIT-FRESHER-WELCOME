@extends('layouts.app')


@section('content')
<div class="container">
  <div class="row">
        <div class="col-md-12 row-block">
        	<h3>You have already logged in with Facebook.</h3>
            <a href="{{ url('') }}" class="btn btn-lg btn-warning btn-block">
                <strong>HOME</strong>
            </a>     
        </div>
    </div>
</div>
@endsection