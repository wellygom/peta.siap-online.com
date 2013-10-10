function fillSelBox(srcElem, destName) {
	 var propinsi =
      {
      	"101" : "Nangroe Aceh Darussalam",
	"102" : "Sumatera Utara",
	"103" :"Sumatera Barat",
	"104" : "Riau",
	"105" :"Jambi",
	"106" :"Sumatera Selatan",
	"107" :"Bengkulu",
	"108" :"Lampung",
	"109" :"Kepulauan Bangka Belitung",

	"110" :"Kepulauan Riau",
	"201" :"DKI Jakarta",
	"202" :"Jawa Barat",
	"203" :"Jawa Tengah",
	"204" :"DI Yogyakarta",
	"205" :"Jawa Timur",

	"206" :"Banten",
	"301" :"Kalimantan Barat",
	"302" :"Kalimantan Tengah",
	"303" :"Kalimantan Selata",
	"304" :"Kalimantan Timur",
	"401" :"Sulawesi Utara",

	"402" :"Sulawesi Tengah",
	"403" :"Sulawesi Selatan",
	"404" :"Sulawesi Tenggara",
	"405" :"Gorontalo",
	"406" :"Sulawesi Barat",
	"501" :"Bali",

	"502" :"Nusa Tenggara Barat",
	"503" :"Nusa Tenggara Timur",
	"601" :"Maluku",
	"602" :"Maluku Utara",
	"603" :"Papua",
	"604" :"Irian Jaya Barat"						
      };
      
      
	
	var select = srcElem.options[srcElem.selectedIndex].value;
	var address="";
	for(var key in propinsi) {
        if(key == select) {
          address = propinsi[key];
          }
        }
        
      
         var geocoder = new GClientGeocoder();      
	 geocoder.getLatLng(
          address+",indonesia",
          function(point) {
         
          mapf = new GMap2(document.getElementById("map_canvas"));
	 mapf.setCenter(point, 6);
	mapf.addControl(new GSmallMapControl());
    mapf.addControl(new GMapTypeControl());
	for (propinsi in states) {
	var polygon = createPoly(propinsi);
	mapf.addOverlay(polygon);
	}
         	});

	

      var selOne = srcElem;
      var frm = srcElem.form;
      var selTwo = frm.elements[destName];
     
      var map = 
      {
            	"101": 
        {"default": "Kabupaten / Kota"
                , 8306: "Kab. Aceh Besar"
                , 8307: "Kab. Pidie"
                , 8308: "Kab. Aceh Utara"
                , 8309: "Kab. Aceh Timur"
                , 8310: "Kab. Aceh Tengah"
                , 8311: "Kab. Aceh Barat"
                , 8312: "Kab. Aceh Selatan"
                , 8313: "Kab. Aceh Tenggara"
                , 8314: "Kab. Simeulue"
                , 8315: "Kab. Bireuen"
                , 8316: "Kab. Aceh Singkil"
                , 8317: "Kab. Aceh Tamiang"
                , 8436: "Kab. Pidie Jaya"
                , 8437: "Kota Subulussalam"
                , 8568: "Kab. Gayo Luas"
                , 8569: "Kab. Aceh Nagan Raya"
                , 8570: "Kab. Aceh Barat Daya"
                , 8571: "Kab. Aceh Jaya"
                , 8572: "Kab. Bener Meriah"
                , 8573: "Kota Sabang"
                , 8574: "Kota Banda Aceh"
                , 8575: "Kota Lhokseumawe"
                , 8576: "Kota Langsa"
                },
     	      	"102": 
        {"default": "Kabupaten / Kota"
                , 8279: "Kab. Nias Selatan"
                , 8280: "Kab. Pakpak Bharat"
                , 8281: "Kab. Humbang Hasundutan"
                , 8282: "Kab. Samosir"
                , 8283: "Kab. Serdang Bedagai"
                , 8284: "Kota Medan"
                , 8285: "Kota Binjai"
                , 8286: "Kota Tebing Tinggi"
                , 8287: "Kota Pematang Siantar"
                , 8288: "Kota Tanjung Balai"
                , 8289: "Kota Sibolga"
                , 8290: "Kota Padang Sidempuan"
                , 8447: "Kabupaten Batubara"
                , 8577: "Kab. Deli Serdang"
                , 8578: "Kab. Langkat"
                , 8579: "Kab. Karo"
                , 8580: "Kab. Simalungun"
                , 8581: "Kab. Dairi"
                , 8582: "Kab. Asahan"
                , 8583: "Kab. Labuhan Batu"
                , 8584: "Kab. Tapanuli Utara"
                , 8585: "Kab. Tapanuli Tengah"
                , 8586: "Kab. Tapanuli Selatan"
                , 8587: "Kab. Nias"
                , 8588: "Kab. Mandailing Natal"
                , 8589: "Kab. Toba Samosir"
                , 8590: "Kabupaten Padang Lawas"
                , 8591: "Kabupaten Padang Lawas Utara"
                },
     	      	"103": 
        {"default": "Kabupaten / Kota"
                , 8291: "Kab. Agam"
                , 8292: "Kab. Pasaman"
                , 8293: "Kab. Lima Puluh Kota"
                , 8294: "Kab. Solok"
                , 8295: "Kab. Padang Pariaman"
                , 8296: "Kab. Pesisir Selatan"
                , 8297: "Kab. Tanah Datar"
                , 8298: "Kab. Sawah Lunto Sijunjung"
                , 8299: "Kab. Kepulauan Mentawai"
                , 8300: "Kab. Pasaman Barat"
                , 8301: "Kab. Dharmasraya"
                , 8302: "Kab. Solok Selatan"
                , 8303: "Kota Bukittinggi"
                , 8304: "Kota Padang"
                , 8305: "Kota Padang Panjang"
                , 8391: "Kota Sawahlunto"
                , 8392: "Kota Solok"
                , 8393: "Kota Payakumbuh"
                , 8394: "Kota Pariaman"
                },
     	      	"104": 
        {"default": "Kabupaten / Kota"
                , 8395: "Kab. Kampar"
                , 8396: "Kab. Bengkalis"
                , 8397: "Kab. Indragiri Hulu"
                , 8398: "Kab. Indragiri Hilir"
                , 8399: "Kab. Pelalawan"
                , 8400: "Kab. Rokan Hulu"
                , 8401: "Kab. Rokan Hilir"
                , 8402: "Kab. Siak"
                , 8403: "Kab. Kuantan Singing"
                , 8404: "Kota Pekanbaru"
                , 8405: "Kota Dumai"
                },
     	      	"105": 
        {"default": "Kabupaten / Kota"
                , 8406: "Kab. Batanghari"
                , 8407: "Kab. Bungo"
                , 8409: "Kab. Tanjung Jabung Barat"
                , 8410: "Kab. Kerinci"
                , 8411: "Kab. Muara Jambi"
                , 8412: "Kab. Tebo"
                , 8413: "Kab. Sarolangun"
                , 8414: "Kab. Tanjung Jabung Timur"
                , 8415: "Kota Jambi"
                , 8427: "Kab. Merangin"
                },
     	      	"106": 
        {"default": "Kabupaten / Kota"
                , 8416: "Kab. Musi Banyuasin"
                , 8417: "Kab. Ogan Komering Ilir"
                , 8418: "Kab. Ogan Komering Ulu"
                , 8419: "Kab. Muara Enim"
                , 8446: "Kab. Empat Lawang"
                , 8477: "Kab. Lahat"
                , 8478: "Kab. Musi Rawas"
                , 8479: "Kab. Banyuasin"
                , 8480: "Kab. Ogan Ilir"
                , 8481: "Kab. Oku Selatan"
                , 8482: "Kab. Oku Timur"
                , 8483: "Kota Palembang"
                , 8484: "Kota Lubuk Linggau"
                , 8485: "Kota Prabumulih"
                , 8486: "Kota Pagar Alam"
                },
     	      	"107": 
        {"default": "Kabupaten / Kota"
                , 8487: "Kab. Bengkulu Utara"
                , 8488: "Kab. Rejang Lebong"
                , 8489: "Kab. Bengkulu Selatan"
                , 8490: "Kab. Muko-Muko"
                , 8491: "Kab. Seluma"
                , 8492: "Kab. Kaur"
                , 8493: "Kab. Lebong"
                , 8494: "Kab. Kepahiang"
                , 8495: "Kota Bengkulu"
                },
     	      	"108": 
        {"default": "Kabupaten / Kota"
                , 8496: "Kab. Lampung Selatan"
                , 8497: "Kab. Lampung Tengah"
                , 8498: "Kab. Lampung Utara"
                , 8499: "Kab. Lampung Barat"
                , 8500: "Kab. Tulang Bawang"
                , 8501: "Kab. Tanggamus"
                , 8502: "Kab. Lampung Timur"
                , 8503: "Kab. Way Kanan"
                , 8504: "Kota Bandar Lampung"
                , 8535: "Kota Metro"
                },
     	      	"109": 
        {"default": "Kabupaten / Kota"
                , 8536: "Kab. Bangka Barat"
                , 8537: "Kab. Bangka Tengah"
                , 8538: "Kab. Bangka Selatan"
                , 8539: "Kab. Belitung Barat"
                , 8540: "Kab. Belitung Timur"
                , 8541: "Kab. Bangka"
                , 8542: "Kab. Belitung"
                , 8543: "Kota Pangkal Pinang"
                },
     	      	"110": 
        {"default": "Kabupaten / Kota"
                , 8424: "Kab. Bintan"
                , 8544: "Kab. Kepulauan Riau"
                , 8545: "Kab. Karimun"
                , 8546: "Kab. Natuna"
                , 8547: "Kab. Lingga"
                , 8548: "Kota Batam"
                , 8549: "Kota Tanjung Pinang"
                },
     	      	"201": 
        {"default": "Kabupaten / Kota"
                , 8550: "Kab. Kepulauan Seribu"
                , 8551: "Kota Jakarta Pusat"
                , 8552: "Kota Jakarta Utara"
                , 8553: "Kota Jakarta Barat"
                , 8554: "Kota Jakarta Selatan"
                , 8555: "Kota Jakarta Timur"
                },
     	      	"202": 
        {"default": "Kabupaten / Kota"
                , 8429: "Kab. Bandung Barat"
                , 8556: "Kab. Bogor"
                , 8557: "Kab. Sukabumi"
                , 8558: "Kab. Cianjur"
                , 8559: "Kab. Bandung"
                , 8560: "Kab. Sumedang"
                , 8561: "Kab. Garut"
                , 8562: "Kab. Tasikmalaya"
                , 8563: "Kab. Ciamis"
                , 8629: "Kab. Kuningan"
                , 8630: "Kab. Majalengka"
                , 8631: "Kab. Cirebon"
                , 8632: "Kab. Indramayu"
                , 8633: "Kab. Subang"
                , 8634: "Kab. Purwakarta"
                , 8635: "Kab. Kerawang"
                , 8636: "Kab. Bekasi"
                , 8637: "Kota Bandung"
                , 8638: "Kota Bogor"
                , 8639: "Kota Sukabumi"
                , 8640: "Kota Cirebon"
                , 8641: "Kota Bekasi"
                , 8642: "Kota Depok"
                , 8643: "Kota Cimahi"
                , 8644: "Kota Tasikmalaya"
                , 8645: "Kota Banjar"
                },
     	      	"203": 
        {"default": "Kabupaten / Kota"
                , 8426: "Kab. Magelang"
                , 8646: "Kab. Cilacap"
                , 8647: "Kab. Banyumas"
                , 8648: "Kab. Purbalingga"
                , 8649: "Kab. Banjarnegara"
                , 8650: "Kab. Kebumen"
                , 8651: "Kab. Purworejo"
                , 8652: "Kab. Wonosobo"
                , 8654: "Kab. Boyolali"
                , 8655: "Kab. Klaten"
                , 8656: "Kab. Sukoharjo"
                , 8657: "Kab. Wonogiri"
                , 8686: "Kab. Karanganyar"
                , 8687: "Kab. Sragen"
                , 8688: "Kab. Grobogan"
                , 8689: "Kab. Blora"
                , 8690: "Kab. Rembang"
                , 8691: "Kab. Pati"
                , 8692: "Kab. Kudus"
                , 8693: "Kab. Jepara"
                , 8694: "Kab. Demak"
                , 8695: "Kab. Semarang"
                , 8696: "Kab. Temanggung"
                , 8697: "Kab. Kendal"
                , 8698: "Kab. Batang"
                , 8699: "Kab. Pekalongan"
                },
     	      	"204": 
        {"default": "Kabupaten / Kota"
                , 8709: "Kab. Bantul"
                , 8710: "Kab. Sleman"
                , 8711: "Kab. Gunung Kidul"
                , 8712: "Kab. Kulonprogo"
                , 8713: "Kota Yogyakarta"
                },
     	      	"205": 
        {"default": "Kabupaten / Kota"
                , 8250: "Kab. Lamongan"
                , 8251: "Kab. Madiun"
                , 8252: "Kab. Ngawi"
                , 8253: "Kab. Magetan"
                , 8254: "Kab. Ponorogo"
                , 8255: "Kab. Pacitan"
                , 8256: "Kab. Kediri"
                , 8257: "Kab. Nganjuk"
                , 8258: "Kab. Blitar"
                , 8259: "Kab. Tulungagung"
                , 8260: "Kab. Trenggalek"
                , 8261: "Kab. Malang"
                , 8262: "Kab. Pasuruan"
                , 8263: "Kab. Probolinggo"
                , 8264: "Kab. Lumajang"
                , 8265: "Kab. Bondowoso"
                , 8266: "Kab. Situbondo"
                , 8267: "Kab. Jember"
                , 8268: "Kab. Banyuwangi"
                , 8269: "Kab. Pamekasan"
                , 8270: "Kab. Sampang"
                , 8271: "Kab. Sumenep"
                , 8272: "Kab. Bangkalan"
                , 8273: "Kota Surabaya"
                , 8274: "Kota Malang"
                , 8275: "Kota Madiun"
                , 8276: "Kota Kediri"
                , 8277: "Kota Mojokerto"
                , 8278: "Kota Blitar"
                , 8320: "Kota Pasuruan"
                , 8321: "Kota Probolinggo"
                , 8322: "Kota Batu"
                },
     	      	"206": 
        {"default": "Kabupaten / Kota"
                , 8323: "Kab. Pandeglang"
                , 8324: "Kab. Lebak"
                , 8325: "Kab. Tangerang"
                , 8326: "Kab. Serang"
                , 8327: "Kota Cilegon"
                , 8328: "Kota Tangerang"
                },
     	      	"301": 
        {"default": "Kabupaten / Kota"
                , 8329: "Kab. Sambas"
                , 8330: "Kab. Pontianak"
                , 8331: "Kab. Sanggau"
                , 8332: "Kab. Sintang"
                , 8333: "Kab. Kapuas Hulu"
                , 8334: "Kab. Ketapang"
                , 8363: "Kota Singkawang"
                , 8408: "Kab. Sekadau"
                , 8438: "Kab. Kayong Utara"
                , 8439: "Kab. Kubu Raya"
                , 8564: "Kab. Bengkayang"
                , 8565: "Kab. Landak"
                , 8566: "Kab. Malawi"
                , 8567: "Kota Pontianak"
                },
     	      	"302": 
        {"default": "Kabupaten / Kota"
                , 8364: "Kab. Kapuas"
                , 8365: "Kab. Barito Selatan"
                , 8366: "Kab. Barito Utara"
                , 8367: "Kab. Kotawaringin Timur"
                , 8368: "Kab. Kotawaringin Barat"
                , 8369: "Kab. Pulang Pisau"
                , 8370: "Kab. Gunung Mas"
                , 8371: "Kab. Barito Timur"
                , 8372: "Kab. Sukamara"
                , 8373: "Kab. Katingan"
                , 8374: "Kab. Lamandau"
                , 8375: "Kab. Seruyan"
                , 8376: "Kab. Murung Raya"
                , 8377: "Kota Palangkaraya"
                },
     	      	"303": 
        {"default": "Kabupaten / Kota"
                , 8378: "Kab. Banjar"
                , 8379: "Kab. Tanah Laut"
                , 8380: "Kab. Barito Kuala"
                , 8381: "Kab. Tapin"
                , 8382: "Kab. Hulu Sungai Selatan"
                , 8383: "Kab. Hulu Sungai Tengah"
                , 8384: "Kab. Hulu Sungai Utara"
                , 8385: "Kab. Tabalong"
                , 8386: "Kab. Kotabaru"
                , 8387: "Kab. Tanah Bumbu"
                , 8388: "Kab. Balangan"
                , 8389: "Kota Banjarmasin"
                , 8390: "Kota Banjarbaru"
                },
     	      	"304": 
        {"default": "Kabupaten / Kota"
                , 8431: "Kab. Tana Tidung"
                , 8448: "Kab. Paser"
                , 8449: "Kab. Kutai Kartanegara"
                , 8450: "Kab. Berau"
                , 8451: "Kab. Bulungan"
                , 8452: "Kab. Malinau"
                , 8453: "Kab. Nunukan"
                , 8454: "Kab. Kutai Barat"
                , 8455: "Kab. Kutai Timur"
                , 8456: "Kab. Penajam Paser Utara"
                , 8457: "Kota Samarinda"
                , 8458: "Kota Balikpapan"
                , 8459: "Kota Tarakan"
                , 8460: "Kota Bontang"
                },
     	      	"401": 
        {"default": "Kabupaten / Kota"
                , 8432: "Kab. Bolaang Mongondow Utara"
                , 8433: "Kab. Kepl. Sitaro"
                , 8434: "Kab. Minahasa Tenggara"
                , 8435: "Kota Kotamobagu"
                , 8461: "Kab. Bolaang Mongondow"
                , 8462: "Kab. Minahasa"
                , 8463: "Kab. Sangihe"
                , 8464: "Kab. Kepl. Talaud"
                , 8465: "Kab. Minahasa Selata"
                , 8466: "Kab. Minahasa Utara"
                , 8467: "Kota Manado"
                , 8468: "Kota Bitung"
                , 8469: "Kota Tomohon"
                },
     	      	"402": 
        {"default": "Kabupaten / Kota"
                , 8470: "Kab. Banggai Kepulauan"
                , 8471: "Kab. Donggala"
                , 8472: "Kab. Poso"
                , 8473: "Kab. Banggai"
                , 8474: "Kab. Buol"
                , 8475: "Kab. Toli Toli"
                , 8476: "Kab. Morowali"
                , 8505: "Kab. Parigi Muotong"
                , 8506: "Kab. Tojo Una-Una"
                , 8507: "Kota Palu"
                },
     	      	"403": 
        {"default": "Kabupaten / Kota"
                , 8508: "Kab. Maros"
                , 8509: "Kab. Pangkajene Kepulauan"
                , 8510: "Kab. Gowa"
                , 8511: "Kab. Takalar"
                , 8512: "Kab. Jeneponto"
                , 8513: "Kab. Barru"
                , 8514: "Kab. Bone"
                , 8515: "Kab. Wajo"
                , 8516: "Kab. Soppeng"
                , 8517: "Kab. Bantaeng"
                , 8518: "Kab. Bulukumba"
                , 8519: "Kab. Sinjai"
                , 8520: "Kab. Selayar"
                , 8521: "Kab. Pinrang"
                , 8522: "Kab. Sidenreng Rappang"
                , 8523: "Kab. Enrekang"
                , 8524: "Kab. Luwu"
                , 8525: "Kab. Tana Toraja"
                , 8526: "Kab. Luwu Utara"
                , 8527: "Kab. Luwu Timur"
                , 8528: "Kota Makasar"
                , 8529: "Kota Pare Pare"
                , 8530: "Kota Palopo"
                },
     	      	"404": 
        {"default": "Kabupaten / Kota"
                , 8444: "Kab. Buton Utara"
                , 8445: "Kab. Konawe Utara"
                , 8532: "Kab. Muna"
                , 8533: "Kab. Buton"
                , 8534: "Kab. Kolaka"
                , 8600: "Kab. Konawe Selatan"
                , 8601: "Kab. Kolaka Utara"
                , 8602: "Kab. Wakatobi"
                , 8603: "Kab. Bombana"
                , 8604: "Kota Kendari"
                , 8605: "Kota Bau-Bau"
                , 8653: "Kab. Konawe"
                },
     	      	"405": 
        {"default": "Kabupaten / Kota"
                , 8428: "Kab. Pohuwato"
                , 8430: "Kab. Gorontalo Utara"
                , 8606: "Kab. Boalemo"
                , 8607: "Kab. Gorontalo"
                , 8608: "Kab. Bonebolango"
                , 8609: "Kota Gorontalo"
                },
     	      	"406": 
        {"default": "Kabupaten / Kota"
                , 8610: "Kab. Mamuju"
                , 8611: "Kab. Mamuju Utara"
                , 8612: "Kab. Polewali"
                , 8613: "Kab. Mamasa"
                , 8614: "Kab. Majene"
                },
     	      	"501": 
        {"default": "Kabupaten / Kota"
                , 8615: "Kab. Buleleng"
                , 8616: "Kab. Jembrana"
                , 8617: "Kab. Tabanan"
                , 8618: "Kab. Badung"
                , 8619: "Kab. Gianyar"
                , 8620: "Kab. Klungkung"
                , 8621: "Kab. Bangli"
                , 8622: "Kab. Karang Asem"
                , 8623: "Kota Denpasar"
                },
     	      	"502": 
        {"default": "Kabupaten / Kota"
                , 8624: "Kab. Lombok Barat"
                , 8625: "Kab. Lombok Tengah"
                , 8626: "Kab. Lombok Timur"
                , 8627: "Kab. Sumbawa"
                , 8628: "Kab. Dompu"
                , 8658: "Kab. Bima"
                , 8659: "Kab. Sumbawa Barat"
                , 8660: "Kota Mataram"
                , 8661: "Kota Bima"
                },
     	      	"503": 
        {"default": "Kabupaten / Kota"
                , 8440: "Kab. Nagekeo"
                , 8441: "Kab. Sumba Barat Daya"
                , 8442: "Kab. Sumba Tengah"
                , 8443: "Kab. Manggarai Timur"
                , 8662: "Kab. Kupang"
                , 8663: "Kab. Timor Tengah Selatan"
                , 8664: "Kab. Timor Tengah Utara"
                , 8665: "Kab. Belu"
                , 8666: "Kab. Alor"
                , 8667: "Kab. Flores Timur"
                , 8668: "Kab. Sikka"
                , 8669: "Kab. Ende"
                , 8670: "Kab. Ngada"
                , 8671: "Kab. Manggarai"
                , 8672: "Kab. Sumba Timur"
                , 8673: "Kab. Sumba Barat"
                , 8674: "Kab. Lembata"
                , 8675: "Kab. Rote Ndao"
                , 8676: "Kab. Manggarai Barat"
                , 8677: "Kota Kupang"
                },
     	      	"601": 
        {"default": "Kabupaten / Kota"
                , 8425: "Kab. Maluku Tenggara Barat"
                , 8592: "Kota Tual"
                , 8678: "Kab. Maluku Tengah"
                , 8679: "Kab. Maluku Tenggara"
                , 8680: "Kab. Buru"
                , 8681: "Kab. Seram Bagian Barat"
                , 8682: "Kab. Seram Bagian Timur"
                , 8683: "Kab. Kepulauan Aru"
                , 8684: "Kota Ambon"
                },
     	      	"602": 
        {"default": "Kabupaten / Kota"
                , 8335: "Kab. Kepulauan Sula"
                , 8336: "Kab. Halmahera Timur"
                , 8337: "Kota Ternate"
                , 8338: "Kota Tidore Kepulauan"
                , 8685: "Kab. Halmahera Barat"
                },
     	      	"603": 
        {"default": "Kabupaten / Kota"
                , 8339: "Kab. Jaya Pura"
                , 8340: "Kab. Biak Numfor"
                , 8341: "Kab. Yapen Waropen"
                , 8342: "Kab. Marauke"
                , 8343: "Kab. Jayawijaya"
                , 8344: "Kab. Paniai"
                , 8345: "Kab. Nabire"
                , 8346: "Kab. Puncak Jaya"
                , 8347: "Kab. Mimika"
                , 8348: "Kab. Keerom"
                , 8349: "Kab. Sarmi"
                , 8350: "Kab. Asmat"
                , 8351: "Kab. Mappi"
                , 8352: "Kab. Boven Digul"
                , 8353: "Kab. Yahukimo"
                , 8354: "Kab. Pegunungan Bintang"
                , 8355: "Kab. Waropen"
                , 8356: "Kab. Tolikara"
                , 8357: "Kota Jayapura"
                , 8531: "Kab. Supiori"
                , 8593: "Kab. Mamberamo Raya"
                , 8594: "Kab. Dogiyai"
                , 8595: "Kab. Lanny Jaya"
                , 8596: "Kab. Mamberamo Tengah"
                , 8597: "Kab. Nduga"
                , 8598: "Kab. Puncak"
                , 8599: "Kab. Yalimo"
                },
     	      	"604": 
        {"default": "Kabupaten / Kota"
                , 8358: "Kab. Fak-Fak"
                , 8359: "Kab. Sorong"
                , 8360: "Kab. Manokwari"
                , 8361: "Kab. Kaimana"
                , 8362: "Kab. Sorong Selatan"
                , 8420: "Kab. Raja Ampat"
                , 8421: "Kab. Teluk Bintuni"
                , 8422: "Kab. Teluk Wondama"
                , 8423: "Kota Sorong"
                },
     	       	"default":
        {"default": "- Select -"}
      };
      
      selBoxUtil(selOne, selTwo, map);
    }
    
    function selBoxUtil(src, dest, map) {
      if(!src || !dest || !map) {
        return;
      }
      removeAll(dest);
      var selected = src.options[src.selectedIndex].value;
      for(var key in map) {
        if(key == selected) {
          var valueMap = map[key];
          for(var innerKey in valueMap) {
            var val = valueMap[innerKey];
            addOption(dest, val, innerKey);
          }          
        }
      }
    }
    
    function addOption(e, value, label) {
      if(!e) {
        return;
      }
      var o = new Option(value, label);
      try {
        e.add(o);
      } catch(ee) {
        e.add(o, null);
      }
    }
    
    function removeAll(e) {
      if(e && e.options) {
        e.options.length = 0;
      }
    }


    function coba(a, b, c,propinsi){
    var ax = a.value;
    var bx = b.value;
    var cx = c.value;
    var px = propinsi.value;
    	//window.location = "/portal/daftarSekolah/" + ax + "/" + bx +"/"+ cx + "/"+px + "/1/10/";
    	window.location = "/portal/daftarSekolah/" + ax + "/" + bx +"/"+ cx + "/"+px;
    }
    
    function getValue(propinsi)
    {

      if(propinsi=="Nanggroe Aceh Darussalam")return 101;
      else if(propinsi=='Sumatera Utara')return 102;
      else if(propinsi=='Sumatera Barat')return 103;
      else if(propinsi=='Riau')return 104;
      else if(propinsi=='Jambi')return 105;
      else if(propinsi=='Sumatera Selatan')return 106;
      else if(propinsi=='Bengkulu')return 107;
      else if(propinsi=='Lampung')return 108;
      else if(propinsi=='Kepulauan Bangka Belitung')return 109;

      else if(propinsi=='Kepulauan Riau')return 110;
      else if(propinsi=='DKI Jakarta')return 201;
      else if(propinsi=='Jawa Barat')return 202;
      else if(propinsi=='Jawa Tengah')return 203;
      else if(propinsi=='DI Yogyakarta')return 204;
      else if(propinsi=='Jawa Timur')return 205;
      else if(propinsi=='Banten')return 206;

      else if(propinsi=='Kalimantan Barat')return 301;
      else if(propinsi=='Kalimantan Tengah')return 302;
      else if(propinsi=='Kalimantan Selatan')return 303;
      else if(propinsi=='Kalimantan Timur')return 304;
      else if(propinsi=='Sulawesi Utara')return 401;
      else if(propinsi=='Sulawesi Tengah')return 402;
      else if(propinsi=='Sulawesi Selatan')return 403;
      else if(propinsi=='Sulawesi Tenggara')return 404;
      else if(propinsi=='Gorontalo')return 405;
      else if(propinsi=='Sulawesi Barat')return 406;
      else if(propinsi=='Bali')return 501;

	  else if(propinsi=='Nusa Tenggara Barat')return 502;
	  else if(propinsi=='Nusa Tenggara Timur')return 503;
	  else if(propinsi=='Maluku')return 601;
	  else if(propinsi=='Maluku Utara')return 602;
	  else if(propinsi=='Papua')return 603;
	  else if(propinsi=='Irian Jaya Barat')return 604;
    }
