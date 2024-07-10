@extends('layouts.app')

@section('title', 'Approve Order')
	
@section('content')
	<div class="container">
		<div class="flex flex-col">
			@foreach($orders as $order)
			<div class="flex flex-row border-dark">
				<div class="col-md-12 text-center">
					{{$order->customer->name}}
				</div>
				@if ($order->payment)
					<div>
						<a href="{{ asset($order->payment->payment_statement) }}" target="_blank">Click here to view the PDF</a>
					</div>

					<form action="/approve-order/{{ $order->id }}" method="POST">
						@csrf
						@method('POST')
						<button type="submit" class="inline-block mt-4 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded w-40">Approve</button>
					</form>
				@else
					<div>
						No payment statement
					</div>
				@endif
				
			</div>
			@endforeach
		</div>
	</div>
@endsection