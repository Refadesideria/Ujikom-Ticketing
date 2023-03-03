@extends('layouts.admin1')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                  Jenis Request
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Kode Request</label>
                            <input type="text" class="form-control " name="name" value="{{ $jenisrequest->kode }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jenis Request</label>
                            <input type="text" class="form-control " name="name" value="{{ $jenisrequest->name }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama PIC</label>
                            <input type="text" class="form-control " name="name" value="{{ $jenisrequest->nama_pic }}" readonly>
                        </div>

                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('jenisrequest.index') }}" class="btn btn-primary" type="submit">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
