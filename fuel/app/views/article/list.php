<?php foreach($articles as $article): ?>
<h2>
    <a href="<?php echo Uri::create('article/view/' . $article->id); ?>">
        <?php echo $article->title; ?>
    </a>
</h2>
<span style='font-weight: bold'>投稿者</span>
<?php echo $article->user->name; ?>
　コメント：<?php echo count($article->comments); ?>件
<?php if($article->categories): ?>
    <?php foreach($article->categories as $category): ?>
        <?php echo $category->name; ?>
    <?php endforeach; ?>
<?php endif; ?>
<?php endforeach; ?>
