@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md- 8">
            <div class="card">
                <table class='table'>

                    @if($libros->count())
                    <thead>
                        <tr>
                            <th>Autor</th>
                            <th>Título</th>
                            <th>Resumen</th>
                        </tr>
                    </thead>
                    @endif
                    <tbody>
                        @foreach ($libros as $libro)
                        <tr>
                            <td>{{$libro->author}}</td>
                            <td>{{$libro->title}}</td>
                            <td>{{$libro->summary}}</td>
                            <td>
                            <form method="POST" action="{{route('destroy',['id'=>$libro->id])}}">
                            @method("DELETE")
                            @csrf
                            <button type="submit" class="btn btn-danger">Eliminar libro</button>
                            </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection