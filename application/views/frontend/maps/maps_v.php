
  <!-- ======= Hero Section ======= -->
  <section id="hero-blog">
    <div class="hero-container" data-aos="fade-up">
      <h1>Maps</h1>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        
        

        <div class="row" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-12 ">
            <!-- <iframe class="mb-4 mb-lg-0" src="https://maps.google.com/maps?q=PT%20Trusur%20Unggul%20Teknusa&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe> -->
            <div id="map" style="border:0; width: 100%; height: 500px;"></div>
          </div>

          

        </div>

      </div>
    </section><!-- End Contact Section -->
      <script>
  // var map;
  //     function initMap() {
  //       map = new google.maps.Map(document.getElementById('map'), {
  //         zoom: 2,
  //         center: new google.maps.LatLng(2.8,-187.3),
  //         mapTypeId: 'terrain'
  //       });

  //       // Create a <script> tag and set the USGS URL as the source.
  //       var script = document.createElement('script');
  //       // This example uses a local copy of the GeoJSON stored at
  //       // http://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/2.5_week.geojsonp
  //       script.src = 'https://developers.google.com/maps/documentation/javascript/examples/json/earthquake_GeoJSONP.js';
  //       document.getElementsByTagName('head')[0].appendChild(script);
  //     }

  //     // Loop through the results array and place a marker for each
  //     // set of coordinates.
  //     window.eqfeed_callback = function(results) {
  //       for (var i = 0; i < results.features.length; i++) {
  //         var coords = results.features[i].geometry.coordinates;
  //         var latLng = new google.maps.LatLng(coords[1],coords[0]);
  //         var marker = new google.maps.Marker({
  //           position: latLng,
  //           map: map
  //         });
  //       }
  //     }
      // This example displays a marker at the center of Australia.
      // When the user clicks the marker, an info window opens.

      function initMap() {
        var infowindow = new google.maps.InfoWindow();
        var jakarta = {lat: -6.200000, lng: 106.816666};
        var tangerang = {lat: -6.178306, lng: 106.631889};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 7,
          center: jakarta
    });

        var iconBase =
            'https://developers.google.com/maps/documentation/javascript/examples/full/images/';

        var icons = {
          parking: {
            icon: iconBase + 'parking_lot_maps.png'
          },
          library: {
            icon: iconBase + 'library_maps.png'
          },
          info: {
            icon: iconBase + 'info-i_maps.png'
          }
        };

        var features = [
          {
            position: new google.maps.LatLng(-6.200000, 106.816666),
            type: 'info',
            content : 'tes'
          }, {
            position: new google.maps.LatLng(-6.178306, 106.631889),
            type: 'info',
            content : 'kocak'
          }
        ];

        var locations_ = [
          { lat: -7.786879,lng: 110.387862},
          { lat: -7.25899764,lng: 112.67793493},
        ];

        var locations = [
         {  id: "103",
            id_stasiun: "KLHK-SURABAYA-TANDES",
            nama: "Surabaya, Balongsari, Tandes, Kota Surabaya, Jawa Timur 60186",
            lat: "-7.25899764",
            lng: "112.67793493",
            alamat: "Surabaya, Balongsari, Tandes, Kota Surabaya, Jawa Timur 60186",
            kota: "Surabaya",
            provinsi: "Jawa Timur",
            icon: "",
            geojson: null,
            use_internet: "0",
            dbsource: "http://iku.menlhk.go.id/aqms/",
            old_id: null,
            xtimetimes: "2020-04-08 10:30:04"},
          { id: "104",
            id_stasiun: "KLHK-SEMARANG",
            nama: "Jl. Raya Semarang-Boja, Tambangan, Kec. Mijen, Kota Semarang, Jawa Tengah",
            lat: "-7.076239",
            lng: "110.30954",
            alamat: "Jl. Raya Semarang-Boja, Tambangan, Kec. Mijen, Kota Semarang, Jawa Tengah",
            kota: "Semarang",
            provinsi: "Jawa Tengah",
            icon: "",
            geojson: null,
            use_internet: "0",
            dbsource: "http://iku.menlhk.go.id/aqms/",
            old_id: null,
            xtimetimes: "2020-04-08 10:30:04"},
        ];
        // Create markers.
        // for (var i = 0; i < features.length; i++) {
        //   var marker = new google.maps.Marker({
        //     position: features[i].position,
        //     icon: icons[features[i].type].icon,
        //     map: map
        //   });

        function placeMarker( loc ) {
          var marker = new google.maps.Marker({
            position : new google.maps.LatLng( loc.lat, loc.lng ),
            map : map
          });
          google.maps.event.addListener(marker, 'click', function(){
              infowindow.close(); // Close previously opened infowindow
              infowindow.setContent(`<table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nama</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>${loc.nama}</td>
                </tr>
              </tbody>
            </table>`);
              infowindow.open(map, marker);
          });
        }
  
      // ITERATE ALL LOCATIONS. Pass every location to placeMarker
          locations.forEach( placeMarker );

          // var infowindow = new google.maps.InfoWindow({
          //   content: features[i].content
          // });

          // marker.addListener('click', function() {
          //   infowindow.open(map, marker);
          // });
        // };

        // google.maps.event.addListener(map, 'click', function(event) {
        //   placeMarker(map, event.latLng);
        // });

        // function placeMarker(map, location) {
        //   var marker = new google.maps.Marker({
        //     position: location,
        //     map: map
        //   });
        //   var infowindow = new google.maps.InfoWindow({
        //     content: 'Latitude: ' + location.lat() +
        //     '<br>Longitude: ' + location.lng()
        //   });
        //   infowindow.open(map,marker);
        // }
    
    
    // isi content
    //     var contentString = '<table class="table">'+
    //        '<thead>'+
    //         '<tr>'+
    //           '<th scope="col">#</th>'+
    //           '<th scope="col">First</th>'+
    //           '<th scope="col">Last</th>'+
    //           '<th scope="col">Handle</th>'+
    //         '</tr>'+
    //       '</thead>'+
    //       '<tbody>'+
    //         '<tr>'+
    //           '<th scope="row">1</th>'+
    //           '<td>Mark</td>'+
    //           '<td>Otto</td>'+
    //           '<td>@mdo</td>'+
    //         '</tr>'+
    //         '<tr>'+
    //           '<th scope="row">2</th>'+
    //           '<td>Jacob</td>'+
    //           '<td>Thornton</td>'+
    //           '<td>@fat</td>'+
    //         '</tr>'+
    //         '<tr>'+
    //           '<th scope="row">3</th>'+
    //           '<td>Larry</td>'+
    //           '<td>the Bird</td>'+
    //           '<td>@twitter</td>'+
    //         '</tr>'+
    //       '</tbody>'+
    //     '</table>';

    //     var infowindow = new google.maps.InfoWindow({
    //       content: contentString
    //     });

    // //marker
    //     var marker = new google.maps.Marker({
    //       position: jakarta,
    //       map: map,
    //       title: 'Jakarta',
    //     // icon: '/maps/icons/titik-48.png'
    //     icon:  '<?= base_url() ?>assets/frontend/assets/img/titik-48.png'
    //     // icon: '/maps/icons/titik-48.png'
    //     });
    
    //     var marker1 = new google.maps.Marker({
    //       position: tangerang,
    //       map: map,
    //       title: 'Tangerang',
    //       // url(<?= base_url() ?>assets/frontend/assets/img/hero-bg.jpg)
    //       icon:  '<?= base_url() ?>assets/frontend/assets/img/titik-48.png'
    //     });
    
    // //Function Click
    //     marker.addListener('click', function() {
    //       infowindow.open(map, marker);
    //     });
    
    //     marker1.addListener('click', function() {
    //       infowindow.open(map, marker1);
    //     });
      }

    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDgK9OgCz1BvEMiJn5oZqScEN49GbYM63Q&callback=initMap">
    </script>
  </main><!-- End #main -->
