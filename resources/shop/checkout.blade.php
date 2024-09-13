<div class="container">
    <h2>Checkout</h2>
    <form action="{{ route('checkout.store') }}" method="POST" id="payment-form">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" id="address" name="address" class="form-control">
        </div>

        <div class="form-group">
            <label for="card-element">Credit or debit card</label>
            <div id="card-element">
            </div>
        </div>

        <button class="btn btn-primary">Submit Payment</button>
    </form>
</div>

<script src="https://js.stripe.com/v3/"></script>
<script>
    var stripe = Stripe('{{ env('STRIPE_KEY') }}');
    var elements = stripe.elements();
    var card = elements.create('card');
    card.mount('#card-element');
</script>
