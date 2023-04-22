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
                        <h4 class="m-0 font-weight-bold text-primary" style="text-align: center">Kontak</h4>
                    </div>
                    <div class="card-body">
                        <div style="text-align: left">
                            <style>
                                .contact-info {
                                    margin-bottom: 20px;
                                }
                        
                                .contact-info ul {
                                    list-style-type: none;
                                    padding: 0;
                                }
                        
                                .contact-info li {
                                    margin-bottom: 10px;
                                }
                        
                                .contact-info button {
                                    background-color: #007bff;
                                    color: #fff;
                                    padding: 10px 20px;
                                    border: none;
                                    cursor: pointer;
                                }
                        
                                .contact-info button:hover {
                                    background-color: #0056b3;
                                }
                            </style>
                        </head>
                        <body>
                            <div class="contact-info">
                                <ul>
                                    <li><strong>Nama:</strong> Ceycylia Dear Amizafatel</li>
                                    <li><strong>Email:</strong> ceycilia.dear3004@gmail.com</li>
                                    <li><strong>Telepon:</strong> +62-812-7004-9331</li>
                                    <li><strong>Alamat:</strong> Jl. Pijer Podi no. 7,Padang Bulan</li>
                                </ul>
                                <button onclick="redirectToContactForm()">Hubungi Saya</button>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <!-- /.container-fluid -->  

@endsection