
        <main class="right">
            <h2 class="right__title">Lorem ipsum</h2>
            <div class="posts">

                <?php foreach ($dataArticleList as $id => $anArticle) : ?>
                    <article class="post">
                        <a href="" class="post__category post__category--color-<?=$anArticle["categoryColor"];?>"><?= $anArticle["category"];?></a>
                        <h3><?php echo $anArticle["title"]; ?></h3>
                        <div class="post__meta">
                            <img src="<?php echo $anArticle["imgauthor"]; ?>" alt="" class="post__author-icon">
                            <strong class="post__author"><?php echo $anArticle["author"]; ?></strong>
                            <time datetime="2018-02-10"><?php echo $anArticle["date"]; ?></time>
                        </div>
                        <p><?php $content = $anArticle["content"];
                        $lightContent = substr($content, 0, 150);
                        echo $lightContent." ..."; ?> </p>
                        <a href="article.php?page=article&id=<?= $id; ?>">Continue reading</a>
                    </article>
                <?php endforeach; ?>
            </div>
        </main>
    </body>
</html>