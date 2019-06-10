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
    <form action="" method="post" style="width:100%;">
        <div class="row">
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
                            </tbody>
                        </table>
                    </div>
                </div>    
            </div>
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-body"><h5 class="card-title"></h5>
                        <div class="text-center">
                            <button class="btn-wide mb-2 mr-2 btn-icon-vertical btn btn-primary btn-lg"><i class=""> </i>Simpan</button>
                            <button class="btn-wide mb-2 mr-2 btn-icon-vertical btn btn-primary btn-lg"><i class=""> </i>Batal</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </form>
 
@endsection
