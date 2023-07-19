<!DOCTYPE html>
<html>
<head>
<script>
    window.onscroll = function() {
        scrollFunction();
    };

    function scrollFunction() {
        var backToTopBtn = document.getElementById("backToTopBtn");
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            backToTopBtn.style.display = "block";
        } else {
            backToTopBtn.style.display = "none";
        }
    }

    function backToTop() {
        document.body.scrollTop = 0; 
        document.documentElement.scrollTop = 0; 
    }
</script>
<header>
            <nav>
                 <a href="index.php">HOME</a>
                <a href="projects.php">Projects</a>
                <a href="skills.php">Skills</a>
                <a href="contact.php">Contacts</a>
            </nav>
        <h1>Chifundo Vee Chimzondo</h1>
    </header>

    <title>Contact Page</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<div class="max-width">
            <h2>Contact me</h2>
                    <div class="text"><h3>Get in Touch<h3></div>
                    <p>👋 Hi, I’m Chifundo <br> 👀 I’m little interested in coding<br> 🌱 I’m currently learning HTML, CSS, JAVA <br> 💞️ I’m looking to collaborate on Website designing and devlopement
                    <br><br><br>
                    Name<br>
                    Chifundo Vee Chimzondo<br>
                    Address<br>
                    Area 1B, Mzuzu, Malawi<br>
                    Email<br>
                    fchimzondo@gmail.com<br>
                    <p>Follow Me : 
            <a class="links" href="https://www.google.fchimzondo@gmail.com">EMAIL</a>
            <a class="links" href="https://www.instagram.com/black_villainie/">INSTAGRAM</a>
        </p>
                </p><br><br><br><br>
    <?php
   
    $name = $email = $message = '';
    $nameErr = $emailErr = $messageErr = '';
   
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (empty($_POST['name'])) {
            $nameErr = '<P>Name is required</P>';
        } else {
            $name = test_input($_POST['name']);
        }
      
        if (empty($_POST['email'])) {
            $emailErr = '<P>Email is required</P>';
        } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $emailErr = '<P>Invalid email format</P>';
        } else {
            $email = test_input($_POST['email']);
        }
        if (empty($_POST['message'])) {
            $messageErr = '<P>Message is required</P>';
        } else {
            $message = test_input($_POST['message']);
        }
       
        if (empty($nameErr) && empty($emailErr) && empty($messageErr)) {
        
            echo '<p>Thank you for contacting us!</p>';
            echo '<p>Name: ' . $name . '</p>';
            echo '<p>Email: ' . $email . '</p>';
            echo '<p>Message: ' . $message . '</p>';
        }
    }
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    <h2>message me </h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <label for="name"><h3>Name:</h3></label>
        <input type="text" name="name" id="name" value="<?php echo $name; ?>">
        <span class="error"><?php echo $nameErr; ?></span><br><br>

        <label for="email"><h3>Email:</h3></label>
        <input type="email" name="email" id="email" value="<?php echo $email; ?>">
        <span class="error"><?php echo $emailErr; ?></span><br><br>

        <label for="message"><h3>Message:</h3></label>
        <textarea name="message" id="message" rows="5"><?php echo $message; ?></textarea>
        <span class="error"><?php echo $messageErr; ?></span><br><br>

        <input type="submit" value="Submit">
    </form>
    <button id="backToTopBtn" onclick="backToTop()">Back to Top</button>
    <footer>
        <span>chimzondo official website | <span class="far fa-copyright"></span> 2023 All rights reserved.</span>
    </footer>
</body>
</html>
