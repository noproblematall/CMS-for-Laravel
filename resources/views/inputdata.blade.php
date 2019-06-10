@extends('layouts.app')
@section('css')
    <style media="screen">
        table > thead > tr > th {
          text-align: center !important;
          vertical-align: middle !important;
        }
        table > tfoot > tr > td {
          font-weight: bold;
        }
      </style>
@endsection
@section('subtitle')
    <div class="page-title-heading">
        <div class="page-title-icon">
            <i class="pe-7s-edit icon-gradient bg-amy-crisp">
            </i>
        </div>
        <div>FORM INPUT DATA</div>                                
    </div>
    
@endsection

@section('content')
<div class="col-md-6"><!--tab kiri-->
    <div class="main-card mb-3 card">
        <div class="card-body"><h5 class="card-title">Tabel Isian</h5>
            <table class="mb-0 table table-bordered">


                <tbody>
                <tr>
                    <td>Kelurahan</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                <tr>
                    <td>Kecamatan</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                <tr>
                    <td>Kabupaten/Kota</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr><tr>
                    <td>Provinsi</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                <tr>
                    <td>Bulan</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                <tr>
                    <td>Tahun</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr><tr>
                    <td>Nama pengisi</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr><tr>
                    <td>Pekerjaan</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                </tr><tr>
                    <td>Jabatan</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>





                </tbody>
            </table>
        </div>
    </div>
    <div class="main-card mb-3 card">
        <div class="card-body"><h5 class="card-title">1.1.1.1 Penetapan Batas dan Peta Wilayah </h5>
            <table class="mb-0 table table-bordered">


                <thead>
                <tr>

                    <th rowspan="2" style="text-align: center; vertical-align: middle;">Penetapan Batas</th>
                    <th colspan="2" style="text-align: center; vertical-align: middle;">Dasar Hukum</th>
                    <th rowspan="2" style="text-align: center; vertical-align: middle;">Peta Wilayah</th>
                </tr>
                <tr>
                    <th style="text-align: center; vertical-align: middle;">Perdes No</th>
                    <th style="text-align: center; vertical-align: middle;">Perda No </th>
                </tr>
                </thead>
                <tbody>
                <tr>

                    <td></select><select class="form-control-sm form-control">
                        <option>Ada</option>
                        <option>Tidak Ada</option>
                    </select></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>

                </tbody>

            </table>
        </div>
    </div>
    <div class="main-card mb-3 card">
        <div class="card-body"><h5 class="card-title">B. TANAH KERING</h5>
            <table class="mb-0 table table-bordered">


                <tbody>
                <tr>
                    <th style="text-align: center; vertical-align: middle;">Jenis Tanah Kering</th>
                    <th style="text-align: center; vertical-align: middle;">Luas (Ha)</th>
                </tr>
                </tr><tr>
                    <td>1. Tegal / Ladang</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                </tr><tr>
                    <td>2. Pemukiman</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                </tr><tr>
                    <td>3. Pekarangan</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                </tr><tr>
                    <td><b>Total luas</b></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>
    <div class="main-card mb-3 card">
        <div class="card-body"><h5 class="card-title">D. TANAH PERKEBUNAN</h5>
            <table class="mb-0 table table-bordered">


                <tbody>
                <tr>
                    <th style="text-align: center; vertical-align: middle;">Jenis Perkebunan</th>
                    <th style="text-align: center; vertical-align: middle;">Luas (Ha)</th>
                </tr>
                </tr><tr>
                    <td>1. Tanah Perkebunan Rakyat</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                </tr><tr>
                    <td>2. Tanah Perkebunan Negara</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                </tr><tr>
                    <td>3. Tanah Perkebunan Swasta</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>

                <tr>
                    <td>4. Tanah Perkebunan Perorangan</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                <tr>
                    <td><b>Total luas</b></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>
    <div class="main-card mb-3 card">
        <div class="card-body"><h5 class="card-title">1.2.2	Topografi</h5>
            <table class="mb-0 table table-bordered">


                <tbody>
                <tr>
                    <th style="text-align: center; vertical-align: middle;">Jenis Perkebunan</th>
                    <th style="text-align: center; vertical-align: middle;">Keberadaan</th>
                    <th style="text-align: center; vertical-align: middle;">Luas (Ha)</th>
                </tr>
                </tr><tr>
                    <td>1.	Kelurahan dataran rendah</td>
                    <td></select><select class="form-control-sm form-control">
                        <option>Ada</option>
                        <option>Tidak Ada</option>
                    </select></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                </tr><tr>
                    <td>2.	Kelurahan berbukit-bukit</td>
                    <td></select><select class="form-control-sm form-control">
                        <option>Ada</option>
                        <option>Tidak Ada</option>
                    </select></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                </tr><tr>
                    <td>3.	Kelurahan dataran tinggi/pegunungan</td>
                    <td></select><select class="form-control-sm form-control">
                        <option>Ada</option>
                        <option>Tidak Ada</option>
                    </select></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>

                <tr>
                    <td>4.	Kelurahan lereng gunung</td>
                    <td></select><select class="form-control-sm form-control">
                        <option>Ada</option>
                        <option>Tidak Ada</option>
                    </select></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                <tr>
                    <td>5.	Kelurahan tepi pantai/pesisir</td>
                    <td></select><select class="form-control-sm form-control">
                        <option>Ada</option>
                        <option>Tidak Ada</option>
                    </select></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                <tr>
                    <td>6.	Kelurahan kawasan rawa</td>
                    <td></select><select class="form-control-sm form-control">
                        <option>Ada</option>
                        <option>Tidak Ada</option>
                    </select></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                <tr>
                    <td>7.	Kelurahan kawasan gambut</td>
                    <td></select><select class="form-control-sm form-control">
                        <option>Ada</option>
                        <option>Tidak Ada</option>
                    </select></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                <tr>
                    <td>8.	Kelurahan aliran sungai</td>
                    <td></select><select class="form-control-sm form-control">
                        <option>Ada</option>
                        <option>Tidak Ada</option>
                    </select></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                <tr>
                    <td>9.	Kelurahan bantaran sungai</td>
                    <td></select><select class="form-control-sm form-control">
                        <option>Ada</option>
                        <option>Tidak Ada</option>
                    </select></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                <tr>
                    <td><b>Letak</b></td>
                    <td><b>Keberadaan</b></td>
                    <td><b>Luas (Ha)</b></td>
                </tr>

                <tr>
                    <td>10.	Kelurahan kawasan perkantoran</td>
                    <td></select><select class="form-control-sm form-control">
                        <option>Ada</option>
                        <option>Tidak Ada</option>
                    </select></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                <tr>
                    <td>11.	Kelurahan kawasan pertokoan/bisnis</td>
                    <td></select><select class="form-control-sm form-control">
                        <option>Ada</option>
                        <option>Tidak Ada</option>
                    </select></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                <tr>
                    <td>12.	Kelurahan kawasan campuran</td>
                    <td></select><select class="form-control-sm form-control">
                        <option>Ada</option>
                        <option>Tidak Ada</option>
                    </select></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                <tr>
                    <td>13.	Kelurahan kawasan industri</td>
                    <td></select><select class="form-control-sm form-control">
                        <option>Ada</option>
                        <option>Tidak Ada</option>
                    </select></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                <tr>
                    <td>14.	Kelurahan kepulauan</td>
                    <td></select><select class="form-control-sm form-control">
                        <option>Ada</option>
                        <option>Tidak Ada</option>
                    </select></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                <tr>
                    <td>15.	Kelurahan pantai/pesisir</td>
                    <td></select><select class="form-control-sm form-control">
                        <option>Ada</option>
                        <option>Tidak Ada</option>
                    </select></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                <tr>
                    <td>16.	Kelurahan kawasan hutan</td>
                    <td></select><select class="form-control-sm form-control">
                        <option>Ada</option>
                        <option>Tidak Ada</option>
                    </select></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                <tr>
                    <td>17.	Kelurahan taman suaka</td>
                    <td></select><select class="form-control-sm form-control">
                        <option>Ada</option>
                        <option>Tidak Ada</option>
                    </select></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                <tr>
                    <td>18.	Kelurahan kawasan wisata</td>
                    <td></select><select class="form-control-sm form-control">
                        <option>Ada</option>
                        <option>Tidak Ada</option>
                    </select></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                <tr>
                    <td>19.	Kelurahan perbatasan<br> dengan negara lain</td>
                    <td></select><select class="form-control-sm form-control">
                        <option>Ada</option>
                        <option>Tidak Ada</option>
                    </select></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                <tr>
                    <td>20.	Kelurahan perbatasan <br>dengan provinsi lain</td>
                    <td></select><select class="form-control-sm form-control">
                        <option>Ada</option>
                        <option>Tidak Ada</option>
                    </select></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                <tr>
                    <td>21.	Kelurahan perbatasan <br>dengan kabupaten lain</td>
                    <td></select><select class="form-control-sm form-control">
                        <option>Ada</option>
                        <option>Tidak Ada</option>
                    </select></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                <tr>
                    <td>22.	Kelurahan perbatasan<br> antar kecamatan lain</td>
                    <td></select><select class="form-control-sm form-control">
                        <option>Ada</option>
                        <option>Tidak Ada</option>
                    </select></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                <tr>
                    <td>23.	Kelurahan DAS/bantaran sungai</td>
                    <td></select><select class="form-control-sm form-control">
                        <option>Ada</option>
                        <option>Tidak Ada</option>
                    </select></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                <tr>
                    <td>24.	Kelurahan rawan banjir</td>
                    <td></select><select class="form-control-sm form-control">
                        <option>Ada</option>
                        <option>Tidak Ada</option>
                    </select></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                <tr>
                    <td>25.	Kelurahan bebas banjir</td>
                    <td></select><select class="form-control-sm form-control">
                        <option>Ada</option>
                        <option>Tidak Ada</option>
                    </select></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                <tr>
                    <td>26.	Kelurahan potensial tsunami</td>
                    <td></select><select class="form-control-sm form-control">
                        <option>Ada</option>
                        <option>Tidak Ada</option>
                    </select></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                <tr>
                    <td>27.	Kelurahan rawan jalur gempa bumi</td>
                    <td></select><select class="form-control-sm form-control">
                        <option>Ada</option>
                        <option>Tidak Ada</option>
                    </select></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>


                <th colspan="3" style="text-align: center; vertical-align: middle;">Orbitasi</th>



                <tr>
                    <td colspan="2">1.	Jarak ke ibu kota kecamatan (km)</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp &nbsp a.	Lama jarak tempuh ke ibukota kecamatan dengan kendaraan bermotor (Jam)</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp &nbsp b.	Lama jarak tempuh ke ibukota kecamatan dengan berjalan kaki atau kendaraan non bermotor (Jam)</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp &nbsp c.	Jumlah Kendaraan umum ke ibu kota kecamatan (Unit)</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr><tr>
                    <td colspan="2">2.	Jarak ke ibu kota kabupaten/kota (km)</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp &nbsp a.	Lama jarak tempuh ke ibukota kabupaten dengan kendaraan bermotor (Jam)</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp &nbsp b.	Lama jarak tempuh ke ibukota kabupaten dengan berjalan kaki atau kendaraan non bermotor (Jam)</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr><tr>
                    <td colspan="2">&nbsp &nbsp c.	Kendaraan umum ke ibu kota kabupaten/kota (Unit)</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr><tr>
                    <td colspan="2">3.	Jarak ke ibu kota provinsi (km)</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr><tr>
                    <td colspan="2">&nbsp &nbsp a.	Lama jarak tempuh ke ibukota provinsi dengan kendaraan bermotor (Jam)</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr><tr>
                    <td colspan="2">&nbsp &nbsp b.	Lama jarak tempuh ke ibukota provinsi dengan berjalan kaki atau kendaraan non bermotor (Jam)</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr><tr>
                    <td colspan="2">&nbsp &nbsp c.	Kendaraan umum ke ibukota provinsi (Unit)</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div> <!-- 1.2.2.topografi -->

</div>
<div class="col-md-6"><!--tab kanan-->
    <div class="main-card mb-3 card">
        <div class="card-body"><h5 class="card-title">SUMBER  DATA UNTUK MENGISI PROFIL KELURAHAN</h5>
            <table class="mb-0 table table-bordered">


                <tbody>
                </tr><tr>
                    <td>1</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                </tr><tr>
                    <td>2</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                </tr><tr>
                    <td>3</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                </tr><tr>
                    <td>4</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>
    <div class="main-card mb-3 card">
        <div class="card-body"><h5 class="card-title">1.1.1	Batas Wilayah</h5>
            <table class="mb-0 table table-bordered">


                <tbody>
                <tr>
                    <th style="text-align: center; vertical-align: middle;">Batas</th>
                    <th style="text-align: center; vertical-align: middle;">Kelurahan</th>
                    <th style="text-align: center; vertical-align: middle;">Kecamatan</th>
                </tr>
                <tr>
                    <td>1. Sebelah utara</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                <tr>
                    <td>2. Sebelah selatan</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                <tr>
                    <td>3. Sebelah timur</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                <tr>
                    <td>4. Sebelah barat</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                </tr>




                </tbody>
            </table>
        </div>
    </div>
    <div class="main-card mb-3 card">
        <div class="card-body"><h5 class="card-title">1.2.1	LUAS WILAYAH MENURUT PENGGUNAAN <br>A. TANAH SAWAH</h5>
            <table class="mb-0 table table-bordered">


                <tbody>
                <tr>
                    <th style="text-align: center; vertical-align: middle;">Jenis Sawah</th>
                    <th style="text-align: center; vertical-align: middle;">Luas (Ha)</th>
                </tr>
                </tr><tr>
                    <td>Sawah irigasi teknis</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                </tr><tr>
                    <td>Sawah irigasi ½ teknis</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                </tr><tr>
                    <td>Sawah tadah hujan</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                </tr><tr>
                    <td>Sawah pasang surut</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                <tr>
                    <td>Total Luas</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>
    <div class="main-card mb-3 card">
        <div class="card-body"><h5 class="card-title">C. TANAH BASAH</h5>
            <table class="mb-0 table table-bordered">


                <tbody>
                <tr>
                    <th style="text-align: center; vertical-align: middle;">Jenis Tanah Basah</th>
                    <th style="text-align: center; vertical-align: middle;">Luas (Ha)</th>
                </tr>
                </tr><tr>
                    <td>Tanah Rawa</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                </tr><tr>
                    <td>Pasang Surut</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                </tr><tr>
                    <td>Lahan Gambut</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>

                <tr>
                    <td>Situ / Waduk / Danau</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                <tr>
                    <td><b>Total luas</b></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>
    <div class="main-card mb-3 card">
        <div class="card-body"><h5 class="card-title">E. TANAH FASILITAS UMUM</h5>
            <table class="mb-0 table table-bordered">


                <tbody>
                <tr>
                    <th style="text-align: center; vertical-align: middle;">Jenis Fasilitas Umum</th>
                    <th style="text-align: center; vertical-align: middle;">Luas (Ha)</th>
                </tr>
                </tr><tr>
                    <td>1.	Kas Kelurahan (a+b+c+d) :	</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                </tr><tr>
                    <td>&nbsp &nbsp a.	Tanah bengkok</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                </tr><tr>
                    <td>&nbsp &nbsp b.	Tanah titi sara</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>

                <tr>
                    <td>&nbsp &nbsp c.	Kebun desa</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                <tr>
                    <td>&nbsp &nbsp d.	Sawah desa</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                <tr>
                    <td>2.	Lapangan olahraga</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                <tr>
                    <td>4.	Ruang publik/taman kota</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                <tr>
                    <td>5.	Tempat pemakaman desa/umum</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                <tr>
                    <td>6.	Bangunan sekolah/perguruan tinggi</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr><tr>
                    <td>8.	Pertokoan</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                <tr>
                    <td>9.	Fasilitas pasar</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                <tr>
                    <td>10.	Terminal</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                <tr>
                    <td>11.	Jalan</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr><tr>
                    <td>12.	Daerah tangkapan air</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr><tr>
                    <td>13.	Usaha perikanan</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr><tr>
                    <td>14.	Sutet/aliran listrik tegangan tinggi</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                <tr>
                    <td><b>Total luas</b></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>








                </tbody>
            </table>
        </div>
    </div>
    <div class="main-card mb-3 card">
        <div class="card-body"><h5 class="card-title">1.3.2.1	Jenis populasi ternak</h5>
            <table class="mb-0 table table-bordered">


                <tbody>
                <tr>
                    <th style="text-align: center; vertical-align: middle;">Jenis Ternak</th>
                    <th style="text-align: center; vertical-align: middle;">Jumlah Pemilik
                        (Orang)
                    </th>
                    <th style="text-align: center; vertical-align: middle;">Perkiraan Jumlah
                        Populasi (Ekor)

                    </th>
                </tr>
                </tr><tr>
                    <td>1.	Sapi	</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                </tr><tr>
                    <td>2.	Kerbau</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                </tr><tr>
                    <td>3.	Babi</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>

                <tr>
                    <td>4.	Ayam kampung</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                <tr>
                    <td>5.	Jenis ayam broiler</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                <tr>
                    <td>6.	Bebek</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                <tr>
                    <td>7.	Kuda</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                <tr>
                    <td>8.	Kambing</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                <tr>
                    <td>9.	Domba</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr><tr>
                    <td>10.	Angsa</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>

                </tbody>
            </table>
        </div>
    </div> <!-- 1.3.2.1	Jenis populasi ternak -->

</div>

