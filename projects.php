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
    <title>Projects Page</title>
        <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
            <nav>
                <a href="index.php">HOME</a>
                <a href="projects.php">Projects</a>
                <a href="skills.php">Skills</a>
                <a href="contact.php">Contacts</a>
            </nav>
        <h1>Chifundo Vee Chimzondo</h1>
    </header>
    <main>
        <h2>Projects</h2>
        <h3>These are some So-Called projects </h3>
        <?php
        include 'connect.php';
        $querry = "SELECT id,name,project_img,description FROM project";
        $result = mysqli_query($connect, $querry);
        if (!$result){
            die("ERROR :".mysqli_error($connect));
        }
        ?>
        <?php while($row = mysqli_fetch_assoc($result))
        { ?>
        <div class="project-item">
            <h3>
                <?php echo $row['name'];?></h3>
                <img src= "data:image/jpeg;base64,<?php echo base64_encode($row['project_img']);?>" alt="project 1">
               <p><?php echo $row['description'];?></P>
       <?php }?>
        <button id="backToTopBtn" onclick="backToTop()">Back to Top</button>
</body>
    <footer>
        <span>chimzondo official website | <span class="far fa-copyright"></span> 2023 All rights reserved.</span>
    </footer>
</body>
</html>
