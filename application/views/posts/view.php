<h2><?php echo $post['title']; ?> </h2>
<img src="<?php echo site_url();?>assets/images/posts/<?php echo $post['post_image']; ?>" alt="image not existing" />
<div>
	<small><?php echo $post['created_at']; ?></small>
	<h5><?php echo $post['body']; ?></h5>
</div>
<hr />
<?php echo form_open('/posts/delete/' . $post['id']); ?>
	<a class="btn btn-secondary" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug']; ?>">Edit</a>
	<input type='submit' value='Delete' class='btn btn-danger'>
</form>