$(function () {
  $("#supplier_dropdown").select2();
  $("#email_dropdown").select2();
  $("#syarat_pembayaran").select2();
  $("#tag_dropdown").select2({
    placeholder: "Pilih tag",
  });

  $("#sama-alamat-pengiriman").change(function () {
    const alamatPengirimanEl = $("#alamat-pengiriman");
    if (this.checked) {
      alamatPengirimanEl.hide();
    } else {
      alamatPengirimanEl.show();
    }
  });

  createTable();
});

const createTable = function () {
  const tableId = "#table-buat-faktur";

};
