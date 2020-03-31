<?php 
// we can use variables, functions from another php files. this is very useful for large project
include('data/data.php');

// For get request this part will not run. 
// See contact.php : every name from form will be available here when post request sent
if( isset($_POST['submit']) ) {
    // extrat values from post request
    $firstName = $_POST['first-name'];
    $lastName = $_POST['last-name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // make a line
    $contactData = $firstName.'|'.$lastName.'|'.$email.'|'.$message;

    // for saving data call this function
    saveContact($contactData);
}

// This function opens add a new line
function saveContact($data) {
    $contactFile = fopen('data/contact.txt', 'a');
    fwrite($contactFile, $data.PHP_EOL);
    fclose($contactFile);
}

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
        <section class="contact-container" style="padding-top: 100px">


        <!-- Checking the request is get/post -->
        <!-- if get show form -->
            <?php if( !isset($_POST['submit'])): ?>
            <form action="contact.php" method="post">
                <div>
                    <label for="first-name">First Name</label>
                    <input type="text" id="first-name" name="first-name" placeholder="First name">
                </div>
                <div>
                    <label for="last-name">Last Name</label>
                    <input type="text" id="last-name" name="last-name" placeholder="Last name">
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Email">
                </div>
                <div>
                    <label for="message">Message</label>
                    <textarea id="message" name="message" placeholder="Write your comments" rows="6"></textarea>
                </div>
                <div>
                    <button type="submit" name="submit">Send</button>
                    <button type="reset">Reset</button>
                </div>
            </form>
            <!-- if post show this block -->
            <!-- user sent post request by clicking send button -->
            <!-- post data saved by php. see top php block -->
            <?php else: ?>
                <h1>Thank you for contact us.</h1>
            <?php endif; ?>
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