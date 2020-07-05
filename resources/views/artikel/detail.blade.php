@extends('layouts.master')
@section('title')
 Detail Artikel
@endsection

@section('content')
    <div class="ml-2 mt-2">
        <h3>Detail Artikel</h3>
    <p>Judul : {{$artikel->judul}}  </p>
    <p>Isi : {{$artikel->isi}} </p>
    <p>slug : {{str_replace(" ", "-", $artikel->slug)}} </p>
    
        
    <button class=" btn btn-success" >{{$artikel->tag}}</button>


    </div>
@endsection