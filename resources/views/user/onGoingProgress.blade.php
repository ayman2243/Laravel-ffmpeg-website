@extends('layouts.app')

@section('content')

<div class="section uploader">
	<div class="container">
	    <div class="row">
	    		
	    		<h1>OnGoingProsses</h1>


	    		<div class="card">
				    <div class="card-content" style="background-color: beige;">
				      <h6 style="color: #000;">Video Title Gose Here</h6>
				    </div>
				    <div class="card-tabs">
				      <ul class="tabs tabs-fixed-width">
				        <li class="tab"><a href="#test4">Basic Info</a></li>
				        <li class="tab"><a class="active" href="#test5">Translations</a></li>
				        <li class="tab"><a href="#test6">Advanced Settings</a></li>
				      </ul>
				    </div>
				    <div class="card-content grey lighten-4">
				      <div id="test4">
				      	<div class="row">
						    <form class="col s12">
						      <div class="row">
						        <div class="input-field col s6">
						          <i class="material-icons prefix">mode_edit</i>
						          <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
						          <label for="icon_prefix2">Description</label>
						        </div>
						      </div>
						    </form>
				      	</div>
				      <div id="test5">Test 2</div>
				      <div id="test6">Test 3</div>
				    </div>
				</div>

		</div>
	</div>
</div>	    

@endsection
