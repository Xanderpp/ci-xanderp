<h2 class="d-inline-flex"><?= $title ?></h2>
<a href="<?php echo site_url('/posts/create'); ?>" class="btn btn-success d-inline-flex ml-4 mb-3">Add Blog</a>
<?php foreach($posts as $post) : ?>
	<h3><?php echo $post['title']; ?></h3>
	<small>Posted: <?php echo $post['created_at']; ?></small>
	<br />
	<h5><?php echo $post['body']; ?></h5>
	<p><a class='btn btn-primary' href='<?php echo site_url('/posts/' . $post['slug']); ?>'>Read More</a></p>
<?php endforeach; ?>