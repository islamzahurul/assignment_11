<form method="POST" action="{{ route('products.store') }}">
    @csrf
    <label for="name">Product Name:</label>
    <input type="text" name="name" id="name" required>
    <label for="quantity">Quantity:</label>
    <input type="number" name="quantity" id="quantity" required>
    <label for="price">Price:</label>
    <input type="number" name="price" id="price" step="0.01" required>
    <button type="submit">Add Product</button>
</form>
