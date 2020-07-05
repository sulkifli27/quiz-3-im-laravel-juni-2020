@extends('layouts.master')

@section('title')
    Edit
@endsection

@section('content')

<div class="ml-5 mr-5">
<form  action="{{route(('update'),$artikel->id)}} " method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="judul">Judul</label>
    <input name="judul" value="{{$artikel->judul}}" type="text" class="form-control" id="judul" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="isi">Isi</label>
      <textarea  name="isi" class="form-control" id="examplisi" rows="3">{{$artikel->isi}}</textarea>
    </div>
    <div class="form-group">
        <label for="slug">slug</label>
        <input value="{{$artikel->slug}}" name="slug" type="text" class="form-control" id="slug" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <label for="tag">tag</label>
        <input name="tag" value="{{$artikel->tag}}" type="text" class="form-control" id="tag" aria-describedby="emailHelp">
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection
