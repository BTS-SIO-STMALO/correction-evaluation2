<?php

$idArticle = $_GET['id'];

?>
            <main class="right">
                <h2 class="right__title"><?php echo ($dataArticleList["$idArticle"]["title"]) ?></h2>
                <div class="posts">
                    <article class="post__solo">
                        <a href="" class="post__category post__category--color-<?=$dataArticleList["$idArticle"]["categoryColor"];?> "><?=$dataArticleList["$idArticle"]["category"];?></a>
                        <h3></h3>
                        <div class="post__meta">
                            <img src="<?php echo ($dataArticleList["$idArticle"]["imgauthor"]) ?>" alt="" class="post__author-icon">
                            <strong class="post__author"><?php echo ($dataArticleList["$idArticle"]["author"]) ?></strong>
                            <time datetime="2018-02-10"><?php echo ($dataArticleList["$idArticle"]["date"]) ?></time>
                        </div>
                        <p><?php echo ($dataArticleList["$idArticle"]["content"]) ?></p>
                        <a href="index.php" class="post__link">Back to home</a>
                    </article>
                </div>
            </main>
        </div>
    </body>
</html>