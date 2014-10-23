<!DOCTYPE html>
<html>
    <head>
        <title><?php echo "$title"; ?></title>
		<link rel="stylesheet" href="<?php base_url()?>packages/uikit/css/uikit.almost-flat.min.css" />
		<link rel="stylesheet" href="<?php base_url()?>css/app.css" />
		<link href="<?php base_url()?>css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="<?php base_url()?>css/style.css" rel="stylesheet" media="screen">
		<link href="<?php base_url()?>packages/uikit/css/addons/uikit.addons.min.css" rel="stylesheet" media="screen">
		<link href="<?php base_url()?>foto/favicon.ico" rel="shortcut icon" />
		<!-- JavaScript -->
        <script src="<?php base_url()?>components/jquery/jquery.min.js"></script>
        <script src="<?php base_url()?>packages/uikit/js/uikit.min.js"></script>
        <script src="<?php base_url()?>packages/uikit/js/addons/datepicker.min.js"></script>
		<script src="<?php base_url()?>js/jquery.min.js"></script>
		<script src="<?php base_url()?>js/bootstrap.min.js"></script>
		<script src="<?php base_url()?>js/script.js"></script>   		
    </head>
    <body>
		<nav class="navbar navbar-php-id" role="navigation">
  			<div class="container-fluid">
				<div class="navbar-header">      
      				<span class="navbar-brand">
        				<a href="#"><img src="<?php base_url()?>foto/Logo SB Plan putih.png" align="absmiddle" style="margin-top:-9px;" width=320 height=10></a>
      				</span>
    			</div>

	
	<span class="logout">
		<a href="<?php base_url()?>verifylogin/logout" class="logoutmenu"> Logout</a>
	</span>


            <div class="uk-navbar-nav uk-navbar-flip">
                <li class="uk-parent" data-uk-dropdown>
                    <a href="">
					
<img src="<?php base_url()?>foto/adminblu.png" width=30 height=30 align="absmiddle" class="gbruser"> &nbsp;user : Administrator Super ()
						</a>
                    <div class="uk-dropdown uk-dropdown-navbar">
                        <ul class="uk-nav uk-nav-navbar">
                            <li><a href="<?php base_url()?>editpassword">Ubah Password</a></li>
                            <li class="uk-nav-divider"></li>
                            <li><a href="<?php base_url()?>logout">Logout</a></li>
                        </ul>
                    </div>
                </li>
            </div>
	


  </div>
  <!-- /.container-fluid -->

</nav>
<!-- /.navbar  -->	
		
      
                 
    <!-- .container -->
    <div class="container-fluid">

	
	
      <!-- .row -->
      <div class="row">

        <!-- #menu -->
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" id="menu">
    <ul class="nav nav-pills nav-stacked nav-parent">
            <?php echo "$menu";?>
    </ul>
</div>
        <!-- /#menu -->

        <!-- #konten -->
        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9" id="konten">
          <?php echo "$contents"; ?>
        </div>
        <!-- /#konten -->

      </div>
      <!-- /.row -->

    </div>
    <!-- .container -->
		
		
    <!-- modal -->
    <!-- .modal -->
<div class="modal fade" id="konfirmasi" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">

  <!-- .modal-dialog -->
  <div class="modal-dialog">

    <!-- .modal-content -->
    <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title">
          Konfirmasi Hapus <span class="modal-objek"></span>
        </h4>
      </div>

      <div class="modal-body">
        Apakah anda yakin ingin menghapus data <span class="modal-objek"></span> dengan kode  <strong id="modal-kode"></strong>?
      </div>

      <div class="modal-footer">
        <button class="btn btn-primary" id="yes">Ya</button>
        <button class="btn btn-default" id="no" data-dismiss="modal">Tidak</button>
      </div>

    </div>
    <!-- .modal-content -->

  </div>
  <!-- /.modal-dialog -->

</div>
<!-- /.modal

<!-- .modal -->
<div class="modal fade" id="modal-foto" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">

  <!-- .modal-dialog -->
  <div class="modal-dialog">

    <!-- .modal-content -->
    <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title">Foto <span id="nama-foto"></span></h4>
      </div>

      <div class="modal-body text-center">
        <img src="" alt="" class="img-responsive img-thumbnail" id="img-foto">
      </div>

      <div class="modal-footer">
        <button class="btn btn-default" id="no" data-dismiss="modal">Tutup</button>
      </div>

    </div>
    <!-- .modal-content -->

  </div>
  <!-- /.modal-dialog -->

</div>
<!-- /.modal

<!-- start footer-->
	<!-- start bagian footer -->
<footer>
		<div class="content">   
			<div class="box">2014 © Smart Logic Pro. Tous droits réservés.</div>
			<div class="box"><strong>Find me on: </strong>
				<a href="http://www.smartlogicpro.com">Website</a> / <a href="http://www.facebook.com/slpro">Facebook</a> / <a href="http://www.twitter.com/@smartlogicpro">Twitter</a>
				<br><br><strong>Phone:</strong> +62.274. 488 272 
				<strong>Email:</strong> info@smartlogicpro.com
			</div>
		</div>
</footer>	
<!-- end bagian footer -->	<!-- end footer-->

            
       

		
	
	

    </body>
</html>
