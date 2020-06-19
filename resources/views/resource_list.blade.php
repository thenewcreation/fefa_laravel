<!DOCTYPE HTML>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>FEFA | Power Solutions</title>
	<link rel="stylesheet" href="../css/style.css" type="text/css">
	<link rel="icon" href="../images/logof22.png">
</head>
<body>
	<div id="header">
				<div class="clearfix">
					<div id="option"> 
			 
						<input placeholder="Search this site"><button>OK</button>
						   </div>
						   
				<div id="option">
					<a id="login-btn" href="/login">Login</a>
				</div>
				
			</div>
		<div class="clearfix">
			
			<div class="menubar">
				<a href="/"><img src="../images/logof22.png" class="logo" height="100px;"></a>
				<div class="menus">
					<div id="menu"><a href="../contact.html">Contact</a></div>
					<div id="menu"><a href="../company.html">Company & Careers </a></div>
					<div id="menu"><a href="../resources.html">Resources</a> </div>
					<div id="menu"><a href="../products.html">Products and Services</a> </div>
					<!-- <div id="menu"><a href="solutions.html">Solutions</a> </div> -->
					<div id="menu"><a href="../expertise.html">Expertise</a></div>
					
				</div>
			</div>		
		</div>
	</div>
	
		
			<div class="clearfix">
				<div class="expertisetop">
					<div id="expertise-content"> <div class="breadcrumb">Home / Resources</div> </div>
					<div id="expertise-content2" style="width: 100%;height: 100px;">
						<div class="center-title"><h2 style="max-width: 270px;">Resources</h2></div>
					</div>
				</div>
	
				<div style="display: flex;">
					<ul class="left_nav" style="float:left; margin:10px 9px 0 0;width:200px;">
						
						<a href="resource_list.html"><li class="menu-btn">UPS<span class="expand">&#x203A;</span></li></a>
					
						<a href="resource_list.html"><li class="menu-btn" >Data Center<span class="expand">&#x203A;</span></li></a>
						  <a href="resource_list.html">
							<li class="menu-btn">Solar Power<span class="expand">&#x203A;</span></li>
							</a>
						
							<a href="resource_list.html">
								<li class="menu-btn">Special Solutions<span class="expand">&#x203A;</span></li>
								</a>
							<a href="resource_list.html">
							  <li class="menu-btn" >Batteries<span class="expand">&#x203A;</span></li>
							 </a>
						</ul>
					<div class="desc_group" >
						<div class="desc_box1">
							<div class="desc_header1">Downloads</div>
							@foreach($res as $message)
							<div class="desc_body2">
								<p> <span>PDF</span> <a href="../storage/{{$message ->file}}"> {{$message->title}} </a></p>
							</div>
							@endforeach
							<div class="paginator">
							{{$res->render()}}
							</div>
							<p style="padding:10px">Can't find a resource in this list? <a style="font-size: 14px;text-decoration:underline;" href="../resources.html">Request a catalogue</a></p>
						</div>
						
						
					</div>
					<div>
						<div class="right-custom-card">
							<div class="right-card-top">
								<span>Consultants</span>
							</div>
							<div class="custom-card-content"> 
								<p>Here you will find expert opinions, analysis, and recommendations to 
									your organization, based on our own expertise. </p>
								<!-- <a href="#">Design Resources</a>  -->
							<a href="consultancy.html">Consultancy areas</a> 
							</div>
							
						</div>
						<div class="right-custom-card">
							<div class="right-card-top1">
								<span>Contact info</span>
							</div>
							<ul class="contact" style="list-style: none;padding:0 10px;">
								<li>
									<p>
										
										 <em>FEFA Power Solutions</em> <br>Ata SB. Mah. Sümbül Cad, No:2/6 Pk:16600 Gemlik/Bursa
									</p>
								</li>
								<li>
									
										Phone: (+20) 000 222 999
		
										
								</li>
								<li>
										Fax: (+20) 000 222 988
						
								</li>
								<li>
									<p class="mail">
										Email: info@fefa.com.tr
									</p>
								</li>
							</ul>
						</div>
					</div>
					
			</div>
	
	</div>
	<div id="footer">
		<div class="clearfix">
			<div class="section">
				<h4>Latest News</h4>
				<p>
					This website template has been designed by Free Website Templates for you, for free. You can replace all this text with your own text. You can remove any link.
				</p>
			</div>
			<div class="section contact">
				<h4>Contact Us</h4>
				<p>
					<span>Address:</span> Ata SB. Mah. Sümbül Cad, No:2/6 Pk:16600 Gemlik/Bursa
				</p>
				<p>
					<span>Phone:</span> (+20) 000 222 999
				</p>
				<p>
					<span>Email:</span> info@address.com
				</p>
			</div>
			<div class="section">
				<h4>SEND US A MESSAGE</h4>
				<p>
					If you're having problems editing this website template, then don't hesitate to ask for help on the Forums.
				</p>
				<a href="#" class="subscribe">Click to send us an email</a>
			</div>
		</div>
		<div id="footnote">
			<div class="clearfix">
				<div class="connect">
					<a href="#" class="facebook"></a><a href="#" class="twitter"></a><a href="#" class="googleplus"></a><a href="#" class="pinterest"></a>
				</div>
				<p>
					© Copyright 2023 FEFA. All Rights Reserved.
				</p>
			</div>
		</div>
	</div>
</body>
</html>