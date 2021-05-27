<!DOCTYPE html>
<html>

<head>

  <head>
    <?php Arifrh\Themes\Themes::renderCSS('default'); ?>
  </head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="/https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

    <link rel="icon" href="app/Modules/Home/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../Assets/css/home.css">
    <title>WarriorCMS</title>

</head>


<body>

    <main class="main-container">
        <header class="navbar">
            <section class="nav-items">
                <ul class="nav-list">
                    <li>Home</li>
                    <li>Shop</li>
                    <li>Top PVP</li>
                    <li>Armory</li>
                </ul>
            </section>
        </header>

        <div class="body-container">
            Hot Duelist
            <button type="button" class="btn btn-primary">Primary</button>
            <?= getRealms() ?>

        </div>

        <footer class="footer-page">
            <p>Copyright: WarriorCMS 2021 | Made by: Christian</p>
        </footer>

    </main>
</body>

</html>
