@extends('layouts.master')

@section('title')
    create
@endsection

@section('content')

<div class="ml-5 mr-5">
<form method="post" action="{{route('create')}} ">
    @csrf
    <div class="form-group">
      <label for="judul">Judul</label>
      <input name="judul" type="text" class="form-control" id="judul" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="isi">Isi</label>
      <textarea name="isi" class="form-control" id="examplisi" rows="3"></textarea>
    </div>
    <div class="form-group">
        <label for="slug">slug</label>
        <input name="slug" type="text" class="form-control" id="slug" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <label for="tag">tag</label>
        <input name="tag" type="text" class="form-control" id="tag" aria-describedby="emailHelp">
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection
