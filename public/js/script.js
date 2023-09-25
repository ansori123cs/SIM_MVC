$(function () {
  $('.tombolTambah').on('click', function () {
    $('#formModalLabel').html('Form Tambah Data Kaos Kaki');
    $('.modal-footer button[type=submit]').html('Tambah Data');
  });
});
$(function () {
  $('.tombolUbah').on('click', function (e) {
    e.preventDefault();
    $('#formModalLabel').html('Form Ubah Data Kaos Kaki');
    $('.modal-footer button[type=submit]').html('Ubah Data');
    $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/kaoskaki/ubah');
    // penggunaan ajax untuk pengambilan data tanpa mereload seluruh halaman
    const id_kaos = $(this).data('id');
    console.log(id_kaos);
    $.ajax({
      url: 'http://localhost/phpmvc/public/kaoskaki/getUbah',
      data: { id: id_kaos },
      method: 'POST',
      dataType: 'json',
      success: function (data) {
        $('#nama').val('anjay');
        $('#mesin').val('bahan');
        $('#mesin').val('mesin');
        $('#keterangan').val('keterangan');
      },
    });
  });
});
$('.tombolUbah').on('click', function () {
  $('#formModalLabel').html('Form Ubah Data Kaos Kaki');
  $('.modal-footer button[type=submit]').html('Ubah Data');
  $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/kaoskaki/ubah');
  // penggunaan ajax untuk pengambilan data tanpa mereload seluruh halaman
  const id = $(this).data('id');
  console.log(id);
  $.ajax({
    url: 'http://localhost/phpmvc/public/kaoskaki/getubah',
    data: { id_kaos: id },
    method: 'POST',
    dataType: 'json',
    success: function (data) {
      console.log(data);
      // $('#nama').val(data.nama);
      // $('#mesin').val(data.mesin);
      // $('#bahan').val(data.bahan);
      // $('#keterangan').val(data.keterangan);
      // $('#id').val(data.id);
    },
  });
});
