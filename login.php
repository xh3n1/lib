
								<?php
							    include('dbcon.php');
								if (isset($_POST['login'])){
								session_start();
								$id_a = $_POST['id_a'];
								$emri = $_POST['emri'];
								$query = "SELECT * FROM member WHERE member_id='$id_a'";
								$result = mysql_query($query)or die(mysql_error());
								$num_row = mysql_num_rows($result);
									$row=mysql_fetch_array($result);
									if( $num_row > 0 ) {
										header('location:books.php');
								$_SESSION['id_a']=$row['member_id'];
									}
									else{ ?>
								<div class="alert alert-danger">Access Denied</div>		
								<?php
								}}
								?> 
