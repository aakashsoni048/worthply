<?php 
/* Template Name: API RESPONSE */
?>

<?php get_header();?>

<?php

// Given Link -- "http://ec2-15-207-89-27.ap-south-1.compute.amazonaws.com:8080/bookslot/list?jobId=13173&mobileNumber=8310039860"

// Dummy Link -- "https://reqres.in/api/users?page=2"

// $ch = curl_init("https://staging.waterwalaprime.in:8443/bookslot/list?jobId=13173&mobileNumber=8310039860");    // initialize curl handle
// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
// $data = curl_exec($ch);
// print($data);

// $homepage = file_get_contents('https://staging.waterwalaprime.in:8443/bookslot/list?jobId=13173&mobileNumber=8310039860');
// echo $homepage;

// $api_url = "https://staging.waterwalaprime.in:8443/bookslot/list?jobId=13173&mobileNumber=8310039860";
// $json_data = file_get_contents($api_url);
// $response = json_decode($json_data);
// 	echo ("<pre>");
// 	print_r($response);
// 	echo ("</pre>");

// $curl = curl_init();
// curl_setopt_array($curl, array(
//   CURLOPT_URL => "https://staging.waterwalaprime.in:8443/bookslot/list?jobId=13173&mobileNumber=8310039860",
//   CURLOPT_RETURNTRANSFER => true,
//   CURLOPT_ENCODING => "",
//   CURLOPT_MAXREDIRS => 10,
//   CURLOPT_TIMEOUT => 0,
//   CURLOPT_FOLLOWLOCATION => true,
//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//   CURLOPT_CUSTOMREQUEST => "GET",
// ));
// $response = curl_exec($curl);
// curl_close($curl);
// echo $response;


// $api_url = "https://staging.waterwalaprime.in:8443/bookslot/list?jobId=13173&mobileNumber=8310039860";
// $json_data = file_get_contents($api_url);
// $response = json_decode($json_data);
// 	echo ("<pre>");
// 	print_r($response);
// 	echo ("</pre>");

// $curl = curl_init();

// curl_setopt_array($curl, array(
//   CURLOPT_URL => "https://staging.waterwalaprime.in:8443/bookslot/list?jobId=13173&mobileNumber=8310039860",
//   CURLOPT_RETURNTRANSFER => true,
//   CURLOPT_ENCODING => "",
//   CURLOPT_MAXREDIRS => 10,
//   CURLOPT_TIMEOUT => 0,
//   CURLOPT_FOLLOWLOCATION => true,
//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//   CURLOPT_CUSTOMREQUEST => "GET",
// ));

// $response = curl_exec($curl);

// curl_close($curl);
// echo "string";
// echo $response;




// $request = wp_remote_get( 'https://staging.waterwalaprime.in:8443/bookslot/list?jobId=13173&mobileNumber=8310039860' );
// $body = wp_remote_retrieve_body( $request );
// $data = json_decode( $body, true );
// if ( is_wp_error( $data ) ) {
//     $error_message = $data->get_error_message();
//     echo "Something went wrong: $error_message";
// } else {
//     echo 'Response:<pre>';
//     print_r( $data ); 
//     echo '</pre>';
// }


// $api_url = "https://reqres.in/api/users?page=2";
// $json_data = file_get_contents($api_url);
// $response_data = json_decode($json_data);
// echo "<pre>";
// echo "string";
// print_r($response_data);
?>
<b>Projects:</b>

 	<select id="new-projects" class="form-control" name="author">
		
	</select>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
$( "#new-projects" ).load( "https://staging.waterwalaprime.in:8443/bookslot/list?jobId=13173&mobileNumber=8310039860" );
</script>


<div class="mypanel"></div>
<script>
$.getJSON('https://staging.waterwalaprime.in:8443/bookslot/list?jobId=13173&mobileNumber=8310039860', function(data) {
    
    var text = `Date: ${data}<br>`
    $(".mypanel").html(text);
});
</script>


<?php get_footer();?>

