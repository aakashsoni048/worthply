<?php 

/* Template Name: Check Availability */
?>

<?php 

global $wpdb;

if(isset($_POST['Phone_Number'])) {
   $Phone_Number = $_POST['Phone_Number'];

    $result = $wpdb->get_row( "SELECT * FROM LVrLH2Su2_consultants WHERE Phone_Number="."'".$Phone_Number."'" );

   	$response = "1";

  	if(!empty($result->Date)) {
      $response = "<h2 style='color: #000000;font-size: 30px;font-weight: 200;text-transform: none;line-height: 1.8;position: relative;display: inline-block;background-color: #FFF;padding-bottom: 30px;'>This profile is already in our Database on this date ( " . "'" .$result->Date . "' )" . " </h2>  ";
  	}

   echo $response;
   die;
}

?>


