<?= $this->extend('template/BaseView'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $heading; ?></h1>
    </div>
   <!-- <?//= $this->include('template/statusBar'); ?>-->
   <form action="<?= base_url('form/prosesupdate/'.$data['slug']); ?>" method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="col">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Peta Perusahaan</h6>
                </div>
                <div class="card-body">
                    <div id="mapid" style=" height: 400px;"></div>
                </div>
                
                    <div class="card-body">
                        
                        <div class="form-group">
                            <label>Latitude</label>
                            <input id="Latitude" type="text" class="form-control <?= ($validation->hasError('latitude')) ? 'is-invalid' : ''; ?>" name="latitude" value="<?= $data['latitude']; ?>" >
                            <div class="invalid-feedback">
                                <?= $validation->getError('latitude'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Longitude</label>
                            <input id="Longitude" type="text" class="form-control <?= ($validation->hasError('longitude')) ? 'is-invalid' : ''; ?>" name="longitude" value="<?= $data['longitude']; ?>" >
                            <div class="invalid-feedback">
                                <?= $validation->getError('longitude'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Kecamatan</label>
                             <!--<input type="text" class="form-control <?= ($validation->hasError('tr_kecamatan_id')) ? 'is-invalid' : ''; ?>" name="tr_kecamatan_id" value="<?= $data['tr_kecamatan_id']; ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('tr_kecamatan_id'); ?>
                            </div>-->
                            <?php
                            $kecamatan = $data['tr_kecamatan_id'];;
                            $slck_1 = '';
                            $slck_2 = '';
                            $slck_3 = '';
                            $slck_4 = '';
                            $slck_5 = '';
                            $slck_6 = '';
                            $slck_7 = '';
                            $slck_8 = '';
                            $slck_9 = '';
                            $slck_10 = '';
                            $slck_11 = '';
                            $slck_12 = '';
                            $slck_13 = '';
                            $slck_14 = '';
                            $slck_15 = '';
                            $slck_16 = '';
                            $slck_17 = '';
                            $slck_18 = '';
                            $slck_19 = '';
                            $slck_20 = '';
                            $slck_21 = '';
                            $slck_22 = '';
                            $slck_23 = '';
                            $slck_24 = '';
                            $slck_25 = '';
                            $slck_26 = '';
                            $slck_27 = '';
                            $slck_28 = '';
                            $slck_29 = '';
                            if("Balaraja" == $kecamatan){ 
                                $slck_1 = 'selected="selected"'; 
                                }
                            if("Cikupa" == $kecamatan){ 
                                $slck_2 = 'selected="selected"'; 
                                }
                            if("Cisauk" == $kecamatan){ 
                                $slck_3 = 'selected="selected"'; 
                                }
                            if("Cisoka" == $kecamatan){ 
                                $slck_4 = 'selected="selected"'; 
                                }
                            if("Curug" == $kecamatan){ 
                                $slck_5 = 'selected="selected"'; 
                                }
                            if("Gunung Kaler" == $kecamatan){ 
                                $slck_6 = 'selected="selected"'; 
                                }
                            if("Jambe" == $kecamatan){ 
                                $slck_7 = 'selected="selected"'; 
                                }
                            if("Jayanti" == $kecamatan){ 
                                $slck_8 = 'selected="selected"'; 
                                }
                            if("Kelapa Dua" == $kecamatan){ 
                                $slck_9 = 'selected="selected"'; 
                                }
                            if("Kemiri" == $kecamatan){ 
                                $slck_10 = 'selected="selected"'; 
                                }
                            if("Kosambi" == $kecamatan){ 
                                $slck_11 = 'selected="selected"'; 
                                }
                            if("Kronjo" == $kecamatan){ 
                                $slck_12 = 'selected="selected"'; 
                                }
                            if("Legok" == $kecamatan){ 
                                $slck_13 = 'selected="selected"'; 
                                }
                            if("Mekar Baru" == $kecamatan){ 
                                $slck_14 = 'selected="selected"'; 
                                }
                            if("Pagedangan" == $kecamatan){ 
                                $slck_15 = 'selected="selected"'; 
                                }
                            if("Pakuhaji" == $kecamatan){ 
                                $slck_16 = 'selected="selected"'; 
                                }
                            if("Panongan" == $kecamatan){ 
                                $slck_17 = 'selected="selected"'; 
                                }
                            if("Pasar Kemis" == $kecamatan){ 
                                $slck_18 = 'selected="selected"'; 
                                }
                            if("Rajeg" == $kecamatan){ 
                                $slck_19 = 'selected="selected"'; 
                                }
                            if("Sepatan" == $kecamatan){ 
                                $slck_20 = 'selected="selected"'; 
                                }
                            if("Sepatan Timur" == $kecamatan){ 
                                $slck_21 = 'selected="selected"'; 
                                }
                            if("Sindang Jaya" == $kecamatan){ 
                                $slck_22 = 'selected="selected"'; 
                                }
                            if("Sukadiri" == $kecamatan){ 
                                $slck_23 = 'selected="selected"'; 
                                }
                            if("Suka Mulya" == $kecamatan){ 
                                $slck_24 = 'selected="selected"'; 
                                }
                            if("Teluk Naga" == $kecamatan){ 
                                $slck_25 = 'selected="selected"'; 
                                }
                            if("Tigaraksa" == $kecamatan){ 
                                $slck_26 = 'selected="selected"'; 
                                }
                            if("Kresek" == $kecamatan){ 
                                 $slck_27 = 'selected="selected"'; 
                                 }
                            if("Mauk" == $kecamatan){ 
                                 $slck_28 = 'selected="selected"'; 
                                 }
                            if("Solear" == $kecamatan){ 
                                 $slck_29 = 'selected="selected"'; 
                                 }
                            ?>
                             <select class="form-control" name="tr_kecamatan_id">
                                <option value="Balaraja" <?php echo $slck_1; ?> >Balaraja</option>
                                <option value="Cikupa" <?php echo $slck_2; ?> >Cikupa</option>
                                <option value="Cisauk" <?php echo $slck_3; ?> >Cisauk</option>
                                <option value="Cisoka" <?php echo $slck_4; ?> >Cisoka</option>
                                <option value="Curug" <?php echo $slck_5; ?> >Curug</option>
                                <option value="Gunung Kaler" <?php echo $slck_6; ?> >Gunung Kaler</option>
                                <option value="Jambe" <?php echo $slck_7; ?> >Jambe</option>
                                <option value="Jayanti" <?php echo $slck_8; ?> >Jayanti</option>
                                <option value="Kelapa Dua" <?php echo $slck_9; ?> >Kelapa Dua</option>
                                <option value="Kemiri" <?php echo $slck_10; ?> >Kemiri</option>
                                <option value="Kosambi" <?php echo $slck_11; ?> >Kosambi</option>
                                <option value="Kronjo" <?php echo $slck_12; ?> >Kronjo</option>
                                <option value="Legok" <?php echo $slck_13; ?> >Legok</option>
                                <option value="Mekar Baru" <?php echo $slck_14; ?> >Mekar Baru</option>
                                <option value="Pagedangan" <?php echo $slck_15; ?> >Pagedangan</option>
                                <option value="Pakuhaji" <?php echo $slck_16; ?> >Pakuhaji</option>
                                <option value="Panongan" <?php echo $slck_17; ?> >Panongan</option>
                                <option value="Pasar Kemis" <?php echo $slck_18; ?> >Pasar Kemis</option>
                                <option value="Rajeg" <?php echo $slck_19; ?> >Rajeg</option>
                                <option value="Sepatan" <?php echo $slck_20; ?> >Sepatan</option>
                                <option value="Sepatan Timur" <?php echo $slck_21; ?> >Sepatan Timur</option>
                                <option value="Sindang Jaya" <?php echo $slck_22; ?> >Sindang Jaya</option>
                                <option value="Sukadiri" <?php echo $slck_23; ?> >Sukadiri</option>
                                <option value="Suka Mulya" <?php echo $slck_24; ?> >Suka Mulya</option>
                                <option value="Teluk Naga" <?php echo $slck_25; ?> >Teluk Naga</option>
                                <option value="Tigaraksa" <?php echo $slck_26; ?> >Tigaraksa</option>
                                <option value="Kresek" <?php echo $slck_27; ?> >Kresek</option>
                                <option value="Mauk" <?php echo $slck_28; ?> >Mauk</option>
                                <option value="Solear" <?php echo $slck_29; ?> >Solear</option>
                            </select>
                            
                           
                        </div>
                        <div class="form-group">
                            <label>Desa</label>
                            <input type="text" class="form-control <?= ($validation->hasError('desa_id')) ? 'is-invalid' : ''; ?>" name="desa_id" value="<?= $data['desa_id']; ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('desa_id'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea type="text" id="ckeditor" class="ckeditor form-control" name="alamat_lengkap"><?= $data['deskripsi']; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>DAS</label>
                            <?php
                            $das = $data['das'];;
                            $selected1 = '';
                            $selected2 = '';
                            $selected3 = '';
                            $selected4 = '';
                            $selected5 = '';
                            $selected6 = '';
                            $selected7 = '';
                            if("Non DAS" == $das){ 
                                $selected1 = 'selected="selected"'; 
                                }
                            if("Cidurian" == $das){ 
                                $selected2 = 'selected="selected"'; 
                                }
                            if("Cimanceuri" == $das){ 
                                $selected3 = 'selected="selected"'; 
                                }
                            if("Cipasilian" == $das){ 
                                $selected4 = 'selected="selected"'; 
                                }
                            if("Cisadane" == $das){ 
                                $selected5 = 'selected="selected"'; 
                                }
                            if("Cileles" == $das){ 
                                $selected6 = 'selected="selected"'; 
                                }
                            if("Cirarab" == $das){ 
                                 $selected7 = 'selected="selected"'; 
                                 }
                            ?>
                            <select class="form-control" name="das">
                                <option value="None" <?php echo $selected1; ?>>Non DAS</option>
                                <option value="Cidurian" <?php echo $selected2; ?>>Cidurian</option>
                                <option value="Cimanceuri" <?php echo $selected3; ?>>Cimanceuri</option>
                                <option value="Cipasilian" <?php echo $selected4; ?>>Cipasilian</option>
                                <option value="Cisadane" <?php echo $selected5; ?>>Cisadane</option>
                                <option value="Cileles" <?php echo $selected6; ?>>Cileles</option>
                                <option value="Cirarab" <?php echo $selected7; ?>>Cirarab</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Website Perusahaan</label>
                            <input type="url" class="form-control" name="website" value="<?= $data['website']; ?>">
                        </div>
                   </div>   
            </div>
        </div>
        <div class="col">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Create Perusahaan</h6>
                </div>
                <div class="card-body">
                    
                        <?php if ($validation->hasError('checkbox')) { ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>Silahkan Centang Kotak Di Bawah ! </strong>Untuk memastikan data yang kamu masukan sudah benar silahkan baca kembali inputan kamu
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php } ?>
                        <div class="form-group">
                            <label>Nama Perusahaan</label>
                            <input type="hidden" name="id" value="<?= $data['id']; ?>">
                            <input type="text" class="form-control <?= ($validation->hasError('nama_perusahaan')) ? 'is-invalid' : ''; ?>" name="nama_perusahaan" value="<?= $data['nama_perusahaan']; ?>" autofocus>
                            <div class="invalid-feedback">
                                <?= $validation->getError('nama_perusahaan'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>NIB</label>
                            <input type="text" class="form-control <?= ($validation->hasError('nib')) ? 'is-invalid' : ''; ?>" name="nib" value="<?= $data['nib']; ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('nib'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Nama Penanggung Jawab Perusahaan</label>
                            <input type="text" class="form-control <?= ($validation->hasError('cp')) ? 'is-invalid' : ''; ?>" name="cp" value="<?= $data['cp']; ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('cp'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>No Telpon</label>
                            <input type="text" class="form-control <?= ($validation->hasError('no_tlp')) ? 'is-invalid' : ''; ?>" name="no_tlp" value="<?= $data['no_tlp']; ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('no_tlp'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Foto Perusahaan</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="foto_perusahaan" name="foto_perusahaan" onchange="img()">
                                <label class="custom-file-label">Choose file</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Kategori</label>
                            <?php
                            $kategori = $data['kategori'];;
                            $selected1 = '';
                            $selected2 = '';
                            if("Industri" == $kategori){ 
                                $selected1 = 'selected="selected"'; 
                                }
                            if("Non Industri" == $kategori){ 
                                $selected2 = 'selected="selected"'; 
                                }
                            ?>
                            <select class="form-control" name="kategori">
                                <option value="Industri" <?php echo $selected1; ?>>Industri</option>
                                <option value="Non Industri" <?php echo $selected2; ?>>Non Industri</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Industri</label>
                            <input type="text" class="form-control <?= ($validation->hasError('industry_id')) ? 'is-invalid' : ''; ?>" name="industry_id" value="<?= $data['industry_id']; ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('industry_id'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Keterangan Industri</label>
                            <textarea type="text" id="ckeditor" class="ckeditor form-control" name="ket_industri"><?= $data['ket_industri']; ?></textarea>
                        </div>
                        
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea type="text" id="ckeditor" class="ckeditor form-control" name="deskripsi"><?= $data['deskripsi']; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Izin Lingkungan</label>
                            <?php
                            $tps = $data['tps'];;
                            $selected1 = '';
                            $selected2 = '';
                            if("Memiliki" == $tps){ 
                                $selected1 = 'selected="selected"'; 
                                }
                            if("Belum Memiliki" == $tps){ 
                                $selected2 = 'selected="selected"'; 
                                }
                            ?>
                            <select class="form-control" name="tps">
                                <option value="Memiliki" <?php echo $selected1; ?>>Memiliki</option>
                                <option value="Belum Memiliki" <?php echo $selected2; ?>>Belum Memiliki</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Doc Izin Lingkungan</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="tps_doc" name="tps_doc" onchange="imgtps()">
                                <label class="custom-file-label">Choose file</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Izin Pengelolaan LB3</label>
                            <?php
                            $izin = $data['izin'];;
                            $selected1 = '';
                            $selected2 = '';
                            if("Memiliki" == $izin){ 
                                $selected1 = 'selected="selected"'; 
                                }
                            if("Belum Memiliki" == $izin){ 
                                $selected2 = 'selected="selected"'; 
                                }
                            ?>
                            <select class="form-control" name="izin">
                                <option value="Memiliki" <?php echo $selected1; ?>>Memiliki</option>
                                <option value="Belum Memiliki" <?php echo $selected2; ?>>Belum Memiliki</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Doc PLB3</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="plb3_doc" name="plb3_doc" onchange="imgplb3()">
                                <label class="custom-file-label">Choose file</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Izin IPLC</label>
                            <?php
                            $iplc = $data['iplc'];;
                            $selected1 = '';
                            $selected2 = '';
                            if("Memiliki" == $iplc){ 
                                $selected1 = 'selected="selected"'; 
                                }
                            if("Belum Memiliki" == $iplc){ 
                                $selected2 = 'selected="selected"'; 
                                }
                            ?>
                            <select class="form-control" name="iplc">
                                <option value="Memiliki" <?php echo $selected1; ?>>Memiliki</option>
                                <option value="Belum Memiliki" <?php echo $selected2; ?>>Belum Memiliki</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Doc IPLC</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="iplc_doc" name="iplc_doc" onchange="imgiplc()">
                                <label class="custom-file-label">Choose file</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Kepadatan Sebaran</label>
                            <?php
                            $kepadatan = $data['kepadatan'];;
                            $selected1 = '';
                            $selected2 = '';
                            $selected3 = '';
                            if("Rendah" == $kepadatan){ 
                                $selected1 = 'selected="selected"'; 
                                }
                            if("Sedang" == $kepadatan){ 
                                $selected2 = 'selected="selected"'; 
                                }
                            if("Padat" == $kepadatan){ 
                                $selected3 = 'selected="selected"'; 
                                 }
                            ?>
                            <select class="form-control" name="kepadatan">
                                <option value="Rendah" <?php echo $selected1; ?>>Rendah</option>
                                <option value="Sedang" <?php echo $selected2; ?>>Sedang</option>
                                <option value="Padat" <?php echo $selected3; ?>>Padat</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Pengaduan</label>
                            <?php
                            $pengaduan = $data['pengaduan'];;
                            $selected1 = '';
                            $selected2 = '';
                            $selected3 = '';
                            if("Tidak Ada" == $pengaduan){ 
                                $selected1 = 'selected="selected"'; 
                                }
                            if("Proses" == $pengaduan){ 
                                $selected2 = 'selected="selected"'; 
                                }
                            if("Ada" == $pengaduan){ 
                                $selected3 = 'selected="selected"'; 
                                 }
                            ?>
                            <select class="form-control" name="pengaduan">
                                <option value="Tidak Ada" <?php echo $selected1; ?>>Tidak Ada</option>
                                <option value="Proses" <?php echo $selected2; ?>>Proses</option>
                                <option value="Ada" <?php echo $selected3; ?>>Ada</option>
                            </select>
                        </div>

                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" name="checkbox">
                            <label class="form-check-label">Data Sudah Benar</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    
                </div>
            </div>
        </div>
        </form>
    </div>
    <!-- /.container-fluid -->

</div>
<script type='text/javascript'>
    var curLocation = [0, 0];
    if (curLocation[0] == 0 && curLocation[1] == 0) {
        curLocation = [<?= $data['latitude']; ?>, <?= $data['longitude']; ?>];
    }

    var mymap = L.map('mapid').setView([<?= $data['latitude']; ?>, <?= $data['longitude']; ?>], 13);
    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=sk.eyJ1IjoiYXJ5YW5qaTAyNSIsImEiOiJja25wZnJvYXUwNGlkMnVxd3AzODYxbnliIn0.izoBFTj6pavnwveAIngdjA', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
            '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        id: 'mapbox/streets-v11'
    }).addTo(mymap);

    mymap.attributionControl.setPrefix(false);
    var marker = new L.marker(curLocation, {
        draggable: 'true'
    });

    marker.on('dragend', function(event) {
        var position = marker.getLatLng();
        marker.setLatLng(position, {
            draggable: 'true'
        }).bindPopup(position).update();
        $("#Latitude").val(position.lat);
        $("#Longitude").val(position.lng).keyup();
    });

    document.addEventListener("DOMContentLoaded", function(event) {
        $("#Latitude, #Longitude").change(function() {
            var position = [parseInt($("#Latitude").val()), parseInt($("#Longitude").val())];
            marker.setLatLng(position, {
                draggable: 'true'
            }).bindPopup(position).update();
            mymap.panTo(position);
        });
    });
    mymap.addLayer(marker);
</script>
<script>
    function img() {
        const gambarLabel = document.querySelector('.custom-file-label');
        gambarLabel.textContent = foto_perusahaan.files[0].name;
    }
    function imgtps() {
        const gambarLabel = document.querySelector('.custom-file-label');
        gambarLabel.textContent = tps_doc.files[0].name;
    }
    function imgplb3() {
        const gambarLabel = document.querySelector('.custom-file-label');
        gambarLabel.textContent = plb3_doc.files[0].name;
    }
    function imgiplc() {
        const gambarLabel = document.querySelector('.custom-file-label');
        gambarLabel.textContent = iplc_doc.files[0].name;
    }
</script>
<?= $this->endSection(); ?>