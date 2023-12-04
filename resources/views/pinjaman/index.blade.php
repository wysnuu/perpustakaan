@extends('layout.app')

@section('title', 'Pinjaman')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Pinjaman</h1>
    </div>
    <div class="section-body">
        <div class="card">
            <div class="card-header">
            <h4>Data Pinjaman</h4>
            <div class="card-header-form">
                <button class="btn btn-sm btn-success" data-toggle="modal" data-target="#exampleModalCenter"><i class="fas fa-plus"></i> Tambah Data</button>
            </div>
            </div>
            <div class="card-body"> 
            <table class="table table-hover" id="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tanggal Peminjaman</th>
                    <th scope="col">Lama Peminjaman</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Status</th>
                    <th scope="col">Anggota</th>
                    <th scope="col">User</th>
                    <th scope="col">Aksi</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($pinjaman as $item)
                <tr>
                    <th scope="row" style="vertical-align: middle;">{{$loop->iteration}}</th>
                    <td style="vertical-align: middle;">{{$item->tanggal_pinjam}}</td>
                    <td style="vertical-align: middle;">{{$item->lama_pinjam}}</td>
                    <td style="vertical-align: middle;">{{$item->keterangan}}</td>
                    <td style="vertical-align: middle;">{{$item->status}}</td>
                    <td style="vertical-align: middle;">{{$item->anggota->nama}}</td>
                    <td style="vertical-align: middle;">{{$item->user_id}}</td>
                    <td style="vertical-align: middle;">

                    <form action="/pinjaman/{{$item->id}}" id="delete-form">
                        <a href="/pinjaman/{{$item->id}}/edit" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                        @csrf
                        @method('delete')
                        <button class="btn btn-sm btn-danger" data-id="{{$item->id}}" type="submit" onclick="confirmDelete(this)"><i class="fa fa-trash"></i></button>
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
</section>
@include('pinjaman.form')
@endsection

@push('script')
<script>
    
    @if(session('sukses'))
    iziToast.success({
      title:'Sukses', 
      message: '{{session('sukses')}}',
      position: 'topRight'
    });
    @endif

    var data_anggota = $(this).attr('data-id')
    function confirmDelete(button) {
    
        event.preventDefault()
        const id = button.getAttribute('data-id');
        swal({
                title: 'Apa Anda Yakin ?',
                text: 'Ketika Anda tekan OK, maka data tidak dapat dikembalikan !',
                icon: 'warning',
                buttons: true,
                dangerMode: true,
            })
        .then((willDelete) => {
            if (willDelete) {
              const form = document.getElementById('delete-form');
              // Setelah pengguna mengkonfirmasi penghapusan, Anda bisa mengirim form ke server
              form.action = '/pinjaman/' + id; // Ubah aksi form sesuai dengan ID yang sesuai
              form.submit();
            }
        });
    }

    $(document).ready( function () {
    $('#table').DataTable();
} );
</script>
@endpush