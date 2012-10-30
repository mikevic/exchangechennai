<?php
$currentFile = $_SERVER["PHP_SELF"];
$parts = Explode('/', $currentFile);
$current_page =  $parts[count($parts) - 1];
?>
	<script src="js/cufon-yui.js" type="text/javascript"></script>
	<script src="js/fonts/chancur_400.font.js" type="text/javascript"></script>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <b><a class="brand fancyfont" style="color:yellow" href="#">Exchange Chennai</a></b>
          <div class="nav-collapse">
            <ul class="nav">
              <li <? if($current_page == 'index.php'){echo 'class="active"';} ?>><a href="http://exchangechennai.in">Home</a></li>
              <li <? if($current_page == 'eb.php'){echo 'class="active"';} ?> ><a href="eb.php">Contacts</a></li>
			  <li <? if($current_page == 'gcdp-tn.php'){echo 'class="active"';} ?>><a href="gcdp-tn.php">GCDP TN</a></li>
              <li <? if($current_page == 'gip-tn.php'){echo 'class="active"';} ?>><a href="gip-tn.php">GIP TN</a></li>
			  <li <? if($current_page == 'gcdp-ep.php'){echo 'class="active"';} ?>><a href="gcdp-ep.php">GCDP EP</a></li>
			  <li <? if($current_page == 'gip-ep.php'){echo 'class="active"';} ?>><a href="gip-ep.php">GIP EP</a></li>
			  <li <? if($current_page == 'exchange-experience.php'){echo 'class="active"';} ?>><a href="exchange-experience.php">Experiences Delivered</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
	
	