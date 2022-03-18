<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Login Page</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- login -->
	<div class="login">
		<div class="container">
			<div class="row">
				<?php
				if($this->agent->is_mobile()){
					$this->load->view('auth/m_auth');
				}else{
					$this->load->view('auth/w_auth');
				}
				?>
			</div>
		</div>
	</div>
<!-- //login -->