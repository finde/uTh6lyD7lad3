<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $title ?> -JL Hospital</title>
	<link href="/jh/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="/jh/css/styles.css"  >
		 
	 
	 
   </head>
  <body>
  <div class="navbar navbar-inverse navbar-static-top" >

	<div class ="container">
		<a href ="#" class ="navbar-brand"> JL Hospital </a>
		<button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
			<span class ="icon-bar"></span>
			<span class ="icon-bar"></span>
			<span class ="icon-bar"></span>
		</button>
		<div class="collapse navbar-collapse navHeaderCollapse">
			<ul class="nav navbar-nav navbar-right">
			
				
				<li class="active"> <a href="/jh/home">Home</a></li>
						
				<li class="dropdown">
					<a href ="#" class= "dropdown-toggle" data-toggle="dropdown">Profile <b class="caret"b></b>
						<ul class="dropdown-menu">
												
							<li><a href ="/jh/login">Login</a></li>
							<!--<li><a href ="#">Log out</a></li> -->
							<li><?php echo anchor('Menu_Patient/logout','Logout'); ?></li>

						</ul>
				</li>
				<li> <a href="#contact" data-toggle="modal">Contact</a></li>
			</ul>
		
		
		</div>
	</div>
</div> <!--End header -->

<!--start Modal(Popup contact form) -->
<div class="modal fade" id="contact" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			
			
		
				<div class="modal-header">
					<p>Contact us</p>
				</div>
				<div class="modal-body">
					<h3>Leave a comment / inquiry</h3>
					
					<div class="form-group">
						<label for="contact-name" class="col-lg-2 control-label">Name:</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="contact-name" name="contact-name" placeholder="fullname" value="<?php echo set_value('contact-name');?>">
							
						</div>
					</div>
					
					<div class="form-group">
						<label for="contact-email" class="col-lg-2 control-label">Email:</label>
						<div class="col-lg-10">
							<input type="email" class="form-control" id="contact-email" name="contact-email" value="
							<?php echo set_value('contact-email');?>" placeholder="you@example.com">
						
						</div>
					</div>
					<div class="form-group">
						<label for="contact-subject" class="col-lg-2 control-label">Subject:</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="contact-subject" name="contact-subject" placeholder="Subject" value="<?php echo set_value('contact-subject');?>">
							
						</div>
					</div>
					
					<div class="form-group">
						<label for="contact-msg" class="col-lg-2 control-label">Message:</label>
						<div class="col-lg-10">
							<textarea class="form-control" rows="8" id="inputMessage" name="inputMessage" value="
							<?php echo set_value('inputMessage');?>"></textarea>
						</div>
					</div>

				</div>
				<div class="modal-footer">
					<button class="btn btn-primary" type="submit">Send</button>
					<a class="btn btn-default" data-dismiss="modal">Close</a>
				</div>
			</form>
		</div>
	</div>

</div>