<div class="col-md-12"> <!--tab tengah -->
    <div class="main-card mb-3 card">
        <div class="card-body"><h5 class="card-title">1.3.2.2	Produksi Peternakan</h5>
            <table class="mb-0 table table-bordered">


                <tbody>
                <tr>
                    <th style="text-align: center; vertical-align: middle;">Jenis Produksi</th>
                    <th style="text-align: center; vertical-align: middle;">Hasil Produksi</th>
                    <th style="text-align: center; vertical-align: middle;">Nilai Produksi (Rp)</th>
                    <th style="text-align: center; vertical-align: middle;">Nilai Bahan Baku (Rp)
                    </th>
                    <th style="text-align: center; vertical-align: middle;">Nilai Bahan Penolong(Rp)</th>
                </tr>
                </tr><tr>
                    <td>1.	Susu	</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                </tr><tr>
                    <td>2.	Kulit</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                </tr><tr>
                    <td>3.	Telur</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>

                <tr>
                    <td>4.	Daging</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                <tr>
                    <td>5.	Madu</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                <tr>
                    <td>6.	Bulu</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                <tr>
                    <td>7.	Air liur burung walet</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                <tr>
                    <td>8.	Minyak</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                <tr>
                    <td>9.	Hiasan/lukisan</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>
                <tr>
                    <td>10.	Cinderamata</td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                    <td><input type="text" name="usrname" class="mb- form-control-sm form-control"></td>
                </tr>

                </tbody>
            </table>
        </div>
    </div> <!-- 1.3.2.2	Produksi Peternakan -->

    <div class="main-card mb-3 card">
        <div class="card-body">
            <h5 class="card-title">1.3.2.3 Ketersediaan Hijauan Pakan Ternak</h5>
            <table class="mb-0 table table-bordered">
                      <tbody>
                      <tr>
                <td>Luas tanaman pakan ternak (rumput gajah, dll)</td>
                              <td><input type="text" name="luas_tanaman_pakan_ternak_rumput_gajah_dll" id="luas_tanaman_pakan_ternak_rumput_gajah_dll" class="mb- form-control-sm form-control"></td>
                          </tr>
                      <tr>
                <td>Produksi hijauan makanan ternak</td>
                              <td><input type="text" name="produksi_hijauan_makanan_ternak" id="produksi_hijauan_makanan_ternak" class="mb- form-control-sm form-control"></td>
                          </tr>
                      <tr>
                <td>Dipasok dari luar Kelurahan</td>
                              <td><input type="text" name="dipasok_dari_luar_kelurahan" id="dipasok_dari_luar_kelurahan" class="mb- form-control-sm form-control"></td>
                          </tr>
                      <tr>
                <td>Disubsidi dinas</td>
                              <td><input type="text" name="disubsidi_dinas" id="disubsidi_dinas" class="mb- form-control-sm form-control"></td>
                          </tr>
                        </tbody>
            </table>
        </div>
    </div>

    <div class="main-card mb-3 card">
        <div class="card-body">
            <h5 class="card-title">1.3.2.4 Pemilik Usaha Pengolahan Hasil Ternak</h5>
            <table class="mb-0 table table-bordered">
                  <thead>
                      <tr>
                              <th>Jenis Usaha</th>
                              <th>Jumlah Pemilik Usaha (Orang)</th>
                                  </tr>
                  </thead>
                      <tbody>
                      <tr>
                <td>Dendeng</td>
                                          <td><input type="text" name="jumlah_pemilik_usaha_orang_dendeng" id="jumlah_pemilik_usaha_orang_dendeng" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>Abon</td>
                                          <td><input type="text" name="jumlah_pemilik_usaha_orang_abon" id="jumlah_pemilik_usaha_orang_abon" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>Penyamakan Kulit</td>
                                          <td><input type="text" name="jumlah_pemilik_usaha_orang_penyamakan_kulit" id="jumlah_pemilik_usaha_orang_penyamakan_kulit" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>Madu Lebah</td>
                                          <td><input type="text" name="jumlah_pemilik_usaha_orang_madu_lebah" id="jumlah_pemilik_usaha_orang_madu_lebah" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>Biogas</td>
                                          <td><input type="text" name="jumlah_pemilik_usaha_orang_biogas" id="jumlah_pemilik_usaha_orang_biogas" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>Telur Asin</td>
                                          <td><input type="text" name="jumlah_pemilik_usaha_orang_telur_asin" id="jumlah_pemilik_usaha_orang_telur_asin" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>Krupuk Kulit</td>
                                          <td><input type="text" name="jumlah_pemilik_usaha_orang_krupuk_kulit" id="jumlah_pemilik_usaha_orang_krupuk_kulit" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>Penyemakan kulit</td>
                                          <td><input type="text" name="jumlah_pemilik_usaha_orang_penyemakan_kulit" id="jumlah_pemilik_usaha_orang_penyemakan_kulit" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>Kerajinan tangan (handy craft)</td>
                                          <td><input type="text" name="jumlah_pemilik_usaha_orang_kerajinan_tangan_handy_craft" id="jumlah_pemilik_usaha_orang_kerajinan_tangan_handy_craft" class="mb- form-control-sm form-control"></td>
                                      </tr>
                        </tbody>
            </table>
        </div>
    </div>

    <div class="main-card mb-3 card">
        <div class="card-body">
            <h5 class="card-title">1.3.2.5 Ketersediaan lahan pemeliharaan ternak/padang penggembalaan</h5>
            <table class="mb-0 table table-bordered">
                  <thead>
                      <tr>
                              <th>Jenis Kepemilikan Lahan</th>
                              <th>Luas (Ha)</th>
                                  </tr>
                  </thead>
                      <tbody>
                      <tr>
                <td>1. Milik masyarakat umum</td>
                                          <td><input type="text" name="luas_ha_1_milik_masyarakat_umum" id="luas_ha_1_milik_masyarakat_umum" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>2. Milik perusahaan peternakan (ranch)</td>
                                          <td><input type="text" name="luas_ha_2_milik_perusahaan_peternakan_ranch" id="luas_ha_2_milik_perusahaan_peternakan_ranch" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>3. Milik perorangan</td>
                                          <td><input type="text" name="luas_ha_3_milik_perorangan" id="luas_ha_3_milik_perorangan" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>4. Sewa pakai</td>
                                          <td><input type="text" name="luas_ha_4_sewa_pakai" id="luas_ha_4_sewa_pakai" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>5. Milik pemerintah</td>
                                          <td><input type="text" name="luas_ha_5_milik_pemerintah" id="luas_ha_5_milik_pemerintah" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>6. Milik masyarakat adat</td>
                                          <td><input type="text" name="luas_ha_6_milik_masyarakat_adat" id="luas_ha_6_milik_masyarakat_adat" class="mb- form-control-sm form-control"></td>
                                      </tr>
                        </tbody>
            </table>
        </div>
    </div>

    <div class="main-card mb-3 card">
        <div class="card-body">
            <h5 class="card-title">1.3.3.1 Jenis dan alat produksi budidaya ikan laut dan payau</h5>
            <table class="mb-0 table table-bordered">
                  <thead>
                      <tr>
                              <th>Jenis Alat</th>
                              <th>Jumlah</th>
                              <th>Hasil Produksi (Ton/Tahun)</th>
                                  </tr>
                  </thead>
                      <tbody>
                      <tr>
                <td>1. Karamba</td>
                                          <td><input type="text" name="jumlah_1_karamba" id="jumlah_1_karamba" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="hasil_produksi_ton_tahun_1_karamba" id="hasil_produksi_ton_tahun_1_karamba" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>2. Tambak</td>
                                          <td><input type="text" name="jumlah_2_tambak" id="jumlah_2_tambak" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="hasil_produksi_ton_tahun_2_tambak" id="hasil_produksi_ton_tahun_2_tambak" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>3. Jermal</td>
                                          <td><input type="text" name="jumlah_3_jermal" id="jumlah_3_jermal" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="hasil_produksi_ton_tahun_3_jermal" id="hasil_produksi_ton_tahun_3_jermal" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>4. Pancing</td>
                                          <td><input type="text" name="jumlah_4_pancing" id="jumlah_4_pancing" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="hasil_produksi_ton_tahun_4_pancing" id="hasil_produksi_ton_tahun_4_pancing" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>5. Pukat</td>
                                          <td><input type="text" name="jumlah_5_pukat" id="jumlah_5_pukat" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="hasil_produksi_ton_tahun_5_pukat" id="hasil_produksi_ton_tahun_5_pukat" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>6. Jala</td>
                                          <td><input type="text" name="jumlah_6_jala" id="jumlah_6_jala" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="hasil_produksi_ton_tahun_6_jala" id="hasil_produksi_ton_tahun_6_jala" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>7.</td>
                                          <td><input type="text" name="jumlah_7" id="jumlah_7" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="hasil_produksi_ton_tahun_7" id="hasil_produksi_ton_tahun_7" class="mb- form-control-sm form-control"></td>
                                      </tr>
                        </tbody>
            </table>
        </div>
    </div>

    <div class="main-card mb-3 card">
        <div class="card-body">
            <h5 class="card-title">1.3.3.2 Jenis dan sarana produksi budidaya ikan air tawar</h5>
            <table class="mb-0 table table-bordered">
                  <thead>
                      <tr>
                              <th>Jenis Sarana</th>
                              <th>Jumlah</th>
                              <th>Hasil Produksi (Ton/Tahun)</th>
                                  </tr>
                  </thead>
                      <tbody>
                      <tr>
                <td>1. Karamba</td>
                                          <td><input type="text" name="jumlah_1_karamba" id="jumlah_1_karamba" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="hasil_produksi_ton_tahun_1_karamba" id="hasil_produksi_ton_tahun_1_karamba" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>2. Empang/kolam</td>
                                          <td><input type="text" name="jumlah_2_empang_kolam" id="jumlah_2_empang_kolam" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="hasil_produksi_ton_tahun_2_empang_kolam" id="hasil_produksi_ton_tahun_2_empang_kolam" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>3. Danau</td>
                                          <td><input type="text" name="jumlah_3_danau" id="jumlah_3_danau" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="hasil_produksi_ton_tahun_3_danau" id="hasil_produksi_ton_tahun_3_danau" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>4. Rawa</td>
                                          <td><input type="text" name="jumlah_4_rawa" id="jumlah_4_rawa" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="hasil_produksi_ton_tahun_4_rawa" id="hasil_produksi_ton_tahun_4_rawa" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>5. Sungai</td>
                                          <td><input type="text" name="jumlah_5_sungai" id="jumlah_5_sungai" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="hasil_produksi_ton_tahun_5_sungai" id="hasil_produksi_ton_tahun_5_sungai" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>6. Sawah</td>
                                          <td><input type="text" name="jumlah_6_sawah" id="jumlah_6_sawah" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="hasil_produksi_ton_tahun_6_sawah" id="hasil_produksi_ton_tahun_6_sawah" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>7. Jala</td>
                                          <td><input type="text" name="jumlah_7_jala" id="jumlah_7_jala" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="hasil_produksi_ton_tahun_7_jala" id="hasil_produksi_ton_tahun_7_jala" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>8. Pancingan</td>
                                          <td><input type="text" name="jumlah_8_pancingan" id="jumlah_8_pancingan" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="hasil_produksi_ton_tahun_8_pancingan" id="hasil_produksi_ton_tahun_8_pancingan" class="mb- form-control-sm form-control"></td>
                                      </tr>
                        </tbody>
            </table>
        </div>
    </div>

    <div class="main-card mb-3 card">
        <div class="card-body">
            <h5 class="card-title">1.3.3.3 Jenis ikan dan produksi</h5>
            <table class="mb-0 table table-bordered">
                  <thead>
                      <tr>
                              <th>Jenis Ikan</th>
                              <th>Hasil Produksi (Ton/Thn)</th>
                              <th>Nilai Produksi (Rp)</th>
                              <th>Nilai Bahan Baku (Rp)</th>
                              <th>Nilai Bahan Penolong (Rp)</th>
                              <th>Biaya Antara (Rp)</th>
                                  </tr>
                  </thead>
                      <tbody>
                      <tr>
                <td>1. Tuna</td>
                                          <td><input type="text" name="hasil_produksi_ton_thn_1_tuna" id="hasil_produksi_ton_thn_1_tuna" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="nilai_produksi_rp_1_tuna" id="nilai_produksi_rp_1_tuna" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="nilai_bahan_baku_rp_1_tuna" id="nilai_bahan_baku_rp_1_tuna" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="nilai_bahan_penolong_rp_1_tuna" id="nilai_bahan_penolong_rp_1_tuna" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="biaya_antara_rp_1_tuna" id="biaya_antara_rp_1_tuna" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>2. Salmon</td>
                                          <td><input type="text" name="hasil_produksi_ton_thn_2_salmon" id="hasil_produksi_ton_thn_2_salmon" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="nilai_produksi_rp_2_salmon" id="nilai_produksi_rp_2_salmon" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="nilai_bahan_baku_rp_2_salmon" id="nilai_bahan_baku_rp_2_salmon" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="nilai_bahan_penolong_rp_2_salmon" id="nilai_bahan_penolong_rp_2_salmon" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="biaya_antara_rp_2_salmon" id="biaya_antara_rp_2_salmon" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>3. Tongkol/cakalang </td>
                                          <td><input type="text" name="hasil_produksi_ton_thn_3_tongkol_cakalang" id="hasil_produksi_ton_thn_3_tongkol_cakalang" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="nilai_produksi_rp_3_tongkol_cakalang" id="nilai_produksi_rp_3_tongkol_cakalang" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="nilai_bahan_baku_rp_3_tongkol_cakalang" id="nilai_bahan_baku_rp_3_tongkol_cakalang" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="nilai_bahan_penolong_rp_3_tongkol_cakalang" id="nilai_bahan_penolong_rp_3_tongkol_cakalang" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="biaya_antara_rp_3_tongkol_cakalang" id="biaya_antara_rp_3_tongkol_cakalang" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>4. Hiu</td>
                                          <td><input type="text" name="hasil_produksi_ton_thn_4_hiu" id="hasil_produksi_ton_thn_4_hiu" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="nilai_produksi_rp_4_hiu" id="nilai_produksi_rp_4_hiu" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="nilai_bahan_baku_rp_4_hiu" id="nilai_bahan_baku_rp_4_hiu" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="nilai_bahan_penolong_rp_4_hiu" id="nilai_bahan_penolong_rp_4_hiu" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="biaya_antara_rp_4_hiu" id="biaya_antara_rp_4_hiu" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>5. Kakap</td>
                                          <td><input type="text" name="hasil_produksi_ton_thn_5_kakap" id="hasil_produksi_ton_thn_5_kakap" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="nilai_produksi_rp_5_kakap" id="nilai_produksi_rp_5_kakap" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="nilai_bahan_baku_rp_5_kakap" id="nilai_bahan_baku_rp_5_kakap" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="nilai_bahan_penolong_rp_5_kakap" id="nilai_bahan_penolong_rp_5_kakap" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="biaya_antara_rp_5_kakap" id="biaya_antara_rp_5_kakap" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>6. Tenggiri</td>
                                          <td><input type="text" name="hasil_produksi_ton_thn_6_tenggiri" id="hasil_produksi_ton_thn_6_tenggiri" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="nilai_produksi_rp_6_tenggiri" id="nilai_produksi_rp_6_tenggiri" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="nilai_bahan_baku_rp_6_tenggiri" id="nilai_bahan_baku_rp_6_tenggiri" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="nilai_bahan_penolong_rp_6_tenggiri" id="nilai_bahan_penolong_rp_6_tenggiri" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="biaya_antara_rp_6_tenggiri" id="biaya_antara_rp_6_tenggiri" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>7. Jambal</td>
                                          <td><input type="text" name="hasil_produksi_ton_thn_7_jambal" id="hasil_produksi_ton_thn_7_jambal" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="nilai_produksi_rp_7_jambal" id="nilai_produksi_rp_7_jambal" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="nilai_bahan_baku_rp_7_jambal" id="nilai_bahan_baku_rp_7_jambal" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="nilai_bahan_penolong_rp_7_jambal" id="nilai_bahan_penolong_rp_7_jambal" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="biaya_antara_rp_7_jambal" id="biaya_antara_rp_7_jambal" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>8. Pari</td>
                                          <td><input type="text" name="hasil_produksi_ton_thn_8_pari" id="hasil_produksi_ton_thn_8_pari" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="nilai_produksi_rp_8_pari" id="nilai_produksi_rp_8_pari" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="nilai_bahan_baku_rp_8_pari" id="nilai_bahan_baku_rp_8_pari" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="nilai_bahan_penolong_rp_8_pari" id="nilai_bahan_penolong_rp_8_pari" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="biaya_antara_rp_8_pari" id="biaya_antara_rp_8_pari" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>9. Kuwe</td>
                                          <td><input type="text" name="hasil_produksi_ton_thn_9_kuwe" id="hasil_produksi_ton_thn_9_kuwe" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="nilai_produksi_rp_9_kuwe" id="nilai_produksi_rp_9_kuwe" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="nilai_bahan_baku_rp_9_kuwe" id="nilai_bahan_baku_rp_9_kuwe" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="nilai_bahan_penolong_rp_9_kuwe" id="nilai_bahan_penolong_rp_9_kuwe" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="biaya_antara_rp_9_kuwe" id="biaya_antara_rp_9_kuwe" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>10. Belanak</td>
                                          <td><input type="text" name="hasil_produksi_ton_thn_10_belanak" id="hasil_produksi_ton_thn_10_belanak" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="nilai_produksi_rp_10_belanak" id="nilai_produksi_rp_10_belanak" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="nilai_bahan_baku_rp_10_belanak" id="nilai_bahan_baku_rp_10_belanak" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="nilai_bahan_penolong_rp_10_belanak" id="nilai_bahan_penolong_rp_10_belanak" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="biaya_antara_rp_10_belanak" id="biaya_antara_rp_10_belanak" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>11. Cumi</td>
                                          <td><input type="text" name="hasil_produksi_ton_thn_11_cumi" id="hasil_produksi_ton_thn_11_cumi" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="nilai_produksi_rp_11_cumi" id="nilai_produksi_rp_11_cumi" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="nilai_bahan_baku_rp_11_cumi" id="nilai_bahan_baku_rp_11_cumi" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="nilai_bahan_penolong_rp_11_cumi" id="nilai_bahan_penolong_rp_11_cumi" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="biaya_antara_rp_11_cumi" id="biaya_antara_rp_11_cumi" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>12. Gurita</td>
                                          <td><input type="text" name="hasil_produksi_ton_thn_12_gurita" id="hasil_produksi_ton_thn_12_gurita" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="nilai_produksi_rp_12_gurita" id="nilai_produksi_rp_12_gurita" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="nilai_bahan_baku_rp_12_gurita" id="nilai_bahan_baku_rp_12_gurita" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="nilai_bahan_penolong_rp_12_gurita" id="nilai_bahan_penolong_rp_12_gurita" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="biaya_antara_rp_12_gurita" id="biaya_antara_rp_12_gurita" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>13. Sarden</td>
                                          <td><input type="text" name="hasil_produksi_ton_thn_13_sarden" id="hasil_produksi_ton_thn_13_sarden" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="nilai_produksi_rp_13_sarden" id="nilai_produksi_rp_13_sarden" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="nilai_bahan_baku_rp_13_sarden" id="nilai_bahan_baku_rp_13_sarden" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="nilai_bahan_penolong_rp_13_sarden" id="nilai_bahan_penolong_rp_13_sarden" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="biaya_antara_rp_13_sarden" id="biaya_antara_rp_13_sarden" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>14. Bawal</td>
                                          <td><input type="text" name="hasil_produksi_ton_thn_14_bawal" id="hasil_produksi_ton_thn_14_bawal" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="nilai_produksi_rp_14_bawal" id="nilai_produksi_rp_14_bawal" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="nilai_bahan_baku_rp_14_bawal" id="nilai_bahan_baku_rp_14_bawal" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="nilai_bahan_penolong_rp_14_bawal" id="nilai_bahan_penolong_rp_14_bawal" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="biaya_antara_rp_14_bawal" id="biaya_antara_rp_14_bawal" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>15. Baronang</td>
                                          <td><input type="text" name="hasil_produksi_ton_thn_15_baronang" id="hasil_produksi_ton_thn_15_baronang" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="nilai_produksi_rp_15_baronang" id="nilai_produksi_rp_15_baronang" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="nilai_bahan_baku_rp_15_baronang" id="nilai_bahan_baku_rp_15_baronang" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="nilai_bahan_penolong_rp_15_baronang" id="nilai_bahan_penolong_rp_15_baronang" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="biaya_antara_rp_15_baronang" id="biaya_antara_rp_15_baronang" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>16. Kembung</td>
                                          <td><input type="text" name="hasil_produksi_ton_thn_16_kembung" id="hasil_produksi_ton_thn_16_kembung" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="nilai_produksi_rp_16_kembung" id="nilai_produksi_rp_16_kembung" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="nilai_bahan_baku_rp_16_kembung" id="nilai_bahan_baku_rp_16_kembung" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="nilai_bahan_penolong_rp_16_kembung" id="nilai_bahan_penolong_rp_16_kembung" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="biaya_antara_rp_16_kembung" id="biaya_antara_rp_16_kembung" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>17. Ikan ekor kuning</td>
                                          <td><input type="text" name="hasil_produksi_ton_thn_17_ikan_ekor_kuning" id="hasil_produksi_ton_thn_17_ikan_ekor_kuning" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="nilai_produksi_rp_17_ikan_ekor_kuning" id="nilai_produksi_rp_17_ikan_ekor_kuning" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="nilai_bahan_baku_rp_17_ikan_ekor_kuning" id="nilai_bahan_baku_rp_17_ikan_ekor_kuning" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="nilai_bahan_penolong_rp_17_ikan_ekor_kuning" id="nilai_bahan_penolong_rp_17_ikan_ekor_kuning" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="biaya_antara_rp_17_ikan_ekor_kuning" id="biaya_antara_rp_17_ikan_ekor_kuning" class="mb- form-control-sm form-control"></td>
                                      </tr>
                        </tbody>
            </table>
        </div>
    </div>

    <div class="main-card mb-3 card">
        <div class="card-body">
            <h5 class="card-title">1.3.4.1 Potensi Air dan Sumber Daya Air</h5>
            <table class="mb-0 table table-bordered">
                  <thead>
                      <tr>
                              <th rowspan="2">Jenis Sumber Air</th>
                              <th colspan="3">Debit / Volume (&#10004;)</th>
                                  </tr>
                      <tr>
                <th>Kecil</th>
                <th>Sedang</th>
                <th>Besar</th>
                      </tr>
                  </thead>
                      <tbody>
                      <tr>
                <td>1. Sungai</td>
                                          <td><input type="text" name="kecil_1_sungai" id="kecil_1_sungai" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="sedang_1_sungai" id="sedang_1_sungai" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="besar_1_sungai" id="besar_1_sungai" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>2. Danau</td>
                                          <td><input type="text" name="kecil_2_danau" id="kecil_2_danau" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="sedang_2_danau" id="sedang_2_danau" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="besar_2_danau" id="besar_2_danau" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>3. Mata Air</td>
                                          <td><input type="text" name="kecil_3_mata_air" id="kecil_3_mata_air" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="sedang_3_mata_air" id="sedang_3_mata_air" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="besar_3_mata_air" id="besar_3_mata_air" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>4. Bendungan/waduk/situ</td>
                                          <td><input type="text" name="kecil_4_bendungan_waduk_situ" id="kecil_4_bendungan_waduk_situ" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="sedang_4_bendungan_waduk_situ" id="sedang_4_bendungan_waduk_situ" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="besar_4_bendungan_waduk_situ" id="besar_4_bendungan_waduk_situ" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>5. Embung-embung</td>
                                          <td><input type="text" name="kecil_5_embung-embung" id="kecil_5_embung-embung" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="sedang_5_embung-embung" id="sedang_5_embung-embung" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="besar_5_embung-embung" id="besar_5_embung-embung" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>6. Jebakan air</td>
                                          <td><input type="text" name="kecil_6_jebakan_air" id="kecil_6_jebakan_air" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="sedang_6_jebakan_air" id="sedang_6_jebakan_air" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="besar_6_jebakan_air" id="besar_6_jebakan_air" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>7.</td>
                                          <td><input type="text" name="kecil_7" id="kecil_7" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="sedang_7" id="sedang_7" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="besar_7" id="besar_7" class="mb- form-control-sm form-control"></td>
                                      </tr>
                        </tbody>
            </table>
        </div>
    </div>

    <div class="main-card mb-3 card">
        <div class="card-body">
            <h5 class="card-title">1.3.4.2 Sumber dan Kualitas Air Bersih</h5>
            <table class="mb-0 table table-bordered">
                  <thead>
                      <tr>
                  <th rowspan="2">Jenis</th>
                  <th rowspan="2">Jumlah (Unit)</th>
                  <th rowspan="2">Kondisi Rusak (Unit)</th>
                  <th rowspan="2">Pemanfaat (KK)</th>
                  <th colspan="4">Kualitas</th>
                      </tr>
                      <tr>
                  <th>Berbau</th>
                  <th>Berwarna</th>
                  <th>Berasa</th>
                  <th>Baik</th>
                      </tr>
                  </thead>
                      <tbody>
                      <tr>
                <td>1. Mata air</td>
                                          <td><input type="text" name="jumlah_unit_1_mata_air" id="jumlah_unit_1_mata_air" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="kondisi_rusak_unit_1_mata_air" id="kondisi_rusak_unit_1_mata_air" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="pemanfaat_kk_1_mata_air" id="pemanfaat_kk_1_mata_air" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="berbau_1_mata_air" id="berbau_1_mata_air" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="berwarna_1_mata_air" id="berwarna_1_mata_air" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="berasa_1_mata_air" id="berasa_1_mata_air" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="baik_1_mata_air" id="baik_1_mata_air" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>2. Sumur gali</td>
                                          <td><input type="text" name="jumlah_unit_2_sumur_gali" id="jumlah_unit_2_sumur_gali" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="kondisi_rusak_unit_2_sumur_gali" id="kondisi_rusak_unit_2_sumur_gali" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="pemanfaat_kk_2_sumur_gali" id="pemanfaat_kk_2_sumur_gali" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="berbau_2_sumur_gali" id="berbau_2_sumur_gali" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="berwarna_2_sumur_gali" id="berwarna_2_sumur_gali" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="berasa_2_sumur_gali" id="berasa_2_sumur_gali" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="baik_2_sumur_gali" id="baik_2_sumur_gali" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>3. Sumur pompa</td>
                                          <td><input type="text" name="jumlah_unit_3_sumur_pompa" id="jumlah_unit_3_sumur_pompa" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="kondisi_rusak_unit_3_sumur_pompa" id="kondisi_rusak_unit_3_sumur_pompa" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="pemanfaat_kk_3_sumur_pompa" id="pemanfaat_kk_3_sumur_pompa" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="berbau_3_sumur_pompa" id="berbau_3_sumur_pompa" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="berwarna_3_sumur_pompa" id="berwarna_3_sumur_pompa" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="berasa_3_sumur_pompa" id="berasa_3_sumur_pompa" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="baik_3_sumur_pompa" id="baik_3_sumur_pompa" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>4. Hidran umum</td>
                                          <td><input type="text" name="jumlah_unit_4_hidran_umum" id="jumlah_unit_4_hidran_umum" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="kondisi_rusak_unit_4_hidran_umum" id="kondisi_rusak_unit_4_hidran_umum" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="pemanfaat_kk_4_hidran_umum" id="pemanfaat_kk_4_hidran_umum" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="berbau_4_hidran_umum" id="berbau_4_hidran_umum" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="berwarna_4_hidran_umum" id="berwarna_4_hidran_umum" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="berasa_4_hidran_umum" id="berasa_4_hidran_umum" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="baik_4_hidran_umum" id="baik_4_hidran_umum" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>5. PAM</td>
                                          <td><input type="text" name="jumlah_unit_5_pam" id="jumlah_unit_5_pam" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="kondisi_rusak_unit_5_pam" id="kondisi_rusak_unit_5_pam" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="pemanfaat_kk_5_pam" id="pemanfaat_kk_5_pam" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="berbau_5_pam" id="berbau_5_pam" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="berwarna_5_pam" id="berwarna_5_pam" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="berasa_5_pam" id="berasa_5_pam" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="baik_5_pam" id="baik_5_pam" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>6. Pipa</td>
                                          <td><input type="text" name="jumlah_unit_6_pipa" id="jumlah_unit_6_pipa" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="kondisi_rusak_unit_6_pipa" id="kondisi_rusak_unit_6_pipa" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="pemanfaat_kk_6_pipa" id="pemanfaat_kk_6_pipa" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="berbau_6_pipa" id="berbau_6_pipa" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="berwarna_6_pipa" id="berwarna_6_pipa" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="berasa_6_pipa" id="berasa_6_pipa" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="baik_6_pipa" id="baik_6_pipa" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>7. Sungai</td>
                                          <td><input type="text" name="jumlah_unit_7_sungai" id="jumlah_unit_7_sungai" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="kondisi_rusak_unit_7_sungai" id="kondisi_rusak_unit_7_sungai" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="pemanfaat_kk_7_sungai" id="pemanfaat_kk_7_sungai" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="berbau_7_sungai" id="berbau_7_sungai" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="berwarna_7_sungai" id="berwarna_7_sungai" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="berasa_7_sungai" id="berasa_7_sungai" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="baik_7_sungai" id="baik_7_sungai" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>8. Embung</td>
                                          <td><input type="text" name="jumlah_unit_8_embung" id="jumlah_unit_8_embung" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="kondisi_rusak_unit_8_embung" id="kondisi_rusak_unit_8_embung" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="pemanfaat_kk_8_embung" id="pemanfaat_kk_8_embung" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="berbau_8_embung" id="berbau_8_embung" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="berwarna_8_embung" id="berwarna_8_embung" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="berasa_8_embung" id="berasa_8_embung" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="baik_8_embung" id="baik_8_embung" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>9. Bak penampung air hujan</td>
                                          <td><input type="text" name="jumlah_unit_9_bak_penampung_air_hujan" id="jumlah_unit_9_bak_penampung_air_hujan" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="kondisi_rusak_unit_9_bak_penampung_air_hujan" id="kondisi_rusak_unit_9_bak_penampung_air_hujan" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="pemanfaat_kk_9_bak_penampung_air_hujan" id="pemanfaat_kk_9_bak_penampung_air_hujan" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="berbau_9_bak_penampung_air_hujan" id="berbau_9_bak_penampung_air_hujan" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="berwarna_9_bak_penampung_air_hujan" id="berwarna_9_bak_penampung_air_hujan" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="berasa_9_bak_penampung_air_hujan" id="berasa_9_bak_penampung_air_hujan" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="baik_9_bak_penampung_air_hujan" id="baik_9_bak_penampung_air_hujan" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>10. Beli dari tangki swasta</td>
                                          <td><input type="text" name="jumlah_unit_10_beli_dari_tangki_swasta" id="jumlah_unit_10_beli_dari_tangki_swasta" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="kondisi_rusak_unit_10_beli_dari_tangki_swasta" id="kondisi_rusak_unit_10_beli_dari_tangki_swasta" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="pemanfaat_kk_10_beli_dari_tangki_swasta" id="pemanfaat_kk_10_beli_dari_tangki_swasta" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="berbau_10_beli_dari_tangki_swasta" id="berbau_10_beli_dari_tangki_swasta" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="berwarna_10_beli_dari_tangki_swasta" id="berwarna_10_beli_dari_tangki_swasta" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="berasa_10_beli_dari_tangki_swasta" id="berasa_10_beli_dari_tangki_swasta" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="baik_10_beli_dari_tangki_swasta" id="baik_10_beli_dari_tangki_swasta" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>11. Depot isi ulang</td>
                                          <td><input type="text" name="jumlah_unit_11_depot_isi_ulang" id="jumlah_unit_11_depot_isi_ulang" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="kondisi_rusak_unit_11_depot_isi_ulang" id="kondisi_rusak_unit_11_depot_isi_ulang" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="pemanfaat_kk_11_depot_isi_ulang" id="pemanfaat_kk_11_depot_isi_ulang" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="berbau_11_depot_isi_ulang" id="berbau_11_depot_isi_ulang" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="berwarna_11_depot_isi_ulang" id="berwarna_11_depot_isi_ulang" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="berasa_11_depot_isi_ulang" id="berasa_11_depot_isi_ulang" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="baik_11_depot_isi_ulang" id="baik_11_depot_isi_ulang" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>12. Sumber lain</td>
                                          <td><input type="text" name="jumlah_unit_12_sumber_lain" id="jumlah_unit_12_sumber_lain" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="kondisi_rusak_unit_12_sumber_lain" id="kondisi_rusak_unit_12_sumber_lain" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="pemanfaat_kk_12_sumber_lain" id="pemanfaat_kk_12_sumber_lain" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="berbau_12_sumber_lain" id="berbau_12_sumber_lain" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="berwarna_12_sumber_lain" id="berwarna_12_sumber_lain" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="berasa_12_sumber_lain" id="berasa_12_sumber_lain" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="baik_12_sumber_lain" id="baik_12_sumber_lain" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>13.</td>
                                          <td><input type="text" name="jumlah_unit_13" id="jumlah_unit_13" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="kondisi_rusak_unit_13" id="kondisi_rusak_unit_13" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="pemanfaat_kk_13" id="pemanfaat_kk_13" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="berbau_13" id="berbau_13" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="berwarna_13" id="berwarna_13" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="berasa_13" id="berasa_13" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="baik_13" id="baik_13" class="mb- form-control-sm form-control"></td>
                                      </tr>
                        </tbody>
            </table>
        </div>
    </div>

    <div class="main-card mb-3 card">
        <div class="card-body">
            <h5 class="card-title">1.3.4.3 Sungai</h5>
            <table class="mb-0 table table-bordered">
                  <thead>
                      <tr>
                <th>Jumlah sungai</th>
                <th>buah</th>
                      </tr>
                      <tr>
                <th colspan="2">Kondisi (&#10004;= Ya)</th>
                      </tr>
                  </thead>
                      <tbody>
                      <tr>
                <td>1. Tercemar</td>
                                          <td><input type="text" name="buah_1_tercemar" id="buah_1_tercemar" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>2. Pendangkalan/Pengendapan Lumpur Tinggi</td>
                                          <td><input type="text" name="buah_2_pendangkalan_pengendapan_lumpur_tinggi" id="buah_2_pendangkalan_pengendapan_lumpur_tinggi" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>3. Keruh</td>
                                          <td><input type="text" name="buah_3_keruh" id="buah_3_keruh" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>4. Jernih dan Tidak Tercemar/memenuhi baku mutu air</td>
                                          <td><input type="text" name="buah_4_jernih_dan_tidak_tercemar_memenuhi_baku_mutu_air" id="buah_4_jernih_dan_tidak_tercemar_memenuhi_baku_mutu_air" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>5. Berkurangnya biota sungai</td>
                                          <td><input type="text" name="buah_5_berkurangnya_biota_sungai" id="buah_5_berkurangnya_biota_sungai" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>6. Kering</td>
                                          <td><input type="text" name="buah_6_kering" id="buah_6_kering" class="mb- form-control-sm form-control"></td>
                                      </tr>
                        </tbody>
            </table>
        </div>
    </div>

    <div class="main-card mb-3 card">
        <div class="card-body">
            <h5 class="card-title">1.3.4.4 Rawa</h5>
            <table class="mb-0 table table-bordered">
                  <thead>
                      <tr>
                <th>Luas rawa</th>
                <th>Ha</th>
                      </tr>
              <tr>
                <th colspan="2">Pemanfaatan (&#10004;= Ya)</th>
              </tr>
              </thead>
                    <tbody>
                      <tr>
                <td>1. Perikanan darat maupun laut</td>
                                          <td><input type="text" name="ha_1_perikanan_darat_maupun_laut" id="ha_1_perikanan_darat_maupun_laut" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>2. Air baku untuk pengolahan air minum</td>
                                          <td><input type="text" name="ha_2_air_baku_untuk_pengolahan_air_minum" id="ha_2_air_baku_untuk_pengolahan_air_minum" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>3. Cuci dan mandi</td>
                                          <td><input type="text" name="ha_3_cuci_dan_mandi" id="ha_3_cuci_dan_mandi" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>4. Irigasi</td>
                                          <td><input type="text" name="ha_4_irigasi" id="ha_4_irigasi" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>5. Buang air besar</td>
                                          <td><input type="text" name="ha_5_buang_air_besar" id="ha_5_buang_air_besar" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>6. Perikanan</td>
                                          <td><input type="text" name="ha_6_perikanan" id="ha_6_perikanan" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>7. Sayuran</td>
                                          <td><input type="text" name="ha_7_sayuran" id="ha_7_sayuran" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>8. Pembudidayaan hutan manggrove</td>
                                          <td><input type="text" name="ha_8_pembudidayaan_hutan_manggrove" id="ha_8_pembudidayaan_hutan_manggrove" class="mb- form-control-sm form-control"></td>
                                      </tr>
                        </tbody>
            </table>
        </div>
    </div>

    <div class="main-card mb-3 card">
        <div class="card-body">
            <h5 class="card-title">1.3.4.5 Pemanfaatan dan kondisi danau/waduk/situ</h5>
            <table class="mb-0 table table-bordered">
                  <thead>
                      <tr>
                <th>Luas</th>
                <th>Ha</th>
                      </tr>
              <tr>
                <th colspan="2">Pemanfaatan (&#10004;= Ya)</th>
              </tr>
            </thead>
                  <tbody>
                      <tr>
                <td>1. Perikanan</td>
                                          <td><input type="text" name="ha_1_perikanan" id="ha_1_perikanan" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>2. Air Minum/Air Baku</td>
                                          <td><input type="text" name="ha_2_air_minum_air_baku" id="ha_2_air_minum_air_baku" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>3. Cuci dan mandi</td>
                                          <td><input type="text" name="ha_3_cuci_dan_mandi" id="ha_3_cuci_dan_mandi" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>4. Irigasi</td>
                                          <td><input type="text" name="ha_4_irigasi" id="ha_4_irigasi" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>5. Buang air besar</td>
                                          <td><input type="text" name="ha_5_buang_air_besar" id="ha_5_buang_air_besar" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>6. Pembangkit listrik</td>
                                          <td><input type="text" name="ha_6_pembangkit_listrik" id="ha_6_pembangkit_listrik" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>7. Prasarana transportasi</td>
                                          <td><input type="text" name="ha_7_prasarana_transportasi" id="ha_7_prasarana_transportasi" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>8. Lainnya.....................................................</td>
                                          <td><input type="text" name="ha_8_lainnya" id="ha_8_lainnya" class="mb- form-control-sm form-control"></td>
                                      </tr>

            </tbody>
            <thead>
              <tr>
                <th colspan="2">Kondisi (&#10004;= Ya)</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1. Tercemar</td>
                                          <td><input type="text" name="ha_1_tercemar" id="ha_1_tercemar" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>2. Pendangkalan</td>
                                          <td><input type="text" name="ha_2_pendangkalan" id="ha_2_pendangkalan" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>3. Keruh</td>
                                          <td><input type="text" name="ha_3_keruh" id="ha_3_keruh" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>4. Berlumpur</td>
                                          <td><input type="text" name="ha_4_berlumpur" id="ha_4_berlumpur" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>5.</td>
                                          <td><input type="text" name="ha_5" id="ha_5" class="mb- form-control-sm form-control"></td>
                                      </tr>
                        </tbody>
            </table>
        </div>
    </div>

    <div class="main-card mb-3 card">
        <div class="card-body">
            <h5 class="card-title">1.3.5 KEBISINGAN</h5>
            <table class="mb-0 table table-bordered">
                  <thead>
                      <tr>
                              <th>Tingkat Kebisingan</th>
                              <th>Ekses dampak kebisingan (&#10004;= Ya)</th>
                              <th>Sumber Kebisingan (kendaraan bermotor, Kereta Api, Pelabuhan, Airport, pabrik, dll)</th>
                              <th>Efek Terhadap Penduduk</th>
                                  </tr>
                  </thead>
                      <tbody>
                      <tr>
                <td>Kebisingan Tinggi</td>
                                          <td><input type="text" name="ekses_dampak_kebisingan_ya_kebisingan_tinggi" id="ekses_dampak_kebisingan_ya_kebisingan_tinggi" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="sumber_kebisingan_kendaraan_bermotor_kereta_api_pelabuhan_airport_pabrik_dll_kebisingan_tinggi" id="sumber_kebisingan_kendaraan_bermotor_kereta_api_pelabuhan_airport_pabrik_dll_kebisingan_tinggi" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="efek_terhadap_penduduk_kebisingan_tinggi" id="efek_terhadap_penduduk_kebisingan_tinggi" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>Kebisingan sedang</td>
                                          <td><input type="text" name="ekses_dampak_kebisingan_ya_kebisingan_sedang" id="ekses_dampak_kebisingan_ya_kebisingan_sedang" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="sumber_kebisingan_kendaraan_bermotor_kereta_api_pelabuhan_airport_pabrik_dll_kebisingan_sedang" id="sumber_kebisingan_kendaraan_bermotor_kereta_api_pelabuhan_airport_pabrik_dll_kebisingan_sedang" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="efek_terhadap_penduduk_kebisingan_sedang" id="efek_terhadap_penduduk_kebisingan_sedang" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>Kebisingan Ringan</td>
                                          <td><input type="text" name="ekses_dampak_kebisingan_ya_kebisingan_ringan" id="ekses_dampak_kebisingan_ya_kebisingan_ringan" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="sumber_kebisingan_kendaraan_bermotor_kereta_api_pelabuhan_airport_pabrik_dll_kebisingan_ringan" id="sumber_kebisingan_kendaraan_bermotor_kereta_api_pelabuhan_airport_pabrik_dll_kebisingan_ringan" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="efek_terhadap_penduduk_kebisingan_ringan" id="efek_terhadap_penduduk_kebisingan_ringan" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>Tidak Bising</td>
                                          <td><input type="text" name="ekses_dampak_kebisingan_ya_tidak_bising" id="ekses_dampak_kebisingan_ya_tidak_bising" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="sumber_kebisingan_kendaraan_bermotor_kereta_api_pelabuhan_airport_pabrik_dll_tidak_bising" id="sumber_kebisingan_kendaraan_bermotor_kereta_api_pelabuhan_airport_pabrik_dll_tidak_bising" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="efek_terhadap_penduduk_tidak_bising" id="efek_terhadap_penduduk_tidak_bising" class="mb- form-control-sm form-control"></td>
                                      </tr>
                        </tbody>
            </table>
        </div>
    </div>

    <div class="main-card mb-3 card">
        <div class="card-body">
            <h5 class="card-title">1.3.6 RUANG PUBLIK/TAMAN</h5>
            <table class="mb-0 table table-bordered">
                  <thead>
                      <tr>
                              <th>Ruang Publik/ Taman</th>
                              <th>Keberadaan (&#10004;= Ada)</th>
                              <th>Luas</th>
                              <th>Tingkat Pemanfaatan (Aktif/Pasif)</th>
                                  </tr>
                  </thead>
                      <tbody>
                      <tr>
                <td>1. Taman Kota</td>
                                          <td><input type="text" name="keberadaan_ada_1_taman_kota" id="keberadaan_ada_1_taman_kota" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="luas_1_taman_kota" id="luas_1_taman_kota" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="tingkat_pemanfaatan_aktif_pasif_1_taman_kota" id="tingkat_pemanfaatan_aktif_pasif_1_taman_kota" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>2. Taman Bermain</td>
                                          <td><input type="text" name="keberadaan_ada_2_taman_bermain" id="keberadaan_ada_2_taman_bermain" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="luas_2_taman_bermain" id="luas_2_taman_bermain" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="tingkat_pemanfaatan_aktif_pasif_2_taman_bermain" id="tingkat_pemanfaatan_aktif_pasif_2_taman_bermain" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>3. Hutan Kota</td>
                                          <td><input type="text" name="keberadaan_ada_3_hutan_kota" id="keberadaan_ada_3_hutan_kota" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="luas_3_hutan_kota" id="luas_3_hutan_kota" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="tingkat_pemanfaatan_aktif_pasif_3_hutan_kota" id="tingkat_pemanfaatan_aktif_pasif_3_hutan_kota" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>4. Taman Desa/Kel.</td>
                                          <td><input type="text" name="keberadaan_ada_4_taman_desa_kel" id="keberadaan_ada_4_taman_desa_kel" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="luas_4_taman_desa_kel" id="luas_4_taman_desa_kel" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="tingkat_pemanfaatan_aktif_pasif_4_taman_desa_kel" id="tingkat_pemanfaatan_aktif_pasif_4_taman_desa_kel" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>5. Tanah Kas Desa</td>
                                          <td><input type="text" name="keberadaan_ada_5_tanah_kas_desa" id="keberadaan_ada_5_tanah_kas_desa" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="luas_5_tanah_kas_desa" id="luas_5_tanah_kas_desa" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="tingkat_pemanfaatan_aktif_pasif_5_tanah_kas_desa" id="tingkat_pemanfaatan_aktif_pasif_5_tanah_kas_desa" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>6. Tanah Adat</td>
                                          <td><input type="text" name="keberadaan_ada_6_tanah_adat" id="keberadaan_ada_6_tanah_adat" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="luas_6_tanah_adat" id="luas_6_tanah_adat" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="tingkat_pemanfaatan_aktif_pasif_6_tanah_adat" id="tingkat_pemanfaatan_aktif_pasif_6_tanah_adat" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>7.</td>
                                          <td><input type="text" name="keberadaan_ada_7" id="keberadaan_ada_7" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="luas_7" id="luas_7" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="tingkat_pemanfaatan_aktif_pasif_7" id="tingkat_pemanfaatan_aktif_pasif_7" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>8.</td>
                                          <td><input type="text" name="keberadaan_ada_8" id="keberadaan_ada_8" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="luas_8" id="luas_8" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="tingkat_pemanfaatan_aktif_pasif_8" id="tingkat_pemanfaatan_aktif_pasif_8" class="mb- form-control-sm form-control"></td>
                                      </tr>
                        </tbody>
                  <tfoot>
                    <tr>
                      <td colspan="2">Jumlah Total</td>
                      <td></td>
                      <td></td>
                    </tr>
                  </tfoot>
            </table>
        </div>
    </div>

    <div class="main-card mb-3 card">
        <div class="card-body">
            <h5 class="card-title">1.4 POTENSI WISATA</h5>
            <table class="mb-0 table table-bordered">
                  <thead>
                      <tr>
                              <th>Lokasi/ Tempat/ Area Wisata</th>
                              <th>Luas (Ha)</th>
                              <th>Tingkat Pemanfaatan (&#10004;= Aktif)</th>
                                  </tr>
                  </thead>
                      <tbody>
                      <tr>
                <td>1. Laut (Wisata Pulau, Taman Laut, Situs Sejarah Bahari, Pantai dll)</td>
                                          <td><input type="text" name="luas_ha_1_laut_wisata_pulau_taman_laut_situs_sejarah_bahari_pantai_dll" id="luas_ha_1_laut_wisata_pulau_taman_laut_situs_sejarah_bahari_pantai_dll" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="tingkat_pemanfaatan_aktif_1_laut_wisata_pulau_taman_laut_situs_sejarah_bahari_pantai_dll" id="tingkat_pemanfaatan_aktif_1_laut_wisata_pulau_taman_laut_situs_sejarah_bahari_pantai_dll" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>2. Danau (Wisata Air, Hutan Wisata, Situs Purbakala, dll)</td>
                                          <td><input type="text" name="luas_ha_2_danau_wisata_air_hutan_wisata_situs_purbakala_dll" id="luas_ha_2_danau_wisata_air_hutan_wisata_situs_purbakala_dll" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="tingkat_pemanfaatan_aktif_2_danau_wisata_air_hutan_wisata_situs_purbakala_dll" id="tingkat_pemanfaatan_aktif_2_danau_wisata_air_hutan_wisata_situs_purbakala_dll" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>3. Gunung (wisata Hutan, Taman Nasional, Bumi Perkemahan, dll)</td>
                                          <td><input type="text" name="luas_ha_3_gunung_wisata_hutan_taman_nasional_bumi_perkemahan_dll" id="luas_ha_3_gunung_wisata_hutan_taman_nasional_bumi_perkemahan_dll" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="tingkat_pemanfaatan_aktif_3_gunung_wisata_hutan_taman_nasional_bumi_perkemahan_dll" id="tingkat_pemanfaatan_aktif_3_gunung_wisata_hutan_taman_nasional_bumi_perkemahan_dll" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>4. Agrowisata</td>
                                          <td><input type="text" name="luas_ha_4_agrowisata" id="luas_ha_4_agrowisata" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="tingkat_pemanfaatan_aktif_4_agrowisata" id="tingkat_pemanfaatan_aktif_4_agrowisata" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>5. Hutan Khusus</td>
                                          <td><input type="text" name="luas_ha_5_hutan_khusus" id="luas_ha_5_hutan_khusus" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="tingkat_pemanfaatan_aktif_5_hutan_khusus" id="tingkat_pemanfaatan_aktif_5_hutan_khusus" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>6. Goa</td>
                                          <td><input type="text" name="luas_ha_6_goa" id="luas_ha_6_goa" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="tingkat_pemanfaatan_aktif_6_goa" id="tingkat_pemanfaatan_aktif_6_goa" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>7. Cagar Budaya</td>
                                          <td><input type="text" name="luas_ha_7_cagar_budaya" id="luas_ha_7_cagar_budaya" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="tingkat_pemanfaatan_aktif_7_cagar_budaya" id="tingkat_pemanfaatan_aktif_7_cagar_budaya" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>8. Arung Jeram</td>
                                          <td><input type="text" name="luas_ha_8_arung_jeram" id="luas_ha_8_arung_jeram" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="tingkat_pemanfaatan_aktif_8_arung_jeram" id="tingkat_pemanfaatan_aktif_8_arung_jeram" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>9. Situs Sejarah, dan museum</td>
                                          <td><input type="text" name="luas_ha_9_situs_sejarah_dan_museum" id="luas_ha_9_situs_sejarah_dan_museum" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="tingkat_pemanfaatan_aktif_9_situs_sejarah_dan_museum" id="tingkat_pemanfaatan_aktif_9_situs_sejarah_dan_museum" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>10. Air Terjun</td>
                                          <td><input type="text" name="luas_ha_10_air_terjun" id="luas_ha_10_air_terjun" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="tingkat_pemanfaatan_aktif_10_air_terjun" id="tingkat_pemanfaatan_aktif_10_air_terjun" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>11. Padang Savana (wisata Padang Savana)</td>
                                          <td><input type="text" name="luas_ha_11_padang_savana_wisata_padang_savana" id="luas_ha_11_padang_savana_wisata_padang_savana" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="tingkat_pemanfaatan_aktif_11_padang_savana_wisata_padang_savana" id="tingkat_pemanfaatan_aktif_11_padang_savana_wisata_padang_savana" class="mb- form-control-sm form-control"></td>
                                      </tr>
                      <tr>
                <td>12.</td>
                                          <td><input type="text" name="luas_ha_12" id="luas_ha_12" class="mb- form-control-sm form-control"></td>
                              <td><input type="text" name="tingkat_pemanfaatan_aktif_12" id="tingkat_pemanfaatan_aktif_12" class="mb- form-control-sm form-control"></td>
                                      </tr>
                        </tbody>
            </table>
        </div>
    </div>

    <div class="main-card mb-3 card">
        <div class="card-body">
            <h5 class="card-title">1.5 POTENSI SUMBER DAYA MANUSIA</h5>
            <table class="mb-0 table table-bordered">
                      <tbody>
                      <tr>
                <td>a. Jumlah laki-laki</td>
                              <td><input type="text" name="a_jumlah_laki_laki" id="a_jumlah_laki_laki" class="mb- form-control-sm form-control"></td>
                          </tr>
                      <tr>
                <td>b. Jumlah perempuan</td>
                              <td><input type="text" name="b_jumlah_perempuan" id="b_jumlah_perempuan" class="mb- form-control-sm form-control"></td>
                          </tr>
                      <tr>
                <td>c. Jumlah total (a+b)</td>
                              <td><input type="text" name="c_jumlah_total_a_b" id="c_jumlah_total_a_b" class="mb- form-control-sm form-control"></td>
                          </tr>
                      <tr>
                <td>d. Jumlah kepala keluarga</td>
                              <td><input type="text" name="d_jumlah_kepala_keluarga" id="d_jumlah_kepala_keluarga" class="mb- form-control-sm form-control"></td>
                          </tr>
                      <tr>
                <td>e. Kepadatan Penduduk (c / Luas Desa)</td>
                              <td><input type="text" name="e_kepadatan_penduduk_c_luas_desa" id="e_kepadatan_penduduk_c_luas_desa" class="mb- form-control-sm form-control"></td>
                          </tr>
                        </tbody>
            </table>
        </div>
    </div>
</div>
<div class="col-md-6">
  <div class="main-card mb-3 card">
      <div class="card-body">
          <h5 class="card-title">1.5.2 USIA</h5>
          <table class="mb-0 table table-bordered">
                <thead>
                    <tr>
                            <th>Usia</th>
                            <th>Laki-laki (Orang)</th>
                            <th>Perempuan (Orang)</th>
                                </tr>
                </thead>
                    <tbody>
                    <tr>
              <td>0-12 bulan</td>
                                        <td><input type="text" name="laki_laki_orang_0_12_bulan" id="laki_laki_orang_0_12_bulan" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_0_12_bulan" id="perempuan_orang_0_12_bulan" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>1 tahun</td>
                                        <td><input type="text" name="laki_laki_orang_1_tahun" id="laki_laki_orang_1_tahun" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_1_tahun" id="perempuan_orang_1_tahun" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>2</td>
                                        <td><input type="text" name="laki_laki_orang_2" id="laki_laki_orang_2" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_2" id="perempuan_orang_2" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>3</td>
                                        <td><input type="text" name="laki_laki_orang_3" id="laki_laki_orang_3" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_3" id="perempuan_orang_3" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>4</td>
                                        <td><input type="text" name="laki_laki_orang_4" id="laki_laki_orang_4" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_4" id="perempuan_orang_4" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>5</td>
                                        <td><input type="text" name="laki_laki_orang_5" id="laki_laki_orang_5" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_5" id="perempuan_orang_5" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>6</td>
                                        <td><input type="text" name="laki_laki_orang_6" id="laki_laki_orang_6" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_6" id="perempuan_orang_6" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>7</td>
                                        <td><input type="text" name="laki_laki_orang_7" id="laki_laki_orang_7" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_7" id="perempuan_orang_7" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>8</td>
                                        <td><input type="text" name="laki_laki_orang_8" id="laki_laki_orang_8" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_8" id="perempuan_orang_8" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>9</td>
                                        <td><input type="text" name="laki_laki_orang_9" id="laki_laki_orang_9" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_9" id="perempuan_orang_9" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>10</td>
                                        <td><input type="text" name="laki_laki_orang_10" id="laki_laki_orang_10" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_10" id="perempuan_orang_10" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>11</td>
                                        <td><input type="text" name="laki_laki_orang_11" id="laki_laki_orang_11" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_11" id="perempuan_orang_11" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>12</td>
                                        <td><input type="text" name="laki_laki_orang_12" id="laki_laki_orang_12" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_12" id="perempuan_orang_12" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>13</td>
                                        <td><input type="text" name="laki_laki_orang_13" id="laki_laki_orang_13" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_13" id="perempuan_orang_13" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>14</td>
                                        <td><input type="text" name="laki_laki_orang_14" id="laki_laki_orang_14" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_14" id="perempuan_orang_14" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>15</td>
                                        <td><input type="text" name="laki_laki_orang_15" id="laki_laki_orang_15" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_15" id="perempuan_orang_15" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>16</td>
                                        <td><input type="text" name="laki_laki_orang_16" id="laki_laki_orang_16" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_16" id="perempuan_orang_16" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>17</td>
                                        <td><input type="text" name="laki_laki_orang_17" id="laki_laki_orang_17" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_17" id="perempuan_orang_17" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>18</td>
                                        <td><input type="text" name="laki_laki_orang_18" id="laki_laki_orang_18" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_18" id="perempuan_orang_18" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>19</td>
                                        <td><input type="text" name="laki_laki_orang_19" id="laki_laki_orang_19" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_19" id="perempuan_orang_19" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>20</td>
                                        <td><input type="text" name="laki_laki_orang_20" id="laki_laki_orang_20" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_20" id="perempuan_orang_20" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>21</td>
                                        <td><input type="text" name="laki_laki_orang_21" id="laki_laki_orang_21" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_21" id="perempuan_orang_21" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>22</td>
                                        <td><input type="text" name="laki_laki_orang_22" id="laki_laki_orang_22" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_22" id="perempuan_orang_22" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>23</td>
                                        <td><input type="text" name="laki_laki_orang_23" id="laki_laki_orang_23" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_23" id="perempuan_orang_23" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>24</td>
                                        <td><input type="text" name="laki_laki_orang_24" id="laki_laki_orang_24" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_24" id="perempuan_orang_24" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>25</td>
                                        <td><input type="text" name="laki_laki_orang_25" id="laki_laki_orang_25" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_25" id="perempuan_orang_25" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>26</td>
                                        <td><input type="text" name="laki_laki_orang_26" id="laki_laki_orang_26" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_26" id="perempuan_orang_26" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>27</td>
                                        <td><input type="text" name="laki_laki_orang_27" id="laki_laki_orang_27" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_27" id="perempuan_orang_27" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>28</td>
                                        <td><input type="text" name="laki_laki_orang_28" id="laki_laki_orang_28" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_28" id="perempuan_orang_28" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>29</td>
                                        <td><input type="text" name="laki_laki_orang_29" id="laki_laki_orang_29" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_29" id="perempuan_orang_29" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>30</td>
                                        <td><input type="text" name="laki_laki_orang_30" id="laki_laki_orang_30" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_30" id="perempuan_orang_30" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>31</td>
                                        <td><input type="text" name="laki_laki_orang_31" id="laki_laki_orang_31" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_31" id="perempuan_orang_31" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>32</td>
                                        <td><input type="text" name="laki_laki_orang_32" id="laki_laki_orang_32" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_32" id="perempuan_orang_32" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>33</td>
                                        <td><input type="text" name="laki_laki_orang_33" id="laki_laki_orang_33" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_33" id="perempuan_orang_33" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>34</td>
                                        <td><input type="text" name="laki_laki_orang_34" id="laki_laki_orang_34" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_34" id="perempuan_orang_34" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>35</td>
                                        <td><input type="text" name="laki_laki_orang_35" id="laki_laki_orang_35" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_35" id="perempuan_orang_35" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>36</td>
                                        <td><input type="text" name="laki_laki_orang_36" id="laki_laki_orang_36" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_36" id="perempuan_orang_36" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>37</td>
                                        <td><input type="text" name="laki_laki_orang_37" id="laki_laki_orang_37" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_37" id="perempuan_orang_37" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>38</td>
                                        <td><input type="text" name="laki_laki_orang_38" id="laki_laki_orang_38" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_38" id="perempuan_orang_38" class="mb- form-control-sm form-control"></td>
                                    </tr>
                      </tbody>
          </table>
      </div>
  </div>
</div>
<div class="col-md-6">
  <div class="main-card mb-3 card">
<div class="card-body">
<!-- <h5 class="card-title">1.5.2 USIA</h5> -->
<table class="mb-0 table table-bordered">
<thead>
  <tr>
          <th>Usia</th>
          <th>Laki-laki (Orang)</th>
          <th>Perempuan (Orang)</th>
              </tr>
</thead>
  <tbody>
  <tr>
<td>39 tahun</td>
                      <td><input type="text" name="laki_laki_orang_39_tahun" id="laki_laki_orang_39_tahun" class="mb- form-control-sm form-control"></td>
          <td><input type="text" name="perempuan_orang_39_tahun" id="perempuan_orang_39_tahun" class="mb- form-control-sm form-control"></td>
                  </tr>
  <tr>
<td>40</td>
                      <td><input type="text" name="laki_laki_orang_40" id="laki_laki_orang_40" class="mb- form-control-sm form-control"></td>
          <td><input type="text" name="perempuan_orang_40" id="perempuan_orang_40" class="mb- form-control-sm form-control"></td>
                  </tr>
  <tr>
<td>41</td>
                      <td><input type="text" name="laki_laki_orang_41" id="laki_laki_orang_41" class="mb- form-control-sm form-control"></td>
          <td><input type="text" name="perempuan_orang_41" id="perempuan_orang_41" class="mb- form-control-sm form-control"></td>
                  </tr>
  <tr>
<td>42</td>
                      <td><input type="text" name="laki_laki_orang_42" id="laki_laki_orang_42" class="mb- form-control-sm form-control"></td>
          <td><input type="text" name="perempuan_orang_42" id="perempuan_orang_42" class="mb- form-control-sm form-control"></td>
                  </tr>
  <tr>
<td>43</td>
                      <td><input type="text" name="laki_laki_orang_43" id="laki_laki_orang_43" class="mb- form-control-sm form-control"></td>
          <td><input type="text" name="perempuan_orang_43" id="perempuan_orang_43" class="mb- form-control-sm form-control"></td>
                  </tr>
  <tr>
<td>44</td>
                      <td><input type="text" name="laki_laki_orang_44" id="laki_laki_orang_44" class="mb- form-control-sm form-control"></td>
          <td><input type="text" name="perempuan_orang_44" id="perempuan_orang_44" class="mb- form-control-sm form-control"></td>
                  </tr>
  <tr>
<td>45</td>
                      <td><input type="text" name="laki_laki_orang_45" id="laki_laki_orang_45" class="mb- form-control-sm form-control"></td>
          <td><input type="text" name="perempuan_orang_45" id="perempuan_orang_45" class="mb- form-control-sm form-control"></td>
                  </tr>
  <tr>
<td>46</td>
                      <td><input type="text" name="laki_laki_orang_46" id="laki_laki_orang_46" class="mb- form-control-sm form-control"></td>
          <td><input type="text" name="perempuan_orang_46" id="perempuan_orang_46" class="mb- form-control-sm form-control"></td>
                  </tr>
  <tr>
<td>47</td>
                      <td><input type="text" name="laki_laki_orang_47" id="laki_laki_orang_47" class="mb- form-control-sm form-control"></td>
          <td><input type="text" name="perempuan_orang_47" id="perempuan_orang_47" class="mb- form-control-sm form-control"></td>
                  </tr>
  <tr>
<td>48</td>
                      <td><input type="text" name="laki_laki_orang_48" id="laki_laki_orang_48" class="mb- form-control-sm form-control"></td>
          <td><input type="text" name="perempuan_orang_48" id="perempuan_orang_48" class="mb- form-control-sm form-control"></td>
                  </tr>
  <tr>
<td>49</td>
                      <td><input type="text" name="laki_laki_orang_49" id="laki_laki_orang_49" class="mb- form-control-sm form-control"></td>
          <td><input type="text" name="perempuan_orang_49" id="perempuan_orang_49" class="mb- form-control-sm form-control"></td>
                  </tr>
  <tr>
<td>50</td>
                      <td><input type="text" name="laki_laki_orang_50" id="laki_laki_orang_50" class="mb- form-control-sm form-control"></td>
          <td><input type="text" name="perempuan_orang_50" id="perempuan_orang_50" class="mb- form-control-sm form-control"></td>
                  </tr>
  <tr>
<td>51</td>
                      <td><input type="text" name="laki_laki_orang_51" id="laki_laki_orang_51" class="mb- form-control-sm form-control"></td>
          <td><input type="text" name="perempuan_orang_51" id="perempuan_orang_51" class="mb- form-control-sm form-control"></td>
                  </tr>
  <tr>
<td>52</td>
                      <td><input type="text" name="laki_laki_orang_52" id="laki_laki_orang_52" class="mb- form-control-sm form-control"></td>
          <td><input type="text" name="perempuan_orang_52" id="perempuan_orang_52" class="mb- form-control-sm form-control"></td>
                  </tr>
  <tr>
<td>53</td>
                      <td><input type="text" name="laki_laki_orang_53" id="laki_laki_orang_53" class="mb- form-control-sm form-control"></td>
          <td><input type="text" name="perempuan_orang_53" id="perempuan_orang_53" class="mb- form-control-sm form-control"></td>
                  </tr>
  <tr>
<td>54</td>
                      <td><input type="text" name="laki_laki_orang_54" id="laki_laki_orang_54" class="mb- form-control-sm form-control"></td>
          <td><input type="text" name="perempuan_orang_54" id="perempuan_orang_54" class="mb- form-control-sm form-control"></td>
                  </tr>
  <tr>
<td>55</td>
                      <td><input type="text" name="laki_laki_orang_55" id="laki_laki_orang_55" class="mb- form-control-sm form-control"></td>
          <td><input type="text" name="perempuan_orang_55" id="perempuan_orang_55" class="mb- form-control-sm form-control"></td>
                  </tr>
  <tr>
<td>56</td>
                      <td><input type="text" name="laki_laki_orang_56" id="laki_laki_orang_56" class="mb- form-control-sm form-control"></td>
          <td><input type="text" name="perempuan_orang_56" id="perempuan_orang_56" class="mb- form-control-sm form-control"></td>
                  </tr>
  <tr>
<td>57</td>
                      <td><input type="text" name="laki_laki_orang_57" id="laki_laki_orang_57" class="mb- form-control-sm form-control"></td>
          <td><input type="text" name="perempuan_orang_57" id="perempuan_orang_57" class="mb- form-control-sm form-control"></td>
                  </tr>
  <tr>
<td>58</td>
                      <td><input type="text" name="laki_laki_orang_58" id="laki_laki_orang_58" class="mb- form-control-sm form-control"></td>
          <td><input type="text" name="perempuan_orang_58" id="perempuan_orang_58" class="mb- form-control-sm form-control"></td>
                  </tr>
  <tr>
<td>59</td>
                      <td><input type="text" name="laki_laki_orang_59" id="laki_laki_orang_59" class="mb- form-control-sm form-control"></td>
          <td><input type="text" name="perempuan_orang_59" id="perempuan_orang_59" class="mb- form-control-sm form-control"></td>
                  </tr>
  <tr>
<td>60</td>
                      <td><input type="text" name="laki_laki_orang_60" id="laki_laki_orang_60" class="mb- form-control-sm form-control"></td>
          <td><input type="text" name="perempuan_orang_60" id="perempuan_orang_60" class="mb- form-control-sm form-control"></td>
                  </tr>
  <tr>
<td>61</td>
                      <td><input type="text" name="laki_laki_orang_61" id="laki_laki_orang_61" class="mb- form-control-sm form-control"></td>
          <td><input type="text" name="perempuan_orang_61" id="perempuan_orang_61" class="mb- form-control-sm form-control"></td>
                  </tr>
  <tr>
<td>62</td>
                      <td><input type="text" name="laki_laki_orang_62" id="laki_laki_orang_62" class="mb- form-control-sm form-control"></td>
          <td><input type="text" name="perempuan_orang_62" id="perempuan_orang_62" class="mb- form-control-sm form-control"></td>
                  </tr>
  <tr>
<td>63</td>
                      <td><input type="text" name="laki_laki_orang_63" id="laki_laki_orang_63" class="mb- form-control-sm form-control"></td>
          <td><input type="text" name="perempuan_orang_63" id="perempuan_orang_63" class="mb- form-control-sm form-control"></td>
                  </tr>
  <tr>
<td>64</td>
                      <td><input type="text" name="laki_laki_orang_64" id="laki_laki_orang_64" class="mb- form-control-sm form-control"></td>
          <td><input type="text" name="perempuan_orang_64" id="perempuan_orang_64" class="mb- form-control-sm form-control"></td>
                  </tr>
  <tr>
<td>65</td>
                      <td><input type="text" name="laki_laki_orang_65" id="laki_laki_orang_65" class="mb- form-control-sm form-control"></td>
          <td><input type="text" name="perempuan_orang_65" id="perempuan_orang_65" class="mb- form-control-sm form-control"></td>
                  </tr>
  <tr>
<td>66</td>
                      <td><input type="text" name="laki_laki_orang_66" id="laki_laki_orang_66" class="mb- form-control-sm form-control"></td>
          <td><input type="text" name="perempuan_orang_66" id="perempuan_orang_66" class="mb- form-control-sm form-control"></td>
                  </tr>
  <tr>
<td>67</td>
                      <td><input type="text" name="laki_laki_orang_67" id="laki_laki_orang_67" class="mb- form-control-sm form-control"></td>
          <td><input type="text" name="perempuan_orang_67" id="perempuan_orang_67" class="mb- form-control-sm form-control"></td>
                  </tr>
  <tr>
<td>68</td>
                      <td><input type="text" name="laki_laki_orang_68" id="laki_laki_orang_68" class="mb- form-control-sm form-control"></td>
          <td><input type="text" name="perempuan_orang_68" id="perempuan_orang_68" class="mb- form-control-sm form-control"></td>
                  </tr>
  <tr>
<td>69</td>
                      <td><input type="text" name="laki_laki_orang_69" id="laki_laki_orang_69" class="mb- form-control-sm form-control"></td>
          <td><input type="text" name="perempuan_orang_69" id="perempuan_orang_69" class="mb- form-control-sm form-control"></td>
                  </tr>
  <tr>
<td>70</td>
                      <td><input type="text" name="laki_laki_orang_70" id="laki_laki_orang_70" class="mb- form-control-sm form-control"></td>
          <td><input type="text" name="perempuan_orang_70" id="perempuan_orang_70" class="mb- form-control-sm form-control"></td>
                  </tr>
  <tr>
<td>71</td>
                      <td><input type="text" name="laki_laki_orang_71" id="laki_laki_orang_71" class="mb- form-control-sm form-control"></td>
          <td><input type="text" name="perempuan_orang_71" id="perempuan_orang_71" class="mb- form-control-sm form-control"></td>
                  </tr>
  <tr>
<td>72</td>
                      <td><input type="text" name="laki_laki_orang_72" id="laki_laki_orang_72" class="mb- form-control-sm form-control"></td>
          <td><input type="text" name="perempuan_orang_72" id="perempuan_orang_72" class="mb- form-control-sm form-control"></td>
                  </tr>
  <tr>
<td>73</td>
                      <td><input type="text" name="laki_laki_orang_73" id="laki_laki_orang_73" class="mb- form-control-sm form-control"></td>
          <td><input type="text" name="perempuan_orang_73" id="perempuan_orang_73" class="mb- form-control-sm form-control"></td>
                  </tr>
  <tr>
<td>74</td>
                      <td><input type="text" name="laki_laki_orang_74" id="laki_laki_orang_74" class="mb- form-control-sm form-control"></td>
          <td><input type="text" name="perempuan_orang_74" id="perempuan_orang_74" class="mb- form-control-sm form-control"></td>
                  </tr>
  <tr>
<td>75</td>
                      <td><input type="text" name="laki_laki_orang_75" id="laki_laki_orang_75" class="mb- form-control-sm form-control"></td>
          <td><input type="text" name="perempuan_orang_75" id="perempuan_orang_75" class="mb- form-control-sm form-control"></td>
                  </tr>
  <tr>
<td>Diatas 75</td>
                      <td><input type="text" name="laki_laki_orang_diatas_75" id="laki_laki_orang_diatas_75" class="mb- form-control-sm form-control"></td>
          <td><input type="text" name="perempuan_orang_diatas_75" id="perempuan_orang_diatas_75" class="mb- form-control-sm form-control"></td>
                  </tr>
    </tbody>
<tfoot>
<tr>
  <td>Total</td>
  <td></td>
  <td></td>
</tr>
</tfoot>
</table>
</div>
</div>
</div>
<div class="col-md-12">
  <div class="main-card mb-3 card">
      <div class="card-body">
          <h5 class="card-title">1.5.3 PENDIDIKAN</h5>
          <table class="mb-0 table table-bordered">
                <thead>
                    <tr>
                            <th>Tingkatan Pendidikan</th>
                            <th>Laki-laki (Orang)</th>
                            <th>Perempuan (Orang)</th>
                                </tr>
                </thead>
                    <tbody>
                    <tr>
              <td>1. Usia 3 - 6 tahun yang belum masuk TK</td>
                                        <td><input type="text" name="laki_laki_orang_1_usia_3_6_tahun_yang_belum_masuk_tk" id="laki_laki_orang_1_usia_3_6_tahun_yang_belum_masuk_tk" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_1_usia_3_6_tahun_yang_belum_masuk_tk" id="perempuan_orang_1_usia_3_6_tahun_yang_belum_masuk_tk" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>2. Usia 3 - 6 tahun yang sedang TK/play group</td>
                                        <td><input type="text" name="laki_laki_orang_2_usia_3_6_tahun_yang_sedang_tk_play_group" id="laki_laki_orang_2_usia_3_6_tahun_yang_sedang_tk_play_group" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_2_usia_3_6_tahun_yang_sedang_tk_play_group" id="perempuan_orang_2_usia_3_6_tahun_yang_sedang_tk_play_group" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>3. Usia 7 - 18 tahun yang tidak pernah sekolah</td>
                                        <td><input type="text" name="laki_laki_orang_3_usia_7_18_tahun_yang_tidak_pernah_sekolah" id="laki_laki_orang_3_usia_7_18_tahun_yang_tidak_pernah_sekolah" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_3_usia_7_18_tahun_yang_tidak_pernah_sekolah" id="perempuan_orang_3_usia_7_18_tahun_yang_tidak_pernah_sekolah" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>4. Usia 7 - 18 tahun yang sedang sekolah</td>
                                        <td><input type="text" name="laki_laki_orang_4_usia_7_18_tahun_yang_sedang_sekolah" id="laki_laki_orang_4_usia_7_18_tahun_yang_sedang_sekolah" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_4_usia_7_18_tahun_yang_sedang_sekolah" id="perempuan_orang_4_usia_7_18_tahun_yang_sedang_sekolah" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>5. Usia 18 - 56 tahun tidak pernah sekolah</td>
                                        <td><input type="text" name="laki_laki_orang_5_usia_18_56_tahun_tidak_pernah_sekolah" id="laki_laki_orang_5_usia_18_56_tahun_tidak_pernah_sekolah" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_5_usia_18_56_tahun_tidak_pernah_sekolah" id="perempuan_orang_5_usia_18_56_tahun_tidak_pernah_sekolah" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>6. Usia 18 - 56 tahun tidak tamat SD</td>
                                        <td><input type="text" name="laki_laki_orang_6_usia_18_56_tahun_tidak_tamat_sd" id="laki_laki_orang_6_usia_18_56_tahun_tidak_tamat_sd" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_6_usia_18_56_tahun_tidak_tamat_sd" id="perempuan_orang_6_usia_18_56_tahun_tidak_tamat_sd" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>7. Usia 18 - 56 tahun tidak tamat SLTP</td>
                                        <td><input type="text" name="laki_laki_orang_7_usia_18_56_tahun_tidak_tamat_sltp" id="laki_laki_orang_7_usia_18_56_tahun_tidak_tamat_sltp" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_7_usia_18_56_tahun_tidak_tamat_sltp" id="perempuan_orang_7_usia_18_56_tahun_tidak_tamat_sltp" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>8. Usia 18 - 56 tahun tidak tamat SLTA</td>
                                        <td><input type="text" name="laki_laki_orang_8_usia_18_56_tahun_tidak_tamat_slta" id="laki_laki_orang_8_usia_18_56_tahun_tidak_tamat_slta" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_8_usia_18_56_tahun_tidak_tamat_slta" id="perempuan_orang_8_usia_18_56_tahun_tidak_tamat_slta" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>9. Tamat SD/sederajat</td>
                                        <td><input type="text" name="laki_laki_orang_9_tamat_sd_sederajat" id="laki_laki_orang_9_tamat_sd_sederajat" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_9_tamat_sd_sederajat" id="perempuan_orang_9_tamat_sd_sederajat" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>10. Tamat SMP/sederajat</td>
                                        <td><input type="text" name="laki_laki_orang_10_tamat_smp_sederajat" id="laki_laki_orang_10_tamat_smp_sederajat" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_10_tamat_smp_sederajat" id="perempuan_orang_10_tamat_smp_sederajat" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>11. Tamat SMA/sederajat</td>
                                        <td><input type="text" name="laki_laki_orang_11_tamat_sma_sederajat" id="laki_laki_orang_11_tamat_sma_sederajat" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_11_tamat_sma_sederajat" id="perempuan_orang_11_tamat_sma_sederajat" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>12. Tamat D-1/sederajat</td>
                                        <td><input type="text" name="laki_laki_orang_12_tamat_d_1_sederajat" id="laki_laki_orang_12_tamat_d_1_sederajat" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_12_tamat_d_1_sederajat" id="perempuan_orang_12_tamat_d_1_sederajat" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>13. Tamat D-2/sederajat</td>
                                        <td><input type="text" name="laki_laki_orang_13_tamat_d_2_sederajat" id="laki_laki_orang_13_tamat_d_2_sederajat" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_13_tamat_d_2_sederajat" id="perempuan_orang_13_tamat_d_2_sederajat" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>14. Tamat D-3/sederajat</td>
                                        <td><input type="text" name="laki_laki_orang_14_tamat_d_3_sederajat" id="laki_laki_orang_14_tamat_d_3_sederajat" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_14_tamat_d_3_sederajat" id="perempuan_orang_14_tamat_d_3_sederajat" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>15. Tamat S-1/sederajat</td>
                                        <td><input type="text" name="laki_laki_orang_15_tamat_s_1_sederajat" id="laki_laki_orang_15_tamat_s_1_sederajat" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_15_tamat_s_1_sederajat" id="perempuan_orang_15_tamat_s_1_sederajat" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>16. Tamat S-2/sederajat</td>
                                        <td><input type="text" name="laki_laki_orang_16_tamat_s_2_sederajat" id="laki_laki_orang_16_tamat_s_2_sederajat" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_16_tamat_s_2_sederajat" id="perempuan_orang_16_tamat_s_2_sederajat" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>17. Tamat S-3/sederajat</td>
                                        <td><input type="text" name="laki_laki_orang_17_tamat_s_3_sederajat" id="laki_laki_orang_17_tamat_s_3_sederajat" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_17_tamat_s_3_sederajat" id="perempuan_orang_17_tamat_s_3_sederajat" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>18. Tamat SLB A</td>
                                        <td><input type="text" name="laki_laki_orang_18_tamat_slb_a" id="laki_laki_orang_18_tamat_slb_a" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_18_tamat_slb_a" id="perempuan_orang_18_tamat_slb_a" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>19. Tamat SLB B</td>
                                        <td><input type="text" name="laki_laki_orang_19_tamat_slb_b" id="laki_laki_orang_19_tamat_slb_b" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_19_tamat_slb_b" id="perempuan_orang_19_tamat_slb_b" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>20. Tamat SLB C</td>
                                        <td><input type="text" name="laki_laki_orang_20_tamat_slb_c" id="laki_laki_orang_20_tamat_slb_c" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_20_tamat_slb_c" id="perempuan_orang_20_tamat_slb_c" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>Jumlah</td>
                                        <td><input type="text" name="laki_laki_orang_jumlah" id="laki_laki_orang_jumlah" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_jumlah" id="perempuan_orang_jumlah" class="mb- form-control-sm form-control"></td>
                                    </tr>
                      </tbody>
                <tfoot>
                  <tr>
                    <td>Jumlah Total</td>
                    <td colspan="2"></td>
                  </tr>
                </tfoot>
          </table>
      </div>
  </div>

  <div class="main-card mb-3 card">
      <div class="card-body">
          <h5 class="card-title">1.5.4 MATA PENCAHARIAN POKOK</h5>
          <table class="mb-0 table table-bordered">
                <thead>
                    <tr>
                            <th>Jenis Pekerjaan</th>
                            <th>Laki-laki (Orang)</th>
                            <th>Perempuan (Orang)</th>
                                </tr>
                </thead>
                    <tbody>
                    <tr>
              <td>1. Petani</td>
                                        <td><input type="text" name="laki_laki_orang_1_petani" id="laki_laki_orang_1_petani" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_1_petani" id="perempuan_orang_1_petani" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>2. Buruh tani</td>
                                        <td><input type="text" name="laki_laki_orang_2_buruh_tani" id="laki_laki_orang_2_buruh_tani" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_2_buruh_tani" id="perempuan_orang_2_buruh_tani" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>3. Buruh migran perempuan</td>
                                        <td><input type="text" name="laki_laki_orang_3_buruh_migran_perempuan" id="laki_laki_orang_3_buruh_migran_perempuan" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_3_buruh_migran_perempuan" id="perempuan_orang_3_buruh_migran_perempuan" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>4. Buruh migran laki-laki</td>
                                        <td><input type="text" name="laki_laki_orang_4_buruh_migran_laki_laki" id="laki_laki_orang_4_buruh_migran_laki_laki" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_4_buruh_migran_laki_laki" id="perempuan_orang_4_buruh_migran_laki_laki" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>5. Pegawai Negeri Sipil</td>
                                        <td><input type="text" name="laki_laki_orang_5_pegawai_negeri_sipil" id="laki_laki_orang_5_pegawai_negeri_sipil" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_5_pegawai_negeri_sipil" id="perempuan_orang_5_pegawai_negeri_sipil" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>6. Pengrajin industri rumah tangga</td>
                                        <td><input type="text" name="laki_laki_orang_6_pengrajin_industri_rumah_tangga" id="laki_laki_orang_6_pengrajin_industri_rumah_tangga" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_6_pengrajin_industri_rumah_tangga" id="perempuan_orang_6_pengrajin_industri_rumah_tangga" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>7. Pedagang keliling</td>
                                        <td><input type="text" name="laki_laki_orang_7_pedagang_keliling" id="laki_laki_orang_7_pedagang_keliling" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_7_pedagang_keliling" id="perempuan_orang_7_pedagang_keliling" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>8. Peternak</td>
                                        <td><input type="text" name="laki_laki_orang_8_peternak" id="laki_laki_orang_8_peternak" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_8_peternak" id="perempuan_orang_8_peternak" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>9. Dokter swasta</td>
                                        <td><input type="text" name="laki_laki_orang_9_dokter_swasta" id="laki_laki_orang_9_dokter_swasta" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_9_dokter_swasta" id="perempuan_orang_9_dokter_swasta" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>10. Bidan swasta</td>
                                        <td><input type="text" name="laki_laki_orang_10_bidan_swasta" id="laki_laki_orang_10_bidan_swasta" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_10_bidan_swasta" id="perempuan_orang_10_bidan_swasta" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>11. Pensiunan TNI/POLRI</td>
                                        <td><input type="text" name="laki_laki_orang_11_pensiunan_tni_polri" id="laki_laki_orang_11_pensiunan_tni_polri" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_11_pensiunan_tni_polri" id="perempuan_orang_11_pensiunan_tni_polri" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>12.</td>
                                        <td><input type="text" name="laki_laki_orang_12" id="laki_laki_orang_12" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_12" id="perempuan_orang_12" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>13.</td>
                                        <td><input type="text" name="laki_laki_orang_13" id="laki_laki_orang_13" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_13" id="perempuan_orang_13" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>Jumlah</td>
                                        <td><input type="text" name="laki_laki_orang_jumlah" id="laki_laki_orang_jumlah" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_jumlah" id="perempuan_orang_jumlah" class="mb- form-control-sm form-control"></td>
                                    </tr>
                      </tbody>
                <tfoot>
                  <tr>
                    <td>Jumlah Total Penduduk</td>
                    <td colspan="2"></td>
                  </tr>
                </tfoot>
          </table>
      </div>
  </div>

  <div class="main-card mb-3 card">
      <div class="card-body">
          <h5 class="card-title">1.5.5 AGAMA/ALIRAN KEPERCAYAAN</h5>
          <table class="mb-0 table table-bordered">
                <thead>
                    <tr>
                            <th>Agama</th>
                            <th>Laki-laki (Orang)</th>
                            <th>Perempuan (Orang)</th>
                                </tr>
                </thead>
                    <tbody>
                    <tr>
              <td>1. Islam</td>
                                        <td><input type="text" name="laki_laki_orang_1_islam" id="laki_laki_orang_1_islam" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_1_islam" id="perempuan_orang_1_islam" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>2. Kristen</td>
                                        <td><input type="text" name="laki_laki_orang_2_kristen" id="laki_laki_orang_2_kristen" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_2_kristen" id="perempuan_orang_2_kristen" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>3. Katholik</td>
                                        <td><input type="text" name="laki_laki_orang_3_katholik" id="laki_laki_orang_3_katholik" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_3_katholik" id="perempuan_orang_3_katholik" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>4. Hindu</td>
                                        <td><input type="text" name="laki_laki_orang_4_hindu" id="laki_laki_orang_4_hindu" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_4_hindu" id="perempuan_orang_4_hindu" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>5. Budha</td>
                                        <td><input type="text" name="laki_laki_orang_5_budha" id="laki_laki_orang_5_budha" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_5_budha" id="perempuan_orang_5_budha" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>6. Khonghucu</td>
                                        <td><input type="text" name="laki_laki_orang_6_khonghucu" id="laki_laki_orang_6_khonghucu" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_6_khonghucu" id="perempuan_orang_6_khonghucu" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>7. Kepercayaan Kepada Tuhan YME</td>
                                        <td><input type="text" name="laki_laki_orang_7_kepercayaan_kepada_tuhan_yme" id="laki_laki_orang_7_kepercayaan_kepada_tuhan_yme" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_7_kepercayaan_kepada_tuhan_yme" id="perempuan_orang_7_kepercayaan_kepada_tuhan_yme" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>8. Aliran Kepercayaan lainnya</td>
                                        <td><input type="text" name="laki_laki_orang_8_aliran_kepercayaan_lainnya" id="laki_laki_orang_8_aliran_kepercayaan_lainnya" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_8_aliran_kepercayaan_lainnya" id="perempuan_orang_8_aliran_kepercayaan_lainnya" class="mb- form-control-sm form-control"></td>
                                    </tr>
                      </tbody>
                <tfoot>
                  <tr>
                    <td>Jumlah</td>
                    <td colspan="2"></td>
                  </tr>
                </tfoot>
          </table>
      </div>
  </div>

  <div class="main-card mb-3 card">
      <div class="card-body">
          <h5 class="card-title">1.5.6 KEWARGANEGARAAN</h5>
          <table class="mb-0 table table-bordered">
                <thead>
                    <tr>
                            <th>Kewarganegaraan</th>
                            <th>Laki-laki (Orang)</th>
                            <th>Perempuan (Orang)</th>
                                </tr>
                </thead>
                    <tbody>
                    <tr>
              <td>1. Warga Negara Indonesia</td>
                                        <td><input type="text" name="laki_laki_orang_1_warga_negara_indonesia" id="laki_laki_orang_1_warga_negara_indonesia" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_1_warga_negara_indonesia" id="perempuan_orang_1_warga_negara_indonesia" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>2. Warga Negara Asing</td>
                                        <td><input type="text" name="laki_laki_orang_2_warga_negara_asing" id="laki_laki_orang_2_warga_negara_asing" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_2_warga_negara_asing" id="perempuan_orang_2_warga_negara_asing" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>3. Dwi Kewarganegaraan</td>
                                        <td><input type="text" name="laki_laki_orang_3_dwi_kewarganegaraan" id="laki_laki_orang_3_dwi_kewarganegaraan" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_3_dwi_kewarganegaraan" id="perempuan_orang_3_dwi_kewarganegaraan" class="mb- form-control-sm form-control"></td>
                                    </tr>
                      </tbody>
                <tfoot>
                  <tr>
                    <td>Jumlah</td>
                    <td colspan="2"></td>
                  </tr>
                </tfoot>
          </table>
      </div>
  </div>

  <div class="main-card mb-3 card">
      <div class="card-body">
          <h5 class="card-title">1.5.7 ETNIS</h5>
          <table class="mb-0 table table-bordered">
                <thead>
                    <tr>
                            <th>Etnis</th>
                            <th>Laki-laki (Orang)</th>
                            <th>Perempuan (Orang)</th>
                                </tr>
                </thead>
                    <tbody>
                    <tr>
              <td>1.</td>
                                        <td><input type="text" name="laki_laki_orang_1" id="laki_laki_orang_1" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_1" id="perempuan_orang_1" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>2.</td>
                                        <td><input type="text" name="laki_laki_orang_2" id="laki_laki_orang_2" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_2" id="perempuan_orang_2" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>3.</td>
                                        <td><input type="text" name="laki_laki_orang_3" id="laki_laki_orang_3" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_3" id="perempuan_orang_3" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>4.</td>
                                        <td><input type="text" name="laki_laki_orang_4" id="laki_laki_orang_4" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_4" id="perempuan_orang_4" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>5.</td>
                                        <td><input type="text" name="laki_laki_orang_5" id="laki_laki_orang_5" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_5" id="perempuan_orang_5" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>6.</td>
                                        <td><input type="text" name="laki_laki_orang_6" id="laki_laki_orang_6" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_6" id="perempuan_orang_6" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>7.</td>
                                        <td><input type="text" name="laki_laki_orang_7" id="laki_laki_orang_7" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_7" id="perempuan_orang_7" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>8.</td>
                                        <td><input type="text" name="laki_laki_orang_8" id="laki_laki_orang_8" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_8" id="perempuan_orang_8" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>9.</td>
                                        <td><input type="text" name="laki_laki_orang_9" id="laki_laki_orang_9" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_9" id="perempuan_orang_9" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>10.</td>
                                        <td><input type="text" name="laki_laki_orang_10" id="laki_laki_orang_10" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_10" id="perempuan_orang_10" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>11.</td>
                                        <td><input type="text" name="laki_laki_orang_11" id="laki_laki_orang_11" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_11" id="perempuan_orang_11" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>12.</td>
                                        <td><input type="text" name="laki_laki_orang_12" id="laki_laki_orang_12" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_12" id="perempuan_orang_12" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>13.</td>
                                        <td><input type="text" name="laki_laki_orang_13" id="laki_laki_orang_13" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_13" id="perempuan_orang_13" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>14.</td>
                                        <td><input type="text" name="laki_laki_orang_14" id="laki_laki_orang_14" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_14" id="perempuan_orang_14" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>15.</td>
                                        <td><input type="text" name="laki_laki_orang_15" id="laki_laki_orang_15" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_15" id="perempuan_orang_15" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>16.</td>
                                        <td><input type="text" name="laki_laki_orang_16" id="laki_laki_orang_16" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_16" id="perempuan_orang_16" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>17.</td>
                                        <td><input type="text" name="laki_laki_orang_17" id="laki_laki_orang_17" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_17" id="perempuan_orang_17" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>18.</td>
                                        <td><input type="text" name="laki_laki_orang_18" id="laki_laki_orang_18" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_18" id="perempuan_orang_18" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>19.</td>
                                        <td><input type="text" name="laki_laki_orang_19" id="laki_laki_orang_19" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_19" id="perempuan_orang_19" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>20.</td>
                                        <td><input type="text" name="laki_laki_orang_20" id="laki_laki_orang_20" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_20" id="perempuan_orang_20" class="mb- form-control-sm form-control"></td>
                                    </tr>
                      </tbody>
                <tfoot>
                  <tr>
                    <td>Jumlah</td>
                    <td colspan="2"></td>
                  </tr>
                </tfoot>
          </table>
      </div>
  </div>

  <div class="main-card mb-3 card">
      <div class="card-body">
          <h5 class="card-title">1.5.8 CACAT MENTAL DAN FISIK</h5>
          <table class="mb-0 table table-bordered">
                <thead>
                    <tr>
                            <th>Jenis Cacat Fisik</th>
                            <th>Laki-laki (Orang)</th>
                            <th>Perempuan (Orang)</th>
                                </tr>
                </thead>
                    <tbody>
                    <tr>
              <td>1. Tuna rungu</td>
                                        <td><input type="text" name="laki_laki_orang_1_tuna_rungu" id="laki_laki_orang_1_tuna_rungu" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_1_tuna_rungu" id="perempuan_orang_1_tuna_rungu" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>2. Tuna wicara</td>
                                        <td><input type="text" name="laki_laki_orang_2_tuna_wicara" id="laki_laki_orang_2_tuna_wicara" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_2_tuna_wicara" id="perempuan_orang_2_tuna_wicara" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>3. Tuna netra</td>
                                        <td><input type="text" name="laki_laki_orang_3_tuna_netra" id="laki_laki_orang_3_tuna_netra" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_3_tuna_netra" id="perempuan_orang_3_tuna_netra" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>4. Lumpuh</td>
                                        <td><input type="text" name="laki_laki_orang_4_lumpuh" id="laki_laki_orang_4_lumpuh" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_4_lumpuh" id="perempuan_orang_4_lumpuh" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>5. Sumbing</td>
                                        <td><input type="text" name="laki_laki_orang_5_sumbing" id="laki_laki_orang_5_sumbing" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_5_sumbing" id="perempuan_orang_5_sumbing" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>6. Cacat kulit</td>
                                        <td><input type="text" name="laki_laki_orang_6_cacat_kulit" id="laki_laki_orang_6_cacat_kulit" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_6_cacat_kulit" id="perempuan_orang_6_cacat_kulit" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>7. Cacat fisik/tuna daksa lainnya</td>
                                        <td><input type="text" name="laki_laki_orang_7_cacat_fisik_tuna_daksa_lainnya" id="laki_laki_orang_7_cacat_fisik_tuna_daksa_lainnya" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_7_cacat_fisik_tuna_daksa_lainnya" id="perempuan_orang_7_cacat_fisik_tuna_daksa_lainnya" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>Jumlah</td>
                                        <td><input type="text" name="laki_laki_orang_jumlah" id="laki_laki_orang_jumlah" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_jumlah" id="perempuan_orang_jumlah" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>Jenis Cacat Mental</td>
                                        <td><input type="text" name="laki_laki_orang_jenis_cacat_mental" id="laki_laki_orang_jenis_cacat_mental" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_jenis_cacat_mental" id="perempuan_orang_jenis_cacat_mental" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>1. Idiot</td>
                                        <td><input type="text" name="laki_laki_orang_1_idiot" id="laki_laki_orang_1_idiot" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_1_idiot" id="perempuan_orang_1_idiot" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>2. Gila</td>
                                        <td><input type="text" name="laki_laki_orang_2_gila" id="laki_laki_orang_2_gila" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_2_gila" id="perempuan_orang_2_gila" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>3. Stress</td>
                                        <td><input type="text" name="laki_laki_orang_3_stress" id="laki_laki_orang_3_stress" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_3_stress" id="perempuan_orang_3_stress" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>4. Autis</td>
                                        <td><input type="text" name="laki_laki_orang_4_autis" id="laki_laki_orang_4_autis" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_4_autis" id="perempuan_orang_4_autis" class="mb- form-control-sm form-control"></td>
                                    </tr>
                      </tbody>
                <tfoot>
                  <tr>
                    <td>Jumlah</td>
                    <td colspan="2"></td>
                  </tr>
                </tfoot>
          </table>
      </div>
  </div>

  <div class="main-card mb-3 card">
      <div class="card-body">
          <h5 class="card-title">1.5.9 TENAGA KERJA</h5>
          <table class="mb-0 table table-bordered">
                <thead>
                    <tr>
                            <th>Tenaga Kerja</th>
                            <th>Laki-laki (Orang)</th>
                            <th>Perempuan (Orang)</th>
                                </tr>
                </thead>
                    <tbody>
                    <tr>
              <td>1. Penduduk usia 0 - 6 tahun</td>
                                        <td><input type="text" name="laki_laki_orang_1_penduduk_usia_0_6_tahun" id="laki_laki_orang_1_penduduk_usia_0_6_tahun" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_1_penduduk_usia_0_6_tahun" id="perempuan_orang_1_penduduk_usia_0_6_tahun" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>2. Penduduk usia 7 - 18 tahun yang masih sekolah</td>
                                        <td><input type="text" name="laki_laki_orang_2_penduduk_usia_7_18_tahun_yang_masih_sekolah" id="laki_laki_orang_2_penduduk_usia_7_18_tahun_yang_masih_sekolah" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_2_penduduk_usia_7_18_tahun_yang_masih_sekolah" id="perempuan_orang_2_penduduk_usia_7_18_tahun_yang_masih_sekolah" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>3. Penduduk usia 18 - 56 tahun (a + b)</td>
                                        <td><input type="text" name="laki_laki_orang_3_penduduk_usia_18_56_tahun_a_b" id="laki_laki_orang_3_penduduk_usia_18_56_tahun_a_b" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_3_penduduk_usia_18_56_tahun_a_b" id="perempuan_orang_3_penduduk_usia_18_56_tahun_a_b" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>a. Penduduk usia 18 - 56 tahun yang bekerja</td>
                                        <td><input type="text" name="laki_laki_orang_a_penduduk_usia_18_56_tahun_yang_bekerja" id="laki_laki_orang_a_penduduk_usia_18_56_tahun_yang_bekerja" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_a_penduduk_usia_18_56_tahun_yang_bekerja" id="perempuan_orang_a_penduduk_usia_18_56_tahun_yang_bekerja" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>b. Penduduk usia 18 - 56 tahun yang belum/tidak bekerja</td>
                                        <td><input type="text" name="laki_laki_orang_b_penduduk_usia_18_56_tahun_yang_belum_tidak_bekerja" id="laki_laki_orang_b_penduduk_usia_18_56_tahun_yang_belum_tidak_bekerja" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_b_penduduk_usia_18_56_tahun_yang_belum_tidak_bekerja" id="perempuan_orang_b_penduduk_usia_18_56_tahun_yang_belum_tidak_bekerja" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>4. Penduduk usia 56 tahun ke atas</td>
                                        <td><input type="text" name="laki_laki_orang_4_penduduk_usia_56_tahun_ke_atas" id="laki_laki_orang_4_penduduk_usia_56_tahun_ke_atas" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_4_penduduk_usia_56_tahun_ke_atas" id="perempuan_orang_4_penduduk_usia_56_tahun_ke_atas" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>5. Angkatan Kerja</td>
                                        <td><input type="text" name="laki_laki_orang_5_angkatan_kerja" id="laki_laki_orang_5_angkatan_kerja" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_5_angkatan_kerja" id="perempuan_orang_5_angkatan_kerja" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>Jumlah (1 + 2 + 3 + 4)</td>
                                        <td><input type="text" name="laki_laki_orang_jumlah_1_2_3_4" id="laki_laki_orang_jumlah_1_2_3_4" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_jumlah_1_2_3_4" id="perempuan_orang_jumlah_1_2_3_4" class="mb- form-control-sm form-control"></td>
                                    </tr>
                      </tbody>
                <tfoot>
                  <tr>
                    <td>Jumlah total (Laki-Laki + Perempuan)</td>
                    <td colspan="2"></td>
                  </tr>
                </tfoot>
          </table>
      </div>
  </div>

  <div class="main-card mb-3 card">
      <div class="card-body">
          <h5 class="card-title">1.5.10 KUALITAS ANGKATAN KERJA</h5>
          <table class="mb-0 table table-bordered">
                <thead>
                    <tr>
                            <th>Angkatan Kerja</th>
                            <th>Laki-laki (Orang)</th>
                            <th>Perempuan (Orang)</th>
                                </tr>
                </thead>
                    <tbody>
                    <tr>
              <td>1. Penduduk usia 18 - 56 tahun yang buta aksara dan huruf/angka latin</td>
                                        <td><input type="text" name="laki_laki_orang_1_penduduk_usia_18_56_tahun_yang_buta_aksara_dan_huruf_angka_latin" id="laki_laki_orang_1_penduduk_usia_18_56_tahun_yang_buta_aksara_dan_huruf_angka_latin" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_1_penduduk_usia_18_56_tahun_yang_buta_aksara_dan_huruf_angka_latin" id="perempuan_orang_1_penduduk_usia_18_56_tahun_yang_buta_aksara_dan_huruf_angka_latin" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>2. Penduduk usia 18 - 56 tahun yang tidak tamat SD</td>
                                        <td><input type="text" name="laki_laki_orang_2_penduduk_usia_18_56_tahun_yang_tidak_tamat_sd" id="laki_laki_orang_2_penduduk_usia_18_56_tahun_yang_tidak_tamat_sd" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_2_penduduk_usia_18_56_tahun_yang_tidak_tamat_sd" id="perempuan_orang_2_penduduk_usia_18_56_tahun_yang_tidak_tamat_sd" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>3. Penduduk usia 18 - 56 tahun yang tamat SD</td>
                                        <td><input type="text" name="laki_laki_orang_3_penduduk_usia_18_56_tahun_yang_tamat_sd" id="laki_laki_orang_3_penduduk_usia_18_56_tahun_yang_tamat_sd" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_3_penduduk_usia_18_56_tahun_yang_tamat_sd" id="perempuan_orang_3_penduduk_usia_18_56_tahun_yang_tamat_sd" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>4. Penduduk usia 18 - 56 tahun yang tamat SLTP</td>
                                        <td><input type="text" name="laki_laki_orang_4_penduduk_usia_18_56_tahun_yang_tamat_sltp" id="laki_laki_orang_4_penduduk_usia_18_56_tahun_yang_tamat_sltp" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_4_penduduk_usia_18_56_tahun_yang_tamat_sltp" id="perempuan_orang_4_penduduk_usia_18_56_tahun_yang_tamat_sltp" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>5. Penduduk usia 18 - 56 tahun yang tamat SLTA</td>
                                        <td><input type="text" name="laki_laki_orang_5_penduduk_usia_18_56_tahun_yang_tamat_slta" id="laki_laki_orang_5_penduduk_usia_18_56_tahun_yang_tamat_slta" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_5_penduduk_usia_18_56_tahun_yang_tamat_slta" id="perempuan_orang_5_penduduk_usia_18_56_tahun_yang_tamat_slta" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>6. Penduduk usia 18 - 56 tahun yang tamat Perguruan Tinggi</td>
                                        <td><input type="text" name="laki_laki_orang_6_penduduk_usia_18_56_tahun_yang_tamat_perguruan_tinggi" id="laki_laki_orang_6_penduduk_usia_18_56_tahun_yang_tamat_perguruan_tinggi" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_6_penduduk_usia_18_56_tahun_yang_tamat_perguruan_tinggi" id="perempuan_orang_6_penduduk_usia_18_56_tahun_yang_tamat_perguruan_tinggi" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>7.</td>
                                        <td><input type="text" name="laki_laki_orang_7" id="laki_laki_orang_7" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_7" id="perempuan_orang_7" class="mb- form-control-sm form-control"></td>
                                    </tr>
                      </tbody>
                <tfoot>
                  <tr>
                    <td>Jumlah</td>
                    <td colspan="2"></td>
                  </tr>
                </tfoot>
          </table>
      </div>
  </div>

  <div class="main-card mb-3 card">
      <div class="card-body">
          <h5 class="card-title">1.6.1 LEMBAGA PEMERINTAHAN</h5>
          <table class="mb-0 table table-bordered">
                <thead>
                    <tr>
                            <th colspan="2">PEMERINTAH KELURAHAN</th>
                                </tr>
                </thead>
                    <tbody>
                    <tr>
              <td>Dasar hukum pembentukan Pemerintah Kelurahan</td>
                            <td><input type="text" name="dasar_hukum_pembentukan_pemerintah_kelurahan" id="dasar_hukum_pembentukan_pemerintah_kelurahan" class="mb- form-control-sm form-control"></td>
                        </tr>
                    <tr>
              <td>Dasar hukum pembentukan BPD</td>
                            <td><input type="text" name="dasar_hukum_pembentukan_bpd" id="dasar_hukum_pembentukan_bpd" class="mb- form-control-sm form-control"></td>
                        </tr>
                    <tr>
              <td>Jumlah aparat pemerintahan Kelurahan</td>
                            <td><input type="text" name="jumlah_aparat_pemerintahan_kelurahan" id="jumlah_aparat_pemerintahan_kelurahan" class="mb- form-control-sm form-control"></td>
                        </tr>
                    <tr>
              <td>Jumlah perangkat Kelurahan</td>
                            <td><input type="text" name="jumlah_perangkat_kelurahan" id="jumlah_perangkat_kelurahan" class="mb- form-control-sm form-control"></td>
                        </tr>
                    <tr>
              <td>Kepala Desa/Lurah</td>
                            <td><input type="text" name="kepala_desa_lurah" id="kepala_desa_lurah" class="mb- form-control-sm form-control"></td>
                        </tr>
                    <tr>
              <td>Sekretaris Kelurahan</td>
                            <td><input type="text" name="sekretaris_kelurahan" id="sekretaris_kelurahan" class="mb- form-control-sm form-control"></td>
                        </tr>
                    <tr>
              <td>Kepala Seksi Pemerintahan</td>
                            <td><input type="text" name="kepala_seksi_pemerintahan" id="kepala_seksi_pemerintahan" class="mb- form-control-sm form-control"></td>
                        </tr>
                    <tr>
              <td>Kepala Seksi Pembangunan</td>
                            <td><input type="text" name="kepala_seksi_pembangunan" id="kepala_seksi_pembangunan" class="mb- form-control-sm form-control"></td>
                        </tr>
                    <tr>
              <td>Kepala Seksi Pemberdayaan Masyarakat</td>
                            <td><input type="text" name="kepala_seksi_pemberdayaan_masyarakat" id="kepala_seksi_pemberdayaan_masyarakat" class="mb- form-control-sm form-control"></td>
                        </tr>
                    <tr>
              <td>Kepala Seksi Kesejahteraan Rakyat</td>
                            <td><input type="text" name="kepala_seksi_kesejahteraan_rakyat" id="kepala_seksi_kesejahteraan_rakyat" class="mb- form-control-sm form-control"></td>
                        </tr>
                    <tr>
              <td>Kepala Seksi Umum</td>
                            <td><input type="text" name="kepala_seksi_umum" id="kepala_seksi_umum" class="mb- form-control-sm form-control"></td>
                        </tr>
                    <tr>
              <td>Kepala Seksi Keuangan</td>
                            <td><input type="text" name="kepala_seksi_keuangan" id="kepala_seksi_keuangan" class="mb- form-control-sm form-control"></td>
                        </tr>
                    <tr>
              <td>Kepala Seksi .............................................</td>
                            <td><input type="text" name="kepala_seksi" id="kepala_seksi" class="mb- form-control-sm form-control"></td>
                        </tr>
                    <tr>
              <td>Kepala Seksi.............................................</td>
                            <td><input type="text" name="kepala_seksi" id="kepala_seksi" class="mb- form-control-sm form-control"></td>
                        </tr>
                    <tr>
              <td>Jumlah Staf</td>
                            <td><input type="text" name="jumlah_staf" id="jumlah_staf" class="mb- form-control-sm form-control"></td>
                        </tr>
                    <tr>
              <td>Jumlah RW di Kelurahan atau sebutan lain</td>
                            <td><input type="text" name="jumlah_rw_di_kelurahan_atau_sebutan_lain" id="jumlah_rw_di_kelurahan_atau_sebutan_lain" class="mb- form-control-sm form-control"></td>
                        </tr>
                    <tr>
              <td>Kepala Dusun/Lingkungan .............................</td>
                            <td><input type="text" name="kepala_dusun_lingkungan" id="kepala_dusun_lingkungan" class="mb- form-control-sm form-control"></td>
                        </tr>
                    <tr>
              <td>Kepala Dusun/Lingkungan ..............................</td>
                            <td><input type="text" name="kepala_dusun_lingkungan" id="kepala_dusun_lingkungan" class="mb- form-control-sm form-control"></td>
                        </tr>
                    <tr>
              <td>Kepala Dusun/Lingkungan ...............................</td>
                            <td><input type="text" name="kepala_dusun_lingkungan" id="kepala_dusun_lingkungan" class="mb- form-control-sm form-control"></td>
                        </tr>
                    <tr>
              <td>Kepala Dusun/Lingkungan ...............................</td>
                            <td><input type="text" name="kepala_dusun_lingkungan" id="kepala_dusun_lingkungan" class="mb- form-control-sm form-control"></td>
                        </tr>
                    <tr>
              <td>Kepala Dusun/Lingkungan ...............................</td>
                            <td><input type="text" name="kepala_dusun_lingkungan" id="kepala_dusun_lingkungan" class="mb- form-control-sm form-control"></td>
                        </tr>
                    <tr>
              <td>Tingkat Pendidikan Aparat Kelurahan</td>
                            <td><input type="text" name="tingkat_pendidikan_aparat_kelurahan" id="tingkat_pendidikan_aparat_kelurahan" class="mb- form-control-sm form-control"></td>
                        </tr>
                    <tr>
              <td>Kepala Desa/Lurah</td>
                            <td><input type="text" name="kepala_desa_lurah" id="kepala_desa_lurah" class="mb- form-control-sm form-control"></td>
                        </tr>
                    <tr>
              <td>Sekretaris Kelurahan</td>
                            <td><input type="text" name="sekretaris_kelurahan" id="sekretaris_kelurahan" class="mb- form-control-sm form-control"></td>
                        </tr>
                    <tr>
              <td>Kepala Seksi Pemerintahan</td>
                            <td><input type="text" name="kepala_seksi_pemerintahan" id="kepala_seksi_pemerintahan" class="mb- form-control-sm form-control"></td>
                        </tr>
                    <tr>
              <td>Kepala Seksi Pembangunan</td>
                            <td><input type="text" name="kepala_seksi_pembangunan" id="kepala_seksi_pembangunan" class="mb- form-control-sm form-control"></td>
                        </tr>
                    <tr>
              <td>Kepala Seksi Pemberdayaan Masyarakat</td>
                            <td><input type="text" name="kepala_seksi_pemberdayaan_masyarakat" id="kepala_seksi_pemberdayaan_masyarakat" class="mb- form-control-sm form-control"></td>
                        </tr>
                    <tr>
              <td>Kepala Seksi Kesejahteraan Rakyat</td>
                            <td><input type="text" name="kepala_seksi_kesejahteraan_rakyat" id="kepala_seksi_kesejahteraan_rakyat" class="mb- form-control-sm form-control"></td>
                        </tr>
                    <tr>
              <td>Kepala Seksi Umum</td>
                            <td><input type="text" name="kepala_seksi_umum" id="kepala_seksi_umum" class="mb- form-control-sm form-control"></td>
                        </tr>
                    <tr>
              <td>Kepala Seksi Keuangan</td>
                            <td><input type="text" name="kepala_seksi_keuangan" id="kepala_seksi_keuangan" class="mb- form-control-sm form-control"></td>
                        </tr>
                    <tr>
              <td>Kepala Seksi ...............................</td>
                            <td><input type="text" name="kepala_seksi" id="kepala_seksi" class="mb- form-control-sm form-control"></td>
                        </tr>
                    <tr>
              <td>Kepala Seksi ...............................</td>
                            <td><input type="text" name="kepala_seksi" id="kepala_seksi" class="mb- form-control-sm form-control"></td>
                        </tr>
                    <tr>
              <td>Keberadaan BPD</td>
                            <td><input type="text" name="keberadaan_bpd" id="keberadaan_bpd" class="mb- form-control-sm form-control"></td>
                        </tr>
                    <tr>
              <td>Jumlah Anggota BPD</td>
                            <td><input type="text" name="jumlah_anggota_bpd" id="jumlah_anggota_bpd" class="mb- form-control-sm form-control"></td>
                        </tr>
                    <tr>
              <td>Pendidikan Anggota BPD</td>
                            <td><input type="text" name="pendidikan_anggota_bpd" id="pendidikan_anggota_bpd" class="mb- form-control-sm form-control"></td>
                        </tr>
                    <tr>
              <td>Ketua</td>
                            <td><input type="text" name="ketua" id="ketua" class="mb- form-control-sm form-control"></td>
                        </tr>
                    <tr>
              <td>Wakil Ketua</td>
                            <td><input type="text" name="wakil_ketua" id="wakil_ketua" class="mb- form-control-sm form-control"></td>
                        </tr>
                    <tr>
              <td>Sekretaris</td>
                            <td><input type="text" name="sekretaris" id="sekretaris" class="mb- form-control-sm form-control"></td>
                        </tr>
                    <tr>
              <td>Jumlah Anggota 1 – 15 orang :</td>
                            <td><input type="text" name="jumlah_anggota_1_–_15_orang_:" id="jumlah_anggota_1_–_15_orang_:" class="mb- form-control-sm form-control"></td>
                        </tr>
                    <tr>
              <td>Anggota, Nama : ............................</td>
                            <td><input type="text" name="anggota_nama_:" id="anggota_nama_:" class="mb- form-control-sm form-control"></td>
                        </tr>
                    <tr>
              <td>Anggota, Nama : ...........................</td>
                            <td><input type="text" name="anggota_nama_:" id="anggota_nama_:" class="mb- form-control-sm form-control"></td>
                        </tr>
                    <tr>
              <td>Anggota, Nama : ............................</td>
                            <td><input type="text" name="anggota_nama_:" id="anggota_nama_:" class="mb- form-control-sm form-control"></td>
                        </tr>
                    <tr>
              <td>Anggota, Nama : ............................</td>
                            <td><input type="text" name="anggota_nama_:" id="anggota_nama_:" class="mb- form-control-sm form-control"></td>
                        </tr>
                    <tr>
              <td>Anggota, Nama : ............................</td>
                            <td><input type="text" name="anggota_nama_:" id="anggota_nama_:" class="mb- form-control-sm form-control"></td>
                        </tr>
                    <tr>
              <td>Anggota, Nama : ............................</td>
                            <td><input type="text" name="anggota_nama_:" id="anggota_nama_:" class="mb- form-control-sm form-control"></td>
                        </tr>
                    <tr>
              <td>Anggota, Nama : ............................</td>
                            <td><input type="text" name="anggota_nama_:" id="anggota_nama_:" class="mb- form-control-sm form-control"></td>
                        </tr>
                      </tbody>
          </table>
      </div>
  </div>

  <div class="main-card mb-3 card">
      <div class="card-body">
          <h5 class="card-title">1.6.2 LEMBAGA KEMASYARAKATAN</h5>
          <table class="mb-0 table table-bordered">
                <thead>
                    <tr>
                            <th>Nama Lembaga</th>
                            <th>Keberadaan</th>
                            <th>Jumlah Lembaga</th>
                            <th>Jumlah Pengurus</th>
                            <th>Ruang Lingkup Kegiatan</th>
                            <th>Jumlah Jenis Kegiatan</th>
                                </tr>
                </thead>
                    <tbody>
                    <tr>
              <td>LKMD/LKMK</td>
                                        <td><input type="text" name="keberadaan_lkmd_lkmk" id="keberadaan_lkmd_lkmk" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="jumlah_lembaga_lkmd_lkmk" id="jumlah_lembaga_lkmd_lkmk" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="jumlah_pengurus_lkmd_lkmk" id="jumlah_pengurus_lkmd_lkmk" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="ruang_lingkup_kegiatan_lkmd_lkmk" id="ruang_lingkup_kegiatan_lkmd_lkmk" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="jumlah_jenis_kegiatan_lkmd_lkmk" id="jumlah_jenis_kegiatan_lkmd_lkmk" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>LPMD/LPMK ATAU SEBUTAN LAIN</td>
                                        <td><input type="text" name="keberadaan_lpmd_lpmk_atau_sebutan_lain" id="keberadaan_lpmd_lpmk_atau_sebutan_lain" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="jumlah_lembaga_lpmd_lpmk_atau_sebutan_lain" id="jumlah_lembaga_lpmd_lpmk_atau_sebutan_lain" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="jumlah_pengurus_lpmd_lpmk_atau_sebutan_lain" id="jumlah_pengurus_lpmd_lpmk_atau_sebutan_lain" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="ruang_lingkup_kegiatan_lpmd_lpmk_atau_sebutan_lain" id="ruang_lingkup_kegiatan_lpmd_lpmk_atau_sebutan_lain" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="jumlah_jenis_kegiatan_lpmd_lpmk_atau_sebutan_lain" id="jumlah_jenis_kegiatan_lpmd_lpmk_atau_sebutan_lain" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>PKK</td>
                                        <td><input type="text" name="keberadaan_pkk" id="keberadaan_pkk" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="jumlah_lembaga_pkk" id="jumlah_lembaga_pkk" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="jumlah_pengurus_pkk" id="jumlah_pengurus_pkk" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="ruang_lingkup_kegiatan_pkk" id="ruang_lingkup_kegiatan_pkk" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="jumlah_jenis_kegiatan_pkk" id="jumlah_jenis_kegiatan_pkk" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>RUKUN WARGA</td>
                                        <td><input type="text" name="keberadaan_rukun_warga" id="keberadaan_rukun_warga" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="jumlah_lembaga_rukun_warga" id="jumlah_lembaga_rukun_warga" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="jumlah_pengurus_rukun_warga" id="jumlah_pengurus_rukun_warga" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="ruang_lingkup_kegiatan_rukun_warga" id="ruang_lingkup_kegiatan_rukun_warga" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="jumlah_jenis_kegiatan_rukun_warga" id="jumlah_jenis_kegiatan_rukun_warga" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>RUKUN TETANGGA</td>
                                        <td><input type="text" name="keberadaan_rukun_tetangga" id="keberadaan_rukun_tetangga" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="jumlah_lembaga_rukun_tetangga" id="jumlah_lembaga_rukun_tetangga" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="jumlah_pengurus_rukun_tetangga" id="jumlah_pengurus_rukun_tetangga" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="ruang_lingkup_kegiatan_rukun_tetangga" id="ruang_lingkup_kegiatan_rukun_tetangga" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="jumlah_jenis_kegiatan_rukun_tetangga" id="jumlah_jenis_kegiatan_rukun_tetangga" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>KARANG TARUNA</td>
                                        <td><input type="text" name="keberadaan_karang_taruna" id="keberadaan_karang_taruna" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="jumlah_lembaga_karang_taruna" id="jumlah_lembaga_karang_taruna" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="jumlah_pengurus_karang_taruna" id="jumlah_pengurus_karang_taruna" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="ruang_lingkup_kegiatan_karang_taruna" id="ruang_lingkup_kegiatan_karang_taruna" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="jumlah_jenis_kegiatan_karang_taruna" id="jumlah_jenis_kegiatan_karang_taruna" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>KELOMPOK TANI/NELAYAN</td>
                                        <td><input type="text" name="keberadaan_kelompok_tani_nelayan" id="keberadaan_kelompok_tani_nelayan" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="jumlah_lembaga_kelompok_tani_nelayan" id="jumlah_lembaga_kelompok_tani_nelayan" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="jumlah_pengurus_kelompok_tani_nelayan" id="jumlah_pengurus_kelompok_tani_nelayan" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="ruang_lingkup_kegiatan_kelompok_tani_nelayan" id="ruang_lingkup_kegiatan_kelompok_tani_nelayan" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="jumlah_jenis_kegiatan_kelompok_tani_nelayan" id="jumlah_jenis_kegiatan_kelompok_tani_nelayan" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>LEMBAGA ADAT</td>
                                        <td><input type="text" name="keberadaan_lembaga_adat" id="keberadaan_lembaga_adat" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="jumlah_lembaga_lembaga_adat" id="jumlah_lembaga_lembaga_adat" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="jumlah_pengurus_lembaga_adat" id="jumlah_pengurus_lembaga_adat" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="ruang_lingkup_kegiatan_lembaga_adat" id="ruang_lingkup_kegiatan_lembaga_adat" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="jumlah_jenis_kegiatan_lembaga_adat" id="jumlah_jenis_kegiatan_lembaga_adat" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>BADAN USAHA MILIK DESA</td>
                                        <td><input type="text" name="keberadaan_badan_usaha_milik_desa" id="keberadaan_badan_usaha_milik_desa" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="jumlah_lembaga_badan_usaha_milik_desa" id="jumlah_lembaga_badan_usaha_milik_desa" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="jumlah_pengurus_badan_usaha_milik_desa" id="jumlah_pengurus_badan_usaha_milik_desa" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="ruang_lingkup_kegiatan_badan_usaha_milik_desa" id="ruang_lingkup_kegiatan_badan_usaha_milik_desa" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="jumlah_jenis_kegiatan_badan_usaha_milik_desa" id="jumlah_jenis_kegiatan_badan_usaha_milik_desa" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>ORGANISASI KEAGAMAAN</td>
                                        <td><input type="text" name="keberadaan_organisasi_keagamaan" id="keberadaan_organisasi_keagamaan" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="jumlah_lembaga_organisasi_keagamaan" id="jumlah_lembaga_organisasi_keagamaan" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="jumlah_pengurus_organisasi_keagamaan" id="jumlah_pengurus_organisasi_keagamaan" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="ruang_lingkup_kegiatan_organisasi_keagamaan" id="ruang_lingkup_kegiatan_organisasi_keagamaan" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="jumlah_jenis_kegiatan_organisasi_keagamaan" id="jumlah_jenis_kegiatan_organisasi_keagamaan" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>ORGANISASI PEREMPUAN LAIN</td>
                                        <td><input type="text" name="keberadaan_organisasi_perempuan_lain" id="keberadaan_organisasi_perempuan_lain" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="jumlah_lembaga_organisasi_perempuan_lain" id="jumlah_lembaga_organisasi_perempuan_lain" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="jumlah_pengurus_organisasi_perempuan_lain" id="jumlah_pengurus_organisasi_perempuan_lain" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="ruang_lingkup_kegiatan_organisasi_perempuan_lain" id="ruang_lingkup_kegiatan_organisasi_perempuan_lain" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="jumlah_jenis_kegiatan_organisasi_perempuan_lain" id="jumlah_jenis_kegiatan_organisasi_perempuan_lain" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>ORGANISASI PEMUDA LAINNYA</td>
                                        <td><input type="text" name="keberadaan_organisasi_pemuda_lainnya" id="keberadaan_organisasi_pemuda_lainnya" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="jumlah_lembaga_organisasi_pemuda_lainnya" id="jumlah_lembaga_organisasi_pemuda_lainnya" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="jumlah_pengurus_organisasi_pemuda_lainnya" id="jumlah_pengurus_organisasi_pemuda_lainnya" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="ruang_lingkup_kegiatan_organisasi_pemuda_lainnya" id="ruang_lingkup_kegiatan_organisasi_pemuda_lainnya" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="jumlah_jenis_kegiatan_organisasi_pemuda_lainnya" id="jumlah_jenis_kegiatan_organisasi_pemuda_lainnya" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>ORGANISASI PROFESI LAINNYA</td>
                                        <td><input type="text" name="keberadaan_organisasi_profesi_lainnya" id="keberadaan_organisasi_profesi_lainnya" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="jumlah_lembaga_organisasi_profesi_lainnya" id="jumlah_lembaga_organisasi_profesi_lainnya" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="jumlah_pengurus_organisasi_profesi_lainnya" id="jumlah_pengurus_organisasi_profesi_lainnya" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="ruang_lingkup_kegiatan_organisasi_profesi_lainnya" id="ruang_lingkup_kegiatan_organisasi_profesi_lainnya" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="jumlah_jenis_kegiatan_organisasi_profesi_lainnya" id="jumlah_jenis_kegiatan_organisasi_profesi_lainnya" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>ORGANISASI BAPAK</td>
                                        <td><input type="text" name="keberadaan_organisasi_bapak" id="keberadaan_organisasi_bapak" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="jumlah_lembaga_organisasi_bapak" id="jumlah_lembaga_organisasi_bapak" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="jumlah_pengurus_organisasi_bapak" id="jumlah_pengurus_organisasi_bapak" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="ruang_lingkup_kegiatan_organisasi_bapak" id="ruang_lingkup_kegiatan_organisasi_bapak" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="jumlah_jenis_kegiatan_organisasi_bapak" id="jumlah_jenis_kegiatan_organisasi_bapak" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>KELOMPOK GOTONG ROYONG</td>
                                        <td><input type="text" name="keberadaan_kelompok_gotong_royong" id="keberadaan_kelompok_gotong_royong" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="jumlah_lembaga_kelompok_gotong_royong" id="jumlah_lembaga_kelompok_gotong_royong" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="jumlah_pengurus_kelompok_gotong_royong" id="jumlah_pengurus_kelompok_gotong_royong" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="ruang_lingkup_kegiatan_kelompok_gotong_royong" id="ruang_lingkup_kegiatan_kelompok_gotong_royong" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="jumlah_jenis_kegiatan_kelompok_gotong_royong" id="jumlah_jenis_kegiatan_kelompok_gotong_royong" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>PWI</td>
                                        <td><input type="text" name="keberadaan_pwi" id="keberadaan_pwi" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="jumlah_lembaga_pwi" id="jumlah_lembaga_pwi" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="jumlah_pengurus_pwi" id="jumlah_pengurus_pwi" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="ruang_lingkup_kegiatan_pwi" id="ruang_lingkup_kegiatan_pwi" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="jumlah_jenis_kegiatan_pwi" id="jumlah_jenis_kegiatan_pwi" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>IDI</td>
                                        <td><input type="text" name="keberadaan_idi" id="keberadaan_idi" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="jumlah_lembaga_idi" id="jumlah_lembaga_idi" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="jumlah_pengurus_idi" id="jumlah_pengurus_idi" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="ruang_lingkup_kegiatan_idi" id="ruang_lingkup_kegiatan_idi" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="jumlah_jenis_kegiatan_idi" id="jumlah_jenis_kegiatan_idi" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>PARFI</td>
                                        <td><input type="text" name="keberadaan_parfi" id="keberadaan_parfi" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="jumlah_lembaga_parfi" id="jumlah_lembaga_parfi" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="jumlah_pengurus_parfi" id="jumlah_pengurus_parfi" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="ruang_lingkup_kegiatan_parfi" id="ruang_lingkup_kegiatan_parfi" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="jumlah_jenis_kegiatan_parfi" id="jumlah_jenis_kegiatan_parfi" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>PECINTA ALAM</td>
                                        <td><input type="text" name="keberadaan_pecinta_alam" id="keberadaan_pecinta_alam" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="jumlah_lembaga_pecinta_alam" id="jumlah_lembaga_pecinta_alam" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="jumlah_pengurus_pecinta_alam" id="jumlah_pengurus_pecinta_alam" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="ruang_lingkup_kegiatan_pecinta_alam" id="ruang_lingkup_kegiatan_pecinta_alam" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="jumlah_jenis_kegiatan_pecinta_alam" id="jumlah_jenis_kegiatan_pecinta_alam" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>WREDATAMA</td>
                                        <td><input type="text" name="keberadaan_wredatama" id="keberadaan_wredatama" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="jumlah_lembaga_wredatama" id="jumlah_lembaga_wredatama" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="jumlah_pengurus_wredatama" id="jumlah_pengurus_wredatama" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="ruang_lingkup_kegiatan_wredatama" id="ruang_lingkup_kegiatan_wredatama" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="jumlah_jenis_kegiatan_wredatama" id="jumlah_jenis_kegiatan_wredatama" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>KELOMPOK PEMIRSA</td>
                                        <td><input type="text" name="keberadaan_kelompok_pemirsa" id="keberadaan_kelompok_pemirsa" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="jumlah_lembaga_kelompok_pemirsa" id="jumlah_lembaga_kelompok_pemirsa" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="jumlah_pengurus_kelompok_pemirsa" id="jumlah_pengurus_kelompok_pemirsa" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="ruang_lingkup_kegiatan_kelompok_pemirsa" id="ruang_lingkup_kegiatan_kelompok_pemirsa" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="jumlah_jenis_kegiatan_kelompok_pemirsa" id="jumlah_jenis_kegiatan_kelompok_pemirsa" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>PANTI ASUHAN</td>
                                        <td><input type="text" name="keberadaan_panti_asuhan" id="keberadaan_panti_asuhan" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="jumlah_lembaga_panti_asuhan" id="jumlah_lembaga_panti_asuhan" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="jumlah_pengurus_panti_asuhan" id="jumlah_pengurus_panti_asuhan" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="ruang_lingkup_kegiatan_panti_asuhan" id="ruang_lingkup_kegiatan_panti_asuhan" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="jumlah_jenis_kegiatan_panti_asuhan" id="jumlah_jenis_kegiatan_panti_asuhan" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>YAYASAN</td>
                                        <td><input type="text" name="keberadaan_yayasan" id="keberadaan_yayasan" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="jumlah_lembaga_yayasan" id="jumlah_lembaga_yayasan" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="jumlah_pengurus_yayasan" id="jumlah_pengurus_yayasan" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="ruang_lingkup_kegiatan_yayasan" id="ruang_lingkup_kegiatan_yayasan" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="jumlah_jenis_kegiatan_yayasan" id="jumlah_jenis_kegiatan_yayasan" class="mb- form-control-sm form-control"></td>
                                    </tr>
                      </tbody>
          </table>
      </div>
  </div>

  <div class="main-card mb-3 card">
      <div class="card-body">
          <h5 class="card-title">1.6.3 TINGKAT PARTISIPASI POLITIK</h5>
          <table class="mb-0 table table-bordered">
                <thead>
                    <tr>
                <th rowspan="2">Jenis Pemilu</th>
                <th colspan="2">Yang Sudah Punya Hak Pilih</th>
                <th colspan="2">Yang Memanfaatkan Hak Pilih</th>
                    </tr>
                    <tr>
                <th>Laki-Laki (Orang)</th>
                <th>Perempuan (Orang)</th>
                <th>Laki-Laki (Orang)</th>
                <th>Perempuan (Orang)</th>
                    </tr>
                </thead>
                    <tbody>
                    <tr>
              <td>1. Pemilihan Kepala Desa</td>
                                        <td><input type="text" name="laki_laki_orang_1_1_pemilihan_kepala_desa" id="laki_laki_orang_1_1_pemilihan_kepala_desa" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_1_1_pemilihan_kepala_desa" id="perempuan_orang_1_1_pemilihan_kepala_desa" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="laki_laki_orang_2_1_pemilihan_kepala_desa" id="laki_laki_orang_2_1_pemilihan_kepala_desa" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_2_1_pemilihan_kepala_desa" id="perempuan_orang_2_1_pemilihan_kepala_desa" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>2. Pemilihan Bupati</td>
                                        <td><input type="text" name="laki_laki_orang_1_2_pemilihan_bupati" id="laki_laki_orang_1_2_pemilihan_bupati" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_1_2_pemilihan_bupati" id="perempuan_orang_1_2_pemilihan_bupati" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="laki_laki_orang_2_2_pemilihan_bupati" id="laki_laki_orang_2_2_pemilihan_bupati" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_2_2_pemilihan_bupati" id="perempuan_orang_2_2_pemilihan_bupati" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>3. Pemilihan Gubernur</td>
                                        <td><input type="text" name="laki_laki_orang_1_3_pemilihan_gubernur" id="laki_laki_orang_1_3_pemilihan_gubernur" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_1_3_pemilihan_gubernur" id="perempuan_orang_1_3_pemilihan_gubernur" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="laki_laki_orang_2_3_pemilihan_gubernur" id="laki_laki_orang_2_3_pemilihan_gubernur" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_2_3_pemilihan_gubernur" id="perempuan_orang_2_3_pemilihan_gubernur" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>4. Pemilihan Parlemen</td>
                                        <td><input type="text" name="laki_laki_orang_1_4_pemilihan_parlemen" id="laki_laki_orang_1_4_pemilihan_parlemen" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_1_4_pemilihan_parlemen" id="perempuan_orang_1_4_pemilihan_parlemen" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="laki_laki_orang_2_4_pemilihan_parlemen" id="laki_laki_orang_2_4_pemilihan_parlemen" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_2_4_pemilihan_parlemen" id="perempuan_orang_2_4_pemilihan_parlemen" class="mb- form-control-sm form-control"></td>
                                    </tr>
                    <tr>
              <td>5. Pemilihan Presiden</td>
                                        <td><input type="text" name="laki_laki_orang_1_5_pemilihan_presiden" id="laki_laki_orang_1_5_pemilihan_presiden" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_1_5_pemilihan_presiden" id="perempuan_orang_1_5_pemilihan_presiden" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="laki_laki_orang_2_5_pemilihan_presiden" id="laki_laki_orang_2_5_pemilihan_presiden" class="mb- form-control-sm form-control"></td>
                            <td><input type="text" name="perempuan_orang_2_5_pemilihan_presiden" id="perempuan_orang_2_5_pemilihan_presiden" class="mb- form-control-sm form-control"></td>
                                    </tr>
                      </tbody>
          </table>
      </div>
  </div>








</div>
</div>
<div class="main-card mb-3 card">
<div class="card-body"><h5 class="card-title"></h5>
    <div class="text-center">
        <button class="btn-wide mb-2 mr-2 btn-icon-vertical btn btn-primary btn-lg"><i class=""> </i>Simpan</button>
        <button class="btn-wide mb-2 mr-2 btn-icon-vertical btn btn-primary btn-lg"><i class=""> </i>Batal</button>

    </div>
</div>
</div>
    
@endsection
