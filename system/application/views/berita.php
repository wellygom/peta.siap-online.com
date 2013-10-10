<?php include("header.php"); ?>
<script type="text/javascript" src="<?=base_url();?>sknimg/js/berita.js"></script>
</head>
<!-- Awal wrapper sampai pembentukan header -->
<body style="padding:0; margin:0;">
<div id="border">
	<div id="wrapper">
		<div id="header">
			<?php include("header_body.php")?>
		</div>
		<div id="main">
			<div id="navigation">
   				<!-- List Menu -->
   				<?php include("menu.php"); ?>

   				<div id="banner">
				</div>
			</div>
			<div id="content">
				<div class="content-isi">
						 <div class="container">
                    <div class="content_info2">
                    <div>
                     <!-- news border -->
                        <div class="news-bdr">
                            <div class="r">
                                <div class="m">
                                    <div class="news-home">
                                    <!-- news header -->
                                        <div class="head">
                                        <table cellspacing="0" cellpadding="0" border="0">
                                            <tbody>
                                            	<tr>
                                            		<td class="title_hdr">INFO Berita Terbaru</td>
                                            	</tr>
                                            </tbody>
                                        </table>
                                        </div>
                                     		<div class="cont" id='berita-cont'style="padding-left:15px;">
                        					<div id='no-berita'><h3 class="judul">Tidak ada berita untuk bulan ini</h3></div>
                        					</div>
                                    </div>   
                                </div>
                            </div>
                        </div>
                     </div>
                     </div><!--end of class="content_info2"-->
                </div><!--end of class="container"-->

                </div><!--end of class="content-isi"-->

            </div><!--end of id="content"-->
            <div style="clear: both"></div>

        </div><!--end of class="main"-->

		<?php include ('footer.php')?>
	</div><!-- end Wrapper -->
</div><!-- End border -->

</body>
</html>