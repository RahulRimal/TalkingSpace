<?php include('includes/header.php');?>

	<form role="form">
					  <div class="form-group">
					    <label>Topic Title</label>
					    <input name="title" type="text" class="form-control" placeholder="Enter Post Title">
					  </div>
					  <div class="form-group">
					  	<label>Category</label>
					  	<select class="form-control">
					  		<option>Design</option>
					  		<option>Development</option>
					  		<option>Business & Marketting</option>
					  		<option>Search Engines</option>
					  		<option>Cloud and Hosting</option>
					  	</select>
					  </div>
					  <div class="form-group">
					  	<label>Topic Body</label>
					  	<textarea name="body" id="body" cols="80" rows="10"></textarea>
					  	<script>CKEDITOR.replace('body');</script>
					  </div>

					  <button type="submit" class="btn btn-default">Submit</button>
					</form>

<?php include('includes/footer.php');?>