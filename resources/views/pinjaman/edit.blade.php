@extends('layout.app')

@section('title', 'Edit Data Pinjaman')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Pinjaman</h1>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4>Data Pinjaman</h4>
                </div>

                <div class="card-body">
                    <form action="/pinjaman/{{$pinjaman->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                    <label for="tanggal_pinjam">Tanggal Peminjaman</label>
                    <input type="date" name="tanggal_pinjam" class="form-control" value="{{$pinjaman->tanggal_pinjam}}" readonly>
                </div>
                </div>

                <div class="col-md-6">
                <div class="form-group">
                    <label for="lama_pinjam">Lama Peminjaman</label>
                    <input type="text" class="form-control" name="nama" value="{{$pinjaman->lama_pinjam}}">
                </div>
                </div>

                <div class="col-md-6">
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <input type="text" class="form-control" name="keterangan" value="{{$pinjaman->keterangan}}">
                </div>
                </div>

                <div class="col-md-6">
                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="custom-select" name="status">
                    <option value="Sudah Dikembalikan" {{$pinjaman->status == 'Sudah Dikembalikan' ? 'selected' : ''}}>Sudah Dikembalikan</option>
                    <option value="Belum Dikembalikan" {{$pinjaman->status == 'Belum Dikembalikan' ? 'selected' : ''}}>Belum Dikembalikan</option>
                    </select>
                </div>
                </div>

                <div class="col-md-6">
                            <div class="form-group">
                                <label for="anggota_id">Anggota</label>
                                <select class="custom-select" name="anggota_id">
                                    <option value="">Pilih Anggota</option>
                                    @foreach ($anggota as $anggota)
                                    <option value="{{ $anggota->id }}" {{ $anggota->id == $pinjaman->anggota_id ? 'selected' : '' }}>{{ $anggota_id->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="user_id">User</label>
                                <select class="custom-select" name="user_id">
                                    <option value="">Pilih User</option>
                                    @foreach ($user as $user)
                                    <option value="{{ $user->id }}" {{ $user->id == $pinjaman->user_id ? 'selected' : '' }}>{{ $user->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
 </section>
@endsection