	function validate(a,b,c,d){
		var ax=a.value;
		var bx=b.value;
		var cx=c.value;
		var dx=d.value;
		
		if(bx=="0" && cx=="0" && dx=="default" && ax=="default")
		{
		document.getElementById('jenjang').innerHTML="*";
		document.getElementById('status').innerHTML="*";
		document.getElementById('propinsi').innerHTML="*";
		document.getElementById('Kota/Kab.').innerHTML="*";
		} else if(bx!="0" && cx=="0" && dx=="default" && ax=="default")
		{
		document.getElementById('status').innerHTML="*";
		document.getElementById('propinsi').innerHTML="*";
		document.getElementById('Kota/Kab.').innerHTML="*";
		} else if( bx!="0" && cx!="0" && dx=="default" && ax=="default")
		{
		document.getElementById('propinsi').innerHTML="*";
		document.getElementById('Kota/Kab.').innerHTML="*";
		}  else if( bx=="0" && cx!="0" && dx!="default" && ax!="default")
		{
		 document.getElementById('jenjang').innerHTML="*"; 
		
		} else if( bx !="0" && cx=="0" && dx!="default" && ax!="default")
        	{
		 document.getElementById('status').innerHTML="*";
		
	    }else if( bx!="0" && cx!="0" && dx=="default" && ax!="default")
	    {
		 document.getElementById('propinsi').innerHTML="*";
		
		}else if( bx!="0" && cx!="0" && dx!="default" && ax=="default")
		{
		  document.getElementById('Kota/Kab.').innerHTML="*";
		}else if( bx!="0" && cx=="0" && dx!="default" && ax=="default")
		{
			document.getElementById('status').innerHTML="*";
		  document.getElementById('Kota/Kab.').innerHTML="*";
		 
		}else if( bx=="0" && cx!="0" && dx!="default" && ax=="default")
		{
			document.getElementById('jenjang').innerHTML="*";
		  document.getElementById('Kota/Kab.').innerHTML="*";
		 
		}else if( bx=="0" && cx=="0" && dx!="default" && ax!="default")
		{
			document.getElementById('status').innerHTML="*";
		  document.getElementById('jenjang').innerHTML="*";
		 
		}
		else if( bx=="0" && cx!="0" && dx!="default" && ax=="default")
		{
			document.getElementById('Kota/Kab.').innerHTML="*";
		  document.getElementById('jenjang').innerHTML="*";
		 
		}
		else if( bx=="0")
		{
		 document.getElementById('jenjang').innerHTML="*";
		
		} else if( cx=="0")
        	{
		 document.getElementById('status').innerHTML="*";
		
	    }else if(dx=="default")
	    {
		 document.getElementById('propinsi').innerHTML="*";
		
		}else if(ax=="default")
		{
		  document.getElementById('Kota/Kab.').innerHTML="*";
		}
		else
		 {
			coba(a,b,c,d);
		 }
		}
