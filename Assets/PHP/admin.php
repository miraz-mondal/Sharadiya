<?php
require 'admin-DB-connection.php';

$ptitle=$_POST['ptitle'];
$description=$_POST['description'];

// to receive the photo or file $_FILES is used 
$pic=$_FILES['thumbnail']['name'];
 // Count total uploaded files
 $totalfiles = count($_FILES['file']['name']);

 // Looping over all files
 for($i=0;$i<$totalfiles;$i++){
 $filename = $_FILES['file']['name'][$i];
 
// Upload files and store in database
if(move_uploaded_file($_FILES["file"]["tmp_name"][$i],'../.././Upload/'.$filename)){
		// Image db insert sql
		$insert = "INSERT into admin(file) values('$filename')";
		if(mysqli_query($conn, $insert)){
		  echo 'Data inserted successfully';
		}
		else{
		  echo 'Error: '.mysqli_error($conn);
		}
	}else{
		echo 'Error in uploading file - '.$_FILES['file']['name'][$i].'<br/>';
	}
 }
$url="../.././Upload/";
$furl=$url.$pic;
// know the file type
$type=pathinfo($furl,PATHINFO_EXTENSION);

if ($type=="jpeg" || $type=="jpg" || $type=="png")
{
// to place the pictures on server
move_uploaded_file($_FILES['thumbnail']['tmp_name'],$furl);

$sql="insert into admin(ptitle,description,media) values('$ptitle','$description','$furl')";
$x=mysqli_query($conn,$sql);
if($x==1)
{
    header("location:admin-confirmation.html?msg=Done");
}
else
{
    header("location:welcome.php?msg=NotDone");
}
}
else
{
    header("location:welcome.php?msg=type-not-matched");
}
?>

Multiple picture add logic
<?php 

//  // Count total uploaded files
//  $totalfiles = count($_FILES['file']['name']);

//  // Looping over all files
//  for($i=0;$i<$totalfiles;$i++){
//  $filename = $_FILES['file']['name'][$i];
 
// // Upload files and store in database
// if(move_uploaded_file($_FILES["file"]["tmp_name"][$i],'../.././Upload/'.$filename)){
// 		// Image db insert sql
// 		$insert = "INSERT into admin(file) values('$filename')";
// 		if(mysqli_query($conn, $insert)){
// 		  echo 'Data inserted successfully';
// 		}
// 		else{
// 		  echo 'Error: '.mysqli_error($conn);
// 		}
// 	}else{
// 		echo 'Error in uploading file - '.$_FILES['file']['name'][$i].'<br/>';
// 	}
//  }

?>
