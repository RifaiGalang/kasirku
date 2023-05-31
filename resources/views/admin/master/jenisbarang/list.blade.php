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


                            <div class="card-body">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($data_jenis as $row)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $row->nama_jenis }}</td>

                                                <td>
                                                    <button data-toggle="modal" class="btn btn-xs btn-primary"
                                                        data-target="#modalupdate{{ $row->id }}">
                                                        <i class="fa fa-edit">Edit</i></button>
                                                    <button data-toggle="modal" data-target="#modalHapus{{ $row->id }}"
                                                        class="btn btn-xs btn-danger"> <i
                                                            class="fa fa-trash"></i>Hapus</button>
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
<<<<<<< HEAD
        </div>
        <!-- #/ container -->
    </div>
    {{-- <div class="table-responsive">
=======
            <!-- #/ container -->
            </div>
                         <div class="table-responsive">
>>>>>>> 688e55c7d3d74e7e04f05ea650624196db57177e
                            </div>
                            <div class="card-body">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Jenis barang</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            $no = 1;
                                            @endphp
                                            @foreach ($data_jenis as $row)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $row->nama_jenis }}</td>
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
<<<<<<< HEAD
        </div> --}}
    <!--**********************************
                                Content body end
                            ***********************************-->

    <div class="modal fade" id="modalCreate" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create {{ $title }}</h5>
=======
        </div> 
        <!--**********************************
            Content body end
        ***********************************-->
        
         <div class="modal fade" id="modalCreate" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog ">
                 <div class="modal-content">
                  <div class="modal-header">
                   <h5 class="modal-title">Create {{ $title}}</h5>
>>>>>>> 688e55c7d3d74e7e04f05ea650624196db57177e
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                </div>
                <form method="POST" action="/jenisbarang/store">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Jenis barang</label>
                            <input type="text" class="form-control" name="nama_jenis" placeholder="Jenis barang ..."
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

    @foreach ($data_jenis as $d)
        <div class="modal fade" id="modalupdate{{ $d->id }}" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Data User</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                    </div>
                    <form method="POST" action="/jenisbarang/update/{{ $d->id }}">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Jenis barang</label>
                                <input type="text" value="{{ $d->jenis_barang }}" class="form-control" name="nama_jenis"
                                    placeholder="Jenis barang ..." required>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i
                                        class="fa fa-undo"></i>Close</button>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>Save
                                    changes</button>
                            </div>
                        </div>
                    </form>
                </div>
              </div> 
            </div>
        
        
    @endforeach

    @foreach ($data_jenis as $c)
        <div class="modal fade" id="modalHapus{{ $c->id }}" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Hapus {{ $title }} </h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                    </div>
                    <form method="GET" action="/jenisbarang/destroy/{{ $c->id }}">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Apakah Anda ingin Menghapus Data Ini?</label>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i
                                        class="fa fa-undo"></i>Close</button>
                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i>Hapus</button>
                            </div>
                    </form>
                </div>
            </div>
            </div>
        </div>
    @endforeach
@endsection
