<!-- Modal -->
<div class="modal fade" id="addPetugas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Petugas</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form action="{{ route('petugas.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="Masukan Nama Vaksin" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Jabatan</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="jabatan" placeholder="Masukan Jabatan" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Kelamin</label>
                <select class="form-select" aria-label="Default select example" name="jenis_kelamin" id="exampleFormControlInput1" required>
                    <option selected>Pilih kelamin</option>
                    <option value="L">Laki laki</option>
                    <option value="P">perempuan</option>
                  </select>
            </div>
            <div class="d-flex gap-3">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tempat Lahir</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="tempat_lahir" placeholder="Masukan Jabatan" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="exampleFormControlInput1" name="tanggal_lahir" placeholder="Tempat Lahir" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="alamat" placeholder="Masukan Alamat" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">No Telepon</label>
                <input type="number" class="form-control" id="exampleFormControlInput1" name="no_telp" placeholder="Masukan No Telepon" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Image</label>
                <input type="file" class="form-control" id="exampleFormControlInput1" name="image" required>
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