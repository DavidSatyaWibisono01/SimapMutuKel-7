<div class="modal fade" id="exampleModal-Hapus-Profile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Hapus Pertanyaan</h5>
              <a href="#" arial-label="close" data-bs-dismiss="modal"><i class="fa fa-close"></i></a>
          </div>

          <div class="modal-body">
              <p class="font-size-p">Data akan dihapus secara permanen</p>
          </div>

          <div class="modal-footer">

            <button type="button" class="btn btn-back" data-bs-dismiss="modal">Batal</button>
            @if (!empty($prtn))
            <form action="/hasil-evaluasi-individu-a-pedagogik/delete/{{$prtn->id}}" method="post">
                @method('delete')
                @csrf
            <button type="submit" class="btn btn-tambah-data">Oke</button>
            </form>
            @endif
          </div>
      </div>
    </div>
  </div>
