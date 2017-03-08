<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">
					<div class="sti">
						<img src="LMS/E.B. Magalona.png" class="img-rounded">
					</div>
				<div class="login">
				<div class="log_txt">
				<p><strong>Please Enter the Details Below..</strong></p>
				</div>
						<form class="form-horizontal" method="POST">
								<div class="control-group">
									<label class="control-label" for="inputEmail">Id antarit </label>
									<div class="controls">
									<input type="text" name="id_a" id="id_a" placeholder="ID" required>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="inputEmail">Emri</label>
									<div class="controls">
									<input type="text" name="emri" id="emri" placeholder="Emri" required>
								</div>
								</div>
								<div class="control-group">
									<div class="controls">
									<button id="login" name="login" type="login" class="btn"><i class="icon-signin icon-large"></i>&nbsp;Submit</button>
								</div>
								</div>
								
								
						</form>
				
				</div>
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>