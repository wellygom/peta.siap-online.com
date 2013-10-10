<form name="frm" id="frm" action="" method="post" >

		<tr class="trEvn">
		
			<td class="colEvn">Propinsi</td>
			<td>
				<select name="selOne" id="selOne" onchange="fillSelBox(this, 'selTwo');">
					<option value="default" >Pilih Propinsi</option>
					<option value="101">Nanggroe Aceh Darussalam</option>
                    <option value="102">Sumatera Utara</option>
                    <option value="103">Sumatera Barat</option>
                    
                    <option value="104">Riau</option>
                    <option value="105">Jambi</option>
                    <option value="106">Sumatera Selatan</option>
                    <option value="107">Bengkulu</option>
                    <option value="108">Lampung</option>
                    <option value="109">Kepulauan Bangka Belitung</option>
                    
                    <option value="110">Kepulauan Riau</option>
                    <option value="201">DKI Jakarta</option>
                    <option value="202">Jawa Barat</option>
                    <option value="203">Jawa Tengah</option>
                    <option value="204">DI Yogyakarta</option>
                    <option value="205">Jawa Timur</option>
                    
                    <option value="206">Banten</option>
                    <option value="301">Kalimantan Barat</option>
                    <option value="302">Kalimantan Tengah</option>
                    <option value="303">Kalimantan Selatan</option>
                    <option value="304">Kalimantan Timur</option>
                    <option value="401">Sulawesi Utara</option>
                    
                    <option value="402">Sulawesi Tengah</option>
                    <option value="403">Sulawesi Selatan</option>
                    <option value="404">Sulawesi Tenggara</option>
                    <option value="405">Gorontalo</option>
                    <option value="406">Sulawesi Barat</option>
                    <option value="501">Bali</option>
                    
                    <option value="502">Nusa Tenggara Barat</option>
                    <option value="503">Nusa Tenggara Timur</option>
                    <option value="601">Maluku</option>
                    <option value="602">Maluku Utara</option>
                    <option value="603">Papua</option>
                    <option value="604">Irian Jaya Barat</option>
				</select> <br>
			</td>
			<td><div id="propinsi"></div></td>
		<tr class ="trOdd">
			<td class ="colEvn">Kota/Kab.</td>
			<td>
				<select name="selTwo" id="selTwo">
					<option value="default">Kota/Kabupaten</option>
				</select><br>
			</td>
			<td><div id="Kota/Kab."></div></td>
		</tr>
		<tr class="trEvn">	
			<td class="colEvn">Jenjang </td>
			<td>
				<select name="k_jenjang" id="k_jenjang">
                    <option value="0">Jenjang</option>
                    <option value="1">SD</option>
                    <option value="2">SMP</option>
                    <option value="3">SMA</option>
                    
              	</select><br>
            </td>
			<td><div id="jenjang"></div></td>
		</tr>
		<tr class ="trOdd">
			<td class ="colEvn">Status</td>
			<td>
				<select name="k_status" id="k_status">
                    <option value="0">Status</option>
                    <option value="1">Negeri Dibawah Diknas</option>
                    <option value="2">Swasta Dibawah Diknas</option>
                    <option value="6">Kejuruan Negeri</option>
                    <option value="7">Kejuruan Swasta</option>
                    <option value="8">Negeri Dibawah Depag</option>
                    <option value="9">Swasta Dibawah Depag</option>
				</select><br>
			</td>
			<td><div id="status"></div></td>	
		</tr>
		<tr class="trEvn">
			<td class="colEvn"></td>
			<td><input type="button" id="okButton" style="color:#000000; font-family: Geneva, Arial, Helvetica, sans-serif; font-size:11px" value="Cari Data" onClick="validate(document.getElementById('selTwo'), document.getElementById('k_jenjang'), document.getElementById('k_status'), document.getElementById('selOne'));"></td>
			<td></td>
		</tr>

</form>

