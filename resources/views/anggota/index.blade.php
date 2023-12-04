@extends('layout.app')

@section('title', 'Anggota')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Anggota</h1>
    </div>
    <div class="section-body">
        <div class="card">
            <div class="card-header">
            <h4>Data Anggota</h4>
            <div class="card-header-form">
                <button class="btn btn-sm btn-success" data-toggle="modal" data-target="#exampleModalCenter"><i class="fas fa-plus"></i> Tambah Data</button>
            </div>
            </div>
            <div class="card-body"> 
            <table class="table table-hover" id="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Kode</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Telpon</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Aksi</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($anggota as $item)
                <tr>
                    <th scope="row" style="vertical-align: middle;">{{$loop->iteration}}</th>
                    <td style="vertical-align: middle;">{{$item->kode}}</td>
                    <td style="vertical-align: middle;">{{$item->nama}}</td>
                    <td style="vertical-align: middle;">{{$item->jenis_kelamin}}</td>
                    <td style="vertical-align: middle;">{{$item->telpon}}</td>
                    <td style="vertical-align: middle;">{{$item->alamat}}</td>
                    <td><img src="{{asset('storage/anggota/'.$item->foto)}}" class="rounded" style="width: 150px" alt="{{$item->foto}}"></td>
                    <td style="vertical-align: middle;">

                    <form action="/anggota/{{$item->id}}" id="delete-form">
                        <a href="/anggota/{{$item->id}}/edit" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                        <a href="/anggota/{{$item->id}}/print" class="btn btn-sm btn-info"><i class="fa fa-print"></i></a>
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
@include('anggota.form')
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
              form.action = '/anggota/' + id; // Ubah aksi form sesuai dengan ID yang sesuai
              form.submit();
            }
        });
    }

    $(document).ready( function () {
    $('#table').DataTable();
} );
</script>
@endpush