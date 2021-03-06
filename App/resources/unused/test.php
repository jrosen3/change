<!DOCTYPE html>
<html>
  <head>
    
    <style>
      html, body, #map-canvas {
        margin: 0;
        padding: 0;
        height: 75%;
      }
    </style>
    
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    
    <script>
      var map;
        function initialize() {
          var mapOptions = {
            zoom: 8,
            center: new google.maps.LatLng(-34.397, 150.644),
            mapTypeId: google.maps.MapTypeId.ROADMAP
          };
          map = new google.maps.Map(document.getElementById('map-canvas'),mapOptions);
        }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  </head>
  
  <body>
    <div id="map-canvas"></div>
  </body>
</html>