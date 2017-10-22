@extends('layouts.app')

@section('content')
<div class="section uploader">
	<div class="container">
	    <div class="row">
	        <!-- <div class="meter">
	        	<strong>0%</strong>
				<span style="width: 0%"><span></span></span>
			</div> -->
	    	<form action="{{ url('/DoUploadProgress') }}" class="uploadForm" method="post" enctype="multipart/form-data">
	    		<fieldset style="border: none; margin: 0; padding: 0;">
	    			{{ csrf_field() }}
				    <div class="file-field input-field">
				      <input type="file" name="videos[]" multiple accept="video/*" class="validate doUpload11x" style="height: 70vh !important;">
				      <div class="file-path-wrapper" style="padding:0;">
				        <input type="text" placeholder="Drag & Drop Your Videos Files Here" class="file-path validate uploadInput" style="height: 70vh !important;">
				        @if ($errors->has('videos'))
	                        <span class="help-block">
	                            <strong>{{ $errors->first('videos') }}</strong>
	                        </span>
		                 @endif
				      </div>
				    </div>
		    	</fieldset>
		    </form>

	    </div>
	</div>
</div>

@endsection
