<?php /**
* Plugin Name: paktolus form
* Plugin URI: http://localhost/paktolus/
* Description: validation form.
* Version: 1.0.0
* Author: Samrudhi
* Author URI: http://localhost/paktolus/
* License: GPL2
*/

register_activation_hook(__FILE__,'index_activate');
register_deactivation_hook(__FILE__,'index_deactivate');

function index_activate(){
	global $wpdb;
	global $table_prefix;
	$table=$table_prefix.'register';
	$sql="CREATE TABLE $table(
	'id' int(11) NOT NULL,
	'fname' varchar(250) NOT NULL,
	'mname' varchar(250) NOT NULL,
	'lname' varchar(250) NOT NULL,
	'address' varchar(250) NOT NULL,
	'state' varchar(250) NOT NULL,
	'city' varchar(250) NOT NULL,
	'zipcode' varchar(250) NOT NULL,
	'unit' varchar(250) NOT NULL,
	'birthdate' varchar(250) NOT NULL,
	'mobileno' varchar(250) NOT NULL,
	'email' varchar(250) NOT NULL,
) ENGIN=InnoDB DEFAULT CHARSET=latin1;
   ALTER TABLE $table
  ADD PRIMARY KEY('id');
  ALTER TABLE $table
 MODIFY 'id' int(11) NOT NULL AUTO_Increment;";
 //$wpdb->query($sql); 
}

function index_deactivate(){
	global $wpdb;
	global $table_prefix;
	$table=$table_prefix.'register';
	$sql="DROP TABLE $table";
    //$wpdb->query($sql);
}


add_action('admin_menus','form_data_menu');

function form_data_menu(){
	 add_menu_page('Form Data','Form Data',8,__FILE__,'form_data_list');
}


add_shortcode('form_data_list_shortcode','form_data_list');

function form_data_list(){
	include('form_data.php');
	
}



?>
