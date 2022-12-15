<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <title>Order List</title>
    </head>
    <body>
        <?php include 'app\views\includes\adminHeader.php'; ?>
        <?php include 'app\views\includes\error.php'; ?>
        
        <div class="container mt-5">
            <div class="table-responsive">
                <h4>Order List</h4>

                <table class="table table-striped-columns table-hover">
                    <thead>
                        <th>Order ID</th>
                        <th>User ID</th>
                        <th>Address</th>
                        <th>Total</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </thead>

                    <tbody>
                        <?php
                            foreach ($data as $item)
                                echo"
                                <tr>
                                    <td>$item->order_id</td>
                                    <td>$item->user_id</td>
                                    <td>$item->address</td>
                                    <td>$item->total</td>
                                    <td>$item->date</td>
                                    <td>$item->status</td>";
                                if($item->order_id != 'Completed') {
                                    echo "<td><a class='btn btn-dark' href='/Admin/updateOrderStatus/$item->order_id'>Update</a></td>";
                                }
                                echo "</tr>";
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>