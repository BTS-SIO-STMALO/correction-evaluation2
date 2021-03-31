<head>
    <meta charset="UTF-8">
    <title>Nos amis les chiens</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="wrapper">
        <header class="left">
            <h1 class="left__title">Ouaf</h1>
            <div class="left__paragraph">
                <h2 class="left__subtitle"><strong class="left__subtitle-strong">Lorem ipsum</strong></h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque scelerisque suscipit nibh quis porttitor. Integer iaculis mi urna, a pulvinar quam adipiscing ut. Vivamus vel vestibulum mauris.
                </p>
            </div>
            <nav>
                <ul Class="left__nav">
                    <?php foreach ($navList as $apage) : ?>
                        <li class="left__nav-item"><a href="<?php echo $apage["link"] ?>" class="left__nav-link"><?php echo $apage["title"]; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </nav>
        </header>
