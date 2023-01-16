<?php

namespace App\Controllers;

use App\Models\DataModel;

class Dashboard extends BaseController
{
	public function index()
	{

		$indikator="Dokumen";
        if (isset($_GET["indikator"]))
            {
                $indikator = $_GET["indikator"];
            }
        elseif (empty($indikator))
            {
                $indikator = "Dokumen";
            }

		$Query = new DataModel();
		$data = [
			'title' => "Aplikasi Web SiPatroli",
			'appname' => "SiPatroli DLHK",
			'indikator' => $indikator,
			'heading' => "Dashboard",
			'data' => $Query->getPerusahaan(),
            'none' => $Query->countPerusahaan("None"),
            'cidurian' => $Query->countPerusahaan("Cidurian"),
            'cimanceuri' => $Query->countPerusahaan("Cimanceuri"),
            'cipasilian' => $Query->countPerusahaan("Cipasilian"),
            'cisadane' => $Query->countPerusahaan("Cisadane"),
            'cileles' => $Query->countPerusahaan("Cileles"),
            'cirarab' => $Query->countPerusahaan("Cirarab")
		];
		return view('v_dashboard', $data);
	}

	//--------------------------------------------------------------------

}
