<div class="col-sm-10"><h1 class="margin-top"><?php print $title; ?></h1></div>
<div class="col-sm-2"><a class="btn btn-danger" href="#" data-toggle="modal" data-target="#myModal">Send message</a></div>

<div class="col-sm-3">
<?php print render($content['field_hostel_profile_picture']); ?>
</div>
<div class="col-sm-9">

<div class="user_intro"><h4>INTRO</h4><?php print render($content['field_job_description']); ?></div>
<div class="user_intro"><h4>HOSTEL NAME</h4><?php print render($content['field_business_name']); ?></div>
<div class="user_intro"><h4>OPPORTUNITY TYPE</h4><?php print render($content['field_opportunity_type']); ?></div>
<div class="user_intro"><h4>WHERE WE ARE LOCATED</h4><?php print render($content['field_business_location_geocode']); ?></div>

<?php 
$willing= $content['field_willing_to_train']['#items']['0']['value'];
	if (!empty($content['field_worker_skills_needed']) || $willing=="1") { ?>
		
<div class="alert alert-success"> 
<?php if(!empty($content['field_worker_skills_needed'])) {  ?>
<h4>SKILLS NEEDED</h4> <?php } ?> <?php  print render($content['field_worker_skills_needed']); ?>

<?php if($willing=="1") {  ?>
<h4>*willing to train <?php } ?></h4></div>

<?php }?>