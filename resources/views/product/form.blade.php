<div class="card mt-3">
    <div class="card-header">
        <h3 class="card-title fw-light">{{$cardTitle}}</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="p-2">
                <input value="{{old('product_no',$product->product_no ?? "")}}" name="product_no" class="form-control" type="text" placeholder="Product No">
            </div>
            <div class="p-2">
                <input value="{{old('product_name',$product->product_name ?? "")}}" name="product_name" class="form-control"  type="text" placeholder="Product Name">
            </div>
            <div class="p-2">
                <input value="{{old('unit_price',$product->unit_price ?? "")}}" name="unit_price" class="form-control" type="number" placeholder="Unit Price">
            </div>
            <div class="p-2">
                <label class="form-label">Choose Image</label>
                <input name="product_image" class="form-control" type="file">
            </div>
            <div class="p-2">
                <label class="form-label">Select Category</label>
                <select class="form-control" name="category_id">
                    @foreach($allCategory as $c)
                    <option value="{{$c->id}}">{{$c->category}}</option>
                    @endforeach
                </select>
            </div>
            <div class="p-2">
                <button type="submit" class="btn btn-{{$btnColor}}">{{$btnText}}</button>
                <a class="btn btn-danger" href="{{route("product.index")}}">
                    Close
                </a>
            </div>
        </div>
    </div>
</div>

