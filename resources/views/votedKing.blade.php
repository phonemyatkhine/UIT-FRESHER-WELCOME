@extends('layouts.app')


@section('content')
<div class="container">
  <div class="row">
        <div class="col-md-12 row-block">
        	<h3>You have already voted for Kings.</h3>
            <a href="{{ url('queen') }}" class="btn btn-lg btn-success btn-block">
                <strong>Vote for Queens</strong>
            </a>     
            <a href="{{ url('') }}" class="btn btn-lg btn-info btn-block">
                <strong>Home</strong>
            </a>     
        </div>
    </div>
</div>
@endsection