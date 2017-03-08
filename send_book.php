<?php

include('dbcon.php'); 

 if(isset($_GET['send_book'])){
	 $get_id=$_GET['send_book'];
	 
 }
 $result = mysql_query("SELECT isbn FROM book WHERE book_id='$get_id'");

// If the query completed without errors, fetch a result
													 if ($result) {
														 $row = mysql_fetch_assoc($result);
														 $res=$row['isbn'];
													 }

// Otherwise display the error
													 else echo "An error occurred: " . mysql_error();
$u_id=$_SESSION['id'];


													 
 $data= date("Y-m-d H:i:s");
   $run_book= mysql_query("insert into kerkesa (u_id,b_id, isbn,data)  values ('$u_id','$get_id','$res','$data')")or die("Can't Execute Query..");
   if ($run_book){
    echo "<script>alert('Kerkesa u dergua')</script>";
	 echo "<script> window.open('member_book.php','_self')</script>"; }
   ?>