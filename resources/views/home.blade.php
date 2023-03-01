@extends('layouts.admin')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color: #d3d3d3">Dashboard</div>
                <div class="card-body" style="background-color: #87CEEB" >
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Anda Berhasil Login!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


 