const tableId = "#table-detail";

$(function () {
  createTableDetail();

  let subTotal = 0;
  detailDatas.forEach(el => {
    subTotal += calculateTotal(el.harga_satuan, el.kuantitas, el.diskon)
  })
  $("#subtotal").text(numberWithCommas(subTotal))
});

// =============== tabel detail

const createTableDetail = function () {
  $(tableId).DataTable({
    data: detailDatas,
    ordering: true,
    responsive: true,
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
          return renderRupiah(numberWithCommas(data.harga_satuan));
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

const renderRupiah = function (nilai) {
  const container = $("<div>").text(`Rp. ${nilai}`).attr("class", "text-right");

  return container.wrap("<div></div>").parent().html();
};

const renderDiskon = function (nilai) {
  const container = $("<div>").text(`${nilai}%`).attr("class", "text-right");

  return container.wrap("<div></div>").parent().html();
};

const renderJumlah = function (data) {
  let total = calculateTotal(data.harga_satuan, data.kuantitas, data.diskon);
  // data.harga_satuan * data.kuantitas;
  // total -= (total * data.diskon / 100);

  const container = $("<div>")
    .text(`Rp. ${numberWithCommas(total)}`)
    .attr("class", "text-right");

  return container.wrap("<div></div>").parent().html();
};

const calculateTotal = function(harga_satuan, kuantitas, diskon) {
  let total = 0;
  total = harga_satuan * kuantitas
  total -= total * diskon / 100
  return total
}

const detailDatas = [
  {
    produk: "510-313 Spare part Machine Dojo/Lab Dojo ME/Hydro",
    deskripsi: "Kunci L Set Bondhus USA",
    kuantitas: 4,
    unit: "pcs",
    harga_satuan: 183150,
    diskon: 1,
  },
  {
    produk: "510-313 Spare part Machine Dojo/Lab Dojo ME/Hydro",
    deskripsi: "Obeng Vessel 610",
    kuantitas: 4,
    unit: "pcs",
    harga_satuan: 51060,
    diskon: 0,
  },
  {
    produk: "510-313 Spare part Machine Dojo/Lab Dojo ME/Hydro",
    deskripsi: "Plastic Hammer 6-50 Germany",
    kuantitas: 4,
    unit: "pcs",
    harga_satuan: 316350,
    diskon: 0,
  },
];

function numberWithCommas(x) {
  return x.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ".");
}
