const tableId = "#table-detail";

$(function () {
  createTableDetail();
  isiTotal();
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
        data: "kuantitas",
      },
      {
        data: "unit",
      },
      {
        data: null,
        render: function (data) {
          return renderRupiah(
            numberWithCommas(data.harga_satuan),
            "white-space:nowrap"
          );
        },
      },
      {
        data: null,
        render: function (data) {
          return renderDiskon(data.diskon);
        },
      },
      {
        data: null,
        render: function (data) {
          return renderJumlah(data);
        },
      },
    ],
  });
};

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
    produk: "540-121 APD (Seragam pakaian sekolah)",
    deskripsi: "Sepatu Safety Cheetah 7106 Black (64 Set)",
    kuantitas: 1,
    unit: "pcs",
    harga_satuan: 22803840,
    diskon: 0,
  },
];

function numberWithCommas(x) {
  return x.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ".");
}
