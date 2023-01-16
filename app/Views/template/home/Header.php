<!-- ======= Header ======= -->

<header id="header">

    <div class="container d-flex">



        <div class="logo mr-auto">

                       <!-- <i class="fas fa-map-marked-alt"></i>-->

                                        

            <h1 class="text-light">

            <a href="<?= base_url('/'); ?>"><img src="img/sipatroli.png" alt="" class="img-fluid">

            <span title="Sistem Informasi Pantau Kontrol Limbah (SiPatroli) DLHK Kabupaten Tangerang"><?= $appname; ?></span>  

            </a><p style="font-size:12px;color:purple"><b>Sistem Informasi Pantau Kontrol Limbah DLHK Kabupaten Tangerang</b></p> </h1>

            

            <!-- Uncomment below if you prefer to use an image logo -->

            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        </div>



        <nav class="nav-menu d-none d-lg-block">

            <ul>

                <li class="active"><a href="<?= base_url('/'); ?>">Home</a></li>

                <li><a href="<?= base_url('dashboard/'); ?>">Administrator</a></li>

                <li class="drop-down"><a href="">Menu</a>

                    <ul>

                        <li class="drop-down"><a href="#">Data DAS</a>

                            <ul>

                                <li><a href="<?= base_url('?das=None') ?>&indikator=<?php echo $indikator; ?>">(Non DAS)</a></li>

                                <li><a href="<?= base_url('?das=Cidurian') ?>&indikator=<?php echo $indikator; ?>">DAS (Cidurian)</a></li>

                                <li><a href="<?= base_url('?das=Cimanceuri') ?>&indikator=<?php echo $indikator; ?>">DAS (Cimanceuri)</a></li>

                                <li><a href="<?= base_url('?das=Cipasilian') ?>&indikator=<?php echo $indikator; ?>">DAS (Cipasilian)</a></li>

                                <li><a href="<?= base_url('?das=Cisadane') ?>&indikator=<?php echo $indikator; ?>">DAS (Cisadane)</a></li>

                                <li><a href="<?= base_url('?das=Cileles') ?>&indikator=<?php echo $indikator; ?>">DAS (Cileles)</a></li>

                                <li><a href="<?= base_url('?das=Cirarab') ?>&indikator=<?php echo $indikator; ?>">DAS (Cirarab)</a></li>

                            </ul>

                        </li>

                        <li class="drop-down"><a href="#">Data Kecamatan</a>

                            <ul>

                                <li><a href="<?= base_url('?tr_kecamatan_id=Balaraja') ?>&indikator=<?php echo $indikator; ?>">Balaraja</a></li>

                                <li><a href="<?= base_url('?tr_kecamatan_id=Cikupa') ?>&indikator=<?php echo $indikator; ?>">Cikupa</a></li>

                                <li><a href="<?= base_url('?tr_kecamatan_id=Cisauk') ?>&indikator=<?php echo $indikator; ?>">Cisauk</a></li>

                                <li><a href="<?= base_url('?tr_kecamatan_id=Cisoka') ?>&indikator=<?php echo $indikator; ?>">Cisoka</a></li>

                                <li><a href="<?= base_url('?tr_kecamatan_id=Curug') ?>&indikator=<?php echo $indikator; ?>">Curug</a></li>

                                <li><a href="<?= base_url('?tr_kecamatan_id=Gunung Kaler') ?>&indikator=<?php echo $indikator; ?>">Gunung Kaler</a></li>

                                <li><a href="<?= base_url('?tr_kecamatan_id=Jambe') ?>&indikator=<?php echo $indikator; ?>">Jambe</a></li>

                                <li><a href="<?= base_url('?tr_kecamatan_id=Jayanti') ?>&indikator=<?php echo $indikator; ?>">Jayanti</a></li>

                                <li><a href="<?= base_url('?tr_kecamatan_id=Kelapa Dua') ?>&indikator=<?php echo $indikator; ?>">Kelapa Dua</a></li>

                                <li><a href="<?= base_url('?tr_kecamatan_id=Kemiri') ?>&indikator=<?php echo $indikator; ?>">Kemiri</a></li>

                                <li><a href="<?= base_url('?tr_kecamatan_id=Kosambi') ?>&indikator=<?php echo $indikator; ?>">Kosambi</a></li>

                                <li><a href="<?= base_url('?tr_kecamatan_id=Kronjo') ?>&indikator=<?php echo $indikator; ?>">Kronjo</a></li>

                                <li><a href="<?= base_url('?tr_kecamatan_id=Legok') ?>&indikator=<?php echo $indikator; ?>">Legok</a></li>

                                <li><a href="<?= base_url('?tr_kecamatan_id=Mekar Baru') ?>&indikator=<?php echo $indikator; ?>">Mekar Baru</a></li>

                                <li><a href="<?= base_url('?tr_kecamatan_id=Pagedangan') ?>&indikator=<?php echo $indikator; ?>">Pagedangan</a></li>

                                <li><a href="<?= base_url('?tr_kecamatan_id=Pakuhaji') ?>&indikator=<?php echo $indikator; ?>">Pakuhaji</a></li>

                                <li><a href="<?= base_url('?tr_kecamatan_id=Panongan') ?>&indikator=<?php echo $indikator; ?>">Panongan</a></li>

                                <li><a href="<?= base_url('?tr_kecamatan_id=Pasar Kemis') ?>&indikator=<?php echo $indikator; ?>">Pasar Kemis</a></li>

                                <li><a href="<?= base_url('?tr_kecamatan_id=Rajeg') ?>&indikator=<?php echo $indikator; ?>">Rajeg</a></li>

                                <li><a href="<?= base_url('?tr_kecamatan_id=Sepatan') ?>&indikator=<?php echo $indikator; ?>">Sepatan</a></li>

                                <li><a href="<?= base_url('?tr_kecamatan_id=Sepatan Timur') ?>&indikator=<?php echo $indikator; ?>">Sepatan Timur</a></li>

                                <li><a href="<?= base_url('?tr_kecamatan_id=Sindang Jaya') ?>&indikator=<?php echo $indikator; ?>">Sindang Jaya</a></li>

                                <li><a href="<?= base_url('?tr_kecamatan_id=Sukadiri') ?>&indikator=<?php echo $indikator; ?>">Sukadiri</a></li>

                                <li><a href="<?= base_url('?tr_kecamatan_id=Sukamulya') ?>&indikator=<?php echo $indikator; ?>">Sukamulya</a></li>

                                <li><a href="<?= base_url('?tr_kecamatan_id=Teluk Naga') ?>&indikator=<?php echo $indikator; ?>">Teluk Naga</a></li>

                                <li><a href="<?= base_url('?tr_kecamatan_id=Tigaraksa') ?>&indikator=<?php echo $indikator; ?>">Tigaraksa</a></li>

                                <li><a href="<?= base_url('?tr_kecamatan_id=Kresek') ?>&indikator=<?php echo $indikator; ?>">Kresek</a></li>

                                <li><a href="<?= base_url('?tr_kecamatan_id=Mauk') ?>&indikator=<?php echo $indikator; ?>">Mauk</a></li>

                                <li><a href="<?= base_url('?tr_kecamatan_id=Solear') ?>&indikator=<?php echo $indikator; ?>">Solear</a></li>

                            </ul>

                        </li>

                        <li><a href="<?= base_url('table'); ?>">Data Perusahaan</a></li>

                    </ul>

                </li>

            </ul>

        </nav><!-- .nav-menu -->



    </div>

</header><!-- End Header -->