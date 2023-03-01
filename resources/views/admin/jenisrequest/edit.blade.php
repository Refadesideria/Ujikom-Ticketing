@extends('layouts.admin1')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="background-color: #d3d3d3">Update Jenis Request</div>
                <div class="card-body">
                    <form class="form-horizontal" action="{{ route('jenisrequest.update', $jenisrequest->id) }}" method="POST" enctype="multipart/form-data">
                        <input name="_method" type="hidden" value="PATCH">
                        @csrf
                        <div class="panel-body">
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="jenisrequest">{{__('Kode')}}</label>
                                <div class="col-sm-10">
                                    <input type="text" name="kode" value="{{$jenisrequest->kode}}" id="jenisrequest" class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase()" required>
                                </div>
                                <br>

                                <div class="form-group">
                                <label class="col-sm-2 control-label" for="jenisrequest">{{__('Jenis Request')}}</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" value="{{$jenisrequest->name}}" id="jenisrequest" class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase()" required>
                                </div>
                            </div>
                            <br>
                            <button class="btn btn-primary btn-sm" type="submit"><span class="fa fa-save "></span>&nbsp;{{__('Save')}}</button>
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

    </script>
@endsection
