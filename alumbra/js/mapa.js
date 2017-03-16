function init() {
  var myLatLng = {lat: 10.6461409, lng: -71.6185732};

  var map = new google.maps.Map(document.getElementById('googleMap'), {
    zoom: 18, scrollwheel: false, draggable: true,
    center: myLatLng
  });

  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'Hello Alumbra!'
  });
}

/*
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
*/
