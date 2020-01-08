@extends('layouts.master')


@section('content')
<div class="main">
    <div class="main-content">
      <div class="fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title">Inputs</h3>
        </div>
        <div class="panel-body">
          <form action="/peminjaman/{$peminjaman->id_peminjaman}/update" method="POST">
                    {{csrf_field()}}
                <div class="form-group">
                <label for="exampleInputEmail1">Id peminjaman</label>
                <input  name="id_peminjaman" type="integer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Id peminjaman" value="{{$peminjaman->id_peminjaman}}">
                </div>

                <div class="form-group">
                <label for="exampleInputEmail1">tanggal pinjam</label>
                <input name="tanggal_pinjam" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" value="{{$peminjaman->tanggal_pinjam}}">
                </div>

                <div class="form-group">
                <label for="exampleInputEmail1">tanggal kembali</label>
                <input name="tanggal_kembali" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kondisi" value="{{$peminjaman->tanggal_kembali}}">
                </div>

                <div class="form-group">
                <label for="exampleInputEmail1">keterangan</label>
                <input name="keterangan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Keterangan" value="{{$peminjaman->keterangan}}">
                </div>

                <div class="form-group">
                <label for="exampleInputEmail1">status peminjaman</label>
                <input name="status_peminjaman" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Keterangan" value="{{$peminjaman->status_peminjaman}}">
                </div>

                <div class="form-group">
                <label for="exampleInputEmail1">id_pegawai</label>
                <input name="id_pegawai" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Keterangan" value="{{$peminjaman->id_pegawai}}">
                </div>

                <button type="submit" class="btn btn-warning">Update</button>
                  </form>
        </div>
      </div>
          </div>
        </div>
      </div>
    </div>
  </div> 
@stop