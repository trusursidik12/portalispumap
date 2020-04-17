
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
  
      // This example displays a marker at the center of Australia.
      // When the user clicks the marker, an info window opens.

      function initMap() {
        var jakarta = {lat: -6.200000, lng: 106.816666};
        var tangerang = {lat: -6.178306, lng: 106.631889};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 7,
          center: jakarta
    });
    
    
    //isi content
        var contentString = '<table class="table">'+
           '<thead>'+
            '<tr>'+
              '<th scope="col">#</th>'+
              '<th scope="col">First</th>'+
              '<th scope="col">Last</th>'+
              '<th scope="col">Handle</th>'+
            '</tr>'+
          '</thead>'+
          '<tbody>'+
            '<tr>'+
              '<th scope="row">1</th>'+
              '<td>Mark</td>'+
              '<td>Otto</td>'+
              '<td>@mdo</td>'+
            '</tr>'+
            '<tr>'+
              '<th scope="row">2</th>'+
              '<td>Jacob</td>'+
              '<td>Thornton</td>'+
              '<td>@fat</td>'+
            '</tr>'+
            '<tr>'+
              '<th scope="row">3</th>'+
              '<td>Larry</td>'+
              '<td>the Bird</td>'+
              '<td>@twitter</td>'+
            '</tr>'+
          '</tbody>'+
        '</table>';

        // var contentString = '<div id="content">'+
        //     '<h3 id="firstHeading" class="firstHeading">Jakarta : Baik </h3>'+
        //     '<div class="row">'+
        //     '<div class="col-6"><b>co2</b></div>'+
        //     '<div class="col-6"><b>co2</b></div>'+
        //     '</div>'+
        //     '</div>';

//             <table class="table">
//   <thead>
//     <tr>
//       <th scope="col">#</th>
//       <th scope="col">First</th>
//       <th scope="col">Last</th>
//       <th scope="col">Handle</th>
//     </tr>
//   </thead>
//   <tbody>
//     <tr>
//       <th scope="row">1</th>
//       <td>Mark</td>
//       <td>Otto</td>
//       <td>@mdo</td>
//     </tr>
//     <tr>
//       <th scope="row">2</th>
//       <td>Jacob</td>
//       <td>Thornton</td>
//       <td>@fat</td>
//     </tr>
//     <tr>
//       <th scope="row">3</th>
//       <td>Larry</td>
//       <td>the Bird</td>
//       <td>@twitter</td>
//     </tr>
//   </tbody>
// </table>

        var infowindow = new google.maps.InfoWindow({
          content: contentString
        });

    //marker
        var marker = new google.maps.Marker({
          position: jakarta,
          map: map,
          title: 'Jakarta',
        // icon: '/maps/icons/titik-48.png'
        icon:  '<?= base_url() ?>assets/frontend/assets/img/titik-48.png'
        // icon: '/maps/icons/titik-48.png'
        });
    
        var marker1 = new google.maps.Marker({
          position: tangerang,
          map: map,
          title: 'Tangerang',
          // url(<?= base_url() ?>assets/frontend/assets/img/hero-bg.jpg)
          icon:  '<?= base_url() ?>assets/frontend/assets/img/titik-48.png'
        });
    
    //Function Click
        marker.addListener('click', function() {
          infowindow.open(map, marker);
        });
    
        marker1.addListener('click', function() {
          infowindow.open(map, marker1);
        });
      }

    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDgK9OgCz1BvEMiJn5oZqScEN49GbYM63Q&callback=initMap">
    </script>
  </main><!-- End #main -->
