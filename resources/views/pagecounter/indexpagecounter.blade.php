@extends('layouts.layout')
@section('tulisan1', 'Page Counter')
@section('content')
            @foreach($pagecounter as $p)
            Anda pengunjung ke:
                {{ $p->Jumlah }}
            @endforeach
@endsection
