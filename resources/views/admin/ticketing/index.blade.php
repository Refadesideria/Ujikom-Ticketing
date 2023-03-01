@extends('layouts.admin1')
@section('content')
<head>
    <!-- 1. Addchat css -->
<link href="<?php echo asset('assets/addchat/css/addchat.min.css') ?>" rel="stylesheet">
<body class="hold-transition sidebar-mini layout-fixed">

    <!-- 2. AddChat widget -->
    <div id="addchat_app"
   data-baseurl="<?php echo url('') ?>"
   data-csrfname="<?php echo 'X-CSRF-Token' ?>"
   data-csrftoken="<?php echo csrf_token() ?>"
></div>
    <!-- 3. AddChat JS -->
   <!-- Modern browsers -->
   <script type="module" src="<?php echo asset('assets/addchat/js/addchat.min.js') ?>"></script>
   <!-- Fallback support for Older browsers -->
   <script nomodule src="<?php echo asset('assets/addchat/js/addchat-legacy.min.js') ?>"></script>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('layouts/_flash')
            <div class="card">
                <div class="card-header">
                  Ticketing
                  @if (Auth::user()->role == 'admin')
                    <a href="{{ route('ticketing.create') }}" class="btn btn-sm btn-primary" style="float: right">
                        Tambah Data
                    </a>
                    @endif

                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped" id="dataTable">
                            <thead>
                          <th>No</th>

                          <th>Kode Request</th>
                          <th>Subject</th>
                          <th>Customer</th>
                          <th>Department</th>
                          <th>Status</th>
                          <th>Priority</th>
                          <th>Jenis Request</th>
                          {{-- <th>Tanggal Request</th>
                          <th>Tanggal Selesai</th>
                          <th>Nama PIC</th>
                          <th>Deskripsi</th> --}}
                          <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>

                                    @php $no =1; @endphp
                                    @foreach ($ticketings as $ticketing)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $ticketing->jenisrequest->kode }}</td>
                                            <td>{{ $ticketing->nama_subject }}</td>
                                            <td>{{ $ticketing->Customer->name }}</td>

                                            <td>{{ $ticketing->Department->name }}</td>
                                            <td>
                                                @if ($ticketing->nama_stat == 'open')
                                                <span class="badge badge-pill badge-warning">Open</span>
                                                @elseif ($ticketing->nama_stat == 'on progress')
                                                <span class="badge badge-pill badge-info">On Progress</span>
                                                @elseif ($ticketing->nama_stat == 'hold')
                                                    <span class="badge badge-pill badge-secondary">Hold</span>
                                                @else ($ticketing->nama_stat == 'close')
                                                    <span class="badge badge-pill badge-danger">Close</span>

                                                @endif
                                            </td>
                                            <td>{{ $ticketing->Priority->name }}</td>
                                            <td>{{ $ticketing->Jenisrequest->name }}</td>
                                            {{-- <td>{{ $ticketing->tanggal_request}}</td>
                                            <td>{{ $ticketing->tanggal_selesai }}</td>
                                            <td>{{ $ticketing->nama_pic }}</td>
                                            <td>{{ $ticketing->deskripsi }}</td> --}}
                                            @if (Auth::user()->role == 'admin')
                                            <td>

                                                <form action="{{ route('ticketing.destroy', $ticketing->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('ticketing.edit', $ticketing->id) }}"
                                                        class="btn btn-sm btn-outline-success">
                                                        Edit
                                                    </a>
                                                    <a href="{{ route('ticketing.show', $ticketing->id) }}"
                                                        class="btn btn-sm btn-outline-warning">
                                                       Detail
                                                    </a>
                                                    <a>
                                                    <button type="submit" class="btn btn-sm btn-outline-danger"
                                                    onclick="return confirm('apakah anda yakin?')"> Delete
                                                </button>

                                                    {{-- <a href="{{ route('detail.index', $ticketing->id) }}"
                                                        class="btn btn-sm btn-outline-success">
                                                     Detail
                                                    </a> --}}

                                                </form>
                                            </td>
                                            @endif
                                            @if (Auth::user()->role == 'guest')
                                            <td>

                                                <form action="{{ route('ticketing.destroy', $ticketing->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('ticketing.show', $ticketing->id) }}"
                                                        class="btn btn-sm btn-outline-warning">
                                                       Detail
                                                    </a>
                                                    {{-- <a href="{{ route('detail.index', $ticketing->id) }}"
                                                        class="btn btn-sm btn-outline-success">
                                                     Detail
                                                    </a> --}}

                                                </form>
                                            </td>
                                            @endif
                                        </tr>

                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</tfoot>
</table>

@endsection

