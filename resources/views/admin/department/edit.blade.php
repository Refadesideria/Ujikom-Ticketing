@extends('layouts.admin1')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="background-color: #d3d3d3">UPDATE DEPARTMENT</div>
                <div class="card-body">
                    <form class="form-horizontal" action="{{ route('department.update', $department->id) }}" method="POST" enctype="multipart/form-data">
                        <input name="_method" type="hidden" value="PATCH">
                        @csrf
                        @method('PUT')
                        <div class="panel-body">
                            <div class="form-group">
                                <strong>Nama department</strong>
                                <input type="text" name="name" value="{{ $department->name }}" class="form-control"
                                    placeholder="Nama department">
                                @error('name')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col card-header">
                                <button class="btn btn-primary btn-sm" type="submit"><span class="fa fa-save "></span>&nbsp;{{__('Save')}}</button>
                                <a class="btn btn-primary btn-sm float-right" href="{{ route('department.index') }}" enctype="multipart/form-data">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
