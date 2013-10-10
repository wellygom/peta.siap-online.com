		function validate(a,b,c,d,e){
		var ax=a.value;
		var bx=b.value;
		var cx=c.value;
		var dx=d.value;
		var ex=e.value;
		
		document.getElementById('jenjang').innerHTML="";
		document.getElementById('status').innerHTML="";
		document.getElementById('propinsi').innerHTML="";
		document.getElementById('Kota/Kab.').innerHTML="";
		document.getElementById('akreditasiReq').innerHTML="";
		
		if ((bx=="0" || cx=="0") || ((dx=="default" || ax=="default") || ex=="default"))
		{
			if (ax=="default")
			{
				document.getElementById('Kota/Kab.').innerHTML="*";
			}
			
			if(bx=="0")
			{
				document.getElementById('jenjang').innerHTML="*";
			}
			
			if(cx=="0")
			{
				document.getElementById('status').innerHTML="*";
			}
			
			if (dx=="default")
			{
				document.getElementById('propinsi').innerHTML="*";
			}
			
			if (ex=="default")
			{
				document.getElementById('akreditasiReq').innerHTML="*";
			}
			
			
		}
		
		else 
		{
			window.location = "/portal/hasilakreditasi/" + ax + "/" + bx +"/"+ cx + "/"+dx + "/"+ ex;
		}
}
