@extends('layouts.admin1')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="background-color: #d3d3d3">TAMBAH CUSTOMER</div>
                <div class="card-body">
                    <form class="form-horizontal" action="{{ route('customer.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="panel-body">
                            <div class="form-group">
                                <strong>Nama customer</strong>
                                <input type="text" name="name" class="form-control">
                                @error('nama_customer')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <strong>Email</strong>
                                <input type="text" name="email" class="form-control">
                                @error('email_customer')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <strong>No Telepon</strong>
                                <input type="text" name="no_telp" class="form-control">
                                @error('notelp_customer')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <strong>Alamat</strong>
                                <textarea type="textarea" class="form-control" name="alamat"></textarea>
                                @error('alamat_customer')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <strong>No Telepon</strong>
                                <input type="text" name="no_telp" class="form-control">
                                @error('notelp_customer')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <strong>Tanggal Request</strong>
                                <input type="date" name="no_telp" class="form-control">
                                @error('notelp_customer')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <strong>Tanggal Selesai</strong>
                                <input type="date" name="no_telp" class="form-control">
                                @error('notelp_customer')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col card-header">
                                <button class="btn btn-primary btn-sm" type="submit"><span class="fa fa-save "></span>&nbsp;{{__('Simpan')}}</button>

                                <a class="btn btn-primary btn-sm float-right" href="{{ route('customer.index') }}" enctype="multipart/form-data">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
