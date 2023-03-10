  <!-- leaflet -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/leaflet/leaflet.css" />
  <link href="https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/leaflet.fullscreen.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/leaflet/L.Control.Layers.Tree.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/leaflet/leaflet-search.css" />
  <style>
    
    section {
      overflow: hidden;
      /* padding: 80px 0; */
      padding: 20px 0;
    }

	#map {
	  height: 800px;
	  width : 100%;
	}
  </style>
  <!-- end leaflet -->  
  
  <body class="page-about">
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('<?php echo base_url(); ?>assets/img/about-header.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Maps</h2>
        <ol>
          <li><a href="<?php echo base_url();?>">Home</a></li>
          <li>Maps</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Maps Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row gy-4" data-aos="fade-up">

          <!-- offers_area_start -->
          <div class="our_department_area">
            <!-- <iframe src="https://agdnusantara.jakarta.go.id/v1/iframe" style="height:1000px; width:1200px" title="Iframe"></iframe> -->
            <div class="card-body">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div id="map"></div>
              </div>
            </div>
          </div>
          <!-- offers_area_end -->

        </div>
      </div>
    </section><!-- End TEMPLATE Section -->

  </main><!-- End #main -->

  <!-- leaflet -->
  <script src="<?php echo base_url(); ?>assets/plugins/leaflet/leaflet.js"></script>  
  <script src='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/Leaflet.fullscreen.min.js'></script>  
  <script src="<?php echo base_url(); ?>assets/plugins/leaflet/L.Control.Layers.Tree.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/leaflet/ActiveLayers.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/moment/moment.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/leaflet/leaflet-search.js"></script>
  <!-- leaflet -->
  
  <!-- POS AMBULANS AGD -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" ></script>      
  <script type="text/javascript">
  $(document).ready(function() {
    var map = L.map('map',{
    fullscreenControl: true,
    fullscreenControl: {
        pseudoFullscreen: false
    }
}).setView([-6.171867, 106.814669], 11);

    var googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
      maxZoom: 20,
      subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
    });
    googleStreets.addTo(map);

    // Satelite Layer
    var googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
      maxZoom: 20,
      subdomains:['mt0','mt1','mt2','mt3']
    });
    googleSat.addTo(map);

    var markerGroup = L.layerGroup();

    var markerGroupPos = L.layerGroup();

    var baseLayers = {
      "Satellite":googleSat,
    "Google Map":googleStreets
    };

    var overlays = {
        "Unit Ambulans": markerGroup,
        "POS Ambulans": markerGroupPos
    };

    var pilihan = L.control.activeLayers(baseLayers, overlays, { collapsed: false }).addTo(map);

    var controlSearch = new L.Control.Search({
      initial: false,		
      layer: markerGroup,
      zoom: 17
    });
    
    map.on('overlayadd', onOverlayAdd);
    map.on('overlayremove', onOverlayRemove);
    function onOverlayAdd(e){
      var overlayLayers = pilihan.getActiveOverlayLayers();
      for (var overlayId in overlayLayers) {
          // console.log(overlayLayers[overlayId].name)
          if(overlayLayers[overlayId].name == "Unit Ambulans"){
            markerGroup = markerGroup.addTo(map);
            getGpsAmbulans(markerGroup);
            sessionStorage.setItem("sessionIntervalUnit", "oke");
            // console.log(sessionStorage.getItem("sessionIntervalUnit"));
            map.addControl(controlSearch);            
          }

          if(overlayLayers[overlayId].name == "POS Ambulans"){
            getPosAmbulans(markerGroupPos);
          }
      }
    }

    function onOverlayRemove(e){
      if(e.name == "Unit Ambulans"){
        sessionStorage.removeItem('sessionIntervalUnit');
	map.removeControl(controlSearch);
      }
    }

    setInterval(function() {
        let personName = sessionStorage.getItem("sessionIntervalUnit");
        if(personName){
          markerGroup.clearLayers();
          getGpsAmbulans(markerGroup);
        }
    }, 30000);
   
  });

  function getGpsAmbulans(markerGroup) {
      $.ajax({
            type: "POST",
            url: "<?php echo base_url();?>approval",
            success: function(res) {
              
              const markers = JSON.parse(res);
              console.log(markers['gps'][0]);
              // IdKegiatanAmbulans = "";
              for (i = 0; i < markers['gps'].length; i++) {
                trackingDate =  markers['gps'][i]['last_update'].split(" ");
                // dateNow = moment().format('YYYY-MM-DD');
                dateNow = moment().format('YYYY-MM-DD');
                // console.log(trackingDate[0]+"===="+dateNow);
                if(dateNow == trackingDate[0]){
                // var greenIcon = L.icon({
                //   iconUrl: "icon/icon.png",
                //   iconSize: [25, 25], // size of the icon
                // });
                IdKegiatanAmbulans = "";
                statusUnit = "StandBy";
                asalPanggilan ="";
                jenisLayanan ="";
	        jenisKegiatan ="";
                for (a = 0; a < markers['unit'].length; a++) {
                   plate = markers['gps'][i]['plate'].replace(" ", "");
                   NomorPolisi = markers['unit'][a]['NomorPolisi'].replace(" ", "");
                    if(plate == NomorPolisi){
                      IdKegiatanAmbulans = markers['unit'][a]['IdKegiatanAmbulans'];
                      // statusUnit = markers['unit'][a]['StatusKegiatan'];
                      asalPanggilan = markers['unit'][a]['AsalPanggilan'];
                      jenisLayanan = markers['unit'][a]['JenisLayanan'];
		      jenisKegiatan = markers['unit'][a]['JenisKegiatan'];

                      switch (markers['unit'][a]['StatusKegiatan']) {
                        case '1':
                          statusUnit = "Dikirim";
                          break;
                        case '2':
                          statusUnit = "Diterima";
                          break;
                        case '3':
                          statusUnit = "Menuju pasien";
                          break;
                        case '4':
                          statusUnit = "Tiba di pasien";
                          break;
                        case '5':
                          statusUnit = "Menuju tujuan";
                          break;
                        case '6':
                          statusUnit = "Tiba Ditujuan";
                      }
                      
                      break;
                    }
                }

                if(IdKegiatanAmbulans != ""){
                  imageAmbulans = "assets/icon/unit.gif";
                  // indexOff = 2;
                } else {
                  imageAmbulans = "assets/icon/unit-off.png";
                  // indexOff = -1;
                }

		if(jenisKegiatan == "TERTIARY MEDEVAC"){
                  imageAmbulans = "assets/icon/unit-event.gif";
                  // indexOff = 2;
                }

                var greenIcon = new L.DivIcon({
                    className: 'my-div-icon',
                    html: '<img style="position: relative; left: -3px; top:-13px; filter: drop-shadow(0 0 0.05rem red); transform:rotate('+ markers['gps'][i]['angle']+'deg);" class="my-div-image" width="35" height="35" src="'+imageAmbulans+'"/>'
                          +'<div style="position: relative; left: -21px; top:-13px; box-shadow: rgba(0, 0, 0, 0.5) 0px 2px 4px, rgba(0, 0, 0, 0.5) 0px 7px 13px -3px, rgba(0, 0, 0, 0.5) 0px -3px 0px inset; border-radius: 5px; width: 60px; background-color:rgba(255,255,255,0.7); padding:2px; text-align: center; font-size:10px;"><b>'+markers['gps'][i]['plate'].replaceAll(" ","")+'</b></div>'
                });

                L.marker([markers['gps'][i]['latitude'], markers['gps'][i]['longitude']], {
                  // parallaxZoffset: indexOff,
                  icon: greenIcon,
                  title: markers['gps'][i]['plate']
                }).bindPopup("<hr><table><tr><td>Plat No </td><td>: <font color='white' style='background-color:black; padding: 2px; border-radius: 5px;'>"+markers['gps'][i]['plate']+"</font></td></tr>"+
                              "<tr><td>No Tiket </td><td>: "+IdKegiatanAmbulans+"</td></tr>"+
                              "<tr><td>Status </td><td>: <font color='white' style='background-color:blue; padding: 2px; border-radius: 5px;'>"+statusUnit+"</font></td></tr>"+
                              "<tr><td>Jenis Layanan </td><td>: "+jenisLayanan+"</td></tr>"+
                              "<tr><td>Asal Panggilan </td><td>: "+asalPanggilan+
                              "</td></tr></table><hr>").addTo(markerGroup);
                }
              };

            }
        });

    }

    function getPosAmbulans(markerGroupPos) {

      var markerPos = JSON.parse(`<?php echo ($GetPosLocation); ?>`);
      
            for (i = 0; i < markerPos.length; i++) {
              let text = markerPos[i].Lat;
              let resultLat = text.replace(",", "");

              // var greenIcon = L.icon({
              // // iconUrl: markerPos[i].ImagePath,
              // iconUrl: 'icon/image_processin.gif',
              // // iconSize: [60, 40], // size of the icon
              // iconSize: [30, 30], // size of the icon
              // });

              var greenIcon = new L.DivIcon({
                    className: 'my-div-icon',
                    html: '<img style="filter: drop-shadow(1px 0px 2px #000);" width="25" height="40" src="assets/icon/pos-ambulans.png"/>'
                          // '<span class="my-div-span">'+markers[i]['plate'].replace(" ","")+'</span>'
                });

              L.marker([resultLat, markerPos[i].Lng], {
              icon: greenIcon
              }).bindPopup("<b>"+markerPos[i].PosAmbulans+"</b><br>"+markerPos[i].Alamat+"<br><b><a href='tel:119'>Call : 119</a></b>").addTo(markerGroupPos);
            };
    }

  </script>
	<!-- END POS AMBULANS AGD -->