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
        <div class="main">
            <h1>Message History</h1>
            
            <?php
                foreach ($data as $item) {
                    echo "<tr>
                        <td type=name>$item->product_id</td>
                        <td type=name>$item->product_name</td>
                        <td type=name>$item->price</td>
                        <td type=action>
                        <a href='/Product/details/$item->product_id'>details</a> |
                        <a href='/Animal/delete/$item->product_id'>delete</a>
                        </td><br>
                        </tr>";
                }
            ?>

        </div>
        
    </body>

</html>