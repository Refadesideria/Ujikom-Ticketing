@extends('layouts.admin1')

@section('content')

@if (Auth::user()->role == 'admin')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
               

                <div class="card-body">
                    <form class="form-horizontal" action="{{ route('customer.update', $customer->id) }}" method="POST" enctype="multipart/form-data">
                        <input name="_method" type="hidden" value="PATCH">
                        @csrf
                        @method('PUT')
                        <div class="panel-body">
                            <div class="form-group">
                                <strong>Nama customer</strong>
                                <input type="text" name="name" value="{{ $customer->name }}" class="form-control"
                                    placeholder="Nama customer">
                                @error('name')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <strong>Email</strong>
                                <input type="text" name="email" value="{{ $customer->email }}" class="form-control"
                                    placeholder="Email">
                                @error('email')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <strong>No Telepon</strong>
                                <input type="text" name="no_telp" value="{{ $customer->no_telp }}" class="form-control"
                                    placeholder="No Telepon">
                                @error('no_telp')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <strong>Request Perbaikan</strong>
                                <input type="text" name="request_perbaikan" value="{{ $customer->request_perbaikan }}" class="form-control"
                                    placeholder="Request Perbaikan">
                                @error('request_perbaikan')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <strong>Alamat</strong>
                                <textarea type="text" class="form-control" name="alamat" value="{{ $customer->alamat }}" class="form-control"
                                    placeholder="Alamat"></textarea>
                                @error('alamat')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <strong>Tanggal Request</strong>
                                <input type="date" name="no_telp" value="{{ $customer->tanggal_request }}" class="form-control"
                                    placeholder="Tanggal Request">
                                @error('Tanggal_request')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <strong>Tanggal Selesai</strong>
                                <input type="date" name="tanggal_selesai" value="{{ $customer->tanggal_selesai }}" class="form-control"
                                    placeholder="Tanggal Selesai">
                                @error('tanggal_selesai')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <strong>Deskripsi</strong>
                                <textarea type="text" class="form-control" name="deskripsi" value="{{ $customer->deskripsi }}" class="form-control"
                                    placeholder="Deskripsi"></textarea>
                                @error('deskripsi')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col card-header">
                                <button class="btn btn-primary btn-sm" type="submit"><span class="fa fa-save "></span>&nbsp;{{__('Save')}}</button>
                                <a class="btn btn-primary btn-sm float-right" href="{{ route('customer.index') }}" enctype="multipart/form-data">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endsection
