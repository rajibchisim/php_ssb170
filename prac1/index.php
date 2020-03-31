<?php 
// we can use variables, functions from another php files. this is very useful for large project
include('data/data.php');

?>

<!DOCTYPE html>
<html>
<head>
    <title>Template-My food</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Karma:400,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
    
<body>
    <!-- study header.php -->
    <!-- All html tags will be added here with include function -->
    <!-- Use case: generaly top menu stays same. so we can reuse same header/top menu  -->
    <?php include('header.php'); ?>
    <!-- end -->

    <div class="container">
        <section class="food-items" style="padding-top: 100px">
        
        <!-- foreach loop -->
        <?php foreach ($menues as $menu): ?>
            <div class="food-item">
                <img src="<?php echo $menu['image_url']; ?>">
                <div class="description">
                    <h2><?php echo $menu['title']; ?></h2>
                    <p><?php echo $menu['details']; ?></p>
                </div>
            </div>
        <?php endforeach;?>
        <!-- foreach End -->
        </section>

        <hr>
        <section id="about-me">
            <h1>About Me, The Food Man</h1>
            <img src="./images/chef.jpg">
            <h1>I am Who I Am!</h1>
            <h3>With Passion For Real, Good Food</h3>
            <p>Just me, myself and I, exploring the universe of unknownment. I have a heart of love and an interest of lorem ipsum and mauris neque quam blog. I want to share my world with you. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
        </section>
        <hr>

        <footer>
            <div class="footer-item">
                <h2>FOOTER</h2>
                <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
            </div>
            <div class="footer-item">
                <h2>BLOG POSTS</h2>
                <?php foreach($blogs as $blog): ?>
                <div class="post-link">
                    <img src="<?php echo $blog['thumb_url']; ?>">
                    <div>
                        <h3><?php echo $blog['title']; ?></h3>
                        <p><?php echo $blog['details']; ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>            
            <div class="footer-item">
                <h2>POPULAR TAGS</h2>
                <div class="tags">
                    <?php for($i = 0; $i < count($tags); $i++): ?>
                    <span><?php echo $tags[$i] ?></span>
                    <?php endfor; ?>
                </div>
            </div>
        </footer>
    </div>
</body>    
</html>