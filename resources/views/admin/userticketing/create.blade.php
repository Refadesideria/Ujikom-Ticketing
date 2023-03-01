@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header" style="background-color: #d3d3d3">Admin</div>
                <div class="card-body">
                    <form class="form-horizontal" action="{{ route('userticketing.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="">Nama User</label>
                                <input type="text" name="nama_user"
                                    class="form-control @error('nama_user') is-invalid @enderror" id="">
                                @error('nama_user')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Ussername</label>
                                <input type="text" name="ussername_user"
                                    class="form-control @error('ussername_user') is-invalid @enderror" id="">
                                @error('ussername_user')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" name="email"
                                    class="form-control @error('email') is-invalid @enderror" id="">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="text" name="password"
                                    class="form-control @error('password') is-invalid @enderror" id="">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                           
                        
                            <div class="form-group">
                            <label for="">Divisi</label>
                                <select name="id_divisi" class="form-control @error('divisi') is-invalid @enderror"
                                    id="">
                                    <option>Pilih</option>
                                        @php
                                            $divisi = App\Models\Divisi::get();
                                        @endphp
                                        @foreach ($divisi as $key => $value)
                                            <option value="{{$value->id}}">{{$value->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            <br>
                            <div class="form-group">
                            <label for="">Jabatan</label>
                                <select name="id_jabatan" class="form-control @error('jabatan') is-invalid @enderror"
                                    id="">
                                    <option>Pilih</option>
                                        @php
                                            $jabatan = App\Models\Jabatan::get();
                                        @endphp
                                        @foreach ($jabatan as $key => $value)
                                            <option value="{{$value->id}}">{{$value->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                           
                            <br>
                            <div class="form-group">
                            <label for=""> Role</label>
                                <select name="id_kategori" class="form-control @error('kategori') is-invalid @enderror"
                                    id="">
                                    <option>Pilih</option>
                                        @php
                                            $kategori = App\Models\Kategori::get();
                                        @endphp
                                        @foreach ($kategori as $key => $value)
                                            <option value="{{$value->id}}">{{$value->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            <br>
                            <div class="form-group">
                            <label for="">Jenis Request</label>
                                <select name="id_jenisrequest" class="form-control @error('jenisrequest') is-invalid @enderror"
                                    id="">
                                    <option>Pilih</option>
                                        @php
                                            $jenisrequest = App\Models\Jenisrequest::get();
                                        @endphp
                                        @foreach ($jenisrequest as $key => $value)
                                            <option value="{{$value->id}}">{{$value->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            <br>
                              
                            <button class="btn btn-primary btn-sm" type="submit"><span class="fa fa-save "></span>&nbsp;{{__('Simpan')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
    
</div>
@endsection
@section('script')
<script>
    $(document).ready(function() {
        $('#id_kantor').select2();
    });
</script>
@endsection
