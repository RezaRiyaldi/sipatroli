<?= $this->extend('template/BaseView'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $heading; ?></h1>
    </div>
    <?= $this->include('template/statusBar'); ?>
    <div class="row">
        <div class="col">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Peta Perusahaan</h6>
                </div>
                <div class="card-body">
                    <div id="mapid" style=" height: 400px;"></div>

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
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

</div>
    <!-- Leaflet -->
    <link rel="stylesheet" href="<?= base_url('js/leaflet/leaflet.css'); ?>" />
    <script src="<?= base_url('js/leaflet/leaflet.js'); ?>" type='text/javascript'></script>
    <script src="<?= base_url('leaflet-providers/leaflet-providers.js'); ?>" type='text/javascript'></script> <!-- memanggil leaflet-providers.js di folder leaflet provider -->
    
<script async='async' type='text/javascript'>
    var L = window.L;
    // MENGATUR TITIK KOORDINAT TITIK TENGAN & LEVEL ZOOM PADA BASEMAP
    var map = L.map('mapid').setView([-6.20612632063,106.514260794], 11);


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

navigator.geolocation.getCurrentPosition(
    function(location) {

//Create Icon
var greenIcon = L.icon({
    iconUrl: '<?= base_url('img') . "/leaf-green.png"; ?>',
   // shadowUrl: '<?= base_url('img') . "/leaf-green.png"; ?>',

    iconSize:     [10, 10], // size of the icon
   // shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [10, 10], // point of the icon which will correspond to marker's location
    //shadowAnchor: [4, 62],  // the same for the shadow
    popupAnchor:  [-3, -10] // point from which the popup should open relative to the iconAnchor
});
var yellowIcon = L.icon({
    iconUrl: '<?= base_url('img') . "/leaf-yellow.png"; ?>',
    iconSize:     [10, 10], // size of the icon
    iconAnchor:   [10, 10], // point of the icon which will correspond to marker's location
    popupAnchor:  [-3, -10] // point from which the popup should open relative to the iconAnchor
});
var redIcon = L.icon({
    iconUrl: '<?= base_url('img') . "/leaf-red.png"; ?>',
    iconSize:     [10, 10], // size of the icon
    iconAnchor:   [10, 10], // point of the icon which will correspond to marker's location
    popupAnchor:  [-3, -10] // point from which the popup should open relative to the iconAnchor
});
//Create Icon

    var latlng = new L.LatLng(location.coords.latitude, location.coords.longitude);
               //map view
               console.log("Lokasi Saat Ini :" + location.coords.latitude, location.coords.longitude);
    <?php foreach ($data as $i) { 

if ($indikator=="Kepadatan")
{
    if ($i['kepadatan']=="Rendah") 
    { $icon = "greenIcon";}
    elseif ($i['kepadatan']=="Sedang") 
    { $icon = "yellowIcon";} 
    else
    { $icon = "redIcon";} 
}
else if ($indikator=="Pengaduan")
{
    if ($i['pengaduan']=="Tidak Ada") 
    { $icon = "greenIcon";}
    elseif ($i['pengaduan']=="Proses") 
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
                if ($i['tps']=="Memiliki") 
                { $jml_tps=1; }
                if ($i['izin']=="Memiliki") 
                { $jml_izin=1; }
                if ($i['iplc']=="Memiliki") 
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
        L.marker([<?= $i['latitude']; ?>, <?= $i['longitude']; ?>], {icon: <?= $icon; ?>}).bindPopup(
            "<img src='<?= base_url('img/perusahaan') . "/" . $i['foto_perusahaan']; ?>' width='350px' height='350px' class='img-fluid'>" +
            "<b><?= $i['nama_perusahaan']; ?></b>" +
            "<br>Contact Person : <?= $i['cp']; ?>" +
            "<br>Alamat : <?= $i['alamat_lengkap']; ?>" +
            "<hr>" +
            "<a href='<?= base_url($i['slug']); ?>' class='btn btn-outline-primary btn-sm'>Detail</a><a href='https://www.google.com/maps/dir/?api=1&origin=" +
            location.coords.latitude + "," + location.coords.longitude + "&destination=<?= $i['latitude']; ?>,<?= $i['longitude']; ?>' class='btn btn-outline-primary btn-sm' target='_blank'>Rute</a>").addTo(map);
    <?php } ?>
});



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
<?= $this->endSection(); ?>