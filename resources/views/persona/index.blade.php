@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Listado') }}</div>
                <div class="card-body">

                    <h6><a href="/persona/create">+ Registro</a></h6>


                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>NOMBRES</td>
                                <td>APELLIDOS</td>
                                <td>TIPO DOCUMENTO</td>
                                <td>NUMERO DOCUMENTO</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($personas as $persona)
                            <tr>
                                <td>{{$persona->id}}</td>
                                <td>{{$persona->nombres}}</td>
                                <td>{{$persona->apellidos}}</td>
                                <td>{{$persona->tipo_documento}}</td>
                                <td>{{$persona->num_documento}}</td>


                                @if($persona->status =='0')
                                <td><a href="#status" onclick="status({{$persona->id}})">💲 Por Pagar</a></td>
                                @else
                                <td><a href="#status" onclick="status({{$persona->id}})">💵 Pagado </a></td>
                                @endif

                                <td><a href="/get/{{$persona->id}}">📄</a>
                                    <a href="/publico/certificado/index?Tk={{$persona->qr}}">👁️</a>

                                    <a href="/persona/{{$persona->id}}/edit">✏️</a>

                                    <a href="#eliminar" onclick="eliminar({{$persona->id}})">🗑️ </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

<script>
    window.CSRF_TOKEN = '{{ csrf_token() }}';


    async function status(id) {
        if (confirm("¿Seguro deseas cambiar el estado?") == true) {
            const res = await fetch('persona/pagar/' + id, {
                method: 'POST',
                headers: {
                    "Content-Type": "application/json",
                    "Accept": "application/json",
                    "X-Requested-With": "XMLHttpRequest",
                    "X-CSRF-Token": window.CSRF_TOKEN
                },
            })
            location.reload()
        }
    }


    async function eliminar(id) {
        if (confirm("¿Seguro deseas Eliminar?") == true) {
            const res = await fetch('persona/' + id, {
                method: 'DELETE',
                headers: {
                    "Content-Type": "application/json",
                    "Accept": "application/json",
                    "X-Requested-With": "XMLHttpRequest",
                    "X-CSRF-Token": window.CSRF_TOKEN
                },
            })
            location.reload()
        }
    }
</script>