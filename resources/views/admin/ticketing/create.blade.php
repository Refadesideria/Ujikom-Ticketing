@extends('layouts.admin1')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">


                    <div class="card-body">
                        <form action="{{ route('ticketing.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Kode Request</label>
                                <select name="id_jenisrequest"
                                    class="form-control @error('background') is-invalid @enderror" id="">
                                    <option>Pilih</option>
                                    @foreach ($jenisrequest as $data)
                                        <option value="{{ $data->id }}">{{ $data->kode }}</option>
                                    @endforeach
                                </select>
                                @error('id_jenisrequest')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Customer</label>
                                <select name="id_customer" class="form-control @error('background') is-invalid @enderror"
                                    id="">
                                    <option value="null
                                    ">Pilih</option>
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
                                <label for="">Subject</label>
                                <input type="text" name="nama_subject"
                                    class="form-control @error('nama_subject') is-invalid @enderror" id="">
                                @error('nama_subject')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Department</label>
                                <select name="id_department" class="form-control @error('department') is-invalid @enderror"
                                    id="">
                                    <option>Pilih</option>
                                    @foreach ($department as $data)
                                        <option value="{{ $data->id }}">{{ $data->name }}</option>
                                    @endforeach
                                </select>
                                @error('id_department')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label">Status</label>
                                <select class="form-control @error('nama_stat') is-invalid @enderror" name="nama_stat">
                                    <option value="open">Open</option>
                                    <option value="on progress">On Progress</option>
                                    <option value="hold">Hold</option>
                                    <option value="close">Close</option>
                                </select>
                                @error('nama_stat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Priority</label>
                                <select name="id_priority" class="form-control @error('background') is-invalid @enderror"
                                    id="">
                                    <option>Pilih</option>
                                    @foreach ($priority as $data)
                                        <option value="{{ $data->id }}">{{ $data->name }}</option>
                                    @endforeach
                                </select>
                                @error('id_priority')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- <div class="form-group">
                                <label for="">Jenis Request</label>
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
                            </div> --}}
                           
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
