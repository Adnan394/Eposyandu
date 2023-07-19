<!-- Modal -->
<div class="modal fade" id="profile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Profile</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
            @php
                $data = App\Models\Ibu::where('akun_id', Auth::user()->id)->first();
            @endphp
        <div class="modal-body">
            <div class="d-flex justify-content-center mb-5">
                <img src="{{ ($data) ? Storage::url($data->image) : asset('assets/image/default.png')}}" alt="sd" width="100px">
            </div>
            <div class="row">
                <div class="col">
                    <p>Nama</p>
                    <p>NIK</p>
                    <p>No Telepon</p>
                    <p>Alamat</p>
                </div>
                <div class="col">
                    <p>{{ $data ? $data->nama : '' }}</p>
                    <p>{{ $data ? $data->nik : '' }}</p>
                    <p>{{ $data ? $data->no_telp : ''}}</p>
                    <p>{{ $data ? $data->alamat : '' }}</p>
                </div>
            </div>
        </div>
            {{-- <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#pengaturan">Edit</button>
            </div> --}}
      </div>
    </div>
</div>