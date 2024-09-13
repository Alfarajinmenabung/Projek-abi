<div class="container">
    <h2>Shopping Cart</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cartCollection as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>${{ $item->price }}</td>
                    <td>${{ $item->quantity * $item->price }}</td>
                    <td>
                        <form action="{{ route('cart.remove') }}" method="POST">
                            @csrf
                            <input type="hidden" value="{{ $item->id }}" name="id">
                            <button class="btn btn-danger">Remove</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-between">
        <h4>Total: ${{ Cart::getTotal() }}</h4>
        <a href="{{ route('checkout.index') }}" class="btn btn-success">Proceed to Checkout</a>
    </div>
</div>
