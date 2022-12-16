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
                <h2 class="h1-responsive font-weight-bold text-center my-4">Product List</h2>

                <table class="table table-light table-bordered table-striped table-hover align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Request Id</th>
                            <th scope="col">User Id</th>
                            <th scope="col">Subject</th>
                            <th scope="col">Content </th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>

                    <tbody class="table-group-divider">
                        <?php
                            foreach ($data as $item)
                                echo"
                                <tr>
                                    <th scope='row'>$item->request_id</th>
                                    <td>$item->user_id</td>
                                    <td>$item->subject</td>
                                    <td>$item->content</td>
                                    <td>
                                        <a class='btn btn-dark' href='/Admin/SeDetail/$item->request_id'>Details</span></a>
                                        <a class='btn btn-dark' href='/Admin/SeReply/$item->request_id'>Reply</a>
                                        <a class='btn btn-danger' href='/Admin/deleteSE/$item->request_id'>Delete</a>
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
