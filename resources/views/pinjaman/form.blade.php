<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Pinjaman</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/pinjaman/store" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="row">
          <div class="col-md-6">
          <div class="form-group">
            <label for="tanggal_pinjam">Tanggal Peminjaman</label>
            <input type="date" class="form-control" name="tanggal_pinjam">
          </div>
          </div>

          <div class="col-md-6">
          <div class="form-group">
            <label for="lama_pinjam">Lama Peminjaman</label>
            <input type="text" class="form-control" name="lama_pinjam">
          </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label for="keterangan">Keterangan</label>
              <input type="text" class="form-control" name="keterangan">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label for="status">Status</label>
              <select class="custom-select" name="status">
              <option selected>Pilih Opsi Peminjaman</option>
              <option value="Sudah Dikembalikan">Sudah Dikembalikan</option>
              <option value="Belum Dikembalikan">Belum Dikembalikan</option>
              </select>
            </div>
          </div>

          <div class="col-md-6">
              <div class="form-group">
                <label for="anggota_id">Anggota</label>
                <select class="custom-select" name="anggota_id">
                <option value="">Pilih Anggota</option>
                @foreach ($anggota as $anggota)
                <option value="{{ $anggota->id }}">{{ $anggota->nama }}</option>
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
                <option value="{{ $user->id }}">{{ $user->nama }}</option>
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
</div>