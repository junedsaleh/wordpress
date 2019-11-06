<?php

	//create afunction to register menu location
	function regMenu()
	{
		register_nav_menu('top-menu','Top Menu');
		
	}
	
	add_action("init","regMenu");	
	
	//add sidebar in admin panel
	function addSidebar()
	{
		register_sidebar(array('name'=>'Right Sidebar','id'=>'sd1','before_title'=>' <h2 class="widget-title">','after_title'=>'</h2>'));
	}
	add_action('init','addSidebar');

	function addMobileNoField($cinfo)
	{
		$cinfo["mobile_no"]="Mobile No.";
		$cinfo["facebook_url"]="FAcebook Profile URL :";
		return $cinfo;
	}
	add_filter("user_contactmethods","addMobileNoField");

	/*function addQualification($user)
	{
		 echo "<h3>Qualification Information</h3> ";
	?>
		<table class='form-table'><tr>
		<th><label>Qualification</label>".
		<td><input type='text' name='qua' id='qua' value="<?php echo get_user_meta($user->ID,'qua',true);?>" >
	</tr>
	<?php
	}

	add_action('show_user_profile','addQualification');
	add_action('edit_user_profile','addQualification');
	
	function saveQualification($user)
	{
		update_user_meta($user-ID,"qua",$_POST['qua']);
	}
	
	add_action("personal_options_update","saveQualification");
	add_action("edit_user_profile_update","saveQualification");
*/
	function addAddress($user)
	{
		?>
		<h2>Address Information</h2>
		<table class="form-table">
		<tr>
		<th><label>Address</label>
		<td><input type='textarea' name='addr' id='addr' 
		value="<?php  echo get_user_meta($user->ID,'addr',true)?>"
		>
		<?php
	}
	add_filter('show_user_profile','addAddress');
	add_filter('edit_user_profile','addAddress');

	//save user profile data
	function saveAddress($user)
	{
		update_user_meta($user->ID,'addr',$_POST['addr']);
	}
	add_filter('personal_options_update','saveAddress');
	add_filter('edit_user_profile_update','saveAddress');

?>