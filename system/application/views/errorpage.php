<?php include("header.php"); ?>

</head>
<body style="padding:0; margin:0;"  >
<div id="border">
	<div id="wrapper">
		<div id="header">
			<?php include("header_body.php")?>
		</div>
	
			
<!-- =========================================== CONTENT =============================================== -->
			
                
		<div id="err_page" align="center">
		
        	<h1>Halaman yang anda minta tidak ditemukan.</h1>
			<div class="button-wrap">
			<div class="sider"> 
				<a href="<?=base_url();?>" class="input-button">Kembali ke Beranda</a>
        	</div>
			</div>
		</div>

			
<!-- =========================================== FOOTER =============================================== -->
			
		<?php include ('footer.php')?>
	</div><!-- end Wrapper -->
</div><!-- End border -->

</body>
</html>