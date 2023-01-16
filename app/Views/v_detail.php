<!DOCTYPE html>
<html lang="en">
<?= $this->include('template/home/Head'); ?>

<body>
    <?= $this->include('template/home/Header'); ?>
    <main id="main">

    <details>
                <summary>Click Detail Batasan Peta</summary>
        <br/>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" name="checkbox_das" id="chk_das" checked="checked">
            <label class="form-check-label">Tampilkan DAS </label>
        </div>
        
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" name="checkbox_administrasi" id="chk_administrasi" checked="checked">
            <label class="form-check-label">Tampilkan Batas Administrasi</label>
        </div>

        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" name="checkbox_kecamatan" id="chk_kecamatan" checked="checked">
            <label class="form-check-label">Tampilkan Batas Kecamatan</label>
        </div>
            </details>

        <div id="mapid" class="mapid"></div>



        <section>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"><?= $data['nama_perusahaan']; ?></h4>
                                <p class="card-title"><?= $data['kategori']; ?></p>
                                <hr>
                                <div class="row">
                                    <div class="col">
                                        <?= $data['ket_industri']; ?>
                                    </div>
                                    <div class="col">
                                        <img src='<?= base_url('img/perusahaan') . "/" . $data['foto_perusahaan']; ?>' class='img-fluid'>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Informasi</h4>
                                <hr>
                                <table>
                                    <tr>
                                        <th title="Contact Person">CP : </th>
                                        <td><?= $data['cp']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>No Telp : </th>
                                        <td><?= $data['no_tlp']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Alamat : </th>
                                        <td><?= $data['alamat_lengkap']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Kecamatan : </th>
                                        <td><?= $data['tr_kecamatan_id']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Desa : </th>
                                        <td><?= $data['desa_id']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>DAS : </th>
                                        <td><?= $data['das']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Izin Lingkungan : </th>
                                        <td>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#izinLingkunganModal">
                                        <?= $data['tps']; ?>
                                        </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>PLB3 : </th>
                                        <td>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#PLB3Modal">
                                        <?= $data['tps']; ?>
                                        </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>IPLC : </th>
                                        <td>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#IPLCModal">
                                        <?= $data['iplc']; ?>
                                        </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Pengaduan : </th>
                                        <td><?= $data['deskripsi']; ?></td>
                                    </tr>
                                </table>
                                <!-- Button trigger modal -->


<!-- Modal Izin Lingkungan -->
<div class="modal fade" id="izinLingkunganModal" tabindex="-1" role="dialog" aria-labelledby="izinLingkunganModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="izinLingkunganModalLabel">Izin Lingkungan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img src='<?= base_url('img/tps_doc') . "/" . $data['tps_doc']; ?>' width="500px" class='img-fluid'>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal Izin Lingkungan -->

<!-- Modal Izin IPLC -->
<div class="modal fade" id="IPLCModal" tabindex="-1" role="dialog" aria-labelledby="IPLCModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="IPLCModalLabel">IPLC</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img src='<?= base_url('img/iplc_doc') . "/" . $data['iplc_doc']; ?>' width="500px" class='img-fluid'>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal Izin IPLC -->


<!-- Modal Izin IPLC -->
<div class="modal fade" id="PLB3Modal" tabindex="-1" role="dialog" aria-labelledby="PLB3ModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="PLB3ModalLabel">Izin Pengelolaan LB3</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img src='<?= base_url('img/plb3_doc') . "/" . $data['plb3_doc']; ?>' width="500px" class='img-fluid'>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal Izin IPLC -->


                            </div>
                        </div>
                        <div id="btn">
                        </div>
                    </div>

                </div>

            </div>
            </div>
        </section><!-- End Counts Section -->

    </main><!-- End #main -->
    <?= $this->include('template/home/Footer'); ?>
    <?= $this->include('template/home/Js'); ?>

    <!-- Leaflet -->
    <link rel="stylesheet" href="<?= base_url('js/leaflet/leaflet.css'); ?>" />
    <script src="<?= base_url('js/leaflet/leaflet.js'); ?>" type='text/javascript'></script>
    <script src="<?= base_url('leaflet-providers/leaflet-providers.js'); ?>" type='text/javascript'></script> <!-- memanggil leaflet-providers.js di folder leaflet provider -->
    

    <script async='async' type='text/javascript'>

    // MENGATUR TITIK KOORDINAT TITIK TENGAN & LEVEL ZOOM PADA BASEMAP
    var map = L.map('mapid').setView([<?= $data['latitude']; ?>, <?= $data['longitude']; ?>], 14);

