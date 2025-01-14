<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="DESCRIPTION">
    <meta name="keywords" content="KEYWORDS">
    <meta name="author" content="AUTHOR">
    <!-- <link rel="icon" type="image/x-icon" href='images/favicon_32x32.png'> -->
    <link rel="stylesheet" type="text/css" href="liaisons/css/styles.css">
    <!-- <script defer src="scripts.js"></script> -->
    <title>Timcsf</title>
</head>

<body>
    <header>
        @include('fragments.header.header')

        <br>
        <a href="index.php?controleur=site&action=accueil">Le programme</a>
        <a href="index.php?controleur=projets&action=index">Les Projets</a>
        <a href="index.php?controleur=stages&action=index">Les stages</a>
        <a href="index.php?controleur=messages&action=creer">Nous joindre</a>
    </header>

    <main>
        @yield('contenu')
    </main>

    <footer>
        @include('fragments.footer.footer', ['date'=> (new \DateTime())->format('Y'), 'legal'=> '© Tous droits réservés'])
    </footer>
</body>

</html>