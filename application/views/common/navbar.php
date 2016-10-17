<nav class="navbar navbar-default navbar-fixed-top">
	<div class="vcd-topbar">
		<div class="container">
			<div class="col-md-3">
				<i class="fa fa-map-marker fa-fw"></i> DKI Jakarta
			</div>
			<div class="col-md-3 col-md-offset-6">
				<a href="#" data-toggle="modal" data-target="#loginModal" style="color:white">
					<i class="fa fa-user fa-fw"></i> Login/Register
				</a>	
			</div>
		</div>
	</div>
	<div class="vcd-navbar">
		  	<div class="container">
				<div class="col-md-4">
				<a href="<?php echo base_url('')?>" role="button">
					<div class="col-md-3 hidden-xs">
						<img src="<?php echo base_url('asset/images/logo.png')?>" class="img-responsive" style="margin-top:10px;">
					</div>
					<div class="col-md-3 col-xs-6 visible-xs">
						<img src="<?php echo base_url('asset/images/logo.png')?>" class="img-responsive" style="margin-top:10px">
					</div>
					<div class="col-md-9 col-xs-6">
						<h1><b>Alumni</b> UNJ</h1>
					</div>
					</a>
				</div>
				<div class="col-md-8 col-xs-12 col-sm-12">
					<nav class="navbar navbar-default ">
						<div class="nav menu sf-menu responsive-menu superfish sf-js-enabled">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#vcd-collapse-nav" aria-expanded="false">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					    </div>
					    <?php
							if($this->uri->segment(1)==""){
						?>
						<div class="collapse navbar-collapse" id="vcd-collapse-nav">
							<ul class="nav navbar-nav">
						        <li class="active"><a href="<?php echo base_url('')?>">Home <span class="sr-only">(current)</span></a></li>
						        <li><a href="#about">About</a></li>
						        <li><a href="#package">Tokoh Alumni</a></li>
						        <li><a href="#decoration">Alumni</a></li>
						        <li><a href="#gallery">News</a></li>
						        <li><a href="#contact">Contact Us</a></li>
						      </ul>
						</div>
						<?php
						}
						else {
						?>
						<div class="collapse navbar-collapse" id="vcd-collapse-nav">
							<ul class="nav navbar-nav">
						        <li><a href="<?php echo base_url('')?>">Home <span class="sr-only">(current)</span></a></li>
						        <li <?php if($this->uri->segment(2)=="about"){?> class="active"<?php } ?>><a href="<?php echo base_url('page/about')?>">About</a></li>
						        <li <?php if($this->uri->segment(2)=="tokoh_alumni"){?> class="active"<?php } ?>><a href="<?php echo base_url('page/tokoh_alumni')?>">Tokoh Alumni</a></li>
						        <li <?php if($this->uri->segment(2)=="alumni"){?> class="active"<?php } ?>><a href="<?php echo base_url('page/alumni')?>">Alumni</a></li>
						        <li <?php if($this->uri->segment(2)=="news"){?> class="active"<?php } ?>><a href="<?php echo base_url('page/news')?>">News</a></li>
						        <li <?php if($this->uri->segment(2)=="contact"){?> class="active"<?php } ?>><a href="<?php echo base_url('page/contact')?>">Contact Us</a></li>
						      </ul>
						</div>
						<?php
					}
					?>
					</nav>
				</div>
			</div>
	</div>
</nav>