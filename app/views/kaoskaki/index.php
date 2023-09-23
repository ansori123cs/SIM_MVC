<div class="container mt-5">
    <div class="row">
        <div class="col-8">  
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
            Tambah data Kaos Kaki
            </button>
            <h1>Daftar Kaos Kaki</h1>
            <?php foreach ($data['kaos'] as $kaos) :?>
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center"><?=$kaos['nama'];?>
                    <a href="<?=BASEURL;?>/kaoskaki/detail/<?=$kaos['id_kaos'];?>"class="badge rounded-pill bg-primary">Detail</a>
                    </li>
                </ul>
            <?php endforeach?>
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Form data Kaos Kaki</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
    <div class="modal-body">
        <form action="" method="get">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Kaos Kaki</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Tambah Data</button>
        </form>
    </div>
    </div>
  </div>
</div>

