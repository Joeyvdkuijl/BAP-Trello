@extends('../layouts/contactlayout')

@section('page_title')
    Contact
@endsection

@section('article')
@if(session()->has('message'))
<div class="alert alert-success" role="alert">
	<strong>Success</strong> {{session()->get('message')}}
</div>
@endif
<form action="{{ route('from.handle') }}" method="POST">
	@csrf
<div class="container contact">
	<div class="row">
		<div class="col-md-3">
			<div class="contact-info">
				<img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
				<h2>Contact Us</h2>
				<h4>We would love to hear from you !</h4>
			</div>
		</div>
		<div class="col-md-9">
			<div class="contact-form">
				<div class="form-group">
				  <label class="control-label col-sm-2" for="fullname">Fullname:</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" name="fullname"  id="fname" placeholder="Enter First Name" name="fname" value="{{ old('fullname') }}">
					@error('fullname')
					<div class="alert alert-danger">{{ $message }}</div>
					@enderror
				  </div>
				</div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="email">Email:</label>
				  <div class="col-sm-10">
					<input type="email" class="form-control" name="email"  id="email" placeholder="Enter email" name="email" value="{{ old('email') }}">
					@error('email')
					<div class="alert alert-danger">{{ $message }}</div>
					@enderror
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="comment">Comment:</label>
				  <div class="col-sm-10">
					<textarea class="form-control" name="comment"  rows="5" id="comment" value="{{ old('comment') }}"></textarea>
					@error('comment')
					<div class="alert alert-danger">{{ $message }}</div>
					@enderror
				  </div>
				</div>
				<div class="form-group">        
				  <div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-primary">Submit</button>
				  </div>
				</div>
			</div>
		</div>
	</div>
</div>
</form>
@endsection