<?php include("header.php"); ?>
<script>
$.getJSON("/portal/detilberitaGetJson/"+<?=$idberita?>+"/",   		
	function(data){
		$('#berita-cont').append("<h3 style='padding-left:15px' class='judul'>"+data.data['post_title']+"</h3>");
		$('#berita-cont').append("<div class='date'>"+data.data['post_date']+"</div>");
		$('#berita-cont').append("<div class='text_content'>"+data.data['post_content']+"</div>");

	});
</script>
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
				                        <table cellpadding="0" cellspacing="0" border="0">
				                          <tr>
				                            <td class="title_hdr">INFO Berita Terbaru</td>
				                          </tr>
				                        </table>
				                      </div>
				                      <table class="skn-nav" border="0" cellspacing="0" cellpadding="0">
				                        <td class="nav-right"></td>
				                        </tr>
				                      </table>
				                      <div class="cont" id='berita-cont'>
				                        
				                        
				                        
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