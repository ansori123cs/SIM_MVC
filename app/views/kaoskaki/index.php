<div class="container mt-5">
    <div class="row">
        <div class="col-lg-10"> 
            <?php Flasher::flash(); ?> 
        </div>
    </div>
    <div class="row">
        <div class="col-lg-10">  
            <h1>Daftar Kaos Kaki</h1>
             <!-- Button trigger modal -->
             <button type="button" class="btn btn-primary mb-4 tombolTambah" data-bs-toggle="modal" data-bs-target="#formModal">
            Tambah data Kaos Kaki
            </button>
            <?php foreach ($data['kaos'] as $kaos) :?>
                <ul class="list-group">
                    <li class="list-group-item"><?=$kaos['nama'];?>
                    <a href="<?=BASEURL;?>/kaoskaki/hapus/<?=$kaos['id_kaos'];?>"class="badge rounded-pill bg-danger float-end me-2"onclick="return confirm('yakin menghapus data <?=$kaos['nama'];?> ? ');">Hapus</a>
                    <a href="<?=BASEURL;?>/kaoskaki/ubah/<?=$kaos['id_kaos'];?>"class="badge rounded-pill bg-success float-end me-2 tombolUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?=$kaos['id_kaos'];?>">Ubah</a>
                    <a href="<?=BASEURL;?>/kaoskaki/detail/<?=$kaos['id_kaos'];?>"class="badge rounded-pill bg-primary float-end me-2">Detail</a>
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
        <h5 class="modal-title" id="formModalLabel">Form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
    <div class="modal-body">
        <form action="<?=BASEURL;?>/kaoskaki/tambah" method="post">
        <input type="hidden" name="id" id="id">
        <div class="mb-3">
            <label for="nama" class="form-label ">Nama Kaos Kaki</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <select class="form-select mesin" id="mesin" name="mesin">
            <option selected>Pilih Mesin</option>
            <option value="usb120">usb120</option>
            <option value="usb144">usb144</option>
            <option value="ths komputer">ths komputer</option>
            <option value="ths manual">ths manual</option>
            <option value="manual panjang">manual panjang</option>
            <option value="manual pendek balik">manual pendek balik</option>
            <option value="manual pendek standart">manual pendek standart</option>
        </select>
        <select class="form-select mt-3" id="bahan" name="bahan">
            <option selected>Pilih Bahan</option>
            <option value="Spandek">Spandek</option>
            <option value="Nilon">Nilon</option>
            <option value="Campuran">Campuran</option>
            <option value="Polyster">Polyster</option>
        </select>
        <div class="mb-3">
            <label for="keterangan" class="form-label">Keterangan</label>
            <input type="text" class="form-control" id="keterangan" name="keterangan">
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
    </div>
    </div>
  </div>
</div>

