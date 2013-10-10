    function validate(e){
		var ex=e.value;
		
		document.getElementById('nama_sekolah').innerHTML="";
		
		if (ex==""){
			document.getElementById('nama_sekolah').innerHTML="*";
		}
		
		else{
			window.location = "/portal/hasilpencarian/"+ex;
		}
}
