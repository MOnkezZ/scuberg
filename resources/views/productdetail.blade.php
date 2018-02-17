@extends('layouts.app')

@section('content')

<div class="container">
	<h2>{{$prod->prodname}}</h2><br  />
		<div class="row">
			<div class="col-md-4"><img src="{{$prod->picture}}"></div>
			<div class="col-sm-8">
				<div class="description-article">{{$prod->description}}</div>
				<div>
					<b>Price:</b> 
					{{$prod->price}}
				</div>
				<div>
					<b>Product ID:</b> 
					<u>{{$prod->id}}</u>
				</div>
				<div>
					<b>Category :</b> 
					<u>{{$prod->id}}</u>
				</div>
			</div>
		</div>
</div>

@endsection