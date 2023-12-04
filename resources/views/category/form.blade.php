<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/category/store" method="POST">
          @csrf
          <div class="form-group">
            <label for="exampleInputEmail">Kode</label>
            <input type="text" class="form-control" name="kode">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword">Nama</label>
            <input type="text" class="form-control" name="nama">
          </div>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>

      </div>
      
    </div>
  </div>
</div>