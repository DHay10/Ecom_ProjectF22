<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Service Request</title>
</head>
<body>
<?php include 'app\views\includes\adminHeader.php'; ?>
    

<div class="container mt-5">
    <div class="table-responsive">
        <h5>Customer Service Requests</h5>

        <table class="table table-striped">
            <thead>
                <th>Request Id</th>
                <th>User Id</th>
                <th>Subject</th>
                <th>Content </th>
                <th>Action<th>
            </thead>
            <tbody>
                <?php
                    foreach ($data as $item)
                        echo"
                        <tr>
                            <td>$item->request_id</td>
                            <td>$item->user_id</td>
                            <td>$item->subject</td>
                            <td>$item->content</td>
                            <td>
                                <a href=''>Details</span></a>
                                <a href='/Admin/deleteSE/$item->request_id'>Delete</a>
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