@extends('layouts.default')

@section('title', 'Index')

@section('content')
	<div id="wrapper" class="container">
		<section class="main-content">
			<div class="row">
				<div class="span12">													
					<div id="myCarousel" class="myCarousel carousel slide">
						<div class="carousel-inner">
							<div class="active item">
								@if ($data === 0)
									<div class="alert alert-success">
			                            <strong>Error!</strong>Không tìm thấy giá trị nào.
			                        </div>
								@endif
								<ul class="thumbnails content1">
									@foreach ($data as $row)
									<li class="span3">
										<div class="product-box">
											<span class="sale_tag"></span>
											<p><a href="{{ asset(URL::to('page/product/'.$row->id)) }}"><img class="image-index" width="200px" height="200px" src="{{ asset('img/'.$row->image) }}"></a></p>
											<a href="{{ asset(URL::to('page/product/'.$row->id)) }}" class="title">{{ $row->name }}</a><br/>
											<p class="price">${{ $row->price }}</p>
										</div>
									</li>
									@endforeach														
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>							
		</section>
	</div>
@endsection
