<!DOCTYPE html>
<html lang="en">
<?= $this->include('template/home/Head'); ?>

<body>
    <?= $this->include('template/home/Header'); ?>
    <main id="main">
        <section>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Foto</th>
                                    <th>Nama Perusahaan</th>
                                    <th>DAS</th>
                                    <th>Kecamatan</th>
                                    <th>Desa</th>
                                    <th>Kategori</th>
                                    <th>Dokumen</th>
                                    <th>Kepadatan</th>
                                    <th>Pengaduan</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Foto</th>
                                    <th>Nama Perusahaan</th>
                                    <th>DAS</th>
                                    <th>Kecamatan</th>
                                    <th>Desa</th>
                                    <th>Kategori</th>
                                    <th>Dokumen</th>
                                    <th>Kepadatan</th>
                                    <th>Pengaduan</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php
                                $icondok="";
                                $ketdok="";
                                $iconpad="";
                                $iconpen="";
                                foreach ($data as $i) { 

                 //Dokumen                     
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
                { $icondok = "leaf-green.png";
                    $ketdok = "Document Lengkap";}
                elseif ($jml=="2") 
                { $icondok = "leaf-yellow.png";
                    $ketdok = "Document Kurang 1";} 
                else
                { $icondok = "leaf-red.png";
                    $ketdok = "Document Tidak Lengkap";} 
                //Dokumen  

                   //Kepadatan                 
                 if ($i['kepadatan']=="Rendah") 
                { $iconpad = "leaf-green.png";}
                elseif ($i['kepadatan']=="Sedang") 
                { $iconpad = "leaf-yellow.png";} 
                else
                { $iconpad = "leaf-red.png";} 
                //Kepadatan     
                
                //Pengaduan
                if ($i['pengaduan']=="Tidak Ada") 
                { $iconpen = "leaf-green.png";}
                elseif ($i['pengaduan']=="Proses") 
                { $iconpen = "leaf-yellow.png";} 
                else
                { $iconpen = "leaf-red.png";} 
                //Pengaduan
                                    
                                    ?>
                                    <tr>
                                        <td><img src="<?= base_url('img/perusahaan') . "/" . $i['foto_perusahaan']; ?>" width="350px" height="350px" class="img-fluid" alt="<?= $i['nama_perusahaan']; ?>" caption="<?= $i['nama_perusahaan']; ?>"></td>
                                        <td><a href="<?= base_url($i['slug']); ?>" target="_blank"><?= $i['nama_perusahaan']; ?></a></td>
                                        <!--<td><?= $i['no_tlp']; ?></td>-->
                                        <td><?= $i['das']; ?></td>
                                        <td><?= $i['tr_kecamatan_id']; ?></td>
                                        <td><?= $i['desa_id']; ?></td>
                                        <td><?= $i['kategori']; ?></td>
                                        <td><img src="<?= base_url('img') . "/" . $icondok; ?>" width="20px" height="20px" class="img-fluid" alt="<?= $ketdok; ?>" caption="<?= $ketdok; ?>"></td>
                                        <td><img src="<?= base_url('img') . "/" . $iconpad; ?>" width="20px" height="20px" class="img-fluid" alt="<?= $i['kepadatan']; ?>" caption="<?= $i['kepadatan']; ?>"></td>
                                        <td><img src="<?= base_url('img') . "/" . $iconpen; ?>" width="20px" height="20px" class="img-fluid" alt="<?= $i['pengaduan']; ?>" caption="<?= $i['pengaduan']; ?>"></td>
                                       <!-- <td><a href="<?= $i['website']; ?>" target="_blank"><?= $i['website']; ?></a></td>-->
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section><!-- End Counts Section -->

    </main><!-- End #main -->
    <?= $this->include('template/home/Footer'); ?>
    <?= $this->include('template/home/Js'); ?>


</body>

</html>