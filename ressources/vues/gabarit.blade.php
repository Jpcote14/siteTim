<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="DESCRIPTION">
    <meta name="keywords" content="KEYWORDS">
    <meta name="author" content="AUTHOR">
    <!-- <link rel="icon" type="image/x-icon" href='images/favicon_32x32.png'> -->
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;500;600&display=swap" rel="stylesheet">
    <script defer src="scripts/header.js"></script>
    <script defer src="scripts/formulaire.js"></script>
    <title>Timcsf</title>
</head>

<body>
    @include('fragments.header.header')

    <main>
        @yield('contenu')
    </main>

    <footer>
        @include('fragments.footer.footer', ['date'=> (new \DateTime())->format('Y'), 'legal'=> '© Tous droits réservés'])
    </footer>
</body>

</html>