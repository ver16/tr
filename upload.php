<html>
<body>
<?php
/* Get the name of the uploaded file */
$filename = $_FILES['file']['name'];

/* Choose where to save the uploaded file */
$location = "upload/".$filename;

/* Save the uploaded file to the local filesystem*/
if (move_uploaded_file($_FILES['file']['tmp_name'], $location)){
	echo "<p> uploaded successfully </p>";
}

else{
	echo "<p>error</p>";
}
?>

</body>
</html>