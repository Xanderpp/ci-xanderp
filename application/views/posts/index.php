<h2><?= $title ?></h2>
<?php foreach($posts as $post) : ?>
	<h3><?php echo $post['title']; ?></h3>
	<small>Posted: <?php echo $post['created_at']; ?></small>
	<br />
	<h5><?php echo $post['body']; ?></h5>
<?php endforeach; ?>