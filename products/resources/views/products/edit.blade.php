<h1> Edit New products </h1>

<form action="{{route('products.update',$products->id)}}" method="POST">
    @method('PUT')
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="{{$products->name}}"><br><br>

    <label for="price">Price:</label>
    <input type="number" id="price" name="price" value="{{$products->price}}"><br><br>

    <label for="quantity">Quantity:</label>
    <input type="number" id="quantity" name="quantity" value="{{$products->quantity}}"><br><br>

    <button type="submit">Update</button>

</form>