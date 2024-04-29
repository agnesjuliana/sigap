var geocoder = new google.maps.Geocoder();

$(function () {
  initialize_map();
});

function geocodePosition(pos) {
  geocoder.geocode(
    {
      latLng: pos,
    },
    function (responses) {
      console.log(responses);
      if (responses && responses.length > 0) {
        updateMarkerAddress(responses[1].formatted_address);
      } else {
        updateMarkerAddress("Cannot determine address at this location.");
      }
    }
  );
}

function updateMarkerPosition(latlng) {
  $("#latitude").val(latlng.lat());
  $("#longitude").val(latlng.lng());
}

function updateMarkerAddress(str) {
  document.getElementById("address").value = str;
}

function initialize_map() {
  var lat_value = document.getElementById("latitude").value;
  var long_value = document.getElementById("longitude").value;

  navigator.geolocation.getCurrentPosition(
    (position) => {
      lat_value = position.coords.latitude;
      long_value = position.coords.longitude;
      // Use the latitude and longitude for further actions
      $("#latitude").val(lat_value);
      $("#longitude").val(long_value);

      var latlng = new google.maps.LatLng(lat_value, long_value);

      var myOptions = {
        zoom: 15,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
      };

      map = new google.maps.Map(document.getElementById("map"), myOptions);

      marker = new google.maps.Marker({
        position: latlng,
        title: "Jakarta",
        map: map,
        draggable: true,
        //shadow: shadow,
      });

      geocodePosition(latlng);

      google.maps.event.addListener(marker, "drag", function () {
        updateMarkerPosition(marker.getPosition());
      });

      google.maps.event.addListener(marker, "dragend", function () {
        geocodePosition(marker.getPosition());
      });
    },
    (error) => {
      lat_value = -6.2293796;
      long_value = 106.6647031;
      var latlng = new google.maps.LatLng(lat_value, long_value);

      var myOptions = {
        zoom: 14,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
      };

      map = new google.maps.Map(document.getElementById("map"), myOptions);

      marker = new google.maps.Marker({
        position: latlng,
        title: "Jakarta",
        map: map,
        draggable: true,
        //shadow: shadow,
      });

      geocodePosition(latlng);

      google.maps.event.addListener(marker, "drag", function () {
        updateMarkerPosition(marker.getPosition());
      });

      google.maps.event.addListener(marker, "dragend", function () {
        geocodePosition(marker.getPosition());
      });
    }
  );
}
