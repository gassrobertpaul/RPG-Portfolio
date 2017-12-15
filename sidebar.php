<?php 
	
if(!get_option('profile_picture')){
    // update_option('profile_picture', 'first_default_value');
    // $defaultprofilepicture = '<span class="dashicons dashicons-businessman"></span>';
    $user_id = get_current_user_id();
    $defaultprofilepicture = get_avatar($user_id);
    // https://www.gravatar.com/avatar
} else {
	$profilepicture = esc_attr( get_option( 'profile_picture' ) );
}
if(!get_option('profile_name')){
    // update_option('profile_name', 'first_default_value');
	$profilename = "Default User Name";
} else {
	$profilename = esc_attr( get_option( 'profile_name' ) );	
}
if(!get_option('profile_email')){
    // update_option('profile_email', 'first_default_value');
	$profileemail = "";
} else {
	$profileemail = esc_attr( get_option( 'profile_email' ) );
}
if(!get_option('profile_phone')){
    // update_option('profile_phone', 'first_default_value');
	$profilephone = "";
} else {
	$profilephone = esc_attr( get_option( 'profile_phone' ) );
}
if(!get_option('profile_location')){
    // update_option('profile_location', 'first_default_value');
	$profilelocation = "";
} else {
	$profilelocation = esc_attr( get_option( 'profile_location' ) );
}
if(!get_option('profile_intro')){
    // update_option('profile_intro', 'first_default_value');
	$profileintro = "Default introduction";
} else {
	$profileintro = esc_attr( get_option( 'profile_intro' ) );
}
if(!get_option('github_handler')){
    // update_option('profile_intro', 'first_default_value');
	$profilegithub = "";
} else {
	$profilegithub = esc_attr( get_option( 'github_handler' ) );
}
if(!get_option('twitter_handler')){
    // update_option('profile_intro', 'first_default_value');
	$profiletwitter = "";
} else {
	$profiletwitter = esc_attr( get_option( 'twitter_handler' ) );
}
if(!get_option('facebook_handler')){
    // update_option('profile_intro', 'first_default_value');
	$profilefacebook = "";
} else {
	$profilefacebook = esc_attr( get_option( 'facebook_handler' ) );
}
if(!get_option('gplus_handler')){
    // update_option('profile_intro', 'first_default_value');
	$profilegplus = "";
} else {
	$profilegplus = esc_attr( get_option( 'gplus_handler' ) );
}

?>
<div id="sidebar1">
	<div class="rpg-profile-sidebar-preview">
		<div class="rpg-profile-sidebar">
			<div class="image-container">
				<?php if (!get_option('profile_picture')) { ?>
					<div id="rpg-profile-picture-preview" class="rpg-profile-picture"><?php echo $defaultprofilepicture; ?></div>
					<?php /* ?><div id="rpg-profile-picture-preview" class="rpg-profile-picture" style="background-image: url(<?php print $defaultprofilepicture; ?>);"></div><?php */ ?>
				<?php } else { ?>
					<div id="rpg-profile-picture-preview" class="rpg-profile-picture" style="background-image: url(<?php print $profilepicture; ?>);"></div>				
				<?php } ?>

			</div>
		</div>
	</div>
</div><!-- end #sidebar1 -->