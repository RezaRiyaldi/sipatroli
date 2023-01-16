<?= $this->extend('template/BaseView'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $heading; ?></h1>
    </div>
 <!-- <?//= $this->include('template/statusBar'); ?>-->
    <form action="simpan" method="POST" enctype="multipart/form-data">
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
                        <input id="Latitude" type="text" class="form-control <?= ($validation->hasError('latitude')) ? 'is-invalid' : ''; ?>" name="latitude" value="<?= old('latitude'); ?>" >
                        <div class="invalid-feedback">
                            <?= $validation->getError('latitude'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Longitude</label>
                        <input id="Longitude" type="text" class="form-control <?= ($validation->hasError('longitude')) ? 'is-invalid' : ''; ?>" name="longitude" value="<?= old('longitude'); ?>" >
                         <div class="invalid-feedback">
                             <?= $validation->getError('longitude'); ?>
                         </div>
                     </div>
                      <div class="form-group">
                        <label>Kecamatan</label>
                        <!--<input type="text" class="form-control <?= ($validation->hasError('tr_kecamatan_id')) ? 'is-invalid' : ''; ?>" name="tr_kecamatan_id" value="<?= old('tr_kecamatan_id'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('tr_kecamatan_id'); ?>
                        </div>-->
                            <select class="form-control" name="tr_kecamatan_id">
                                <option value="Balaraja">Balaraja</option>
                                <option value="Cikupa">Cikupa</option>
                                <option value="Cisauk">Cisauk</option>
                                <option value="Cisoka">Cisoka</option>
                                <option value="Curug">Curug</option>
                                <option value="Gunung Kaler">Gunung Kaler</option>
                                <option value="Jambe">Jambe</option>
                                <option value="Jayanti">Jayanti</option>
                                <option value="Kelapa Dua">Kelapa Dua</option>
                                <option value="Kemiri">Kemiri</option>
                                <option value="Kosambi">Kosambi</option>
                                <option value="Kronjo">Kronjo</option>
                                <option value="Legok">Legok</option>
                                <option value="Mekar Baru">Mekar Baru</option>
                                <option value="Pagedangan">Pagedangan</option>
                                <option value="Pakuhaji">Pakuhaji</option>
                                <option value="Panongan">Panongan</option>
                                <option value="Pasar Kemis">Pasar Kemis</option>
                                <option value="Rajeg">Rajeg</option>
                                <option value="Sepatan">Sepatan</option>
                                <option value="Sepatan Timur">Sepatan Timur</option>
                                <option value="Sindang Jaya">Sindang Jaya</option>
                                <option value="Sukadiri">Sukadiri</option>
                                <option value="Suka Mulya">Suka Mulya</option>
                                <option value="Teluk Naga">Teluk Naga</option>
                                <option value="Tigaraksa">Tigaraksa</option>
                                <option value="Kresek">Kresek</option>
                                <option value="Mauk">Mauk</option>
                                <option value="Solear">Solear</option>
                            </select>
                    </div>
                    <div class="form-group">
                        <label>Desa</label>
                        <input type="text" class="form-control <?= ($validation->hasError('desa_id')) ? 'is-invalid' : ''; ?>" name="desa_id" value="<?= old('desa_id'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('desa_id'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea type="text" id="ckeditor" class="ckeditor form-control" name="alamat_lengkap"></textarea>
                   </div>
                     <div class="form-group">
                            <label>DAS</label>
                            <select class="form-control" name="das">
                                <option value="None" selected>Non DAS</option>
                                <option value="Cidurian">Cidurian</option>
                                <option value="Cimanceuri">Cimanceuri</option>
                                <option value="Cipasilian">Cipasilian</option>
                                <option value="Cisadane">Cisadane</option>
                                <option value="Cileles">Cileles</option>
                                <option value="Cirarab">Cirarab</option>
                            </select>
                     </div>
                     <div class="form-group">
                       <label>Website Perusahaan</label>
                       <input type="url" class="form-control" name="website">
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
                            <input type="text" class="form-control <?= ($validation->hasError('nama_perusahaan')) ? 'is-invalid' : ''; ?>" name="nama_perusahaan" value="<?= old('nama_perusahaan'); ?>" autofocus>
                            <div class="invalid-feedback">
                                <?= $validation->getError('nama_perusahaan'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>NIB</label>
                            <input type="text" class="form-control <?= ($validation->hasError('nib')) ? 'is-invalid' : ''; ?>" name="nib" value="<?= old('nib'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('nib'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Nama Penanggung Jawab Perusahaan</label>
                            <input type="text" class="form-control <?= ($validation->hasError('cp')) ? 'is-invalid' : ''; ?>" name="cp" value="<?= old('cp'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('cp'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>No Telepon</label>
                            <input type="text" class="form-control <?= ($validation->hasError('no_tlp')) ? 'is-invalid' : ''; ?>" name="no_tlp" value="<?= old('no_tlp'); ?>">
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
                            <select class="form-control" name="kategori">
                                <option value="Industri" selected>Industri</option>
                                <option value="Non Industri">Non Industri</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Industri</label>
                            <input type="text" class="form-control <?= ($validation->hasError('industry_id')) ? 'is-invalid' : ''; ?>" name="industry_id" value="<?= old('industry_id'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('industry_id'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Keterangan Industri</label>
                            <textarea type="text" id="ckeditor" class="ckeditor form-control" name="ket_industri"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea type="text" id="ckeditor" class="ckeditor form-control" name="deskripsi"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Izin Lingkungan</label>
                            <select class="form-control" name="tps">
                                <option value="Memiliki" selected>Memiliki</option>
                                <option value="Belum Memiliki">Belum Memiliki</option>
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
                            <select class="form-control" name="izin">
                                <option value="Memiliki" selected>Memiliki</option>
                                <option value="Belum Memiliki">Belum Memiliki</option>
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
                            <select class="form-control" name="iplc">
                                <option value="Memiliki" selected>Memiliki</option>
                                <option value="Belum Memiliki">Belum Memiliki</option>
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
                            <select class="form-control" name="kepadatan">
                                <option value="Rendah" selected>Rendah</option>
                                <option value="Sedang">Sedang</option>
                                <option value="Padat">Padat</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Pengaduan</label>
                            <select class="form-control" name="pengaduan">
                                <option value="Tidak Ada" selected>Tidak Ada</option>
                                <option value="Proses">Proses</option>
                                <option value="Ada">Ada</option>
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
    </div>
    </form>
    <!-- /.container-fluid -->

</div>

<script type='text/javascript'>
    var curLocation = [0, 0];
    if (curLocation[0] == 0 && curLocation[1] == 0) {
        curLocation = [-6.1880076, 106.4807058];
    }

    var L = window.L;

    var mymap = L.map('mapid').setView([-6.1880076, 106.4807058], 13);
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
        gambarLabel.textContent = foto_Perusahaan.files[0].name;
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