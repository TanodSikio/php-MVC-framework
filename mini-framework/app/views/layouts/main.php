<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini MVC School</title>
    <style>
        body{font-family: Arial; margin: 0;}
        header, footer{background: #2E7D32; color: white; padding: 16px;}
        main{padding: 24px;}
        a{color: white; margin-right: 12px;}
    </style>
</head>
<body>
    <header>
        <h2>Mini MVC School</h2>
        <nav>
            <a href="?url=students">Students</a>
            <a href="?url=about">About</a>
        </nav>
    </header>

    <main>
        <?=$content?>
    </main>

    <footer>Mini MVC Framework</footer>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="js/students.js"></script>
</body>
</html>