<html>
    <head>
        <title><?= $title ?? ''; ?></title>
        <link rel="stylesheet" href="public/assets/css/site.css"/>
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    </head>
    <body>
        <?php include 'topo.php'; ?>

        <?= $conteudo ?? ''; ?>

        <?php include 'rodape.php'; ?>

        <script src="public/assets/js/site.js"></script>
    </body>
</html>

