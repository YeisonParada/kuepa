@extends('layouts.app')

@section('content')
    <div class="container" >
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">¡Registrate!</div>
                    <div class="card-body">

                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        @if (session('flash_message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{session('flash_message')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        @endif
                        <form method="POST" action="{{ url('/estudiantes') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @include ('estudiantes.form', ['formMode' => 'create'])

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
