@extends('../templates/master')

@section('content')
<section class="product_section layout_padding">
    <div class="container">
      {{-- ----------sHOW MENU --}}
        <h1 class="product_section_h2 text-center">
          We have
        </h1>
      {{-- ---------End show menu----- --}}

      {{-- Show Top Products --}}
      <div class="beta-products-list">
        <h4>Top Products</h4>
        <div class="beta-products-details">
            <p class="pull-left">438 styles found</p>
        </div>
        <div class="row">
        @foreach($TopProduct as $Tpr)
            <div class="col-sm-3">
                <div class="single-item">
                    <div class="single-item-header">
                        <a href="/type/{{$Tpr->id}}"><img src="Images/Products/{{$Tpr->image}}" alt=""></a>
                    </div>
                    <div class="single-item-body">
                        <h5 class="single-item-title">{{$Tpr->name}}</h5>
                        <p class="single-item-price" style="font-size: 18px">
                            <span>{{number_format($Tpr->price)}}dong</span>
                            <span>{{number_format($Tpr->promotionPrice)}}dong</span>
                        </p>
                        <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                        <a class="detail" href="/productDetail/{{$Tpr->id}}">Details</a>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
  </section>
<section class="about_section layout_padding">
@endsection