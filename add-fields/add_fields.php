<?php
/*
	Plugin Name:Add Fields
	Description: to Add Fileds in User Profile*/

add_action( 'show_user_profile', 'extra_user_profile_fields' );
add_action( 'edit_user_profile', 'extra_user_profile_fields' );

function extra_user_profile_fields( $user ) 
{ ?>
<h3><?php _e("Extra profile information", "blank"); ?></h3>

<table class="form-table">
<tr>
<th><label for="Birth Year"><?php _e("BirthYear"); ?></label></th>
<td>
<input type="text" name="BYear" id="BYear" value="<?php echo esc_attr( get_the_author_meta( 'BYear', $user->ID ) ); ?>" class="regular-text" /><br />
<span class="description"><?php _e("Please enter your Birth Year."); ?></span>
</td></tr>
</table>
<?php }

add_action( 'personal_options_update', 'save_extra_user_profile_fields' );
add_action( 'edit_user_profile_update', 'save_extra_user_profile_fields' );

function save_extra_user_profile_fields( $user_id ) {

if ( !current_user_can( 'edit_user', $user_id ) ) { return false; }

update_user_meta( $user_id, 'BYear', $_POST['BYear'] );

}
?>