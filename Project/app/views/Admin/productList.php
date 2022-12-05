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
    <?php include 'app\views\includes\adminHeader.php'; ?>
        <div class="main">

        <div class="container mt-5">
        <h1>Product List</h1>
            <div class="table-responsive">
                <h5></h5>

                <table class="table table-striped">
                    <thead>
                        <th>Product Id</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Action<th>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($data as $item) 
                                echo"
                                <tr>
                                    <td>$item->product_id</td>
                                    <td>$item->product_name</td>
                                    <td>$item->price</td>
                                    <td>
                                        <a href='/Product/details/$item->product_id'>Details</a> -
                                        <a href='/Admin/delete/$item->product_id'>Delete</a>
                                    </td>
                                </tr>
                                
                                ";

                                

                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        
    </body>

</html>