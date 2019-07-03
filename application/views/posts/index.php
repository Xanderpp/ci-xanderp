<h2 class="d-inline-flex"><?= $title ?></h2>
<a href="<?php echo site_url('/posts/create'); ?>" class="btn btn-success d-inline-flex ml-4 mb-3">Add Blog</a>
<?php foreach($posts as $post) : ?>
	<div class="row">
		<div class="col-3">
			<img src="<?php echo site_url();?>assets/images/posts/<?php echo $post['post_image']; ?>" alt="image not existing" />
		</div>
		<div class="col-9">
			<h3><?php echo $post['title']; ?></h3>
			<small>Posted: <?php echo $post['created_at']; ?> in <b><?php echo $post['name']; ?></b></small>
			<br />
			<h5><?php echo word_limiter($post['body'], 50); ?></h5>
			<p><a class='btn btn-primary' href='<?php echo site_url('/posts/' . $post['slug']); ?>'>Read More</a></p>
		</div>
	</div>
<?php endforeach; ?>