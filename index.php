<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antisocial Brazilian JiuJitsu</title>
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
    </style>
    <script>
        // Function to switch languages
        function switchLanguage(lang) {
            const elements = document.querySelectorAll("[data-lang-en]");
            elements.forEach(element => {
                element.innerHTML = element.getAttribute(`data-lang-${lang}`);
            });
            // Save the selected language in local storage
            localStorage.setItem('selectedLanguage', lang);
        }

        // Apply the saved language on page load
        window.onload = function() {
            const savedLanguage = localStorage.getItem('selectedLanguage') || 'en';
            document.querySelector(".language-switch select").value = savedLanguage;
            switchLanguage(savedLanguage);
        }
    </script>
</head>
<body>
    <header>
        <h1>Antisocial Brazilian JiuJitsu</h1>
        <nav>
            <ul>
                <li><a href="#" data-lang-en="Home" data-lang-pt="Início">Home</a></li>
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
        <h2 data-lang-en="Home Page" data-lang-pt="Página Inicial">Home Page</h2>
        <p data-lang-en="This is a simple website created using HTML." data-lang-pt="Este é um site simples criado usando HTML.">This is a simple website created using HTML.</p>
    </main>
    <footer>
        <p>&copy; Antisocial Brazilian JiuJitsu</p>
    </footer>
</body>
</html>
