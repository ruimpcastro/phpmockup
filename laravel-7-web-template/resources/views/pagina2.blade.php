@extends('master-title')

@section('titulo')

    <h3>benfas</h3>

    <ul>
    @foreach($pessoas as $pessoa)
        <li>{{$pessoa->getNome()}}</li>
    @endforeach
    </ul>

@endsection
