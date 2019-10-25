<?php print render($form['form_id']); ?> 
<?php print render($form['form_build_id']); ?> 
<?php print render($form['form_token']); ?>
<div class="col-sm-3"></div><div class="col-sm-9"><h1>Create Your Hostel Job Posting</h1></div>
<div class="col-sm-3">
<?php if(arg(1) == "add"): ?>
<div class="image-preview"> <img src="<?php print base_path().path_to_theme(); ?>/images/avatar.png" /></div>
<?php endif; ?>
<?php print render($form['field_hostel_profile_picture']); ?></div>

<div class="col-sm-9">
<?php

//print_r($form);

    print render($form['title']);

    print render($form['field_business_name']);

    print render($form['field_job_description']);
?>
<div class="panel panel-default">
	<div class="panel-body"><?php print render($form['field_opportunity_type']); ?></div>
</div>

<div class="panel panel-default">
	<div class="panel-body"><?php print render($form['field_worker_skills_needed']); ?></div>
</div>
<?php
    print render($form['field_willing_to_train']);
  
	print render($form['field_job_contact_email_']);

 
 ?>


<div><a href="/user/logout" class="btn btn-danger">Cancel</a> <input id="edit-submit" class="form-submit btn btn-primary" type="submit" value="Save Your Profile" name="op"></div>
</div>