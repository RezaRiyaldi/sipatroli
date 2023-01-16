<?= $this->extend('template/BaseView'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    
    <div class="row">
        <div class="col">

            <?php if (session()->getFlashdata('error_message')) { ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Error !</strong> <?= session()->getFlashdata('error_message'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php } ?>
            <div class="card shadow mb-4">
                <div class="card-body">
                    <form action="simpanshp" method="POST" enctype="multipart/form-data">

                        <div class="form-group">
                            
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="file_desa" name="file_desa">
                                <label class="custom-file-label">File shp Desa</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="file_das" name="file_das">
                                <label class="custom-file-label">File shp DAS</label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="deleteshp" class="btn btn-primary">Hapus SHP</a>

                    </form>
                    <br />
                    <div id="mapid" style=" height: 600px;"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

</div>

<script type='text/javascript'>
    
    var map = L.map('mapid').setView([-6.106646103933684,106.40258020242598], 10);
    // PILIHAN BASEMAP YANG AKAN DITAMPILKAN
    var baseLayers = {  
        'Esri.WorldTopoMap': L.tileLayer.provider('Esri.WorldTopoMap').addTo(map),
        'Esri WorldImagery': L.tileLayer.provider('Esri.WorldImagery')
        };

        // MENAMPILKAN TOOLS UNTUK MEMILIH BASEMAP
        L.control.layers(baseLayers,{}).addTo(map);
        // MENAMPILKAN SKALA
        L.control.scale({imperial: false}).addTo(map);

        // ------------------- VECTOR ----------------------------
        // REQUEST BALI ADMINISTRASI
        
        $.ajax({ // ini perintah syntax ajax untuk memanggil vektor
            type: 'POST',
            url: "<?=base_url('php-shapefile/tes_kecamatan.php');?>", // INI memanggil link request_bali yang sebelumnya telah di buat
            contentType: "application/json",
            dataType: "json",
        error: function(response) {
            var data=response.responseText; 

            var random_colour =  'rgb('+ (Math.floor(Math.random() * 256)) + ','+ (Math.floor(Math.random() * 256)) + ','+ (Math.floor(Math.random() * 256)) + ')';
            var obj = data.split('\n');
            for(var key in obj) {
                var geo = JSON.parse(obj[key]);
                
                //console.log(geo);
                var geojsonFeature = {
                    "type": "Feature",
                    "properties": {
                        "name": "Coors Field",
                        "kab_kot": "Batas Wilayah Desa",
                        "popupContent": ""
                    },
                    "geometry": geo,                    
                };
                //console.log(geo);
                

                //myLayer.addData(geojsonFeature);

                
                L.geoJSON(geojsonFeature, {
                    style: function(feature){
                    var Style1
                    return { color: random_colour, weight: 2, opacity: 1 }; // ini adalah style yang akan digunakan
                    },
                    // MENAMPILKAN POPUP DENGAN ISI BERDASARKAN ATRIBUT KAB_KOTA
                    onEachFeature: function( feature, layer ){
                        layer.bindPopup( "<center>" + feature.properties.kab_kot + "</center>")
                    }
                }).addTo(map);
            }
            
        },
        
        success: function(response) {
            console.log(response);


            var data=response; 
            L.geoJson(data,{
                style: function(feature){
                var Style1
                return { color: random_colour, weight: 2, opacity: 1 }; // ini adalah style yang akan digunakan
                },
                // MENAMPILKAN POPUP DENGAN ISI BERDASARKAN ATRIBUT KAB_KOTA
                onEachFeature: function( feature, layer ){
                    layer.bindPopup( "<center>" + feature.properties.kab_kot + "</center>")
                }
            }).addTo(map);  // di akhir selalu di akhiri dengan perintah ini karena objek akan ditambahkan ke map
        }
        });

        //var myLayer = L.geoJSON().addTo(map);
        $.ajax({ // ini perintah syntax ajax untuk memanggil vektor
            type: 'POST',
            url: "<?=base_url('php-shapefile/tes_das.php');?>", // INI memanggil link request_bali yang sebelumnya telah di buat
            contentType: "application/json",
            dataType: "json",
        error: function(response) {
            var data=response.responseText; 

            var random_colour =  'rgb('+ (Math.floor(Math.random() * 256)) + ','+ (Math.floor(Math.random() * 256)) + ','+ (Math.floor(Math.random() * 256)) + ')';
            var obj = data.split('\n');
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
                //console.log(geo);
                

                //myLayer.addData(geojsonFeature);

                
                L.geoJSON(geojsonFeature, {
                    style: function(feature){
                    var Style1
                    return { color: "#4000ff", weight: 1, opacity: 1 }; // ini adalah style yang akan digunakan
                    },
                    // MENAMPILKAN POPUP DENGAN ISI BERDASARKAN ATRIBUT KAB_KOTA
                    onEachFeature: function( feature, layer ){
                        layer.bindPopup( "<center>" + feature.properties.kab_kot + "</center>")
                    }
                }).addTo(map);
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