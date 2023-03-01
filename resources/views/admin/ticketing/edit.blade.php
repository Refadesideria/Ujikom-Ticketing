@extends('layouts.admin1')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        Edit Data
                    </div>
                    <div class="card-body">
                        <form action="{{ route('ticketing.update', $ticketings->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="form-group">
                                <label for="">Kode Request</label>
                                <select name="id_jenisrequest"
                                    class="form-control @error('jenisrequest') is-invalid @enderror" id="">
                                    <option>Pilih</option>
                                    @foreach ($jenisrequest as $data)
                                        <option value="{{ $data->id }}"
                                            {{ $data->id == $ticketings->id_jenisrequest ? 'selected' : '' }}>
                                            {{ $data->kode }}</option>
                                    @endforeach
                                </select>
                                @error('id_jenisrequest')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Subject</label>
                                <input type="text" name="nama_subject"
                                    class="form-control @error('nama_subject') is-invalid @enderror" id=""
                                    value="{{ $ticketings->nama_subject }}">
                                @error('nama_subject')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Customer</label>
                                <select name="id_customer" class="form-control @error('customer') is-invalid @enderror"
                                    id="">
                                    <option>Pilih</option>
                                    @foreach ($customer as $data)
                                        <option value="{{ $data->id }}"
                                            {{ $data->id == $ticketings->id_customer ? 'selected' : '' }}>
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
                                <label for="">Department</label>
                                <select name="id_department" class="form-control @error('department') is-invalid @enderror"
                                    id="">
                                    <option>Pilih</option>
                                    @foreach ($department as $data)
                                        <option value="{{ $data->id }}"
                                            {{ $data->id == $ticketings->id_department ? 'selected' : '' }}>
                                            {{ $data->name }}</option>
                                    @endforeach
                                </select>
                                @error('id_department')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Status</label>
                                <select class="form-control @error('nama_stat') is-invalid @enderror" name="nama_stat">
                                    <option selected>Pilih Status</option>
                                    <option value="open" {{ $ticketings->nama_stat == 'open' ? 'selected' : '' }}>open
                                    </option>
                                    <option value="on progress"
                                        {{ $ticketings->nama_stat == 'on progress' ? 'selected' : '' }}>on Progress
                                    </option>
                                    <option value="hold" {{ $ticketings->nama_stat == 'hold' ? 'selected' : '' }}>hold
                                    </option>
                                    <option value="close" {{ $ticketings->nama_stat == 'close' ? 'selected' : '' }}>Close
                                    </option>
                                </select>
                                @error('nama_stat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="form-group">
                                <label for="">Priority</label>
                                <select name="id_priority" class="form-control @error('priority') is-invalid @enderror"
                                    id="">
                                    <option>Pilih</option>
                                    @foreach ($priority as $data)
                                        <option value="{{ $data->id }}"
                                            {{ $data->id == $ticketings->id_priority ? 'selected' : '' }}>
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
                                <label for="">Jenis Request</label>
                                <select name="id_jenisrequest"
                                    class="form-control @error('jenisrequest') is-invalid @enderror" id="">
                                    <option>Pilih</option>
                                    @foreach ($jenisrequest as $data)
                                        <option value="{{ $data->id }}"
                                            {{ $data->id == $ticketings->id_jenisrequest ? 'selected' : '' }}>
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
                                <label for="">Tanggal Request</label>
                                <input type="date" name="tanggal_request"
                                    class="form-control @error('tanggal_request') is-invalid @enderror" id=""
                                    value="{{ $ticketings->tanggal_request }}">
                                @error('tanggal_request')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Selesai</label>
                                <input type="date" name="tanggal_selesai"
                                    class="form-control @error('tanggal_selesai') is-invalid @enderror" id=""
                                    value="{{ $ticketings->tanggal_selesai }}">
                                @error('tanggal_selesai')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Nama PIC</label>
                                <input type="text" name="nama_pic"
                                    class="form-control @error('nama_pic') is-invalid @enderror" id=""
                                    value="{{ $ticketings->nama_pic }}">
                                @error('nama_pic')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Deskripsi</label>
                                <textarea type="textarea" class="form-control" name="deskripsi"></textarea>
                                @error('deskripsi')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
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
