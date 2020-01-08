<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventaris extends Model
{
    protected	$table = 'peminjaman';
    protected	$fillable = ['tanggal_pinjam','tanggal_kembali','keterangan','status_peminjamna','id_pegawai'];
    protected	$primaryKey = 'id_peminjaman';
}
