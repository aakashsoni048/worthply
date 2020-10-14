<?php 

/* Template Name: Submit Check Availability */
?>

<?php 

global $wpdb;

if(isset($_POST['Phone_Number'])) {

    $tablename = LVrLH2Su2_consultants;

    $data=array(
        'Date' => date("jS F Y "), 
        'Name' => $_POST['Name'], 
        'Phone_Number' => $_POST['Phone_Number'],
        'Email' => $_POST['Email'], 
        'Position' => $_POST['Position'], 
        'Company' => $_POST['Company'],
        'Experience' => $_POST['Experience'], 
        'Current_CTC' => $_POST['Current_CTC'],
        'Expected_CTC' => $_POST['Expected_CTC'], 
        'Notice_Period' => $_POST['Notice_Period'], 
        'feedback' => $_POST['feedback']
      );

    $wpdb->insert( $tablename, $data);
  
 	  $response = "1";
    echo $response;
    die;
}

  
?>


