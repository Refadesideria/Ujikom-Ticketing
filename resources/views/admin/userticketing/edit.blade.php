@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"style="background-color: #d3d3d3">Update User</div>
                <div class="card-body">
                    <form class="form-horizontal" action="{{ route('userticketing.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                        <input name="_method" type="hidden" value="PATCH">
                        @csrf
                        @method('patch')
                            <div class="form-group">
                                <label for="">Nama Lengkap</label>
                                <input type="text" name="nama_user"
                                    class="form-control @error('nama_user') is-invalid @enderror" id=""
                                    value="{{ $user->nama_user }}">
                                @error('nama_user')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Ussername</label>
                                <input type="text" name="ussername_user"
                                    class="form-control @error('ussername_user') is-invalid @enderror" id=""
                                    value="{{ $user->ussername_user }}">
                                @error('ussername_user')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" name="email"
                                    class="form-control @error('email') is-invalid @enderror" id=""
                                    value="{{ $user->email }}">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="text" name="password"
                                    class="form-control @error('password') is-invalid @enderror" id=""
                                    value="{{ $user->password }}">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="user">{{__('Divisi')}}</label>
                                <div class="col-sm-10">
                                    <select id="id_divisi"  class="form-control" name="id_divisi" required >
                                        @php
                                            $divisi = App\Models\Divisi::get();
                                        @endphp
                                        @foreach ($divisi as $key => $value)
                                            <option value="{{$value->id}}" @if ($value->id == $user->id_divisi) selected @endif >{{$value->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="user">{{__('Jabatan')}}</label>
                                <div class="col-sm-10">
                                    <select id="id_jabatan"  class="form-control" name="id_jabatan" required >
                                        @php
                                            $jabatan = App\Models\Jabatan::get();
                                        @endphp
                                        @foreach ($divisi as $key => $value)
                                            <option value="{{$value->id}}" @if ($value->id == $user->id_jabatan) selected @endif >{{$value->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                           
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="user">{{__('Role')}}</label>
                                <div class="col-sm-10">
                                    <select id="id_kategori"  class="form-control" name="id_kategori" required >
                                        @php
                                            $kategori = App\Models\kategori::get();
                                        @endphp
                                        @foreach ($kategori as $key => $value)
                                            <option value="{{$value->id}}" @if ($value->id == $user->id_kategori) selected @endif >{{$value->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="user">{{__('Jenis Request')}}</label>
                                <div class="col-sm-10">
                                    <select id="id_jenisrequest"  class="form-control" name="id_jenisrequest" required >
                                        @php
                                            $jenisrequest = App\Models\Jenisrequest::get();
                                        @endphp
                                        @foreach ($jenisrequest as $key => $value)
                                            <option value="{{$value->id}}" @if ($value->id == $user->id_jenisrequest) selected @endif >{{$value->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-sm" type="submit"><span class="fa fa-save "></span>&nbsp;{{__('Simpan')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    
</div>
@endsection
@section('script')
<script type="text/javascript">
    $(document).ready(function() {
        $('#id_kantor').select2();
    });
</script>
@endsection
