@foreach($products as $product)
    <div class="col-md-3 mb-4">
        <div class="product-card p-3">
            <div class="product-image">
                <img src="{{ asset('assets/image/' . $product->image) }}" alt="{{ $product->name }}" class="img-fluid">
            </div>
            <h5 class="mt-3">{{ $product->name }}</h5>
            <p class="product-price">${{ $product->price }}</p>
        </div>
    </div>
@endforeach
