@extends('frontend.layouts.user')
@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />

    <body>
        <form action="{{ route('detail.store') }}" method="post" enctype="multipart/form-data">

            </a>
            <div class="container">
                <h3><b>Kode Request:
                        <th scope="col">{{ $ticketings->Jenisrequest->kode }}</h3></b></th>
                <table class="table table-success table-striped" width="100%">
                    <thead>
                        {{-- <tr>
                                <th scope="col">Kode Request</th>
                            <th scope="col">{{ $ticketings->Jenisrequest->kode }}</th>
                        </tr> --}}
                        <th scope="col">Customer</th>
                        <th scope="col">{{ $ticketings->Customer->name }}</th>
                        </tr>
                        <th scope="col">Nama Subject</th>
                        <th scope="col">{{ $ticketings->nama_subject }}</th>
                        </tr>
                        <th scope="col">Department</th>
                        <th scope="col">{{ $ticketings->Department->name }}</th>
                        </tr>
                        <th scope="col">Status</th>

                        <th scope="col">
                            @if ($ticketings->nama_stat == 'open')
                                <span class="badge badge-pill badge-warning">Open</span>
                            @elseif ($ticketings->nama_stat == 'on progress')
                                <span class="badge badge-pill badge-info">On progress</span>
                            @elseif ($ticketings->nama_stat == 'hold')
                                <span class="badge badge-pill badge-secondary">Hold</span>
                            @else
                                ($ticketings->nama_stat == 'close')
                                <span class="badge badge-pill badge-danger">Close</span>
                            @endif
                        </th>
                        </tr>
                        <th scope="col">Priority</th>
                        <th scope="col">{{ $ticketings->Priority->name }}</th>
                        </tr>
                        <th scope="col">Jenis Request</th>
                        <th scope="col">{{ $ticketings->Jenisrequest->name }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        </tr>
                </table>
            </div>


            <br><br>
            <form action="{{ route('detail.store') }}" method="post" enctype="multipart/form-data">

                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-header" style="background-color: #d3d3d3">
                                    Input Detail
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <form action="" method="post" enctype="multipart/form-data">
                                            @csrf

                                            <div class="row g-3 align-items-center">
                                                <div class="col-auto">
                                                    <label for="tanggal_request" class="col-form-label">Tanggal Request
                                                        :</label>
                                                </div>
                                                <div class="col-auto">
                                                    <input type="date" name="tanggal_request" class="form-control"
                                                        aria-describedby="">
                                                </div>
                                                <div class="col-auto ">
                                                    <span id="" class="form-text">

                                                    </span>
                                                    &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                                                    <label for="tanggal_selesai" class="col-form-label">Tanggal Selesai
                                                        :</label>
                                                </div>
                                                <div class="col-auto">
                                                    <input type="date" name="tanggal_selesai" class="form-control"
                                                        aria-describedby="">
                                                </div>
                                                <div class="col sm-lg-5">
                                                    <span id="" class="form-text">

                                                    </span>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row g-3 align-items-center">

                                        <div class="col-auto">
                                            <label for="nama_pic" class="col-form-label">Nama PIC :</label>
                                        </div>
                                        <div class="col sm-lg-3 ms-lg-3">
                                            <input type="text" name="nama_pic" class="form-control">
                                        </div>
                                        <div class="col-auto">
                                            <span id="" class="form-text">

                                            </span>
                                            &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                                            <label for="deskripsi" class="col-form-label">Deskrispi :</label>
                                        </div>
                                        <div class="col sm-lg-3 ms-lg-3">


                                            <textarea type="text" class="form-control" name="deskripsi" value=""></textarea>
                                        </div>
                                        <div class="col sm-lg-3 ms-lg-3">
                                            <span id="" class="form-text">

                                            </span>
                                        </div>
                                        {{-- <div class="form-group">
                                    <label for="">Kode Request</label>
                                    <select name="id_ticketing"
                                        class="form-control @error('background') is-invalid @enderror" id="">
                                        <option>Pilih</option>
                                        @foreach ($details as $data)
                                            <option value="{{ $data->id }}">{{ $data->nama_subject }}</option>
                                        @endforeach
                                    </select>
                                    @error('nama_subject')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <br>
                               --}}
                                        <br>
                                        <div class="">
                                            <div class="col card-header">
                                                <button class="btn btn-secondary btn-sm" type="submit"><span
                                                        class="bi bi-file-earmark-plus-fill"></i></i></span>&nbsp;{{ __('Add') }}</button>
                                            </div>
                                        </div>
                                    </div>
            </form>
            </div>
            </div>
            </div>
            </div>

            <br><br>
            {{-- TICKETING --}}
            <form action="{{ route('detail.store') }}" method="post" enctype="multipart/form-data">
                <div class="container">
                    <h3><b>Kode Request:
                            <th scope="col">{{ $ticketings->Jenisrequest->kode }}</h3></b></th>
                    <table class="table table-success table-striped" width="100%">
                        <thead>
                            {{-- <tr>
                            <th scope="col">Kode Request</th>
                            <th scope="col">{{ $ticketings->Jenisrequest->kode }}</th>
                        </tr> --}}
                            <th scope="col">Customer</th>
                            <th scope="col">{{ $ticketings->Customer->name }}</th>
                            </tr>
                            <th scope="col">Nama Subject</th>
                            <th scope="col">{{ $ticketings->nama_subject }}</th>
                            </tr>
                            <th scope="col">Department</th>
                            <th scope="col">{{ $ticketings->Department->name }}</th>
                            </tr>
                            <th scope="col">Status</th>

                            <th scope="col">
                                @if ($ticketings->nama_stat == 'open')
                                    <span class="badge badge-pill badge-warning">Open</span>
                                @elseif ($ticketings->nama_stat == 'on progress')
                                    <span class="badge badge-pill badge-info">On progress</span>
                                @elseif ($ticketings->nama_stat == 'hold')
                                    <span class="badge badge-pill badge-secondary">Hold</span>
                                @else
                                    ($ticketings->nama_stat == 'close')
                                    <span class="badge badge-pill badge-danger">Close</span>
                                @endif
                            </th>
                            </tr>
                            <th scope="col">Priority</th>
                            <th scope="col">{{ $ticketings->Priority->name }}</th>
                            </tr>
                            <th scope="col">Jenis Request</th>
                            <th scope="col">{{ $ticketings->Jenisrequest->name }}</th>
                            </tr>
                            <form action="{{ route('detail.store') }}" method="post" enctype="multipart/form-data">
                                @php $no =1;  @endphp
                                    <tr>
                                        <th>{{ $no++ }}</th>
                                        <th scope="col">Tanggal Request</th>
                                        <th scope="col">{{ $details->tanggal_request }}</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Tanggal Selesai</th>
                                        <th scope="col">{{ $details->tanggal_selesai }}</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Nama Pic</th>
                                        <th scope="col">{{ $details->nama_pic }}</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Deskripsi</th>
                                        <th scope="col">{{ $details->deskripsi }}</th>
                                    </tr>
                               
                        </thead>
                        <tbody>
                            </tr>
                            {{-- <td>
                            <form action="{{ route('detail.destroy', $detail->id) }}" method="post">
                                @csrf
                                @method('delete')
                        
                               
                                <button type="submit" class="btn btn-sm btn-outline-danger"
                                    onclick="return confirm('apakah anda yakin?')"> Delete
                                </button>
                            </form>
                        </td> --}}
                    </table>
                </div>
            @endsection
