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
            
            <form action='' method='post' enctype='multipart/form-data'>
                <div class="row mb-3">
                    <label for=""product_name" class="col-sm-2 col-form-label">Product Name</label>
                    <div class="col-sm-10">
                        <input type="text"  class="form-control" id="product_name" name="product_name" value="<?=$data['product']->product_name?>" >
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="product_price" class="col-sm-2 col-form-label">Price</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" min="0.01" step="0.01" id="price" name="price" value="<?=$data['product']->price?>" >
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="product_cate" class="col-sm-2 col-form-label">Category</label>
                    <div class="col-sm-10">

                        <!-- <input id="category_id" type="number" class="form-control" min="0.01" step="0.01" name="category_id" value="<?=$data['product']->category_id?>" readonly disabled> -->
                        <select id="category_id" class="form-control" name="category_id" required>
                            <!-- Find which category to add -->

                            

                            <?php foreach ($data as $item) { 
                                $category = new \app\models\Category();
                                $category = $category->getCategories();
                            ?>
                            <option value="<?= $category->category_id?>"><?= var_dump($category);?></option>
                            <?php } ?>


                        </select>


                    </div>
                </div>

                <div class="row mb-3">
                    <label for="product_desc" class="col-sm-2 col-form-label">Description:</label>
                    <div class="col-sm-10">
                        <textarea type="text" id="description" name="description" rows="2" class="form-control md-textarea" ><?=$data['product']->description?></textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-2 col-form-label">
                    
                    <label class="col-sm-2 col-form-label" for="gridCheck">
                        is Featured:
                    </label>
                    <div class="col-sm-10">
                        <input class="form-check-input" name="is_featured" type="checkbox" id="is_featured">
                    </div>
                        

                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Product Image:</label>
                    <div class="col-sm-10">
                        <input type="file" name="product_image" id="product_image"/>
                        <img id='product_img_preview' src='' style="max-width:200px;max-height:200px" />
                    </div>
                </div>
            
                <div class="text-center text-md-right">
                    <a class="btn btn-primary" href="/Admin/modify/<?= $data['product']->product_id ?>">Edit</a>
                    <a class="btn btn-primary" href='/Admin/productList/'>Back</a>
                </div>
            </form>

            <script>
                product_image.onchange = evt => {
                const [file] = product_image.files
                if (file) {
                    product_img_preview.src = URL.createObjectURL(file)
                    }
                }   
            </script>
        </div>


        <!-- image does not load properly -->
        <script>
            file = "" + "<?= $data['product']->product_image ?>"
            if (file != "") {
                document.getElementById("product_img_preview").src = "/images/" + file;
            }
        </script>
        
        
    </body>
</html>