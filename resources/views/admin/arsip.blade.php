@extends('admin.layout')

@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Tabel Pesanan Takjil</h1>
                <p class="mb-4">Tabel ini berisikan data-data Pesanan Takjil yang sudah dipesan dan akan diantarkan ke alamat Tujuan.</p>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Data Pesanan</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Jenis Makanan</th>
                                        <th>Jumlah</th>
                                        <th>alamat</th>
                                        <th>Tanggal pesan</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    
                                    <tr>
                                        <td>Ruth</td>
                                        <td>Risol</td>
                                        <td>5 pcs</td>
                                        <td>Helvet</td>
                                        <td>2023/03/07</td>
                                        <td>Rp.10.000,-</td>
                                    </tr>
                                    <tr>
                                        <td>Ayumi</td>
                                        <td>Risol</td>
                                        <td>5 pcs</td>
                                        <td>Pancing</td>
                                        <td>2023/03/07</td>
                                        <td>Rp.10.000,-</td>
                                    </tr>
                                    <tr>
                                        <td>Amelia</td>
                                        <td>Dadar Gulung</td>
                                        <td>5 pcs</td>
                                        <td>Johor</td>
                                        <td>2023/03/07</td>
                                        <td>Rp.10.000,-</td>
                                    </tr>
                                    <tr>
                                        <td>Fadillah</td>
                                        <td>Dadar Gulung</td>
                                        <td>5 pcs</td>
                                        <td>Setia Budi</td>
                                        <td>2023/03/07</td>
                                        <td>Rp.10.000,-</td>
                                    </tr>
                                    <tr>
                                        <td>Aliyah</td>
                                        <td>Martabak telur</td>
                                        <td>5 pcs</td>
                                        <td>Ring Road</td>
                                        <td>2023/03/07</td>
                                        <td>Rp.10.000,-</td>
                                    </tr>
                                    <tr>
                                        <td>Sakifa</td>
                                        <td>Pastel</td>
                                        <td>5 Pcs</td>
                                        <td>Milano</td>
                                        <td>2023/03/08</td>
                                        <td>Rp.10.000,-</td>
                                    </tr>
                                    <tr>
                                        <td>Diva</td>
                                        <td>Pastel</td>
                                        <td>5 Pcs</td>
                                        <td>Milano</td>
                                        <td>2023/03/08</td>
                                        <td>Rp.10.000,-</td>
                                    </tr>
                                    <tr>
                                        <td>Najwa</td>
                                        <td>Pastel</td>
                                        <td>5 Pcs</td>
                                        <td>Tasbih</td>
                                        <td>2023/03/08</td>
                                        <td>Rp.10.000,-</td>
                                    </tr>
                                    <tr>
                                        <td>Aulia</td>
                                        <td>Dadar Gulung</td>
                                        <td>5 Pcs</td>
                                        <td>Belawan</td>
                                        <td>2023/03/08</td>
                                        <td>Rp.10.000,-</td>
                                    </tr>
                                    <tr>
                                        <td>Armila</td>
                                        <td>Pastel</td>
                                        <td>5 Pcs</td>
                                        <td>Depan Usu</td>
                                        <td>2023/03/08</td>
                                        <td>Rp.10.000,-</td>
                                    </tr>
                                    <tr>
                                        <td>Gaby</td>
                                        <td>Pastel</td>
                                        <td>5 Pcs</td>
                                        <td>Jamin Ginting</td>
                                        <td>2023/03/08</td>
                                        <td>Rp.10.000,-</td>
                                    </tr>
                                    <tr>
                                        <td>Ruth</td>
                                        <td>Pastel</td>
                                        <td>5 Pcs</td>
                                        <td>Helvet</td>
                                        <td>2023/03/08</td>
                                        <td>Rp.10.000,-</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                </div>
                <!-- /.container-fluid -->  

@endsection