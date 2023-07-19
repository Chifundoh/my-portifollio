<!DOCTYPE html>
<html>
<head>
</style>
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
    <title>Chifundo Vincenzo Chimzondo Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
            <nav>
                <a href="projects.php">Projects</a>
                <a href="skills.php">Skills</a>
                <a href="contact.php">Contacts</a>
            </nav>
        <h1>Chifundo Vee Chimzondo</h1>
    </header>
    <main>
        <h2>About Me</h2>
        <div class="column right">
            <div class="text"><h2>I'm Chifundo </h2>
            <p>
                I'm Chifundo Vincenzo Chimzondo an Information & Communication Technologies (ICT) student at Mzuzu University, Malawi. 
                <br>still learning, and still making mistakes
                <br> I love Music and Comics 
                <br> J.Cole is my favourite Rapper,, i love his music and lifestyle  
            </p>
            <a href="C:\xampp\htdocs\portifolio/cv.pdf">Download Document</a>
            <a href="contact.php">Hire me</a>
        </div>
      <br>
        <h2>Skills</h2>
        <p>Check out my skills <a href="skills.php">here</a>.</p>
        </ul>
        <div class="card">
            <div class="box">
                <i class="fas fa-code"></i>
                <div class="text"><h3>Created Projects</3></div>
                <p>I had created some min Projects in HTML, CSS,JAVA for samples feel free to checkout my github<br>
                    <a href="https://github.com/Chifundoh">CLICK HERE</a>
                    <p>as for now i dont have any project about music to display here <br>
                        so lets just take a look at these photos and pretend they are my project<br>
                        as we are waiting for the real projects    <a href="projects.php">here</a>.</p>
                </p>
            </div>
        </div>
        <button id="backToTopBtn" onclick="backToTop()">Back to Top</button>
</body>
<footer>
        <span>chimzondo official website | <span class="far fa-copyright"></span> 2023 All rights reserved.</span>
    </footer>
</body>
</html>
