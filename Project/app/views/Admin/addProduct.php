<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Dashboard</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
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

                <label for="product_cate">Category:</label>
                <select id="product_cate" name="product_cate" required>
                    <!-- Find which category to add -->
                    <option value="Test1">test1</option>
                    <option value="Test2">test2</option>
                    <option value="Test3">test3</option>
                </select><br>

                <input type="submit" name="action" value="Add"/>
            </form>
        </div>
    </body>

</html>