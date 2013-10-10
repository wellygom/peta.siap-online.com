function createPoly(propinsi) {
	var polygon = new GPolygon(states[propinsi], "#f33f00", 0, 0, "#ff0000", 0.01);
  	GEvent.addListener(polygon, "click", function(latlng) {
  		UbahBox(propinsi);
  	});
  	return polygon;
}

function UbahBox(propinsi){
	window.location="#form";
	var BoxPropinsi = document.getElementById('selOne');
	for(index = 0; index < BoxPropinsi.length;index++){
		if(BoxPropinsi[index].value == getValue(propinsi))
        BoxPropinsi.selectedIndex = index;
    }
    fillSelBox(BoxPropinsi, 'selTwo');
}