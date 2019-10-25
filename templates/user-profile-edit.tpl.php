<div class="col-sm-10 site_tagline"><h1 style="margin: 0px 0px 25px;">Create Your Hostel Worker Profile</h1></div><div class="col-sm-2"><?php print render($form['profile_main']['field_worker_resume_status']); ?></div>
<aside class="col-sm-3" role="complementary">
	<?php print render($form['picture']['picture_current']); ?>
    <?php print render($form['picture']['picture_delete']); ?>
    <?php print render($form['picture']['picture_upload']); ?>
	
</aside>

<section class="col-sm-9">    
    <?php print render($form['form_id']);//  print_r($form); ?> 
    <?php print render($form['form_build_id']); ?> 
    <?php print render($form['form_token']);  ?>
     <?php  unset($form['account']['mail']['#description']); ?>
	 
<div class="row">
<div class="col-lg-6">    <?php print render($form['profile_main']['field_worker_first_name']); ?></div>
<div class="col-lg-6">    <?php print render($form['profile_main']['field_worker_last_name']); ?></div>
</div>
 
<div class="row">
<div class="col-lg-12">    <?php print render($form['account']['mail']); 

?></div>
<div class="col-lg-12">    <?php print render($form['profile_main']['field_worker_introduction']); ?></div>
</div>

<div class="panel panel-default">
	<div class="panel-body"><?php print render($form['profile_main']['field_worker_resume_type']); ?></div>
</div>
<div class="panel panel-default">
	<div class="panel-body"><?php print render($form['profile_main']['field_worker_available_tasks']); ?></div>
</div>
<div class="panel panel-default">
	<div class="panel-body"><?php print render($form['profile_main']['field_worker_experienced_tasks']); ?></div>
</div>
    
<div class="panel panel-default">
	<div class="panel-body"><?php print render($form['profile_main']['field_planning_to_go']); ?></div>
</div>

<div class="panel panel-default">
	<div class="panel-body"><?php print render($form['profile_main']['field_willing_to_go']); ?></div>
</div>

<div class="panel panel-default">
	<div class="panel-body"><?php print render($form['profile_main']['field_worker_other_experience']); ?></div>
</div>
    <?php print render($form['profile_main']['field_attached_resume']); ?>
    
    
<div class="panel panel-default">
<div class="panel-body">
<label>Set New Password</label>

    <?php print render($form['account']['name']); // print_r($form); ?>
<div class="row">    
<div class="col-lg-6"><?php print render($form['account']['current_pass']); ?></div>
<div class="col-lg-6"><?php print render($form['account']['pass']); ?></div>
</div>
</div>
</div>

   <?php //print render($form['profile_main']['field_worker_agreed_to_terms_']); ?>
   <?php print render($form['legal']); ?>

<div>   <a href="/user/logout" class="btn btn-danger">Cancel</a> <input id="edit-submit" class="form-submit btn btn-primary" type="submit" value="Save Your Profile" name="op"> </div>
</section>

