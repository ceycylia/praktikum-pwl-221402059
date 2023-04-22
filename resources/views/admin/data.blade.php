@extends('admin.layout')

@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"></h1>
                    </div>
                </div>

                 <!-- Illustrations -->
                 <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h5 class="m-0 font-weight-bold text-primary" style="text-align: center">Data Diri</h5>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                            src="{{ asset('img/cici.jpeg') }}">
                        </div>
                        <a> <pre>
                                    Nama                 : Ceycylia Dear Amizafatel <br> 
                                    Nim                  : 221402059<br> 
                                    Fakultas             : Fakultas Ilmu Komputer dan Teknologi Informasi <br>  
                                    Jurusan              : Teknologi Informasi<br> 
                                    Asal Sekolah         : SMA Negeri 18 Batam <br>
                                    Tempat/Tanggal Lahir : Serang/ 18 Agustus 2003<br>
                                    Hobi                 : Bermain Gitar<br>


                        </a> </pre>
                    </div>
                </div>
                <!-- /.container-fluid -->  

@endsection