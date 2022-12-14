<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <title>Editing Review</title>
    </head>

    <body>
        <?php include 'app\views\includes\userHeader.php'; ?>
        <?php include 'app\views\includes\error.php'; ?>

        <div class='container mb-4'>
            <h2 class="h1-responsive font-weight-bold text-center my-4">Edit Review</h2>

            <form action="" method="post">
                <div class="row mb-3">
                    <div class='col'>
                        <div class="form-floating">
                            <input type="number" class="form-control" id='rating' name="rating" min="0" max="5" step="0.5" value=<?= $data->rating ?> required>
                            <label for="rating">Rating</label>
                            <div id="ratingHelp" class="form-text">Rate Honestly from 0 to 5</div>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave your Comment Here" id='comment' name='comment' style="height: 20em"><?=$data->comment?></textarea>
                            <label for='comment'>Comment</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col d-grid">
                        <a class="btn btn-dark" href="/Product/userProductDetails/<?=$data->product_id?>" role="button">Back</a>
                    </div>
                    <div class="col d-grid">
                        <button name="action" type="submit" class="btn btn-dark">Submit</button>
                    </div>
                </div>

            </form>
        </div>
        
    </body>
</html>