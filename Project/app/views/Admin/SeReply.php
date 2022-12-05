<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <title>Product Details</title>
    </head>
    <body>

    <?php include 'app\views\includes\adminHeader.php'; ?>
        <div class="container mt-5">
        <h2 class="h1-responsive font-weight-bold text-center">detail</h2>
            
            <form action='' method='post'>
                <div class="row mb-3">
                    <label for="product_name" class="col-sm-2 col-form-label">User Name</label>
                    <div class="col-sm-10">
                        <input type="text"  class="form-control" id="product_name" name="product_name" value="<?= $data['user']->username;?>" readonly>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="product_price" class="col-sm-2 col-form-label">Subject</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" min="0.01" step="0.01" id="price" name="price" value="<?= $data['request']->subject;?>" readonly>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="product_desc" class="col-sm-2 col-form-label">Content:</label>
                    <div class="col-sm-10">
                        <textarea type="text" id="description" name="description" rows="2" class="form-control md-textarea" readonly><?= $data['request']->content;?></textarea>
                    </div>
                </div>



                <br>
                <div class="row mb-3">
                    <label for="product_desc" class="col-sm-2 col-form-label">Reply:</label>
                    <div class="col-sm-10">
                        <textarea type="text" id="content" name="content" rows="6" class="form-control md-textarea" ></textarea>
                    </div>
                </div>


          
                <div class="text-center text-md-right">
                <button type="submit" class="btn btn-dark" name="action">Reply</button>
                    <a class="btn btn-primary" href='/Admin/serviceRequests/'>Back</a>
                </div>
            </form>

        
        
    </body>
</html>