@extends('../templates/master')

@section('content')
    <div class="space50">&nbsp;</div>
    <div class="container beta-relative">
        <div class="pull-left">
            <h2 class="text-center List">Add product</h2>
        </div>
        <div class="space50">&nbsp;</div>
        
        <div class="container">
            <form action="/formAdd" method="POST" enctype="multipart/formAdd">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter name"  >
                    @error('name')
                        <small style="color: red" class="help-block">{{$message}}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for='image'>Image file</label>
                    <input type="file" class="form-control-file" name="image" id="image"  >
                    @error('image')
                        <small style="color: red" class="help-block">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <img id="preview-image-before-upload" src="https://www.riobeauty.co.uk/images/product_image_not_found.gif" alt="preview image" style="max-height: 250px;">
                    <script type="text/javascript">
                        $(document).ready(function(e) {
                            $('#image').change(function() {
                                let reader = new FileReader();
                                reader.onload = (e) => {
                                    $('#preview-image-before-upload').attr('src', e.target.result);
                                }
                                reader.readAsDataURL(this.files[0]);
                            });
                        });
                    </script>
                </div>

                <div class="mb-3">
                    <label for='price'>Price</label>
                    <input type="number" class="form-control" name="price" id="price" placeholder="Enter price"  >
                </div>

                <div class="mb-3">
                    <label for='promotionPrice'>Promotion Price</label>
                    <input type="number"  class="form-control" name="promotionPrice" id="promotionPrice" placeholder="Enter promotion price">
                </div>

                <div class="mb-3">
                    <label for='description'>Description</label>
                    <textarea name="description"   rows="4" cols="115"></textarea>
                    <script>
                        CKEDITOR.replace('description');
                    </script>
                </div>

                <div class="mb-3">
                    <label for='quantity'>Quantity</label>
                    <input type="number" min=0 class="form-control" name="quantity" id="quantity" placeholder="Enter quantity"  >
                </div>

                <div class="mb-3">
                    <label for='id_type'>Id Type</label>
                    <input type="text" class="form-control" name="id_type" id="id_type" placeholder="Id type"  >
                </div>
                <div>
                    @include('../error')
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="space50">&nbsp;</div>
    </div>
@endsection