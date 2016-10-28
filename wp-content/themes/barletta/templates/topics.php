<?php
/*
* Template Name: Topics
*
* @package WordPress
* @subpackage Barlett
* 
*/
get_header(); 
echo insertTopic(
	'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'/wp-content/images/pontusUploadedFiles/'
	);
?>

<article class="topic">	
	<h2><bold>Skapa nytt ämne</bold></h2>	
	
	<form method="POST" action="" enctype="multipart/form-data">
	  
		<div class="form-group">
			<label for="topic">Title:</label>
			<input type="text" class="form-control" id="topic-title" name="title" placeholder="Ämne" >
		</div>
	  	
	  	<div class="form-group">
		  <label for="comment">Inlägg:</label>
		  <textarea class="form-control" name="content" rows="5" id="inlagg" placeholder="Text här"></textarea>
		</div>
		
		<div class="form-group  topic-file">
		    <label for="file">Filer:</label><br />
		    <input type="file" name="files" id="file" multiple>
	    </div>
	 
	  <input type="submit" name="btn_topic" class="btn btn-default topic-btn" value="Submit">
	
	</form>
</article>

<?php get_footer() ?>