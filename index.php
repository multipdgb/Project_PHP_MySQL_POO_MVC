<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>T-shirt store</title>

    <script src="https://kit.fontawesome.com/b99002054e.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css\index.css">
</head>
<body>
    <div class="container">

        <!-- HEADER -->

        <header class="header">
            <div class="logoType">
                <img src="https://www.crearlogogratisonline.com/images/crearlogogratis_1024x1024_01.png" alt="page logoType" class="logo_img">
                <a href="index.php" class="link index_link"></a>
            </div>
        </header>
        
        <!-- NAV -->
        
        <nav class="nav">
            <ul class="__list inline__list">
                <li class="__item"><a href="index.php" class="__link item__link">1</a></li>
                <li class="__item"><a href="index.php" class="__link item__link">2</a></li>
                <li class="__item"><a href="index.php" class="__link item__link">3</a></li>
            </ul>
        </nav>
    
    
        <!-- ASIDE -->
        
        <aside class="aside">
            <div class="aside__block">
                <form action="#" method="post" class="__form">
                    <label for="email">Email: </label>
                    <input type="email" name="email" class="__field">
    
                    <label for="password">Password: </label>
                    <input type="password" name="password" class="__field">
                </form>
    
                <a href="#" class="__link my_orders">My orders</a>
                <a href="#" class="__link manage_orders">Manage orders</a>
                <a href="#" class="__link manage_categories">Manage Categories</a>
            </div>
        </aside>
        
        <!-- MAIN -->
        
        <main class="main">
            <article class="__product">
                <p class="product_image"><i class="fas fa-tshirt"></i></p>
                <h4 class="product_title">Black t-Shirt</h4>
                <h5 class="product_price">3€</h5>
                <a href="" class="__btn btn_buy"></a>
            </article>
        </main>
        
        <!-- FOOTER -->
    
        <footer class="footer">
            <p>Developed by Luciano Della Savia</p>
            <p>&copy <?= Date('Y') ?></p>
        </footer>
</body>
</html>