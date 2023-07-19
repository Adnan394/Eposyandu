<!-- Modal -->
<div class="modal fade" id="addPosyandu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Posyandu</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form action="{{ route('posyandu.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="Masukan Nama Posyandu" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="alamat" placeholder="Masukan Alamat" required>
            </div>
            <div class="d-flex gap-3">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Kelurahan</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="kelurahan" placeholder="Masukan Kelurahan" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Kecamatan</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="kecamatan" placeholder="Masukan Kecamatan" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Kabupaten / Kota</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="kabupaten" placeholder="Masukan Kabupaten / Kota" required>
            </div>
        </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
      </div>
    </div>
</div>