<h2 class="d-inline-flex"><?= $title ?></h2>
<a href="<?php echo site_url('/categories/create'); ?>" class="btn btn-success d-inline-flex ml-4 mb-3">Add Category</a>
<?php foreach($categories as $category) : ?>
	<div class="container row">
		<a href='<?php echo site_url('/categories/posts/' . $category['id']); ?>'><?php echo $category['name']; ?></a>
	</div>
<?php endforeach; ?>