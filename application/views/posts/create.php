<h2><?= $title ?></h2>
<?php echo validation_errors(); ?>
<?php echo form_open_multipart('posts/create'); ?>
	<!--<input type="hidden" name="id" value="<?php echo $post['id']; ?>" />-->
	<div class="form-group">
		<label>Title</label>
		<input type="text" class="form-control" name="title" placeholder="Add title" />
	</div>
	<div class="form-group">
		<label>Body</label>
		<textarea id="editor1" class="form-control" name="body" placeholder="Add body"></textarea>
	</div>
	<select class="form-control mb-2" name='category_id'>
		<label>Category</label>
		<?php foreach($categories as $category): ?>
		<option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
		<?php endforeach; ?>
	</select>
	<div class="form-group">
		<label>Upload Image</label>
		<br />
		<input type="file" name="userfile" size="20" />
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
</form>