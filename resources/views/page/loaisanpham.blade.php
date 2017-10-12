@extends('index')
@section('content')

	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Sản phẩm {{$product_header->name}}</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="{{route('trang-chu')}}">Home</a> / <span>Sản phẩm</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-3">
						<ul class="aside-menu">
							@foreach($type_sidebar as $ts)
							<li><a href="{{route('loaisanpham', $ts->id)}}">{{$ts->name}}</a></li>
							@endforeach
						</ul>
					</div>
					<div class="col-sm-9">
						<div class="beta-products-list">
							<h4>{{$product_header->name}}</h4>
							<div class="beta-products-details">
								<p class="pull-left"> Tìm thấy {{count($product_type)}} sản phẩm</p>
								<div class="clearfix"></div>
							</div>

							<div class="row">
								@foreach($product_type as $pt)
								<div class="col-sm-4">
									<div class="single-item" style="margin-bottom: 10px">
										@if($pt->promotion_price != 0)
										<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
										@endif
										<div class="single-item-header">
											<a href="{{route('chitietsanpham', $pt->id)}}"><img src="source/image/product/{{$pt->image}}" alt="" height="250px"></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$pt->name}}</p>
											<p class="single-item-price" style="margin-bottom: 5px;">
												@if($pt->promotion_price == 0)
													<span class="flash-sale">{{number_format($pt->unit_price)}} VND</span>
												@else
													<span class="flash-del">{{number_format($pt->unit_price)}} VND</span>
													<span class="flash-sale">{{number_format($pt->promotion_price)}} VND</span>
												@endif
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								@endforeach
							</div>
						</div> <!-- .beta-products-list -->
						<div class="now">{{$product_type->links()}}</div>
						<div class="space30">&nbsp;</div>

						<div class="beta-products-list">
							<h4>Sản phẩm khác</h4>
							<div class="beta-products-details">
								<p class="pull-left">Tìm thấy {{count($product_other)}} sản phẩm</p>
								<div class="clearfix"></div>
							</div>

							<div class="row">
								@foreach($product_other as $po)
								<div class="col-sm-4">
									<div class="single-item" style="margin-bottom: 10px">
										@if($po->promotion_price != 0)
										<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
										@endif
										<div class="single-item-header">
											<a href="product.html"><img src="source/image/product/{{$po->image}}" alt="" height="250px"></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$po->name}}</p>
											<p class="single-item-price" style="margin-bottom: 5px;">
												@if($po->promotion_price == 0)
													<span class="flash-sale">{{number_format($po->unit_price)}} VND</span>
												@else
													<span class="flash-del">{{number_format($po->unit_price)}} VND</span>
													<span class="flash-sale">{{number_format($po->promotion_price)}} VND</span>
												@endif
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								@endforeach
							</div>
							<div class="row">{{$product_other->links()}}</div>
							<div class="space20">&nbsp;</div>
							
						</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div> <!-- .container -->

@endsection