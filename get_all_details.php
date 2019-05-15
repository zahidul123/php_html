<?php

/*
 * Following code will list all the emp
 */

// array for JSON response
$response = array();


$con = mysqli_connect("localhost","root","","ss") or die(mysql_error());
 
        // Selecing database
$db = mysqli_select_db($con,"ss") or die(mysql_error()) or die(mysql_error());

$result = mysqli_query($con,"SELECT *FROM student") or die(mysql_error());



// check for empty result
if (mysqli_num_rows($result) > 0) {
    // looping through all results
    // products node
    $response["student"] = array();
    
    while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
        // temp user array
        $stu = array();
        $stu["id"] = $row["id"];
        $stu["name"] = $row["name"];
        $stu["depertment"]=$row["depe0rtment"];
        $stu["address"] = $row["address"];
		



        // push single product into final response array
        array_push($response["student"], $stu);
    }
    // success
    $response["success"] = 1;

    // echoing JSON response
    echo json_encode($response);
} else {
    // no products found
    $response["success"] = 0;
    $response["message"] = "No products found";

    // echo no users JSON
    echo json_encode($response);
}
?>

