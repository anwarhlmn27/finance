$(function () {
  $("#email_dropdown").select2();
  $("#gudang").select2();
  $("#tag_dropdown").select2({
    placeholder: "Pilih tag",
  });

  createTable();

  $(document).on("change", '[id^="kuantitas"]', function () {
    // Your change event handling code here
    const element = $(this);
    const numericPart = element.attr("id").split("-");
    const valueSisa = pengirimanDatas[parseInt(numericPart[1])].sisa;
    
    const sisaElement = $(`#sisa-${numericPart[1]}-${numericPart[2]}`);
    
    const newValueSisa = valueSisa - parseInt(element.val());
    sisaElement.text(newValueSisa);
  });
});

const createTable = function () {
  const tableId = "#table-buat-faktur";

  $(tableId).DataTable({
    data: pengirimanDatas,
    ordering: false,
    responsive: false,
    scrollX: true,
    bLengthChange: false,
    searching: false,
    columns: [
      {
        data: null,
        render: function (data) {
          return renderProduk(data);
        },
      },
      {
        data: null,
        render: function (data) {
          return renderDeskripsi(data);
        },
      },
      {
        data: null,
        render: function (data, type, row, index) {
          return renderKuantitas(data, index);
        },
      },
      {
        data: null,
        render: function (data) {
          return renderUnit(data);
        },
      },
    ],
  });
};

const renderProduk = function (data) {
  const container = $("<div>").css("min-width", "200px");
  const input = $("<input>")
    .attr("type", "text")
    .attr("value", data.produk)
    .attr("disabled", "");

  container.append(input);

  return container.wrap("<div><div>").parent().html();
};

const renderDeskripsi = function (data) {
  const container = $("<div>").css("min-width", "200px");
  const textArea = $("<textarea>").append(data.deskripsi);

  container.append(textArea);
  return container.wrap("<div><div>").parent().html();
};

const renderKuantitas = function (data, index) {
  const container = $("<div>").css("min-width", "200px");
  const inputKuantitas = $("<input>")
    .attr("id", `kuantitas-${index.row}-${index.col}`)
    .attr("type", "number")
    .attr("min","0")
    .attr("value", data.kuantitas);

  const pSisa = $("<div>").attr("class", "small").append("Sisa :");
  const tSisa = $("<span>")
    .attr("id", `sisa-${index.row}-${index.col}`)
    .append(data.sisa);
  pSisa.append(tSisa);

  const pDraft = $("<div>")
    .attr("class", "small")
    .append(`di Draft : ${data.draft}`);

  container.append(inputKuantitas).append(pSisa).append(pDraft);
  return container.wrap("<div><div>").parent().html();
};

const renderUnit = function (data) {
  const container = $("<div>").css("min-width", "200px");
  const inputUnit = $("<input>")
    .attr("type", "text")
    .attr("value", data.unit)
    .attr("disabled", "");

  container.append(inputUnit);

  return container.wrap("<div><div>").parent().html();
};

// ======================= Data
const pengirimanDatas = [
  {
    produk:
      "510-212 Biaya Meal, Drink peserta Training umum (Text yang panjang disembunyikan kecuali masih muat)",
    deskripsi: "Bisa diisi User?",
    kuantitas: 0,
    sisa: 11,
    draft: 0,
    unit: "pcs",
  },
  {
    produk:
      "510-212 Biaya Meal, Drink peserta Training umum (Text yang panjang disembunyikan kecuali masih muat)",
    deskripsi: "Bisa diisi User?",
    kuantitas: 0,
    sisa: 25,
    draft: 0,
    unit: "pcs",
  },
  {
    produk:
      "510-212 Biaya Meal, Drink peserta Training umum (Text yang panjang disembunyikan kecuali masih muat)",
    deskripsi: "Bisa diisi User?",
    kuantitas: 0,
    sisa: 30,
    draft: 0,
    unit: "pcs",
  },
];
