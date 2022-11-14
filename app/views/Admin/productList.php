<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Dashboard</title>
        <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"/>
        <link href="../styles/bootstrap.min.css" rel="stylesheet" />
    </head>

    <body>
        <div class="main">
            <h1>Message History</h1>
            
            <?php
                foreach ($data as $item) {
                    echo "<tr>
                        <td type=name>$item->product_id</td>
                        <td type=name>$item->product_name</td>
                        <td type=name>$item->product_price</td>
                        <td type=action>
                        <a href='/Product/edit/$item->animal_id'>edit</a> | 
                        <a href='/Animal/details/$item->animal_id'>details</a> |
                        <a href='/Animal/delete/$item->animal_id'>delete</a>
                        </td>
                        </tr>";
                }
            ?>

        </div>
        
    </body>

</html>