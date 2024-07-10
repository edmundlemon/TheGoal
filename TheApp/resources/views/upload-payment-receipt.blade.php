@extends('layouts.app')

@section('title', 'Upload Payment Receipt')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Upload Payment Receipt</h1>
				<form action="/upload-payment-receipt/{{$order->id}}" method="post" enctype="multipart/form-data">
					@csrf
					@method('POST')
					<div class="form-group
					">
						<label for="receipt">Receipt</label>
						<input type="file" name="payment_statement" id="payment_statement" class="form-control">
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>

@endsection