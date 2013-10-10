$.getJSON("/portal/beritaGetJson/",   		
	function(data){
		$.each(data.data_idx, function(i,item){
			if(i!='edit_date'){
				$("#no-berita").remove();
				$.each(item, function(j,itemnew){
					if(j!='total'){
						$("#berita-cont").append("<h3 class='judul'><a style='color:#004589;' href='/portal/detilberita/"+itemnew.id+"'>"+itemnew.post_title+"</a></h3>");
						$("#berita-cont").append("<div class='date'>"+itemnew.post_date+"</div>");
						$("#berita-cont").append("<div class='text_content'><p>"+itemnew.post_prolog+"</p></div>");
						$("#berita-cont").append("<div class='dotted'></div>");
					}
				});
			}			
		});	
	});