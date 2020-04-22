
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
// const http = new XMLHttpRequest()

// http.open("GET", "http://ispumaps.id/ispumapapi/api/aqmdetailstasiun?trusur_api_key=VHJ1c3VyVW5nZ3VsVGVrbnVzYV9wVA==&lat=-7.25899764&lon=112.67793493")
// http.send()

// http.onload = () => console.log(http.responseText)



// You can use jQuery .getJSON() function:


    // $.get(
    // "http://loopinc.id/api/jenis-assessment",
    
    // function(data) {
    //    alert('page content: ' + data);
    //   }
    // );

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
  //       var url = 'http://ispumaps.id/ispumapapi/api/aqmstasiun?trusur_api_key=';
  //       var key = 'VHJ1c3VyVW5nZ3VsVGVrbnVzYV9wVA==';
  //       script.src = url + key;
  //       // script.src = 'https://developers.google.com/maps/documentation/javascript/examples/json/earthquake_GeoJSONP.js';
  //       document.getElementsByTagName('head')[0].appendChild(script);
  //     }

  //     // Loop through the results array and place a marker for each
  //     // set of coordinates.
  //     function tes(results) {
  //       for (var i = 0; i < results.data.length; i++) {
  //         var coords = results.data[i];
  //         var latLng = new google.maps.LatLng(coords[3],coords[4]);
  //         var marker = new google.maps.Marker({
  //           position: latLng,
  //           map: map
  //         });
  //       }
      // }
      // This example displays a marker at the center of Australia.
      // When the user clicks the marker, an info window opens.

      

        

      function initMap() {
        var infowindow = new google.maps.InfoWindow({
            maxWidth: 350
        });
        // var infowindow = new google.maps.InfoWindow({
        //       // maxWidth: 350,

        //       // content : contentString
        //     });
        var jakarta = {lat: -6.200000, lng: 106.816666};
        var tangerang = {lat: -6.178306, lng: 106.631889};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 7,
          center: jakarta
        });


    //     function tester(){
    //         var request = $.ajax({
    //           url: "http://ispumaps.id/ispumapapi/api/aqmstasiun?trusur_api_key=VHJ1c3VyVW5nZ3VsVGVrbnVzYV9wVA==",
    //           data: {f: "data"},
    //           datatype: 'json'
    //         });

    //         console.log(tester);
    //     }
      // console.log(contents)

        // var iconBase =
        //     'https://developers.google.com/maps/documentation/javascript/examples/full/images/';

        // var icons = {
        //   parking: {
        //     icon: iconBase + 'parking_lot_maps.png'
        //   },
        //   library: {
        //     icon: iconBase + 'library_maps.png'
        //   },
        //   info: {
        //     icon: iconBase + 'info-i_maps.png'
        //   }
        // };

        // var features = [
        //   {
        //     position: new google.maps.LatLng(-6.200000, 106.816666),
        //     type: 'info',
        //     content : 'tes'
        //   }, {
        //     position: new google.maps.LatLng(-6.178306, 106.631889),
        //     type: 'info',
        //     content : 'kocak'
        //   }
        // ];

        // var locations_ = [
        //   { lat: -7.786879,lng: 110.387862},
        //   { lat: -7.25899764,lng: 112.67793493},
        // ];
        // var locations = tester();

        // function tester(){
        // const proxyurl = "https://cors-anywhere.herokuapp.com/";
        // const url = "http://ispumaps.id/ispumapapi/api/aqmdetailstasiun?trusur_api_key=VHJ1c3VyVW5nZ3VsVGVrbnVzYV9wVA==&lat=-7.25899764&lon=112.67793493"; // site that doesn’t send Access-Control-*
        // fetch(proxyurl + url) // https://cors-anywhere.herokuapp.com/https://example.com
        // .then(response => response.json())
        // .then(contents => console.log(contents))
        // .catch(() => console.log("Can’t access " + url + " response. Blocked by browser?"))
        // // return contents;
        // }
        var latitude_api = -7.25899764;
        var longitude_api = 112.67793493; 
        let url = "http://ispumaps.id/ispumapapi/api/aqmstasiun?trusur_api_key=VHJ1c3VyVW5nZ3VsVGVrbnVzYV9wVA==";
        // let url_detail = "https://cors-anywhere.herokuapp.com/http://ispumaps.id/ispumapapi/api/aqmdetailstasiun?trusur_api_key=VHJ1c3VyVW5nZ3VsVGVrbnVzYV9wVA==&lat=" + latitude_api +"&lon="+longitude_api;

        // var url = "http://newsapi.org/v2/top-headlines?country=us&category=business&apiKey=ecd69f2e5c6f47039e492deedbf8223a";
        var content = [];
        $.getJSON(url, function(data){
          // console.log(data);
          content = data.data;
            for(var x =0; x < content.length; x++){
              let id_stasiun = content[x].id_stasiun;
              let nama = content[x].nama;
              let latitude = parseFloat(content[x].lat);
              let longitude = parseFloat(content[x].lon); 

              dropMarker(latitude,longitude,id_stasiun,nama);

              let url_detail = "http://ispumaps.id/ispumapapi/api/aqmdetailstasiun?trusur_api_key=VHJ1c3VyVW5nZ3VsVGVrbnVzYV9wVA==&lat=" + latitude +"&lon="+longitude;
              var contentdetail = [];
              $.getJSON(url_detail, function(data1){
                // console.log(data1);
                // content = data.data;
                  
                    let id_stasiun = data1.category;
                    let nama = data1.stasiun_name;
                    let latitude1 = latitude;
                    let longitude1 = longitude; 

                    clickListener(latitude1,longitude1,id_stasiun,nama);

                  
              });

            }
        });

        

        function dropMarker(lat,lng,id_stasiun,nama){
          var location = {lat: lat, lng: lng};
          // var contentString = "<h4>" + nama + "</h4>";
          
            
            var marker = new google.maps.Marker({
              position : location,
              map : map,
              title : id_stasiun
            });
              
            // marker.addListener('click', function(){
            //   infowindow.close();
              
            //   infowindow.setContent(`<table class="table">
            //   <thead>
            //     <tr>
            //       <th scope="col" style="width: 100px;"><img src="<?= base_url() ?>assets/frontend/assets/img/logo/ic_emote_baik.png" style="width: 50px;"></img></th>
            //       <th scope="col" style="vertical-align: inherit;"><h3 style="margin: 0 0 0px 0;">Status : <kondisi></h3></th>
            //     </tr>
            //   </thead>
            //   </table>
            //   <table class="table">
            //   <tbody>
            //     <tr>
            //       <th scope="row" style="width: 106px;">Nama Stasiun</th>
            //       <th scope="row">:</th>
            //       <td>${nama}</td>
            //     </tr>
            //     <tr>
            //       <th scope="row">Kota</th>
            //       <th scope="row">:</th>
            //       <td></td>
            //     </tr>
            //     <tr>
            //       <th scope="row">provinsi</th>
            //       <th scope="row">:</th>
            //       <td></td>
            //     </tr>
            //   </tbody>
            // </table>
            // <table class="table">
            //   <tbody>
            //     <tr>
            //       <th scope="row" style="width: 106px;">PM10</th>
            //       <td>0</td>
            //       <th scope="row">O3</th>
            //       <td>0</td>
            //     </tr>
            //     <tr>
            //       <th scope="row" style="width: 106px;">SO2</th>
            //       <td>0</td>
            //       <th scope="row">N02</th>
            //       <td>0</td>
            //     </tr>
            //     <tr>
            //       <th scope="row" style="width: 106px;">CO</th>
            //       <td>0</td>
            //       <th scope="row" style="width: 106px;"></th>
            //       <td></td>
            //     </tr>
            //     <tr>
            //       <th scope="row"></th>
            //       <th scope="row"></th>
            //       <th scope="row"></th>
            //       <th scope="row"></th>
            //     </tr>
            //   </tbody>
            // </table>
            // <table class="table">
            //   <tbody>
            //     <tr>
            //       <th class="text-center" class="align-middle" scope="row" style="border-top: 0px;"><img src="<?= base_url() ?>assets/frontend/assets/img/logo/pressure.png" style="width: 25px;"></img></th>
            //       <th class="text-center" scope="row" style="border-top: 0px"><img src="<?= base_url() ?>assets/frontend/assets/img/logo/temparature.png" style="width: 25px;"></img></th>
            //       <th class="text-center" scope="row" style="border-top: 0px"><img src="<?= base_url() ?>assets/frontend/assets/img/logo/wind_direction.png" style="width: 25px;"></img></th>
            //       <th class="text-center" scope="row" style="border-top: 0px"><img src="<?= base_url() ?>assets/frontend/assets/img/logo/wind_speed.png" style="width: 25px;"></img></th>
            //     </tr>
            //     <tr>
            //       <td class="text-center" style="border-top: 0px;">0</td>
            //       <td class="text-center" style="border-top: 0px;">0</td>
            //       <td class="text-center" style="border-top: 0px;">0</td>
            //       <td class="text-center" style="border-top: 0px;">0</td>
            //     </tr>
            //   </tbody>
            // </table>
            // <table class="table">
            //   <tbody>
            //     <tr>
            //       <th class="text-center" class="align-middle" scope="row" style="border-top: 0px;"></th>
            //       <th class="text-center" scope="row" style="border-top: 0px"><img src="<?= base_url() ?>assets/frontend/assets/img/logo/humidity.png" style="width: 25px;"></img></th>
            //       <th class="text-center" scope="row" style="border-top: 0px"><img src="<?= base_url() ?>assets/frontend/assets/img/logo/rain_rate.png" style="width: 25px;"></img></th>
            //       <th class="text-center" scope="row" style="border-top: 0px"><img src="<?= base_url() ?>assets/frontend/assets/img/logo/solar_radiation.png" style="width: 25px;"></img></th>
            //       <th class="text-center" scope="row" style="border-top: 0px"></th>
            //     </tr>
            //     <tr>
            //       <td class="text-center" style="border-top: 0px;"></td>
            //       <td class="text-center" style="border-top: 0px;">0</td>
            //       <td class="text-center" style="border-top: 0px;">0</td>
            //       <td class="text-center" style="border-top: 0px;">0</td>
            //       <td class="text-center" style="border-top: 0px;"></td>
            //     </tr>
            //   </tbody>
            // </table>`);
            //     infowindow.open(map,marker);
            // });
        }

        function clickListener(lat,lng,id_stasiun,nama){
          var location = {lat: lat, lng: lng};
          // var contentString = "<h4>" + nama + "</h4>";
          
            
            var marker = new google.maps.Marker({
              position : location,
              map : map,
              title : id_stasiun
            });
              
            marker.addListener('click', function(){
              infowindow.close();
              
              infowindow.setContent(`<table class="table">
              <thead>
                <tr>
                  <th scope="col" style="width: 100px;"><img src="<?= base_url() ?>assets/frontend/assets/img/logo/ic_emote_baik.png" style="width: 50px;"></img></th>
                  <th scope="col" style="vertical-align: inherit;"><h3 style="margin: 0 0 0px 0;">Status : ${id_stasiun}</h3></th>
                </tr>
              </thead>
              </table>
              <table class="table">
              <tbody>
                <tr>
                  <th scope="row" style="width: 106px;">Nama Stasiun</th>
                  <th scope="row">:</th>
                  <td>${nama}</td>
                </tr>
                <tr>
                  <th scope="row">Kota</th>
                  <th scope="row">:</th>
                  <td></td>
                </tr>
                <tr>
                  <th scope="row">provinsi</th>
                  <th scope="row">:</th>
                  <td></td>
                </tr>
              </tbody>
            </table>
            <table class="table">
              <tbody>
                <tr>
                  <th scope="row" style="width: 106px;">PM10</th>
                  <td>0</td>
                  <th scope="row">O3</th>
                  <td>0</td>
                </tr>
                <tr>
                  <th scope="row" style="width: 106px;">SO2</th>
                  <td>0</td>
                  <th scope="row">N02</th>
                  <td>0</td>
                </tr>
                <tr>
                  <th scope="row" style="width: 106px;">CO</th>
                  <td>0</td>
                  <th scope="row" style="width: 106px;"></th>
                  <td></td>
                </tr>
                <tr>
                  <th scope="row"></th>
                  <th scope="row"></th>
                  <th scope="row"></th>
                  <th scope="row"></th>
                </tr>
              </tbody>
            </table>
            <table class="table">
              <tbody>
                <tr>
                  <th class="text-center" class="align-middle" scope="row" style="border-top: 0px;"><img src="<?= base_url() ?>assets/frontend/assets/img/logo/pressure.png" style="width: 25px;"></img></th>
                  <th class="text-center" scope="row" style="border-top: 0px"><img src="<?= base_url() ?>assets/frontend/assets/img/logo/temparature.png" style="width: 25px;"></img></th>
                  <th class="text-center" scope="row" style="border-top: 0px"><img src="<?= base_url() ?>assets/frontend/assets/img/logo/wind_direction.png" style="width: 25px;"></img></th>
                  <th class="text-center" scope="row" style="border-top: 0px"><img src="<?= base_url() ?>assets/frontend/assets/img/logo/wind_speed.png" style="width: 25px;"></img></th>
                </tr>
                <tr>
                  <td class="text-center" style="border-top: 0px;">0</td>
                  <td class="text-center" style="border-top: 0px;">0</td>
                  <td class="text-center" style="border-top: 0px;">0</td>
                  <td class="text-center" style="border-top: 0px;">0</td>
                </tr>
              </tbody>
            </table>
            <table class="table">
              <tbody>
                <tr>
                  <th class="text-center" class="align-middle" scope="row" style="border-top: 0px;"></th>
                  <th class="text-center" scope="row" style="border-top: 0px"><img src="<?= base_url() ?>assets/frontend/assets/img/logo/humidity.png" style="width: 25px;"></img></th>
                  <th class="text-center" scope="row" style="border-top: 0px"><img src="<?= base_url() ?>assets/frontend/assets/img/logo/rain_rate.png" style="width: 25px;"></img></th>
                  <th class="text-center" scope="row" style="border-top: 0px"><img src="<?= base_url() ?>assets/frontend/assets/img/logo/solar_radiation.png" style="width: 25px;"></img></th>
                  <th class="text-center" scope="row" style="border-top: 0px"></th>
                </tr>
                <tr>
                  <td class="text-center" style="border-top: 0px;"></td>
                  <td class="text-center" style="border-top: 0px;">0</td>
                  <td class="text-center" style="border-top: 0px;">0</td>
                  <td class="text-center" style="border-top: 0px;">0</td>
                  <td class="text-center" style="border-top: 0px;"></td>
                </tr>
              </tbody>
            </table>`);
                infowindow.open(map,marker);
            });
        }


       // }
        

        // var locations = [
        //  {  id: "103",
        //     id_stasiun: "KLHK-SURABAYA-TANDES",
        //     nama: "Surabaya, Balongsari, Tandes, Kota Surabaya, Jawa Timur 60186",
        //     lat: "-7.25899764",
        //     lng: "112.67793493",
        //     alamat: "Surabaya, Balongsari, Tandes, Kota Surabaya, Jawa Timur 60186",
        //     kota: "Surabaya",
        //     provinsi: "Jawa Timur",
        //     icon: "",
        //     geojson: null,
        //     use_internet: "0",
        //     dbsource: "http://iku.menlhk.go.id/aqms/",
        //     old_id: null,
        //     xtimetimes: "2020-04-08 10:30:04"
        //   },
        //   { id: "104",
        //     id_stasiun: "KLHK-SEMARANG",
        //     nama: "Jl. Raya Semarang-Boja, Tambangan, Kec. Mijen, Kota Semarang, Jawa Tengah",
        //     lat: "-7.076239",
        //     lng: "110.30954",
        //     alamat: "Jl. Raya Semarang-Boja, Tambangan, Kec. Mijen, Kota Semarang, Jawa Tengah",
        //     kota: "Semarang",
        //     provinsi: "Jawa Tengah",
        //     icon: "",
        //     geojson: null,
        //     use_internet: "0",
        //     dbsource: "http://iku.menlhk.go.id/aqms/",
        //     old_id: null,
        //     xtimetimes: "2020-04-08 10:30:04"
        //   },
        // ];

        // console.log(locations);
        // Create markers.
        // for (var i = 0; i < features.length; i++) {
        //   var marker = new google.maps.Marker({
        //     position: features[i].position,
        //     icon: icons[features[i].type].icon,
        //     map: map
        //   });


        

      //   function placeMarker( loc ) {
      //     var marker = new google.maps.Marker({
      //       position : new google.maps.LatLng( loc.lat, loc.lng ),
      //       map : map
      //     });
      //     google.maps.event.addListener(marker, 'click', function(){
      //         infowindow.close(); // Close previously opened infowindow
      //         infowindow.setContent(`<table class="table">
      //         <thead>
      //           <tr>
      //             <th scope="col" style="width: 100px;"><img src="<?= base_url() ?>assets/frontend/assets/img/logo/ic_emote_baik.png" style="width: 50px;"></img></th>
      //             <th scope="col" style="vertical-align: inherit;"><h3 style="margin: 0 0 0px 0;">Status : <kondisi></h3></th>
      //           </tr>
      //         </thead>
      //         </table>
      //         <table class="table">
      //         <tbody>
      //           <tr>
      //             <th scope="row" style="width: 106px;">Nama Stasiun</th>
      //             <th scope="row">:</th>
      //             <td>${loc.nama}</td>
      //           </tr>
      //           <tr>
      //             <th scope="row">Kota</th>
      //             <th scope="row">:</th>
      //             <td>${loc.kota}</td>
      //           </tr>
      //           <tr>
      //             <th scope="row">provinsi</th>
      //             <th scope="row">:</th>
      //             <td>${loc.provinsi}</td>
      //           </tr>
      //         </tbody>
      //       </table>
      //       <table class="table">
      //         <tbody>
      //           <tr>
      //             <th scope="row" style="width: 106px;">PM10</th>
      //             <td>0</td>
      //             <th scope="row">O3</th>
      //             <td>0</td>
      //           </tr>
      //           <tr>
      //             <th scope="row" style="width: 106px;">SO2</th>
      //             <td>0</td>
      //             <th scope="row">N02</th>
      //             <td>0</td>
      //           </tr>
      //           <tr>
      //             <th scope="row" style="width: 106px;">CO</th>
      //             <td>0</td>
      //             <th scope="row" style="width: 106px;"></th>
      //             <td></td>
      //           </tr>
      //           <tr>
      //             <th scope="row"></th>
      //             <th scope="row"></th>
      //             <th scope="row"></th>
      //             <th scope="row"></th>
      //           </tr>
      //         </tbody>
      //       </table>
      //       <table class="table">
      //         <tbody>
      //           <tr>
      //             <th class="text-center" class="align-middle" scope="row" style="border-top: 0px;"><img src="<?= base_url() ?>assets/frontend/assets/img/logo/pressure.png" style="width: 25px;"></img></th>
      //             <th class="text-center" scope="row" style="border-top: 0px"><img src="<?= base_url() ?>assets/frontend/assets/img/logo/temparature.png" style="width: 25px;"></img></th>
      //             <th class="text-center" scope="row" style="border-top: 0px"><img src="<?= base_url() ?>assets/frontend/assets/img/logo/wind_direction.png" style="width: 25px;"></img></th>
      //             <th class="text-center" scope="row" style="border-top: 0px"><img src="<?= base_url() ?>assets/frontend/assets/img/logo/wind_speed.png" style="width: 25px;"></img></th>
      //           </tr>
      //           <tr>
      //             <td class="text-center" style="border-top: 0px;">0</td>
      //             <td class="text-center" style="border-top: 0px;">0</td>
      //             <td class="text-center" style="border-top: 0px;">0</td>
      //             <td class="text-center" style="border-top: 0px;">0</td>
      //           </tr>
      //         </tbody>
      //       </table>
      //       <table class="table">
      //         <tbody>
      //           <tr>
      //             <th class="text-center" class="align-middle" scope="row" style="border-top: 0px;"></th>
      //             <th class="text-center" scope="row" style="border-top: 0px"><img src="<?= base_url() ?>assets/frontend/assets/img/logo/humidity.png" style="width: 25px;"></img></th>
      //             <th class="text-center" scope="row" style="border-top: 0px"><img src="<?= base_url() ?>assets/frontend/assets/img/logo/rain_rate.png" style="width: 25px;"></img></th>
      //             <th class="text-center" scope="row" style="border-top: 0px"><img src="<?= base_url() ?>assets/frontend/assets/img/logo/solar_radiation.png" style="width: 25px;"></img></th>
      //             <th class="text-center" scope="row" style="border-top: 0px"></th>
      //           </tr>
      //           <tr>
      //             <td class="text-center" style="border-top: 0px;"></td>
      //             <td class="text-center" style="border-top: 0px;">0</td>
      //             <td class="text-center" style="border-top: 0px;">0</td>
      //             <td class="text-center" style="border-top: 0px;">0</td>
      //             <td class="text-center" style="border-top: 0px;"></td>
      //           </tr>
      //         </tbody>
      //       </table>`);
      //         infowindow.open(map, marker);
      //     });
      //   }
  
      // // ITERATE ALL LOCATIONS. Pass every location to placeMarker

      //     locations.forEach( placeMarker );

      //     var infowindow = new google.maps.InfoWindow({
      //       content: features[i].content
      //     });

      //     marker.addListener('click', function() {
      //       infowindow.open(map, marker);
      //     });
      //   };

      //   google.maps.event.addListener(map, 'click', function(event) {
      //     placeMarker(map, event.latLng);
      //   });

      //   function placeMarker(map, location) {
      //     var marker = new google.maps.Marker({
      //       position: location,
      //       map: map
      //     });
      //     var infowindow = new google.maps.InfoWindow({
      //       content: 'Latitude: ' + location.lat() +
      //       '<br>Longitude: ' + location.lng()
      //     });
      //     infowindow.open(map,marker);
      //   }
    
    
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
