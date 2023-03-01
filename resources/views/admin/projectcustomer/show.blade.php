@extends('layouts.admin1')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                      Project Customer
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Customer</label>
                            <input type="text" class="form-control " name="name" value="{{ $p_customer->Customer->name }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email Customer</label>
                            <input type="text" class="form-control " name="email" value="{{ $p_customer->Customer->email }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">No Telepon Customer</label>
                            <input type="text" class="form-control " name="no_telp" value="{{ $p_customer->Customer->no_telp }}" readonly>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Alamat Customer</label>
                            <input type="text" class="form-control " name="alamat" value="{{ $p_customer->Customer->alamat }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Change Request</label>
                            <input type="text" class="form-control " name="name" value="{{ $p_customer->jenisrequest->name }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Project</label>
                            <input type="text" class="form-control " name="nama_project" value="{{ $p_customer->nama_project }}" readonly>
                        </div>




                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('projectcustomer.index') }}" class="btn btn-primary" type="submit">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
