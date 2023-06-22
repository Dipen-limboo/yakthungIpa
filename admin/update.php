<?php

    include "../Include/connection.php";

    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $file = $_POST['file'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $category = $_POST['category'];

        $sql = "UPDATE `product` SET `file`='$file',`name`='$name',`price`='$price',`category`='$category' WHERE `id`='$id'";

        $result = $connection->query($sql);

        if($result == TRUE)
        {
            echo "Product updated succesfully";
        }
        else
        {
            echo "Error";
        }
    }

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $sql = "SELECT * FROM `product` WHERE 'id'='$id'";

        $result = $connection->query($sql);

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $id = $row['id'];
                $file = $row['file'];
                $name = $row['name'];
                $price = $row['price'];
                $category = $row['category'];
            }
        ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <h3>Yakthung<span>Ipa</span></h3>
            </div>
            <div class="navigator">
                <ul>
                    <li><a href="../PHP/product.php">Logout</a></li>
                </ul>
            </div>
        </nav>
        <hr class="hr">
    </header>
    <section id="vendor">
        <div class="dashboard">
            <h4>Vendor Panel</h4>
            <hr>
            <div class="crud">
                <button><a href="./vendorpanel.php">Insert Product</a></button>
                <button><a href="./viewpanel.php">View Product</a></button>
            </div>
        </div>
        <div class="cont">
            <div class="div">
              <h2>Product Update Form</h2>
                <form action="" method="post">
                    <fieldset>
                    <legend>Information:</legend>
                    Image: <br>
                    <input type="file" name="file" value="<?php echo $file; ?>">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <br>
                    Name: <br>
                    <input type="text" name="name" value="<?php echo $name; ?>">
                    <br>
                    Price: <br>
                    <input type="text" name="price" value="<?php echo $price; ?>">
                    <br>
                    Category: <br>
                    <input type="radio" name="category" value="Men" <?php if($category == 'Men'){ echo "checked";} ?>>Men
                    <input type="radio" name="category" value="Women" <?php if($category == 'Women'){ echo "checked";} ?>>Women
                    <input type="radio" name="category" value="Kid" <?php if($category == 'Kid'){ echo "checked";} ?>>Kid
                    <br><br>
                    <input type="submit" value="update" name="update">
                    </fieldset>
                </form>
            </div>
        </div>
    </section>

        

    </body>
    </html>

    <?php
    }else{
        header('Location: viewpanel.php');
    }
}
?>