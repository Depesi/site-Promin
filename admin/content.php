<!DOCTYPE html>
<html lang="uk">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--MY STYLE-->
	<link rel="stylesheet" href="adminDashboardStyle/style.css">
	
	<!--GOOGLE FONTS-->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">

	<title> Панель адміністратора </title>
</head>
<body>
	<div class="admin__header"> 
		<div class="admin__container">
			<div class="admin__header_row">
				<div class="logo">
					<div class="logo__dashboard">
						Панель адміністратора 
					</div> 
					<span class="logo__name">"Промінь"  </span>					
				</div>
				<div> 
					<a href="/diplom_&_sitePromin/admin/" class="admin__header_exit"> Вихід </a> 
				</div>
			</div>
		</div>
	</div>
	<main>


<?php
$link = mysqli_connect("localhost", "addAdminNew", "addAdmin2281337", "feedbackform");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql = "SELECT * FROM feedbackrequest";

	if($result = mysqli_query($link, $sql)){
		if(mysqli_num_rows($result) > 0){
       		echo "<table class='admin-table'>";
            	echo "<tr>";
                	echo "<th>Ім'я</th>";
                	echo "<th>Телефон</th>";
                	echo "<th>Статус</th>";
					echo "<th></th>";
					//echo "<th>Відмітка</th>";
        	    echo "</tr>";
      	 		while($row = mysqli_fetch_array($result)){
					$row_userId = $row['userId'];
           			echo "<tr>";
			   		 	echo "<td>" . $row['userName'] . "</td>";
			    		echo "<td>" . $row['userPhone'] . "</td>";

						if( $row['accept'] == 0){
							echo "<td>" . "Активний" . "</td>";
						}
						else {
							 echo "<td>" . "Не активний" . "</td>";
						}
						echo "<td>" . "<a href='checkbox.php/?id=$row_userId'> <img src='img/check1.svg' class='admin__check_icon'> </a>" . "</td>";
            		echo "</tr>";
        		}
        	echo "</table>";
       		
        	mysqli_free_result($result);
    	} else{
        	echo "No records matching your query were found.";
    	}
	} 
	else{
    	echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}
	mysqli_close($link);
?>
</main>
</body>
</html>