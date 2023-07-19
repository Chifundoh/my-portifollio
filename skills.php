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
    <title>Skills Page</title>
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
        <section class="skills" id="skills">
            <div class="max-width">
                <h2 class="title">My skills</h2>
                <div class="skills-content">
                    <div class="column left">
                        <div class="text"><P>My creative skills & experiences.</P></div>
                    <p>I'm good at this kinda  stuff </p>
                    </div>
                </div>
            </div>
        </section>
        <h2>Skills</h2>
        <div class="skill-item">
            <div class="column right">
                <div class="bars">
                    <div class="info">
                        <span><p>HTML</p>
                            <p>70%</p></span>
                        
                    </div>
                    <div class="line html"></div>
                </div>
            <div class="skill-level">
                <div class="skill-level-bar" style="width: 70%;"></div>
            </div>
        <div class="skill-item">
            <div class="column right">
                <div class="bars">
                    <div class="info">
                        <span><p>CSS</p></span>
                        <span><p>60%</p></span>
                    </div>
                    <div class="line html"></div>
                </div>
            <div class="skill-level">
                <div class="skill-level-bar" style="width: 60%;"></div>
            </div>
            <div class="skill-item">
                <div class="column right">
                    <div class="bars">
                        <div class="info">
                            <span><p>MySQL</p></span>
                            <span><p>50%</p></span>
                        </div>
                        <div class="line html"></div>
                    </div>
                <div class="skill-level">
                    <div class="skill-level-bar" style="width: 50%;"></div>
                </div>
                <div class="skill-item">
                    <div class="column right">
                        <div class="bars">
                            <div class="info">
                                <span><p>MUSIC</p></span>
                                <span><p>90%</p></span>
                            </div>
                            <div class="line html"></div>
                        </div>
                    <div class="skill-level">
                        <div class="skill-level-bar" style="width: 90%;"></div>
                    </div>
                <div class="skill-item">
                    <div class="column right">
                        <div class="bars">
                            <div class="info">
                                <span><p>JAVA PROGRAMMING</p></span>
                                <span><p>90%</p></span>
                            </div>
                            <div class="line html"></div>
                        </div>
                    <div class="skill-level">
                        <div class="skill-level-bar" style="width: 90%;"></div>
                    </div>
         <button id="backToTopBtn" onclick="backToTop()">Back to Top</button>
    </main>
    <footer>
        <span>chimzondo official website | <span class="far fa-copyright"></span> 2023 All rights reserved.</span>
    </footer>
</body>
</html>
