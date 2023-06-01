@extends('layout.layout')
@section('content')
    <!--**********************************
                                Content body start
                            ***********************************-->
    <div class="content-body">

        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">{{ $title }}</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">{{ $title }}</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">{{ $title }}</h4>
                                <button class="btn btn-primary btn-round ml-auto" data-toggle="modal"
                                    data-target="#modalCreate">
                                    <i class="fa fa-plus"></i>
                                    Tambah Data
                                </button>
                            </div>



    <div class="table-responsive">

            <!-- #/ container -->
            </div>
                         <div class="table-responsive">

                            </div>
                            <div class="card-body">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>No.Transaksi</th>
                                                <th>Nama Barang</th>
                                                <th>Total Bayar</th>
                                                <th>Uang</th>
                                                <th>Kembalian</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($data_transaksi as $row)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $row->no_transaksi}}</td>
                                                    <td>{{ $row->barang_id }}</td>
                                                    <td>{{ $row->total_bayar}}</td>
                                                    <td>{{ $row->uang}}</td>
                                                    <td>{{ $row->Kembalian}}</td>
                                                    <td>
                                                <button data-toggle="modal" class="btn btn-xs btn-primary"
                                                    data-target="#modalupdate{{ $row->id }}">
                                                    <i class="fa fa-edit">Edit</i></button>
                                                <button data-toggle="modal" data-target="#modalHapus{{ $row->id }}"
                                                    class="btn btn-xs btn-danger"> <i class="fa fa-trash"></i>Hapus</button>
                                               </td>
                                            </tr>
                                            @endforeach 
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->

        </div> 
   
        <!--**********************************
            Content body end
        ***********************************-->
        
         <div class="modal fade" id="modalCreate" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog ">
                 <div class="modal-content">
                  <div class="modal-header">
                   <h5 class="modal-title">Create {{ $title}}</h5>

                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                </div>
                <form method="POST" action="/jenisbarang/store">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label>No.Transaksi</label>
                            <input type="text" class="form-control" name="no_transaksi" placeholder="No.Transaksi ..."
                                required>
                        </div>
                        <div class="form-group">
                            <label>Nama Barang</label>
                            <input type="text" class="form-control" name="barang_id" placeholder="nama barang ..."
                                required>
                        </div>
                        <div class="form-group">
                            <label>Total Bayar</label>
                            <input type="text" class="form-control" name="total_bayar" placeholder="Total Bayar..."
                                required>
                        </div>
                        <div class="form-group">
                            <label>Uang</label>
                            <input type="text" class="form-control" name="uang" placeholder="uang ..."
                                required>
                        </div>
                        <div class="form-group">
                            <label>Kembalian</label>
                            <input type="text" class="form-control" name="kembalian" placeholder="Kembalian ..."
                                required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal"><i
                                    class="fa fa-undo"></i>Close</button>
                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>Save changes</button>
                        </div>
                </form>
            </div>
        </div>
    </div>

   
@endsection
