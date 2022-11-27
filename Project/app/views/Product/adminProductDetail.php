<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <title>Edit Product</title>
    </head>
    <body>

        <dl>
            <dt>
                product name:
            </dt>
            <dd>
                <?= $data->product_name ?>
            </dd>
            <dt>
                price:
            </dt>
            <dd>
                <?= $data->price ?>
            </dd>
            <dt>
                description:
            </dt>
            <dd>
                <?= $data->description ?>
            </dd>
            <dt>
                category:
            </dt>
            <dd>
                <?= $data->category_id ?>
            </dd>
            <dt>
                image:
            </dt>
            <dd>
		        <img src="/images/blank.jpg" style="max-width:200px;max-height:200px" id="product_img_preview" />
	        </dd>   
        </dl>

        <!-- image does not load properly -->
        <script>
            file = "" + "<?= $data->product_image ?>"
            if (file != "") {
                document.getElementById("product_img_preview").src = "/images/" + file;
            }
        </script>
        <a href="/Admin/modify/<?= $data->product_id ?>">Edit</a>
        <a href='/Admin/productList/'>Back</a>
        
    </body>
</html>