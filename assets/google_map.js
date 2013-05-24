function initialize(lat,lng,zoom,text) {
      if (GBrowserIsCompatible()) {
        var map = new GMap2(document.getElementById("map_canvas"));
        map.setCenter(new GLatLng(lat, lng), zoom);
        map.setMapType(G_HYBRID_MAP);                
         
         
         var latlng = new GLatLng(lat,lng);
         var marker = new GMarker(latlng);        
        GEvent.addListener(marker, "click", function() {
          marker.openInfoWindowHtml(text);
        });
        
          map.addOverlay(marker);
        
      }
    }
