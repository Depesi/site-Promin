<?php
$userId = $_GET['id'];
$link = mysqli_connect("localhost", "addAdminNew", "addAdmin2281337", "feedbackform");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "SELECT accept FROM feedbackrequest WHERE userId ='$userId' ";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
			if($row['accept'] == 0 ){
				$sqlAdd = "UPDATE `feedbackrequest` SET `accept` = '1' WHERE `feedbackrequest`.`userId` = '$userId' ";	
				mysqli_query($link,$sqlAdd);	
				header('Location: /diplom_&_sitePromin/admin/content.php');
			}

			else if($row['accept'] == 1){
				$sqlRemove = "UPDATE `feedbackrequest` SET `accept` = '0' WHERE `feedbackrequest`.`userId` = '$userId' ";
				mysqli_query($link,$sqlRemove);
				header('Location: /diplom_&_sitePromin/admin/content.php');
			}
        }
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);
?>
