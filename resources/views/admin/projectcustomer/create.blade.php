@extends('layouts.admin1')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">

                    {{-- <div class="card-header" style="background-color: #d3d3d3">
                        Tambah Data
                    </div> --}}
                    <div class="card-body">
                        <form action="{{ route('projectcustomer.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Customer</label>
                                <select name="id_customer" class="form-control @error('background') is-invalid @enderror"
                                    id="">
                                    <option>Pilih</option>
                                    @foreach ($customer as $data)
                                        <option value="{{ $data->id }}">{{ $data->name }}</option>
                                    @endforeach
                                </select>
                                @error('id_customer')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Change Request</label>
                                <select name="id_jenisrequest"
                                    class="form-control @error('background') is-invalid @enderror" id="">
                                    <option>Pilih</option>
                                    @foreach ($jenisrequest as $data)
                                        <option value="{{ $data->id }}">{{ $data->name }}</option>
                                    @endforeach
                                </select>
                                @error('id_jenisrequest')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label for="">Nama Project</label>
                                <input type="text" name="nama_project"
                                    class="form-control @error('nama_project') is-invalid @enderror" id="">
                                @error('nama_project')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                                <div class="form-group">
                                    <button class="btn btn-primary btn-sm" type="submit"><span class="fa fa-save "></span>&nbsp;{{__('Simpan')}}</button>
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
