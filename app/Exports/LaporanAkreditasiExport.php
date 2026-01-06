<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class LaporanAkreditasiExport implements WithMultipleSheets
{
    protected $year;

    public function __construct($year = null)
    {
        $this->year = $year;
    }

    public function sheets(): array
    {
        $sheets = [];

        $sheets[] = new PimpinanExport(); 
        $sheets[] = new FundingExport(); 
        $sheets[] = new PenggunaanDanaExport(); 
        $sheets[] = new RerataBebanDtprExport();
        $sheets[] = new KualifikasiTendikExport();
        $sheets[] = new UnitSpmiExport();
        $sheets[] = new DataMahasiswaExport(); 
        $sheets[] = new KeberagamanAsalMahasiswaExport();
        $sheets[] = new KondisiMahasiswaExport();
        $sheets[] = new IsiPembelajaranExport();
        $sheets[] = new PemetaanCplPlExport();
        $sheets[] = new PetaPemenuhanCplExport();
        $sheets[] = new RerataMasaTungguLulusExport(); 
        $sheets[] = new KesesuaianBidangKerjaExport();
        $sheets[] = new KepuasanPenggunaExport();
        $sheets[] = new FleksibilitasPembelajaranExport();
        $sheets[] = new RekognisiLulusanExport(); 
        $sheets[] = new SaranaPrasaranaPenelitianExport();
        $sheets[] = new PembiayaanPenelitianExport();
        $sheets[] = new PengembanganDtprExport();
        $sheets[] = new KerjasamaPenelitianExport();
        $sheets[] = new PublikasiPenelitianExport();
        $sheets[] = new PerolehanHkiExport();
        $sheets[] = new SaranaPrasaranaPkmExport();
        $sheets[] = new PembiayaanPkmExport();
        $sheets[] = new KerjasamaPkmExport();
        $sheets[] = new DiseminasiPkmExport();
        $sheets[] = new PerolehanPkmExport();
        $sheets[] = new SistemTataKelolaExport();
        $sheets[] = new VisiMisiExport();
        $sheets[] = new SaranaPrasaranaExport();

        return $sheets;
    }
}