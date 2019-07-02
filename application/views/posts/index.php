<h2><?= $title ?></h2>
<?php foreach($posts as $post) : ?>
	<h3><?php echo $post['title']; ?></h3>
	<small>Posted: <?php echo $post['created_at']; ?></small>
	<br />
	<h5><?php echo $post['body']; ?></h5>
	<p><a class='btn btn-primary' href='<?php echo site_url('/posts/' . $post['slug']); ?>'>Read More</a></p>
<?php endforeach; ?>