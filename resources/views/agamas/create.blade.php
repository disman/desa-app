<!-- Agama Modal-->
<div class="modal fade" id="agamaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Agama</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="namaAgama" class="form-label">Nama Agama</label>
                    <input type="text" class="form-control" id="namaAgama" placeholder="Nama Agama..."
                        required="required">
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="{{ route('agamas.create') }}">Tambah</a>
            </div>
        </div>
    </div>
</div>
