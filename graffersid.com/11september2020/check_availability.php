<?php 

/* Template Name: Check Availability */
?>

<?php 

global $wpdb;

if(isset($_POST['Phone_Number'])) {
   $Phone_Number = $_POST['Phone_Number'];

  	$result = $wpdb->get_results("SELECT FROM LVrLH2Su2_consultants WHERE Phone_Number='". $Phone_Number ."'");

   	$count = $wpdb->num_rows($result);

   	$response = "<span style='color: green;'>Available.</span>" . $count;

  	if($count > 0) {
      $response = "<span style='color: red;'>Not Available.</span>" . $count;
  	}

   echo $response;
   die;
}


	
	// $value = $_POST['username'];

	// $results = $wpdb->get_results("SELECT * FROM LVrLH2Su2_consultants WHERE Name = '". $value ."' ");

	// // $post_id = $wpdb->get_results("SELECT post_id FROM $wpdb->postmeta WHERE (meta_key = 'mfn-post-link1' AND meta_value = '". $from ."')");

	// // $result = $wpdb->get_row("SELECT * FROM LVrLH2Su2_consultants WHERE user_login = " . $string . " ");

 //    if(!empty($results)) {
 //        echo "<span class='status-not-available'> Profile is allready exist.</span>  " . $value;
 //    }
 //    else
 //    {
 //        echo "<span class='status-available'> Profile is not Entered before.</span>" . $value;
 //    }
  
?>


