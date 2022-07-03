@extends('../templates/master')
@section('content')
    <div class="container">
        <div class="rowDetail">        
                    <div class="imageLeft">
                        <img src="/Images/Products/{{$product->image}}" alt="" style="width: 20rem">
                    </div>
                    <div class="informationRight">
                        <h3>{{$product->name}}</h3>
                        <h5 class="price">{{$product->price}}</h5>
                        <p>{{$product->description}}</p>
                        <p>Options:</p>
                        <div class="single-item-options">
                            <select class="wc-select" name="size">
                                <option>Size</option>
                                <option value="XS">XS</option>
                                <option value="S">S</option>
                                <option value="M">M</option>
                                <option value="L">L</option>
                                <option value="XL">XL</option>
                            </select>
                            <select class="wc-select" name="color">
                                <option>Color</option>
                                <option value="Red">Red</option>
                                <option value="Green">Green</option>
                                <option value="Yellow">Yellow</option>
                                <option value="Black">Black</option>
                                <option value="White">White</option>
                            </select>
                            <select class="wc-select" name="color">
                                <option>Quantity</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                        <div class="clearfix"></div>
                    </div>
        </div>
    </div> <!-- .container -->
@endsection