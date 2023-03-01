@extends('layouts.admin1')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">

                    <div class="card-body">
                        <form action="{{ route('projectcustomer.update', $p_customer->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('patch')

                            <div class="form-group">
                                <label for="">Customer</label>
                                <select name="id_customer" class="form-control @error('customer') is-invalid @enderror"
                                    id="">
                                    <option>Pilih</option>
                                    @foreach ($customer as $data)
                                        <option value="{{ $data->id }}"
                                            {{ $data->id == $p_customer->id_customer ? 'selected' : '' }}>
                                            {{ $data->name }}</option>
                                    @endforeach
                                </select>
                                @error('id_customer')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Nama Project</label>
                                <input type="text" name="nama_project"
                                    class="form-control @error('nama_project') is-invalid @enderror" id=""
                                    value="{{ $p_customer->nama_project }}">
                                @error('nama_project')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Change Request</label>
                                <select name="id_jenisrequest"
                                    class="form-control @error('jenisrequest') is-invalid @enderror" id="">
                                    <option>Pilih</option>
                                    @foreach ($jenisrequest as $data)
                                        <option value="{{ $data->id }}"
                                            {{ $data->id == $p_customer->id_jenisrequest ? 'selected' : '' }}>
                                            {{ $data->name }}</option>
                                    @endforeach
                                </select>
                                @error('id_jenisrequest')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-sm" type="submit"><span class="fa fa-save "></span>&nbsp;{{__('Simpan')}}</button>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
