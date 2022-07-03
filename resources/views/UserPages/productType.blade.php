@extends('../templates/master')
@section('content')
    <div class="container">
        <div id="content" class="space-top-none">
            <div class="main-content">
                <div class="space60">&nbsp;</div>
                <div class="row">
                    <div class="col-sm-3">
                        <ul class="aside-menu">
                        @foreach($product_type as $l)
                            <li><a href="/type/{{$l->id}}">{{$l->name}}</a></li>
                        @endforeach
                        </ul>
                    </div>
                    <div class="col-sm-9">
                        <div class="beta-products-list">
                            <br>
                            <h1 class="productTypeName" style="text-align:center; font-weight: bold;"> {{$the_loai->name}}</h1>
                            <div class="beta-products-details">
                                @php
                                    $num_of_pr = count($sp_theoloai)
                                @endphp
                                <p class="pull-left">{{$num_of_pr}} style<span>{{$num_of_pr <= 1 ? "" : "s"}}</span> found</p>
                                <div class="clearfix"></div>
                            </div>

                            <div class="row">
                                @foreach($sp_theoloai as $pr)
                                <div class="col-sm-4">
                                    <div class="single-item">
                                        <div class="single-item-header">
                                            <a href="product.html"><img src="/Images/Products/{{$pr->image}}" alt=""></a>
                                        </div>
                                        <div class="single-item-body">
                                            <h5 class="single-item-title"><b>{{$pr->name}}</b></h5>
                                            <p class="single-item-price">
                                                @if($pr->promotionPrice==0)
                                                <span class="flash-sale">${{number_format($pr->price)}}</span>
                                                @else
                                                <span class="flash-sale text-danger">${{number_format($pr->price)}}</span>
                                                <span class="flash-sale text-decoration-line-through text-muted">${{number_format($pr->promotionPrice)}}</span>
                                                @endif
                                            </p>
                                        </div>
                                        <div class="single-item-caption">    
                                            <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i></a>                               
                                            <a class="detail" href="/productDetail/{{$pr->id}}">Details</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div> <!-- .beta-products-list -->
                        <div class="space50">&nbsp;</div>
                    </div>
                </div> <!-- end section with sidebar and main content -->
            </div> <!-- .main-content -->
        </div> <!-- #content -->
    </div> <!-- .container -->
@endsection


