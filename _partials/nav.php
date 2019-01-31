<div class="header">
    <div class="container">
        <nav class="navbar navbar-default navbar-fixed-top nav-color">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="w3layouts-logo col-md-4 col-sm-3 col-xs-3 padding-0">
                    <a href="index.php"><img src="images/logo.jpg" class="img-responsive" alt=""></a>
                </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse nav-wil nav-background" id="bs-example-navbar-collapse-1">
                <nav>
                    <ul class="nav navbar-nav nav-bar-color nav-bar-margin">
                        <li class="<?php if ($page ==  'home') {echo 'active';}?>"><a href="index.php">Home</a></li>
                        <li class="<?php if ($page ==  'about') {echo 'active';}?>"><a href="about.php">About</a></li>
                        <li class="<?php if ($page ==  'gallery') {echo 'active';}?>"><a href="gallery.php">Portfolio</a></li>
                        <li class="<?php if ($page ==  'contact') {echo 'active';}?>"><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
    </div>
</div>
<!-- //header -->