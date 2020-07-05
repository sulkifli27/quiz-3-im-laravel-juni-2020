@extends('layouts.master')


@section('title')
    Index
@endsection

@section('content')
<div class="card-body">
<a href="{{route('tambah-artikel')}}"><button type="submit" class="btn btn-primary">Tambah Artikel</button></a></div>
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">No</th>
        <th scope="col">Judul</th>
        <th scope="col">Isi</th>
        <th scope="col">slug</th>
        <th scope="col">tag</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($artikel  as $key => $artikels)
      <tr>   
      <td>{{$key +1}}</td>
      <td>{{$artikels->judul}}</td>
      <td>{{$artikels->isi}}</td>
     
      <td>{{str_replace(" ", "-", $artikels->slug)}}</td>
      <td>{{$artikels->tag}}</td>
      <td>
        <a href="{{route('edit',$artikels->id)}}"><button type="submit"  class="btn btn-success">Edit</button></a>
        <a href="{{route('show',$artikels->id)}}"><button type="submit"  class="btn btn-primary">show</button></a>
        <form  action="{{route('hapus',$artikels->id)}}" method="post" style= "display: inline">
          @csrf
          @method('DELETE')
          <button class="btn  btn-danger" type="submit "><i class="fas fa-trash"></i>Hapus</button>
        </form>
    </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection

@push('scripts')
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
@endpush