// PILIHAN BASEMAP YANG AKAN DITAMPILKAN
var baseLayers = {  
'Esri.WorldTopoMap': L.tileLayer.provider('Esri.WorldTopoMap').addTo(map),
        'Esri WorldStreetMap': L.tileLayer.provider('Esri.WorldStreetMap'),
        'Esri DeLorme': L.tileLayer.provider('Esri.DeLorme'),   
        'Esri WorldImagery': L.tileLayer.provider('Esri.WorldImagery'),
        'Esri WorldShadedRelief': L.tileLayer.provider('Esri.WorldShadedRelief'),
        'Esri OceanBasemap': L.tileLayer.provider('Esri.OceanBasemap'),
        'Esri WorldGrayCanvas': L.tileLayer.provider('Esri.WorldGrayCanvas')
};

// MENAMPILKAN TOOLS UNTUK MEMILIH BASEMAP
L.control.layers(baseLayers,{}).addTo(map);
// MENAMPILKAN SKALA
L.control.scale({imperial: false}).addTo(map);
        // var L = window.L;
        navigator.geolocation.getCurrentPosition(function(location) {

//Create Icon
var greenIcon = L.icon({
    iconUrl: '<?= base_url('img') . "/leaf-green.png"; ?>',
   // shadowUrl: '<?= base_url('img') . "/leaf-green.png"; ?>',

    iconSize:     [20, 20], // size of the icon
   // shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [20, 20], // point of the icon which will correspond to marker's location
    //shadowAnchor: [4, 62],  // the same for the shadow
    popupAnchor:  [-3, -20] // point from which the popup should open relative to the iconAnchor
});
var yellowIcon = L.icon({
    iconUrl: '<?= base_url('img') . "/leaf-yellow.png"; ?>',
    iconSize:     [20, 20], // size of the icon
    iconAnchor:   [20, 20], // point of the icon which will correspond to marker's location
    popupAnchor:  [-3, -20] // point from which the popup should open relative to the iconAnchor
});
var redIcon = L.icon({
    iconUrl: '<?= base_url('img') . "/leaf-red.png"; ?>',
    iconSize:     [20, 20], // size of the icon
    iconAnchor:   [20, 20], // point of the icon which will correspond to marker's location
    popupAnchor:  [-3, -20] // point from which the popup should open relative to the iconAnchor
});
//Create Icon

            var latlng = new L.LatLng(location.coords.latitude, location.coords.longitude);
            //var map = L.map('mapid').setView([<?= $data['latitude']; ?>, <?= $data['longitude']; ?>], 14);
            L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=sk.eyJ1IjoiYXJ5YW5qaTAyNSIsImEiOiJja25wZnJvYXUwNGlkMnVxd3AzODYxbnliIn0.izoBFTj6pavnwveAIngdjA', {
                maxZoom: 18,
                attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                    '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                    'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                id: 'mapbox/streets-v11',
                tileSize: 512,
                zoomOffset: -1
            }).addTo(map);

            <?php 
            
            if ($indikator=="Kepadatan")
            {
                if ($data['kepadatan']=="Rendah") 
                { $icon = "greenIcon";}
                elseif ($data['kepadatan']=="Sedang") 
                { $icon = "yellowIcon";} 
                else
                { $icon = "redIcon";} 
            }
            else if ($indikator=="Pengaduan")
            {
                if ($data['pengaduan']=="Tidak Ada") 
                { $icon = "greenIcon";}
                elseif ($data['pengaduan']=="Proses") 
                { $icon = "yellowIcon";} 
                else
                { $icon = "redIcon";} 

            }
            else 
            {
                $jml = 0;
                $jml_tps= 0;
                $jml_izin= 0;
                $jml_iplc= 0;
                if ($data['tps']=="Memiliki") 
                { $jml_tps=1; }
                if ($data['izin']=="Memiliki") 
                { $jml_izin=1; }
                if ($data['iplc']=="Memiliki") 
                { $jml_iplc=1; }
                $jml = $jml_tps + $jml_izin + $jml_iplc  ;

                if ($jml=="3") 
                { $icon = "greenIcon";}
                elseif ($jml=="2") 
                { $icon = "yellowIcon";} 
                else
                { $icon = "redIcon";} 
            }
      
      ?>

            L.marker([<?= $data['latitude']; ?>, <?= $data['longitude']; ?>], {icon: <?= $icon; ?>}).bindPopup(
                "<img src='<?= base_url('img/perusahaan') . "/" . $data['foto_perusahaan']; ?>' width='200px' height='200px' class='img-fluid'>" +
                "<br><b><?= $data['nama_perusahaan']; ?></b>" +
                "<br>Contact Person : <?= $data['cp']; ?>"+
                    "<br>Alamat : <?= $data['alamat_lengkap']; ?>" +
                    "<br>Kategori : <?= $data['kategori']; ?>" +
                    "<br><b>Dokumen :</b> " +
                    "<br>Izin Lingkungan : <?= $data['tps']; ?>" +
                    "<br>Izin Pengelolaan LB3 : <?= $data['izin']; ?>" +
                    "<br>IPLC: <?= $data['iplc']; ?>" +
                    "<br><b>Pengaduan :</b>" +
                    "<br><?= $data['deskripsi']; ?>" +
                    "<hr>").addTo(map);

            var btn = document.getElementById('btn');
            btn.innerHTML = "<a href='https://www.google.com/maps/dir/?api=1&origin=" +
                location.coords.latitude + "," + location.coords.longitude + "&destination=<?= $data['latitude']; ?>,<?= $data['longitude']; ?>' class='btn btn-outline-primary mt-2' target='_blank'>Rute</a>" +
                "<a href='<?= $data['website']; ?>' class='btn btn-outline-primary mt-2' target='_blank'>Website</a>";


        });


        var myLayer_das=[];
        var myLayer_administrasi=[];
        var myLayer_kecamatan=[];

        var data_das = '';
        var data_administrasi = '';
        var data_kecamatan = '';

        $('#chk_das').change(
            function() {
                if ($(this).is(':checked')) {
                    var obj = data_das.split('\n');
                    for(var key in obj) {
                        var geo = JSON.parse(obj[key]);
                        
                        //console.log(geo);
                        var geojsonFeature = {
                            "type": "Feature",
                            "properties": {
                                "name": "Coors Field",
                                "kab_kot": "Batas DAS",
                                "popupContent": ""
                            },
                            "geometry": geo,                    
                        };
                        
                       //var random_colour =  'rgb('+ (Math.floor(Math.random() * 256)) + ','+ (Math.floor(Math.random() * 256)) + ','+ (Math.floor(Math.random() * 256)) + ')';
                        myLayer_das[key] = L.geoJson(
                            geojsonFeature, 
                            {
                                style: function(feature) {
                                    return { color: "#4000ff", weight: 2, opacity: 1 };
                                    //"#4000ff"
                                }                
                            }
                        );
                            
                        myLayer_das[key].addTo(map);
                    }
                } else {
                    for(var key in myLayer_das) {
                        myLayer_das[key].remove();
                    }
                }
            }
        );

        $('#chk_administrasi').change(
            function(){
                if ($(this).is(':checked')) {
                    var obj = data_administrasi.split('\n');
                    for(var key in obj) {
                        var geo = JSON.parse(obj[key]);
                        
                        //console.log(geo);
                        var geojsonFeature = {
                            "type": "Feature",
                            "properties": {
                                "name": "Coors Field",
                                "kab_kot": "Batas Administrasi",
                                "popupContent": ""
                            },
                            "geometry": geo,                    
                        };
                        //var random_colour =  'rgb('+ (Math.floor(Math.random() * 256)) + ','+ (Math.floor(Math.random() * 256)) + ','+ (Math.floor(Math.random() * 256)) + ')';
                        myLayer_administrasi[key] = L.geoJson(
                            geojsonFeature, 
                            {
                                style: function(feature) {
                                    return { color: "#000000", weight: 0.5, opacity: 1 };
                                }                
                            }
                        );
                        
                        myLayer_administrasi[key].addTo(map);
                    }
                } else {
                    for(var key in myLayer_administrasi) {
                        myLayer_administrasi[key].remove();
                    }
                }
            }
        );

        $('#chk_kecamatan').change(
            function(){
                if ($(this).is(':checked')) {
                    var obj = data_kecamatan.split('\n');
                    for(var key in obj) {
                        var geo = JSON.parse(obj[key]);
                        
                        //console.log(geo);
                        var geojsonFeature = {
                            "type": "Feature",
                            "properties": {
                                "name": "Coors Field",
                                "kab_kot": "Batas Wilayah Kecamatan",
                                "popupContent": ""
                            },
                            "geometry": geo,                    
                        };
                        var random_colour =  'rgb('+ (Math.floor(Math.random() * 256)) + ','+ (Math.floor(Math.random() * 256)) + ','+ (Math.floor(Math.random() * 256)) + ')';
                        myLayer_kecamatan[key] = L.geoJson(
                            geojsonFeature, 
                            {
                                style: function(feature) {
                                    return { color: random_colour, weight: 2, opacity: 1 };
                                }                
                            }
                        );
                        
                        myLayer_kecamatan[key].addTo(map);
                    }
                } else {
                    for(var key in myLayer_kecamatan) {
                        myLayer_kecamatan[key].remove();
                    }
                }
            }
        );

         // ------------------- VECTOR ----------------------------
        // REQUEST ADMINISTRASI

        $.ajax({
            type: 'POST',
            url: 'php-shapefile/tes_das.php', // INI memanggil link request_bali yang sebelumnya telah di buat
            contentType: "application/json",
            dataType: "json",

            error: function(response) {
                data_das=response.responseText; 
                var obj = data_das.split('\n');
                for(var key in obj) {
                    var geo = JSON.parse(obj[key]);
                    
                    //console.log(geo);
                    var geojsonFeature = {
                        "type": "Feature",
                        "properties": {
                            "name": "Coors Field",
                            "kab_kot": "Batas DAS",
                            "popupContent": ""
                        },
                        "geometry": geo,                    
                    };
                    
                    //var random_colour =  'rgb('+ (Math.floor(Math.random() * 256)) + ','+ (Math.floor(Math.random() * 256)) + ','+ (Math.floor(Math.random() * 256)) + ')';
                    myLayer_das[key] = L.geoJson(
                        geojsonFeature, 
                        {
                            style: function(feature) {
                                return { color: "#4000ff", weight: 2, opacity: 1 };
                            }                
                        }
                    );
                        
                    myLayer_das[key].addTo(map);
                }
            },
            
            success: function(response) {
                console.log(response);


                var data=response; 
                L.geoJson(data,{
                    style: function(feature){
                    var Style1
                    return { color: "#cc3f39", weight: 1, opacity: 1 }; // ini adalah style yang akan digunakan
                    },
                    // MENAMPILKAN POPUP DENGAN ISI BERDASARKAN ATRIBUT KAB_KOTA
                    onEachFeature: function( feature, layer ){
                        layer.bindPopup( "<center>" + feature.properties.kab_kot + "</center>")
                    }
                }).addTo(map);  // di akhir selalu di akhiri dengan perintah ini karena objek akan ditambahkan ke map
            }
        });

        //-----------------administrasi-----------------

        $.ajax({ // ini perintah syntax ajax untuk memanggil vektor
            type: 'POST',
            url: 'php-shapefile/tes_administrasi.php', // INI memanggil link request_bali yang sebelumnya telah di buat
            contentType: "application/json",
            dataType: "json",

            error: function(response) {
                data_administrasi=response.responseText; 
                var obj = data_administrasi.split('\n');
                for(var key in obj) {
                    var geo = JSON.parse(obj[key]);
                    
                    //console.log(geo);
                    var geojsonFeature = {
                        "type": "Feature",
                        "properties": {
                            "name": "Coors Field",
                            "kab_kot": geo,
                            "popupContent": geo
                        },
                        "geometry": geo,                    
                    };

                   // var random_colour =  'rgb('+ (Math.floor(Math.random() * 256)) + ','+ (Math.floor(Math.random() * 256)) + ','+ (Math.floor(Math.random() * 256)) + ')';
                    myLayer_administrasi[key] = L.geoJson(
                        geojsonFeature, 
                        {
                            style: function(feature) {
                                return { color: "#000000", weight: 0.5, opacity: 1 };
                            }                
                        }
                    );
                    
                    myLayer_administrasi[key].addTo(map);
                }
            },
            
            success: function(response) {
                console.log(response);


                var data=response; 
                L.geoJson(data,{
                    style: function(feature){
                    var Style1
                    return { color: "#000000", weight: 1, opacity: 1 }; // ini adalah style yang akan digunakan
                    },
                    // MENAMPILKAN POPUP DENGAN ISI BERDASARKAN ATRIBUT KAB_KOTA
                    onEachFeature: function( feature, layer ){
                        layer.bindPopup( "<center>" + feature.properties.kab_kot + "</center>")
                    }
                }).addTo(map);  // di akhir selalu di akhiri dengan perintah ini karena objek akan ditambahkan ke map
            }
        });

        //---------kecamatan------------

        $.ajax({ // ini perintah syntax ajax untuk memanggil vektor
            type: 'POST',
            url: 'php-shapefile/tes_kecamatan.php', // INI memanggil link request_bali yang sebelumnya telah di buat
            contentType: "application/json",
            dataType: "json",

            error: function(response) {
                data_kecamatan=response.responseText; 
                var obj = data_kecamatan.split('\n');
                for(var key in obj) {
                    var geo = JSON.parse(obj[key]);
                    
                    //console.log(geo);
                    var geojsonFeature = {
                        "type": "Feature",
                        "properties": {
                            "name": "Coors Field",
                            "kab_kot": geo,
                            "popupContent": geo
                        },
                        "geometry": geo,                    
                    };

                    var random_colour =  'rgb('+ (Math.floor(Math.random() * 256)) + ','+ (Math.floor(Math.random() * 256)) + ','+ (Math.floor(Math.random() * 256)) + ')';
                    myLayer_kecamatan[key] = L.geoJson(
                        geojsonFeature, 
                        {
                            style: function(feature) {
                                return { color: random_colour, weight: 2, opacity: 1 };
                            }                
                        }
                    );
                    
                    myLayer_kecamatan[key].addTo(map);
                }
            },
            
            success: function(response) {
                console.log(response);


                var data=response; 
                L.geoJson(data,{
                    style: function(feature){
                    var Style1
                    return { color: "#cc3f39", weight: 1, opacity: 1 }; // ini adalah style yang akan digunakan
                    },
                    // MENAMPILKAN POPUP DENGAN ISI BERDASARKAN ATRIBUT KAB_KOTA
                    onEachFeature: function( feature, layer ){
                        layer.bindPopup( "<center>" + feature.properties.kab_kot + "</center>")
                    }
                }).addTo(map);  // di akhir selalu di akhiri dengan perintah ini karena objek akan ditambahkan ke map
            }
        });


    </script>

</body>

</html>