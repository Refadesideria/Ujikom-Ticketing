@extends('layouts.admin1')
@section('content')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />

    <body>
        {{-- <form action="{{ route('detail.store') }}" method="post" enctype="multipart/form-data"> --}}
            <div class="container">
                <h3><b>Kode Request:
                        <th scope="col">{{ $ticketings->jenisrequest->kode }}</h3></b></th>
                          <table class="table table-primary table-striped" width="100%">
                            <thead>
                         <tr>

                        <th scope="col">Nama Customer</th>
                        <th scope="col">{{ $ticketings->Customer->name }}</th>
                        </tr>
                        <tr>
                        <th scope="col">Email Customer</th>
                        <th scope="col">{{ $ticketings->Customer->email }}</th>
                        </tr>
                        <tr>
                        <th scope="col">No Telepon Customer</th>
                        <th scope="col">{{ $ticketings->Customer->no_telp }}</th>
                        </tr>
                        <tr>
                        <th scope="col">Alamat Customer</th>
                        <th scope="col">{{ $ticketings->Customer->alamat }}</th>
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
                        <th scope="col">{{ $ticketings->jenisrequest->name }}</th>
                        </tr>
                        <th scope="col">Tanggal Request</th>
                        <th scope="col">{{ $ticketings->tanggal_request }}</th>
                        </tr>
                        <th scope="col">Tanggal selesai</th>
                        <th scope="col">{{ $ticketings->tanggal_selesai }}</th>
                        </tr>
                        <th scope="col">Deskrispi</th>
                        <th scope="col">{{ $ticketings->deskripsi }}</th>
                        </tr>

                    <tbody>
                 </tr>
            </table>
         </div>


@endsection
