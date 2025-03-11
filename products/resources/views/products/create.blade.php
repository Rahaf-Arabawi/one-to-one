<h1> Add New products </h1>

<form action="{{route('products.store')}}" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" ><br><br>

    <label for="price">Price:</label>
    <input type="number" id="price" name="price"><br><br>

    <label for="quantity">Quantity:</label>
    <input type="number" id="quantity" name="quantity"><br><br>

    <button type="submit">Submit</button>

</form>