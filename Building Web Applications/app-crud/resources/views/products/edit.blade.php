<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Edit a product</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form action="{{route('product.update', ['product' => $product])}}" method="post">
        @csrf
        @method('put')

    <div>
        <label for="">Name</label>
        <input type="text" name="name" placeholder="Name" value="{{$product->name}}"><br>

        <label for="">Qty</label>
        <input type="text" name="qty" placeholder="Qty" value="{{$product->qty}}"><br>

        <label for="">Price</label>
        <input type="text" name="price" placeholder="Price" value="{{$product->price}}"><br>

        <label for="">Description</label>
        <input type="text" name="description" placeholder="Description" value="{{$product->description}}"><br>

        <div>
            <input type="submit" value="Update Product">
        </div>
    </div>

    </form>
</body>

</html>