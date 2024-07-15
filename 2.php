<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>experimento 2</title>
        
        <!-- META TAGS -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="theme-color" content="rgb(82, 182, 15)">

        <!-- SEO -->
        <meta name="author" content="Douglas Speck">
        <meta name="description" content="Segundo Experimento Colaborativo promovido pela Olimpíada de Matemática da Unicamp">
        <link rel="canonical" href="https://experimentos.online/2">
        <meta name=”robots” content="index, nofollow">
        <meta name="googlebot" content="index, nofollow">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Martel:wght@200;300;400;600;700;800;900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Shadows+Into+Light+Two&display=swap" rel="stylesheet">

        <!-- Stylesheets -->

        <link rel="preload" as="style" onload="this.remove();" href="/assets/css/main.css?t=<?php echo date('YmdHis'); ?>" type="text/css">
        <link rel="stylesheet" href="/assets/css/main.css?t=<?php echo date('YmdHis'); ?>" type="text/css">
    </head>
    <body>
        <header>
            <h1>exp.online</h1>
            <nav>
                <a href="/">home</a>
                <a href="/forms/">forms</a>
            </nav>
        </header>
        <main>
            <p>baseado em nosso <a href="/forms/1.html">segundo experimento</a>:</p>
            <?php $data = json_decode(file_get_contents('https://drive.usercontent.google.com/uc?id=1Likj_YdLFcihcRMrt1tWZjfl89xhy9_O&export=download')); ?>
            <p id="pi">&pi; = 3.<span data-dec="<?php echo $data->decimals?>" class="correct"><?php echo $data->correct?></span><span class="incorrect"><?php echo $data->incorrect?></span></p>
            <p>(atualmente, há <?php echo $data->answers?> respostas)</p>
            <p>para entender mais sobre o projeto, acesse <a target="_blank" href="https://docs.google.com/presentation/d/1oplGx_sFYBkhc1CMc4wUAJZ9IaUa3SkYw1gY3jbOUmU/present">nosso guia</a>.</p>
        </main>
        <footer>
            <p>este projeto foi orgulhosamente produzido por <a target="_blank" class="signature" href="https://tresdoug.com">Douglas Speck</a></p>
        </footer>
    </body>
</html>