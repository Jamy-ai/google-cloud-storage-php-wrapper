<?php

?>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<header>
<h1>GCS Wrapper Test</h1>
<p>Enter the Project ID, Bucket ID, and content of the json file generated by Google's IAM, then submit to get results</p>
</header>
<body>
	<form id="gcs-test-form" class="form-horizontal" action="post">

		<fieldset>

		<!-- Form Name -->
		<legend>Test GCS</legend>

		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="projectid">Project ID</label>  
		  <div class="col-md-4">
		  <input id="projectid" name="projectid" type="text" placeholder="project-12345" class="form-control input-md">
		  <span class="help-block">enter the id, not the name</span>  
		  </div>
		</div>

		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="bucketid">Bucket ID</label>  
		  <div class="col-md-4">
		  <input id="bucketid" name="bucketid" type="text" placeholder="your-bucket-id" class="form-control input-md">
		  <span class="help-block">enter the unique identifier for the bucket</span>  
		  </div>
		</div>

		<!-- Textarea -->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="jsonkey">JSON Key Content</label>
		  <div class="col-md-4">                     
			<textarea class="form-control" id="jsonkey" name="jsonkey"></textarea>
		  </div>
		</div>
		
		<div class="form-group">
		  <div class="col-md-4">                     
			<input type="submit" class="form-control" id="submit" name="submit" value="Submit"/>
		  </div>
		</div>

		</fieldset>

	</form>
</body>
<footer>
	<div class="errors"></div>
</footer>
