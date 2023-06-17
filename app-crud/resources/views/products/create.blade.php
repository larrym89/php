<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Create a product</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form action="{{route('product.store')}}" method="post">
        @csrf
        @method('post')

    <div>
        <label for="">Name</label>
        <input type="text" name="name" placeholder="Name"><br>

        <label for="">Qty</label>
        <input type="text" name="qty" placeholder="Qty"><br>

        <label for="">Price</label>
        <input type="text" name="price" placeholder="Price"><br>

        <label for="">Description</label>
        <input type="text" name="description" placeholder="Description"><br>

        <div>
            <input type="submit" value="Save a New Product">
        </div>
    </div>

    </form>
</body>

</html>