@extends('layouts.default')

@section('title', 'Sản phẩm')

@section('content')
	<div id="wrapper" class="container">
		<section class="main-content">				
			<div class="row">						
				<div class="span9">
					<div class="row">
						<div class="span4">
							<a href="themes/images/ladies/1.jpg" class="thumbnail" data-fancybox-group="group1" title="Description 1"><img alt="" src="{{ asset('img/'.$data->image) }}"></a>	
						</div>
						<div class="span5">
							<address>
								<strong>Mã sách: </strong><span id="id">{{ $data->id }}</span><br>
								<strong>Tên: </strong> <span>{{ $data->name }}</span><br>
								<strong>Số lượng: </strong> <span>{{ $data->quantily }}</span><br>								
							</address>									
							<h4><strong>Giá: </strong><span>{{ $data->price }} $</span></h4>
							<button class="btn btn-inverse" id="buttonAddCart">Add Cart</button>
						</div>
					</div>
					<div class="row">
						<div class="span9">
							<ul class="nav nav-tabs" id="myTab">
								<li class="active"><a href="#home">Mô tả</a></li>
							</ul>							 
							<div class="tab-content">
								<div class="tab-pane active" id="home">{{ $data->description }}</div>
							</div>							
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
@endsection


