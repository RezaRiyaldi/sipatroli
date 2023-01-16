<!DOCTYPE html>
<html lang="en">
<?= $this->include('template/home/Head'); ?>

<body>
    <?= $this->include('template/home/Header'); ?>
    <main id="main">
        <br />

        <?= $this->include('template/IndikatorBar'); ?>
        <div class="form-group form-check" align="right">
            <form action="" method="POST" enctype="multipart/form-data" id="form_search">
                <table width="100%" cellspacing="0">
                    <tr>
                        <td width="30%">
                            <details>
                                <summary>Click Detail Batasan Peta</summary>
                                <br />
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
                        </td>
                        <td width="30%">&nbsp;</td>
                        <td width="30%"><input type="text" class="form-control" name="search" value="<?= $search ?? ""; ?>" id="input_form" onkeyup="createAction()" /></td>
                        <td width="10%"> <button type="submit" class="btn btn-primary" title="Double Click">Search</button></td>
                    </tr>
                </table>
            </form>
        </div>

        <div id="mapid" class="mapid"></div>


        <!--
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" name="checkbox_desa" id="chk_desa" checked="checked">
            <label class="form-check-label">Tampilkan Batas Desa</label>
        </div>
-->
        <section class="counts section-bg">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-3 col-md-3 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <span data-toggle="counter-up"><?= $none; ?></span>
                            <p>Total Industri/Non Industri (Non DAS)</p>
                            <a href="<?= base_url('?das=None') ?>">Cek Di Peta &raquo;</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <span data-toggle="counter-up"><?= $cidurian; ?></span>
                            <p>Total Industri/Non Industri <br /> (Cidurian)</p>
                            <a href="<?= base_url('?das=Cidurian') ?>&indikator=<?php echo $indikator; ?>">Cek Di Peta &raquo;</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <span data-toggle="counter-up"><?= $cimanceuri; ?></span>
                            <p>Total Industri/Non Industri (Cimanceuri)</p>
                            <a href="<?= base_url('?das=Cimanceuri') ?>&indikator=<?php echo $indikator; ?>">Cek Di Peta &raquo;</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <span data-toggle="counter-up"><?= $cipasilian; ?></span>
                            <p>Total Industri/Non Industri (Cipasilian)</p>
                            <a href="<?= base_url('?das=Cipasilian') ?>&indikator=<?php echo $indikator; ?>">Cek Di Peta &raquo;</a>
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-3 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <span data-toggle="counter-up"><?= $cisadane; ?></span>
                            <p>Total Industri/Non Industri (Cisadane)</p>
                            <a href="<?= base_url('?das=Cisadane') ?>&indikator=<?php echo $indikator; ?>">Cek Di Peta &raquo;</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <span data-toggle="counter-up"><?= $cileles; ?></span>
                            <p>otal Industri/Non Industri (Cileles)</p>
                            <a href="<?= base_url('?das=Cileles') ?>&indikator=<?php echo $indikator; ?>">Cek Di Peta &raquo;</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <span data-toggle="counter-up"><?= $cirarab; ?></span>
                            <p>Total Industri/Non Industri (Cirarab)</p>
                            <a href="<?= base_url('?das=Cirarab') ?>&indikator=<?php echo $indikator; ?>">Cek Di Peta &raquo;</a>
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

    <script>
        // CREATE ACTION FORM SEARCH
        function createAction() {
            var valueInput = document.getElementById('input_form').value;
            var actionForm = document.getElementById('form_search');

            actionForm.setAttribute('action', '?search=' + valueInput + '&indikator=<?= $indikator ?>')
        }

        // MENGATUR TITIK KOORDINAT TITIK TENGAN & LEVEL ZOOM PADA BASEMAP
        var map = L.map('mapid').setView([-6.20612632063, 106.514260794], 11);
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
        L.control.layers(baseLayers, {}).addTo(map);
        // MENAMPILKAN SKALA
        L.control.scale({
            imperial: false
        }).addTo(map);


        // TAMPILAN TITIK PERUSAHAAN
        navigator.geolocation.getCurrentPosition(
            function(location) {
                //Create Icon
                var greenIcon = L.icon({
                    iconUrl: '<?= base_url('img') . "/leaf-green.png"; ?>',
                    // shadowUrl: '<?= base_url('img') . "/leaf-green.png"; ?>',

                    iconSize: [10, 10], // size of the icon
                    // shadowSize:   [50, 64], // size of the shadow
                    iconAnchor: [10, 10], // point of the icon which will correspond to marker's location
                    //shadowAnchor: [4, 62],  // the same for the shadow
                    popupAnchor: [-3, -10] // point from which the popup should open relative to the iconAnchor
                });
                var yellowIcon = L.icon({
                    iconUrl: '<?= base_url('img') . "/leaf-yellow.png"; ?>',
                    iconSize: [10, 10], // size of the icon
                    iconAnchor: [10, 10], // point of the icon which will correspond to marker's location
                    popupAnchor: [-3, -10] // point from which the popup should open relative to the iconAnchor
                });
                var redIcon = L.icon({
                    iconUrl: '<?= base_url('img') . "/leaf-red.png"; ?>',
                    iconSize: [10, 10], // size of the icon
                    iconAnchor: [10, 10], // point of the icon which will correspond to marker's location
                    popupAnchor: [-3, -10] // point from which the popup should open relative to the iconAnchor
                });
                //Create Icon
                var latlng = new L.LatLng(location.coords.latitude, location.coords.longitude);
                //map view
                console.log("Lokasi Saat Ini :" + location.coords.latitude, location.coords.longitude);
                <?php foreach ($data as $i) {


                    if ($indikator == "Kepadatan") {
                        if ($i['kepadatan'] == "Rendah") {
                            $icon = "greenIcon";
                        } elseif ($i['kepadatan'] == "Sedang") {
                            $icon = "yellowIcon";
                        } else {
                            $icon = "redIcon";
                        }

                        // echo '<script type="text/javascript">alert("' . $indikator . '")</script>';
                    } else if ($indikator == "Pengaduan") {
                        if ($i['pengaduan'] == "Tidak Ada") {
                            $icon = "greenIcon";
                        } elseif ($i['pengaduan'] == "Proses") {
                            $icon = "yellowIcon";
                        } else {
                            $icon = "redIcon";
                        }

                        //echo //'<script type="text/javascript">alert("' . $indikator . '")</script>';
                    } else {
                        $jml = 0;
                        $jml_tps = 0;
                        $jml_izin = 0;
                        $jml_iplc = 0;
                        if ($i['tps'] == "Memiliki") {
                            $jml_tps = 1;
                        }
                        if ($i['izin'] == "Memiliki") {
                            $jml_izin = 1;
                        }
                        if ($i['iplc'] == "Memiliki") {
                            $jml_iplc = 1;
                        }
                        $jml = $jml_tps + $jml_izin + $jml_iplc;

                        if ($jml == "3") {
                            $icon = "greenIcon";
                        } elseif ($jml == "2") {
                            $icon = "yellowIcon";
                        } else {
                            $icon = "redIcon";
                        }

                        //echo //'<script type="text/javascript">alert("' . $indikator . '")</script>';
                    }
                    // SESSION indikator
                ?>
                    L.marker([<?= $i['latitude']; ?>, <?= $i['longitude']; ?>], {
                        icon: <?= $icon; ?>
                    }).bindPopup(
                        "<img src='<?= base_url('img/perusahaan') . "/" . $i['foto_perusahaan']; ?>' width='200px' height='200px' class='img-fluid'>" +
                        "<br><b><?= $i['nama_perusahaan']; ?></b>" +
                        "<br>Contact Person : <?= $i['cp']; ?>" +
                        "<br>Alamat : <?= $i['alamat_lengkap']; ?>" +
                        "<br>Kategori : <?= $i['kategori']; ?>" +
                        "<br><b>Dokumen :</b> " +
                        "<br>Izin Lingkungan : <?= $i['tps']; ?>" +
                        "<br>Izin Pengelolaan LB3 : <?= $i['izin']; ?>" +
                        "<br>IPLC: <?= $i['iplc']; ?>" +
                        "<br><b>Pengaduan :</b>" +
                        "<br><?= $i['deskripsi']; ?>" +
                        "<hr>" +
                        "<a href='<?= base_url($i['slug']); ?>?indikator=<?= $indikator; ?>' class='btn btn-outline-primary btn-sm'>Detail</a><a href='https://www.google.com/maps/dir/?api=1&origin=" +
                        location.coords.latitude + "," + location.coords.longitude + "&destination=<?= $i['latitude']; ?>,<?= $i['longitude']; ?>' class='btn btn-outline-primary btn-sm' target='_blank'>Rute</a>").addTo(map);
                <?php } ?>
            });

        /* Batasan Kecamatan Contoh Youtube 
        //https://www.youtube.com/watch?v=txDufAtpjTs&list=RDCMUC_fIMfdn6h8i03YR1SLUr5A&start_radio=1&t=1193
         $.getJSON("<?= base_url('php-shapefile/padang_timur.geojson') ?>",function(data){
          geolayer = L.geoJson(data ,{
        style: function(feature) {
         return {
             opacity: 1.0,
             color: 'red',
             fillOpacity: 1.0,
             fillColor: 'red',
         }
        },
        }).addTo(map);

        geoLayer.eachLayer(function(layer) {
        layer.bindPopup("Padang Barat");
        });
        });
        */


        var myLayer_das = [];
        var myLayer_administrasi = [];
        var myLayer_kecamatan = [];
        //var myLayer_desa=[];


        var data_das = '';
        var data_administrasi = '';
        var data_kecamatan = '';
        // var data_desa = '';

        $('#chk_das').change(
            function() {
                if ($(this).is(':checked')) {
                    var obj = data_das.split('\n');
                    for (var key in obj) {
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
                            geojsonFeature, {
                                style: function(feature) {
                                    return {
                                        color: "#4000ff",
                                        weight: 2,
                                        opacity: 1
                                    };
                                    //"#4000ff"
                                }
                            }
                        );

                        myLayer_das[key].addTo(map);
                    }
                } else {
                    for (var key in myLayer_das) {
                        myLayer_das[key].remove();
                    }
                }
            }
        );

        $('#chk_administrasi').change(
            function() {
                if ($(this).is(':checked')) {
                    var obj = data_administrasi.split('\n');
                    for (var key in obj) {
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
                        // var random_colour =  'rgb('+ (Math.floor(Math.random() * 256)) + ','+ (Math.floor(Math.random() * 256)) + ','+ (Math.floor(Math.random() * 256)) + ')';
                        myLayer_administrasi[key] = L.geoJson(
                            geojsonFeature, {
                                style: function(feature) {
                                    return {
                                        color: "#000000",
                                        weight: 0.5,
                                        opacity: 1
                                    };
                                }
                            }
                        );

                        myLayer_administrasi[key].addTo(map);
                    }
                } else {
                    for (var key in myLayer_administrasi) {
                        myLayer_administrasi[key].remove();
                    }
                }
            }
        );

        $('#chk_kecamatan').change(
            function() {
                if ($(this).is(':checked')) {
                    var obj = data_kecamatan.split('\n');
                    for (var key in obj) {
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
                        var random_colour = 'rgb(' + (Math.floor(Math.random() * 256)) + ',' + (Math.floor(Math.random() * 256)) + ',' + (Math.floor(Math.random() * 256)) + ')';
                        myLayer_kecamatan[key] = L.geoJson(
                            geojsonFeature, {
                                style: function(feature) {
                                    return {
                                        color: random_colour,
                                        weight: 2,
                                        opacity: 1
                                    };
                                }
                            }
                        );

                        myLayer_kecamatan[key].addTo(map);
                    }
                } else {
                    for (var key in myLayer_kecamatan) {
                        myLayer_kecamatan[key].remove();
                    }
                }
            }
        );

        /*
        $('#chk_desa').change(
            function(){
                if ($(this).is(':checked')) {
                    var obj = data_desa.split('\n');
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
                        var random_colour =  'rgb('+ (Math.floor(Math.random() * 256)) + ','+ (Math.floor(Math.random() * 256)) + ','+ (Math.floor(Math.random() * 256)) + ')';
                        myLayer_desa[key] = L.geoJson(
                            geojsonFeature, 
                            {
                                style: function(feature) {
                                    return { color: random_colour, weight: 2, opacity: 1 };
                                }                
                            }
                        );
                        
                        myLayer_desa[key].addTo(map);
                    }
                } else {
                    for(var key in myLayer_desa) {
                        myLayer_desa[key].remove();
                    }
                }
            }
        );
        */



        // ------------------- VECTOR ----------------------------
        // REQUEST ADMINISTRASI

        $.ajax({
            type: 'POST',
            url: 'php-shapefile/tes_das.php', // INI memanggil link request_bali yang sebelumnya telah di buat
            contentType: "application/json",
            dataType: "json",

            error: function(response) {
                data_das = response.responseText;
                var obj = data_das.split('\n');
                for (var key in obj) {
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
                        geojsonFeature, {
                            style: function(feature) {
                                return {
                                    color: "#4000ff",
                                    weight: 2,
                                    opacity: 1
                                };
                            }
                        }
                    );

                    myLayer_das[key].addTo(map);
                }
            },

            success: function(response) {
                console.log(response);


                var data = response;
                L.geoJson(data, {
                    style: function(feature) {
                        var Style1
                        return {
                            color: "#cc3f39",
                            weight: 1,
                            opacity: 1
                        }; // ini adalah style yang akan digunakan
                    },
                    // MENAMPILKAN POPUP DENGAN ISI BERDASARKAN ATRIBUT KAB_KOTA
                    onEachFeature: function(feature, layer) {
                        layer.bindPopup("<center>" + feature.properties.kab_kot + "</center>")
                    }
                }).addTo(map); // di akhir selalu di akhiri dengan perintah ini karena objek akan ditambahkan ke map
            }
        });

        //-----------------administrasi-----------------

        $.ajax({ // ini perintah syntax ajax untuk memanggil vektor
            type: 'POST',
            url: 'php-shapefile/tes_administrasi.php', // INI memanggil link request_bali yang sebelumnya telah di buat
            contentType: "application/json",
            dataType: "json",

            error: function(response) {
                data_administrasi = response.responseText;
                var obj = data_administrasi.split('\n');
                for (var key in obj) {
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
                        geojsonFeature, {
                            style: function(feature) {
                                return {
                                    color: "#000000",
                                    weight: 0.5,
                                    opacity: 1
                                };
                            }
                        }
                    );

                    myLayer_administrasi[key].addTo(map);
                }
            },

            success: function(response) {
                console.log(response);


                var data = response;
                L.geoJson(data, {
                    style: function(feature) {
                        var Style1
                        return {
                            color: "#000000",
                            weight: 1,
                            opacity: 1
                        }; // ini adalah style yang akan digunakan
                    },
                    // MENAMPILKAN POPUP DENGAN ISI BERDASARKAN ATRIBUT KAB_KOTA
                    onEachFeature: function(feature, layer) {
                        layer.bindPopup("<center>" + feature.properties.kab_kot + "</center>")
                    }
                }).addTo(map); // di akhir selalu di akhiri dengan perintah ini karena objek akan ditambahkan ke map
            }
        });

        //---------kecamatan------------

        $.ajax({ // ini perintah syntax ajax untuk memanggil vektor
            type: 'POST',
            url: 'php-shapefile/tes_kecamatan.php', // INI memanggil link request_bali yang sebelumnya telah di buat
            contentType: "application/json",
            dataType: "json",

            error: function(response) {
                data_kecamatan = response.responseText;
                var obj = data_kecamatan.split('\n');
                for (var key in obj) {
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

                    var random_colour = 'rgb(' + (Math.floor(Math.random() * 256)) + ',' + (Math.floor(Math.random() * 256)) + ',' + (Math.floor(Math.random() * 256)) + ')';
                    myLayer_kecamatan[key] = L.geoJson(
                        geojsonFeature, {
                            style: function(feature) {
                                return {
                                    color: random_colour,
                                    weight: 2,
                                    opacity: 1
                                };
                            }
                        }
                    );

                    myLayer_kecamatan[key].addTo(map);
                }
            },

            success: function(response) {
                console.log(response);


                var data = response;
                L.geoJson(data, {
                    style: function(feature) {
                        var Style1
                        return {
                            color: "#cc3f39",
                            weight: 1,
                            opacity: 1
                        }; // ini adalah style yang akan digunakan
                    },
                    // MENAMPILKAN POPUP DENGAN ISI BERDASARKAN ATRIBUT KAB_KOTA
                    onEachFeature: function(feature, layer) {
                        layer.bindPopup("<center>" + feature.properties.kab_kot + "</center>")
                    }
                }).addTo(map); // di akhir selalu di akhiri dengan perintah ini karena objek akan ditambahkan ke map
            }
        });

        //-------------------------------desa-------------------------------------
        /*
                $.ajax({ // ini perintah syntax ajax untuk memanggil vektor
                    type: 'POST',
                    url: 'php-shapefile/tes_desa.php', // INI memanggil link request_bali yang sebelumnya telah di buat
                    contentType: "application/json",
                    dataType: "json",

                    error: function(response) {
                        data_desa=response.responseText; 
                        var obj = data_desa.split('\n');
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
                            myLayer_desa[key] = L.geoJson(
                                geojsonFeature, 
                                {
                                    style: function(feature) {
                                        return { color: random_colour, weight: 2, opacity: 1 };
                                    }                
                                }
                            );
                            
                            myLayer_desa[key].addTo(map);
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
        */
    </script>



</body>

</html>