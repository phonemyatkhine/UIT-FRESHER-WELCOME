@extends('layouts.app')


@section('content')
<div class="container">
  <div class="row">
        <div class="col-md-12 row-block">
        	@if(!empty($king)) 
        	<h3>You voted for Selection Number {{$king->id}} - {{$king->name}}</h3>
    		<h3>Thanks for your voting.</h3>
            <a href="{{ url('') }}" class="btn btn-lg btn-warning btn-block">
                <strong>HOME</strong>
            </a>
      		@elseif(!empty($queen))
      		

    		<h3>You voted for Selection Number {{$queen->id}} - {{$queen->name}}</h3>
    		<h3>Thanks for your voting.</h3>
            <a href="{{ url('') }}" class="btn btn-lg btn-warning btn-block">
                <strong>HOME</strong>
            </a>     
            
      		@endif
        	
        </div>
    </div>
</div>
@endsection