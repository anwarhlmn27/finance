const tableId = "#table-detail";

$(function () {
  createTableDetail();
});


const isiTotal = function () {
  let subTotal = 0;
  detailDatas.forEach(el => {
    subTotal += el.harga_satuan * el.kuantitas;
  })
  const formattedSubTotal = numberWithCommas(subTotal);
  $('#subtotal-price').text(`Rp. ${formattedSubTotal}`);
  $('#total-price').text(`Rp. ${formattedSubTotal}`);
  $('#sisa-tagihan').text(`Rp. ${formattedSubTotal}`);
}

// =============== tabel detail

const createTableDetail = function () {
  $(tableId).DataTable({
    data: detailDatas,
    ordering: true,
    responsive: false,
    scrollX: true,
    searching:false,
    lengthChange: false,
    columns: [
      {
        data: null,
        render: function (data) {
          return renderProduk(data);
        },
      },
      {
        data: "deskripsi",
      },
      {
        data: null,
        render: function(data) {
          return renderKuantitas(data);
        }
      },
      {
        data: "unit",
      },
    ],
  });
};

const renderKuantitas = function(data) {
  const container = $("<div>").addClass("text-center");
  const containerSpan = $("<span>")
    .text(`${data.kuantitas}`)

  container.append(containerSpan);
  return container.wrap('<div><div>').parent().html();
}

const renderProduk = function (data) {
  const container = $("<div>");
  const containerSpan = $("<span>")
    .text(`${data.produk}`)
    .css("color", "#346ee0");

  container.append(containerSpan);
  return container.wrap("<div><div>").parent().html();
};

const renderRupiah = function (nilai, style = "") {
  const container = $(`<div style="${style}">`)
    .text(`Rp. ${nilai}`)
    .attr("class", "text-right");

  return container.wrap("<div></div>").parent().html();
};

const renderDiskon = function (nilai) {
  const container = $("<div>").text(`${nilai}%`).attr("class", "text-right");

  return container.wrap("<div></div>").parent().html();
};

const renderJumlah = function (data) {
  let total = data.harga_satuan * data.kuantitas;
  total = numberWithCommas(total);
  const container = $('<div style="white-space:nowrap">').text(`Rp. ${total}`).attr("class", "text-right");

  return container.wrap("<div></div>").parent().html();
};

const detailDatas = [
  {
    produk: "510-212 Biaya Meal, Drink Peserta Training umum (TLC, AKTI)",
    deskripsi: "Lunch Training Karakuri for Supplier 10 Box ( 22 Apr 2024 )",
    kuantitas: 10,
    unit: "pcs",
  },
];

function numberWithCommas(x) {
  return x.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ".");
}
