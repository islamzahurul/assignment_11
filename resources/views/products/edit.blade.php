

<form method="POST" action="{{ route('syndicate.updatePrice') }}">
    @csrf
    <label for="product_id">Product:</label>
    <select name="product_id" id="product_id" required>
        @foreach ($products as $product)
            <option value="{{ $product->id }}">{{ $product->name }}</option>
        @endforeach
    </select>
    <label for="price">Price:</label>
    <input type="number" name="price" id="price" step="0.01" required>
    <button type="submit">Update Price</button>
</form>
