<?php 
/**
* Database connection
*/
require_once('config.php');

/**
*
* userer login check
*/
function user_logged_in(){

	if( isset($_SESSION['username']) ){
		return true;
	}

}