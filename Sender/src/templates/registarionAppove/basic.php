<?php

return $data = <<<HERE
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta name="viewport" content="width=device-width" />

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Thanks for registration</title>
	
<link rel="stylesheet" type="text/css" href="Sender/src/templates/registarionAppove/stylesheets/email.css" />

</head>
 
<body bgcolor="#FFFFFF">

<table class="head-wrap" bgcolor="#999999">
	<tr>
		<td></td>
		<td class="header container" >
				
				<div class="content">
				<table bgcolor="#999999">
					<tr>
						<td><img src="http://placehold.it/200x50/" /></td>
						<td align="right"><h6 class="collapse">Thanks for registration</h6></td>
					</tr>
				</table>
				</div>
				
		</td>
		<td></td>
	</tr>
</table><!-- /HEADER -->


<!-- BODY -->
<table class="body-wrap">
	<tr>
		<td></td>
		<td class="container" bgcolor="#FFFFFF">

			<div class="content">
			<table>
				<tr>
					<td>
						<h3>Hi, <?php $user?></h3>
						<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam culpa cupiditate delectus distinctio doloremque enim est eveniet, facere inventore laboriosam molestias odio perferendis quasi saepe veritatis vero voluptates voluptatibus, voluptatum.</p>
						<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, odit, voluptate. Ab, amet commodi est explicabo itaque maiores minima nobis quam quia quibusdam quisquam reiciendis reprehenderit repudiandae sit voluptas. Impedit!</p>
						<!-- Callout Panel -->
						<p class="callout">
							if u want watch new go to my siti <a href="#">Click it! &raquo;</a>
						</p><!-- /Callout Panel -->					
												
						<!-- social & contact -->
						<table class="social" width="100%">
							<tr>
								<td>
									
									<!-- column 1 -->
									<table align="left" class="column">
										<tr>
											<td>				
												
												<h5 class="">Connect with Us:</h5>
												<p class=""><a href="#" class="soc-btn fb">Facebook</a> <a href="#" class="soc-btn tw">Twitter</a> <a href="#" class="soc-btn gp">Google+</a></p>
						
												
											</td>
										</tr>
									</table><!-- /column 1 -->	
									
									<!-- column 2 -->
									<table align="left" class="column">
										<tr>
											<td>				
																			
												<h5 class="">Contact Info:</h5>												
												<p>Phone: <strong>068 - 891 80 62</strong><br/>
                Email: <strong><a href="emailto:hseldon@trantor.com">smeekl@mail.ru</a></strong></p>
                
											</td>
										</tr>
									</table><!-- /column 2 -->
									
									<span class="clear"></span>	
									
								</td>
							</tr>
						</table><!-- /social & contact -->
						
					</td>
				</tr>
			</table>
			</div><!-- /content -->
									
		</td>
		<td></td>
	</tr>
</table><!-- /BODY -->

<!-- FOOTER -->
<table class="footer-wrap">
	<tr>
		<td></td>
		<td class="container">
			
				<!-- content -->
				<div class="content">
				<table>
				<tr>
					<td align="center">
						<p>
							<a href="#">Terms</a> |
							<a href="#">Privacy</a> |
							<a href="#"><unsubscribe>Unsubscribe</unsubscribe></a>
						</p>
					</td>
				</tr>
			</table>
				</div><!-- /content -->
				
		</td>
		<td></td>
	</tr>
</table><!-- /FOOTER -->

</body>
</html>
HERE;