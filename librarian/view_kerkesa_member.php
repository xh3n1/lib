<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('nav_member.php'); ?>
    <div class="container">
    <div class="margin-top">
	<div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Shiko Kerkesat</strong>
                                </div> </div> 
    <br>
    <table border="1" align="center" width="700" cellspacing="0" border="0" class="table  table-bordered" id="example">

    <tr align="center" >
        <th> Nr. </th>
        <th> Id Antarit </th>
        <th> Emer </th>
        <th> Mbiemer </th>
        <th> ISBN </th>
        <th> Titull </th>
        <th> Data </th>


    </tr>

<?php
$u_id=$_SESSION['id'];
include('dbcon.php');
$run_kerkesa= mysql_query("select * from kerkesa where u_id='$u_id'");
$i=0;
while($row_k=mysql_fetch_array($run_kerkesa)){
    $u_id=$row_k['u_id'];
    $b_id=$row_k['b_id'];
    $b_is=$row_k['isbn'];
    $k_dt=$row_k['data'];
    $i++
    ?>
    <?php
    $result = mysql_query("SELECT book_title FROM book WHERE book_id='$b_id'");

    // If the query completed without errors, fetch a result
    if ($result) {
        $row = mysql_fetch_assoc($result);
        $res=$row['book_title'];
    }
	$result1 = mysql_query("SELECT firstname, lastname FROM member WHERE member_id='$u_id'");

			// If the query completed without errors, fetch a result
			while($row=mysql_fetch_array($result1)){
				$fname = $row['firstname'];
				$lname = $row['lastname'];}
      ?>
    
	
	<tr>
	 <td> <?php echo $i;?> </td>
	 <td><?php echo $u_id;?> </td>
	<td><?php echo $fname;?> </td>
	<td><?php echo $lname;?> </td>
	<td> <?php echo $b_is;?> </td>
	 <td> <?php echo $res;?> </td>
	 <td> <?php echo $k_dt;?> </td>

	 </tr>
		<?php } ?>
		</table>
		</div>
<?php include('footer.php') ?>