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
                    <li><a href="./product.php">Product</a></li>
                    <li><a class="active" href="#forth">New Arrival</a></li>
                    <li><a href="./vendor.php">Vendor</a></li>
                    <li><a href="./cart.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
                    <form class="example" action="action_page.php">
                        <input type="text" placeholder="Search.." name="search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                    <li><a href="./Login.php">Login</a></li>
                </ul>
            </div>
        </nav>
        <div class="category">
            <h2>Category  >></h2>
            <div class="cato">
                <ul>
                    <li><a href="./men.php">Men</a></li>
                    <li><a href="./women.php">Women</a></li>
                    <li><a href="./kids.php">Kids</a></li>
                </ul>
            </div>
        </div>
    </header>
    <section id="forth">
        <div class="title">
            <h2>Check Out Our Latest Arrival</h2>
            <hr><br>
        </div>
        <div class="box">
            <div class="cad"><a href="./product11.html">
                <img src="../images/7.jpg" class="Product-image">
                <div class="card-body">
                <h5 class="product-title">Product Name: Jeans Outer</h5>
                <h5 class="price">Price: Rs2000\-</h5>
                <h5>Category: Female</h5>
                <button class="addCart">Add to cart</button>
                </div></a>
            </div>
            <div class="cad"><a href="./product12.html">
                <img src="../images/6.jpg" class="Product-image">
                <div class="card-body">
                <h5 class="product-title">Product Name: Double layer windcheater</h5>
                <h5 class="price">Price: Rs2500\-</h5>
                <h5>Category: Male </h5>
                <button class="addCart">Add to cart</button>
                </div></a>
            </div>
            <div class="cad"><a href="./product13.html">
                <img src="../images/4.jpg" class="Product-image">
                <div class="card-body">
                <h5 class="product-title">Product Name: Hemp Box pant</h5>
                <h5 class="price">Price: Rs1200\-</h5>
                <h5>Category: Male</h5>
                <button class="addCart">Add to cart</button>
                </div></a>
            </div>
            </div>
        </div><br><br>
        <button>View all</button>
    </section>
    <footer>
        <div class="contents">
            <div class="div1">
                <div class="logo1">
                    <h3>Yakthung<span>Ipa</span></h3>
                </div>
                <p><br>YakthungIpa provides best quality Limbu dresses in affordable price and it can be accessible on mobile and online for everyone</p><br>
                <p>©YakthungIpa PVT. LTD. 2023. All rights reserved</p>
            </div>
            <div class="div2">
                <h3><a href="./product.php">Company</a></h3><br>
                <p><a href="./about.php">About Us</a></p>
                <p><a href="./contact.php">Contact Us</a></p>
                <p><a href="./testimonial.php">Tetimonial</a></p>
            </div>
            <div class="div2">
                <h3>Area</h3><br>
                <p>Illam</p>
                <p>Damak</p>
                <p>Kathmandu</p>
                <p>Panchthar</p>
            </div>
            <div class="div2">
                <h3>Help</h3><br>
                <p>Help center</p>
                <p>Contact support</p>
                <p>Instructions</p>
                <p>How it works</p>
            </div>
        </div>
    </footer>
</body>
</html>
