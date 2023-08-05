<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Add New Product</h1>
    <div>
        <form action="/product/insert" method="post">
            @csrf
            @method('post')
            <div><label for="name">Product Name:</label>
                <input type="text" name="name" id="txtname" placeholder="Name" required />
            </div>
            <div><label for="description">Description:</label>
                <input type="text" name="description" id="txtdesc" placeholder="Description" />
            </div>
            <div><label for="price">Price:</label>
                <input type="text" name="price" id="txtprice" placeholder="Price" required />
            </div>
            <div><label for="qty">Quantity:</label>
                <input type="number" name="qty" id="txtqty" placeholder="Qty" />
            </div>
            <div>
                <input type="submit" name="btnasve" id="btnsave" value="Save" />
            </div>
        </form>

    </div>
</body>
</html>