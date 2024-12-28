<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1st Degree White Belt</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 1rem;
            text-align: center;
            position: relative;
        }
        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: inline-block;
        }
        nav ul li {
            display: inline;
            margin: 0 10px;
        }
        nav ul li a {
            color: #fff;
            text-decoration: none;
        }
        main {
            padding: 2rem;
            background-color: #fff;
            margin: 2rem auto;
            width: 80%;
            max-width: 600px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1rem;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .language-switch {
            position: absolute;
            top: 1rem;
            right: 1rem;
        }
        .collapsible {
            background-color: #333;
            color: white;
            cursor: pointer;
            padding: 10px;
            width: 100%;
            border: 1px solid black;
            text-align: left;
            outline: none;
            font-size: 15px;
            margin-top: 1rem;
        }
        .content {
            padding: 0 18px;
            display: none;
            overflow: hidden;
            background-color: #f4f4f4;
            margin-bottom: 10px;
        }
        .degree {
            padding-left: 1rem;
        }
        .degree a {
            display: block;
            padding: 8px 0;
            color: #333;
            text-decoration: none;
        }
        /* Modal Styles */
        #videoModal {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            z-index: 1000;
            width: 80%;
            max-width: 600px;
            padding: 1rem;
            border-radius: 8px;
        }
        #videoModal iframe {
            width: 100%;
            height: 315px;
        }
        #overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }
        #closeModal {
            display: block;
            margin: 1rem auto;
            padding: 0.5rem 1rem;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
    <script>
        // Function to switch languages and save the preference
        function switchLanguage(lang) {
            const elements = document.querySelectorAll("[data-lang-en]");
            elements.forEach(element => {
                element.innerHTML = element.getAttribute(`data-lang-${lang}`);
            });
            // Save the selected language in localStorage
            localStorage.setItem('selectedLanguage', lang);
        }

        // Apply the saved language on page load
        document.addEventListener("DOMContentLoaded", function() {
            const savedLanguage = localStorage.getItem('selectedLanguage') || 'en';
            document.querySelector(".language-switch select").value = savedLanguage;
            switchLanguage(savedLanguage);
        });

        // JavaScript to handle the collapsible sections
        document.addEventListener("DOMContentLoaded", function() {
            const collapsibles = document.querySelectorAll(".collapsible");
            collapsibles.forEach(collapsible => {
                collapsible.addEventListener("click", function() {
                    this.classList.toggle("active");
                    const content = this.nextElementSibling;
                    if (content.style.display === "block") {
                        content.style.display = "none";
                    } else {
                        content.style.display = "block";
                    }
                });
            });
        });

        // Show video modal
        function showVideo(videoUrl) {
            document.getElementById('youtubeVideo').src = videoUrl;
            document.getElementById('videoModal').style.display = 'block';
            document.getElementById('overlay').style.display = 'block';
        }

        // Close video modal
        function closeVideo() {
            document.getElementById('youtubeVideo').src = ""; // Stop the video
            document.getElementById('videoModal').style.display = 'none';
            document.getElementById('overlay').style.display = 'none';
        }
    </script>
</head>
<body>
    <header>
        <h1>Antisocial Brazilian JiuJitsu</h1>
        <nav>
            <ul>
                <li><a href="index.php" data-lang-en="Home" data-lang-pt="Início">Home</a></li>
                <li><a href="student-handbook.php" data-lang-en="Student Handbook" data-lang-pt="Apostila do Aluno">Student Handbook</a></li>
                <li><a href="#" data-lang-en="Techniques" data-lang-pt="Técnicas">Techniques</a></li>
                <li><a href="#" data-lang-en="About" data-lang-pt="Sobre">About</a></li>
                <li><a href="#" data-lang-en="Contact" data-lang-pt="Contato">Contact</a></li>
            </ul>
        </nav>
        <div class="language-switch">
            <select onchange="switchLanguage(this.value)">
                <option value="en">English</option>
                <option value="pt">Português</option>
            </select>
        </div>
    </header>
    <main>
        <h2 data-lang-en="1st Degree White Belt" data-lang-pt="I Grau Da Faixa Branca">1st Degree White Belt</h2>

        <button class="collapsible" data-lang-en="Passing guard" data-lang-pt="Passagem de guarda">Passing guard</button>
        <div class="content">
            <div class="degree">
                <a href="#" data-lang-en="Knee in Tailbone" data-lang-pt="Abertura com joelho no cóccix">Knee in Tailbone</a>
            </div>
        </div>

        <button class="collapsible" data-lang-en="Guard" data-lang-pt="Guarda">Guard</button>
        <div class="content">
            <div class="degree">
                <a href="#" onclick="showVideo('https://www.youtube.com/embed/wKyvneKoBzo')" data-lang-en="Arm Lock" data-lang-pt="Chave de braço Arm Lock">Arm Lock</a>
                <a href="#" data-lang-en="Americana" data-lang-pt="Americana">Americana</a>
                <a href="#" data-lang-en="Cross Collar Choke" data-lang-pt="Estrangulamento cruzado">Cross Collar Choke</a>
            </div>
        </div>

        <!-- Add all other collapsible sections here -->
    </main>
<!-- Video Modal -->
<div id="overlay" onclick="closeVideo()"></div>
<div id="videoModal">
    <iframe 
        id="youtubeVideo" 
        src="" 
        frameborder="0" 
        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
        allowfullscreen
        style="width: 100%; height: 315px;"></iframe>
    <button id="closeModal" onclick="closeVideo()">Close</button>
</div>

    <footer>
        <p>&copy; Antisocial Brazilian JiuJitsu</p>
    </footer>
</body>
</html>