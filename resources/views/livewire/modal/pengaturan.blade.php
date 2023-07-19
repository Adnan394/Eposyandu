<!-- Modal -->
<div class="modal fade" id="pengaturan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Pengaturan Profile</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form action="{{ route('ibu.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Anda (Ibu)</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="{{ Auth::user()->name }}" required>
                <input type="hidden" name="akun_id" value="{{ Auth::user()->id }}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">NIK</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="nik" placeholder="Masukan NIK" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="alamat" placeholder="Masukan Alamat" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">No Telepon</label>
                <input type="number" class="form-control" id="exampleFormControlInput1" name="no_telp" placeholder="Masukan Nomor Telepon" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Foto</label>
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