<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/styles.css">
    <title>Verwaltung</title>
</head>
<body>
<div class="container1">
    <nav>
        <div class="daireclass"><h5>GS</h5></div>
        <?php
        include 'includes/nav.php';
        ?>
        <a href="index.php">Homepage</a>
       
        <a href="?page=product">Products</a>
        <a href="?page=warehouse">Warehouses</a>
        <a href="?page=manufacturer">Manufacturers</a>
     

        
    </nav>
    <div class="container2">
        <header>
            <?php
            include 'includes/header.php';
            ?>
        </header>
        <div class="content">
            <?php include 'includes/content.php'?>
                
        </div>
        <footer>
            <?php
            include 'includes/footer.php';
            ?>
        </footer>
    </div>
</div>
</body>
</html>
