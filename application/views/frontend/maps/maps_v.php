
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
    </section>
    <!-- End Contact Section -->
    <script>
        

      function initMap() {
        var infowindow = new google.maps.InfoWindow({
            maxWidth: 350
        });
       
        var jakarta = {lat: -6.200000, lng: 106.816666};
        var tangerang = {lat: -6.178306, lng: 106.631889};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 7,
          center: jakarta
        });
   
        let url = "<?= site_url() ?>ajax/stasiun";
        var content = [];
        $.getJSON(url, function(data){
          // console.log(data);
          content = data.data;
            for(var x =0; x < content.length; x++){

              let id_stasiun = content[x].id_stasiun;
              let nama = content[x].nama;
              let latitude = parseFloat(content[x].lat);
              let longitude = parseFloat(content[x].lon); 

              // dropMarker(latitude,longitude,id_stasiun,nama);

              let url_detail = "<?= site_url() ?>ajax/stasiunlatlon?lat=" + latitude +"&lon="+longitude;
              var contentdetail = [];

              $.getJSON(url_detail, function(data1){
                    
                    let category = data1.category;
                    let stasiun_name = data1.stasiun_name;
                    let city = data1.city;
                    let province = data1.province;
                    let pm25 = data1.pm25;
                    let pm10 = data1.pm10;
                    let so2 = data1.so2;
                    let co = data1.co;
                    let o3 = data1.o3;
                    let no2 = data1.no2;
                    let pressure = parseFloat(data1.pressure);
                    let temperature = parseFloat(data1.temperature);
                    let wind_direction = parseInt(data1.wind_direction);
                    let wind_speed = parseInt(data1.wind_speed);
                    let humidity = parseInt(data1.humidity);
                    let rain_rate = parseFloat(data1.rain_rate);
                    let solar_radiation = parseInt(data1.solar_radiation);
                    let latitude1 = latitude;
                    let longitude1 = longitude; 

                    clickListener(latitude1,longitude1,category,stasiun_name,city,province,pm25,pm10,so2,co,o3,no2,pressure,temperature,wind_direction,wind_speed,humidity,rain_rate,solar_radiation);
                  
              });
            }
        });

        function dropMarker(lat,lng,id_stasiun,nama){
          var location = {lat: lat, lng: lng};
            
            var marker = new google.maps.Marker({
              position : location,
              map : map,
              title : id_stasiun
            });
              
        }

        function clickListener(lat,lng,category,stasiun_name,city,province,pm25,pm10,so2,co,o3,no2,pressure,temperature,wind_direction,wind_speed,humidity,rain_rate,solar_radiation){
            var location = {lat: lat, lng: lng};
            // var contentString = "<h4>" + nama + "</h4>";
            // let color = "http://maps.google.com/mapfiles/ms/icons/yellow-dot.png";
            if(category == "BAIK"){
                color = "http://maps.google.com/mapfiles/ms/icons/green-dot.png";
                var emote = "ic_emote_baik.png";
            } else if(category == "SEDANG"){
                color = "http://maps.google.com/mapfiles/ms/icons/blue-dot.png";
                var emote = "ic_emote_sedang.png";
            } else if(category == "TIDAK SEHAT"){
                color = "http://maps.google.com/mapfiles/ms/icons/orange-dot.png";
                var emote = "ic_emote_tidak_sehat.png";
            } else if(category == "SANGAT TIDAK SEHAT"){
                color = "http://maps.google.com/mapfiles/ms/icons/red-dot.png";
                var emote = "ic_emote_sangat_tidak.png";
            } else if(category == "BERBAHAYA"){
                color = "http://maps.google.com/mapfiles/ms/icons/purple-dot.png";
                var emote = "ic_emote_berbahaya.png";
            }
              
            var marker = new google.maps.Marker({
              position : location,
              map : map,
              title : category,
              icon : color
            });
              
            marker.addListener('click', function(){
              infowindow.close();
              
              infowindow.setContent(`<table class="table">
              <thead>
                <tr>
                  <th scope="col" style="width: 100px;"><img src="<?= base_url() ?>assets/frontend/assets/img/logo/${emote}" style="width: 50px;"></img></th>
                  <th scope="col" style="vertical-align: inherit;"><h3 style="margin: 0 0 0px 0;font-size: 20px;">Status : ${category}</h3></th>
                </tr>
              </thead>
              </table>
              <table class="table">
              <tbody>
                <tr>
                  <th scope="row" style="width: 106px;">Nama Stasiun</th>
                  <th scope="row">:</th>
                  <td>${stasiun_name}</td>
                </tr>
                <tr>
                  <th scope="row">Kota</th>
                  <th scope="row">:</th>
                  <td>${city}</td>
                </tr>
                <tr>
                  <th scope="row">provinsi</th>
                  <th scope="row">:</th>
                  <td>${province}</td>
                </tr>
              </tbody>
            </table>
            <table class="table">
              <tbody>
                <tr>
                  <th scope="row" style="width: 106px;">PM25</th>
                  <td>${pm25}</td>
                  <th scope="row">CO</th>
                  <td>${co}</td>
                </tr>
                <tr>
                  <th scope="row" style="width: 106px;">PM10</th>
                  <td>${pm10}</td>
                  <th scope="row">O3</th>
                  <td>${o3}</td>
                </tr>
                <tr>
                  <th scope="row" style="width: 106px;">SO2</th>
                  <td>${so2}</td>
                  <th scope="row" style="width: 106px;">NO2</th>
                  <td>${no2}</td>
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
                  <td class="text-center" style="border-top: 0px;">${pressure}<br>mBar</td>
                  <td class="text-center" style="border-top: 0px;">${temperature}<br>°C</td>
                  <td class="text-center" style="border-top: 0px;">${wind_speed}°</td>
                  <td class="text-center" style="border-top: 0px;">${wind_speed}<br>Km/h</td>
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
                  <td class="text-center" style="border-top: 0px;">${humidity}%</td>
                  <td class="text-center" style="border-top: 0px;">${rain_rate}<br>mm/jam</td>
                  <td class="text-center" style="border-top: 0px;">${solar_radiation}<br>watt/m2</td>
                  <td class="text-center" style="border-top: 0px;"></td>
                </tr>
              </tbody>
            </table>`);
                infowindow.open(map,marker);
            });
        }
      }

    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBoke7YmcL6DQLqWuh62U5y0oKRID90kF4&callback=initMap">
    </script>
  </main><!-- End #main -->
