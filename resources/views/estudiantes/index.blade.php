@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Estudiantes Registrados</div>
                    <div class="card-body">
                        <form method="GET" action="{{ url('/estudiantes') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Buscar..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        Buscar
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            @if (session('flash_message'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{session('flash_message')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            @endif
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Nombres</th><th>Apellidos</th><th>Email</th><th>Teléfono</th><th>Programa</th><th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($estudiantes as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->Nombres }}</td>
                                        <td>{{ $item->Apellidos }}</td>
                                        <td>{{ $item->Email }}</td>
                                        <td>{{ $item->Telefono }}</td>
                                        <td>{{ $item->Programa }}</td>
                                        <td>
                                            <form method="POST" action="{{ url('/estudiantes' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('PATCH') }}
                                                {{ csrf_field() }}
                                                @if ($item->Contacto == 1)
                                                <button type="submit" class="btn btn-success btn-sm" title="Contactado"><i class="fa fa-trash-o" aria-hidden="true"></i> Contactado</button>
                                                @endif
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $estudiantes->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
