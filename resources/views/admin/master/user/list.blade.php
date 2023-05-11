@extends('layout.layout')
@section('content')
        <!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">{{ $titile}}</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">{{ $titile}}</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                            <h4 class="card-title">{{ $titile}}</h4><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button>
                            <div class="table-responsive">
                            </div>
                            <div class="card-body">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Role</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                               <td>
                                                <a href="#" class="btn btn-xs btn-primary"> <i class="fa fa-edit">Edit</i></a>
                                                <a href="#" class="btn btn-xs btn-danger"> <i class="fa fa-trash"></i>Hapus</a>
                                               </td>
                                            </tr>
                                            
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
        
         <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                 <div class="modal-content">
                  <div class="modal-header">
                   <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                    </div>
                      <div class="modal-body">Modal body text goes here.</div>
                     <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                     <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                 </div>
              </div>
        </div>
        @endsection