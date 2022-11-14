<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Dashboard</title>
        <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"/>
        <link href="../styles/bootstrap.min.css" rel="stylesheet" />
    </head>

    <body>
        <h1>Add a Product to the Catalog</h1>
        <div>
            <form action='' method='post'>
                <label for="product_name">Name:</label>
                <input type="text" id="product_name" name="product_name" placeholder="Enter the Product's Name" required><br>

                <label for="product_price">Price:</label>
                <input type="number" min="0.01" step="0.01" id="product_price" name="product_price" placeholder="Enter the Product's Price" required><br>
                
                <label for="product_desc">Description:</label>
                <input type="textarea" id="product_desc" name="product_desc" placeholder="Enter the Product's Description" required><br>

                <label for="product_desc">Category:</label>
                <input type="textarea" id="product_desc" name="product_desc" placeholder="Enter the Product's Description" required><br>

                <input type="submit" name="action" value="Send"/>
            </form>
        </div>
    </body>

</html>