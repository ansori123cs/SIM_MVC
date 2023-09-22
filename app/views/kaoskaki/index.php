<div class="container mt-5">
    <div class="row">
        <div class="col-10">
            <h1>Daftar Kaos Kaki</h1>
            <table class="table table-striped">
            <thead class="text-light bg-primary">
                <tr>
                    <th scope="col">Nama barang</th>
                    <th scope="col">Mesin</th>
                    <th scope="col">Bahan</th>
                    <th scope="col">Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data['kaos'] as $kaos) :?>
                <tr>
                    <td><?=$kaos['nama'];?></td>
                    <td><?=$kaos['mesin'];?></td>
                    <td><?=$kaos['bahan'];?></td>
                    <td><?=$kaos['keterangan'];?></td>
                </tr>
                <?php endforeach?>
            </tbody>
            </table>
        </div>
    </div>
</div>


