let currentRowId = 1;

const tableName = "#produk_pembelian";

const kuantitasIdPrefix = "input-kuantitas-";
const hargaProdukIdPrefix = "harga-produk-";
const diskonProdukIdPrefix = "diskon-produk-";
const totalIdPrefix = "harga-jumlah-";

$(function () {
  $("#supplier_dropdown")
    .select2({
      data: data_supplier,
    })
    .on("select2:select", function (e) {
      $("#alamat_penagihan").text(e.params.data.alamat_penagihan);
    });

  $(".dropdown-select2").select2({
    data: dummy_data,
  });

  let table = $(tableName)
    .on("draw.dt", (e, settings) => {
      var api = new $.fn.dataTable.Api(settings);

      // Output the data for the visible rows to the browser's console
      // You might do something more useful with it!
      api.rows().every(function () {
        const selectedRow = this.node();
        const rowData = this.data();
        const selector = `#select-produk-${this.data().id}`;

        if (!drawnSelect2.includes(selector)) {
          renderSelectTableProduk(selector, rowData, selectedRow)
            .val(null)
            .trigger("change");
        }

        drawnSelect2.push(selector);
      });
    })
    .on("selectTable:selected", function (e, selectedRow, selectedVal) {
      const rowData = table.row(selectedRow).data();
      const selector = `#select-produk-${rowData.id}`;
      const selectorUnit = `#select-unit-${rowData.id}`;

      table.row(selectedRow).invalidate().draw();

      $(`#${hargaProdukIdPrefix}${rowData.id}`).val(selectedVal.unit[0].harga);
      console.log(rowData);

      renderSelectTableProduk(selector, rowData, selectedRow)
        .val(selectedVal.id)
        .trigger("change");

      renderSelectTableUnit(selectorUnit, selectedVal, selectedRow);

      table.row.add(newItems()).draw();
      currentRowId++;
    })
    .on("selectTable:selectUnit", function (e, selectedRow, selectedVal) {
      const rowData = table.row(selectedRow).data();
      $(`#${hargaProdukIdPrefix}${rowData.id}`).val(selectedVal.harga);
      calculateTotal(rowData);
    })
    .on(
      "input",
      `input[id^='${kuantitasIdPrefix}'],
       input[id^='${hargaProdukIdPrefix}'],
       input[id^='${diskonProdukIdPrefix}']`,
      function () {
        var row = table.row($(this).parents("tr"));
        calculateTotal(row.data());
      }
    )
    .on("click", "span.fas.fa-minus-circle", function () {
      var row = table.row($(this).parents("tr"));
      row.remove().draw();
    })
    .DataTable({
      paging: false,
      ordering: false,
      info: false,
      searching: false,
      columns: [
        {
          data: "data",
          render: function (data, type, row, meta) {
            return renderSelectProduk(data, type, row, meta);
          },
        },
        {
          data: "data",
          render: function (data, type, row, meta) {
            return renderTextArea(data, type, row, meta);
          },
        },
        {
          data: "data",
          render: function (data, type, row, meta) {
            return renderInputKuantitas(data, type, row, meta);
          },
        },
        {
          data: "data",
          render: function (data, type, row) {
            return renderSelectUnit(data, type, row);
          },
        },
        {
          data: "data",
          render: function (data, type, row) {
            return renderInputHarga(data, type, row);
          },
        },
        {
          data: "data",
          render: function (data, type, row) {
            return renderInputDiskon(data, type, row);
          },
        },
        {
          data: "data",
          render: function (data, type, row, meta) {
            return renderTextElement(data, type, row, meta);
          },
        },
        {
          data: "data",
          render: function (data, type, row) {
            return renderInputJumlah(data, type, row);
          },
        },
        {
          data: "data",
          render: (data, type, row) => {
            return renderIcon(data, type, row);
          },
        },
      ],
    });

  table.row.add(newItems()).draw();
  currentRowId++;
});

const newItems = function () {
  return { id: currentRowId, data: "", selected: false, selectedHarga: 0 };
};

const renderSelectProduk = function (data, type, row) {
  const selectElement = $("<select>")
    .attr("id", `select-produk-${row.id}`)
    .attr("class", "form-control w-100")
    .wrap("<div></div>")
    .parent()
    .html();

  return selectElement;
};

const renderSelectUnit = function (data, type, row, meta) {
  if (row.selected) {
    const selectElement = $("<select>")
      .attr("id", `select-unit-${row.id}`)
      .attr("class", "form-control w-100")
      .text("test")
      .wrap("<div></div>")
      .parent()
      .html();

    return selectElement;
  } else {
    return "";
  }
};

const renderTextArea = function (data, type, row, meta) {
  if (row.selected) {
    return $("<textarea>")
      .attr("class", "w-100")
      .attr("placeholder", "Masukan Keterangan")
      .wrap("<div></div>")
      .parent()
      .html();
  } else {
    return "";
  }
};

const renderTextElement = function (data, type, row) {
  if (row.selected) {
    return $("<input>")
      .attr("type", "text")
      .attr("class", "form-control")
      .wrap("<div></div>")
      .parent()
      .html();
  } else {
    return "";
  }
};

const renderInputKuantitas = function (data, type, row, meta) {
  if (row.selected) {
    return $("<input>")
      .attr("id", `${kuantitasIdPrefix}${row.id}`)
      .attr("type", "number")
      .attr("class", "input-kuantitas form-control")
      .wrap("<div></div>")
      .parent()
      .html();
  } else {
    return "";
  }
};

const renderInputHarga = function (data, type, row) {
  if (row.selected) {
    const container = $("<div>").attr("class", "input-group");

    const prepend = $("<div>").attr("class", "input-group-prepend");
    const prependLabel = $("<span>")
      .attr("class", "input-group-text font-weight-bold")
      .text("Rp");
    prepend.append(prependLabel);

    const input = $("<input>")
      .attr("id", `${hargaProdukIdPrefix}${row.id}`)
      .attr("class", "input-harga form-control text-right")
      .attr("type", "text")
      .attr("value", "0.00");

    container.append(prepend).append(input);

    return container.wrap("<div></div>").parent().html();
  } else {
    return "";
  }
};

const renderInputDiskon = function (data, type, row) {
  if (row.selected) {
    const container = $("<div>").attr("class", "input-group");

    const prepend = $("<div>").attr("class", "input-group-prepend");
    const prependLabel = $("<span>")
      .attr("class", "input-group-text font-weight-bold")
      .text("%");
    prepend.append(prependLabel);

    const input = $("<input>")
      .attr("id", `${diskonProdukIdPrefix}${row.id}`)
      .attr("class", "form-control")
      .attr("type", "number")
      .attr("value", "0");

    container.append(prepend).append(input);

    return container.wrap("<div></div>").parent().html();
  } else {
    return "";
  }
};

const renderIcon = function (data, type, row) {
  if (row.selected) {
    const spanElement = $("<span>")
      .attr("class", "fas fa-minus-circle")
      .css("font-size", "1.5rem")
      .wrap("<div></div>")
      .parent()
      .html();

    return spanElement;
  } else {
    return "";
  }
};

const renderSelectTableProduk = function (selector, rowData, selectedRow) {
  return $(selector)
    .select2({ data: produk_data, placeholder: "Pilih Produk" })
    .on("select2:select", function (e) {
      rowData.selected = true;
      $(tableName).trigger("selectTable:selected", [
        selectedRow,
        e.params.data,
      ]);
    });
};

const renderSelectTableUnit = function (selector, selectedProduk, selectedRow) {
  return $(selector)
    .select2({ data: selectedProduk.unit })
    .on("select2:select", function (e) {
      $(tableName).trigger("selectTable:selectUnit", [
        selectedRow,
        e.params.data,
      ]);
    });
};

const renderInputJumlah = function (data, type, row) {
  if (row.selected) {
    const container = $("<div>").attr("class", "input-group");

    const prepend = $("<div>").attr("class", "input-group-prepend");
    const prependLabel = $("<span>")
      .attr("class", "input-group-text font-weight-bold")
      .text("Rp");
    prepend.append(prependLabel);

    const input = $("<input>")
      .attr("id", `${totalIdPrefix}${row.id}`)
      .attr("class", "form-control text-right")
      .attr("type", "text")
      .attr("value", "0.00");

    container.append(prepend).append(input);

    return container.wrap("<div></div>").parent().html();
  } else {
    return "";
  }
};

const calculateTotal = function (rowData) {
  const inputKuantitas = $(`#${kuantitasIdPrefix}${rowData.id}`);
  const inputTotal = $(`#${totalIdPrefix}${rowData.id}`);
  const hargaSatuan = $(`#${hargaProdukIdPrefix}${rowData.id}`);
  const inputDiskon = $(`#${diskonProdukIdPrefix}${rowData.id}`);

  const kuantitas = parseInt($(inputKuantitas).val());
  const satuan = parseInt($(hargaSatuan).val());
  const diskon = parseInt($(inputDiskon).val());
  if (!isNaN(kuantitas) && !isNaN(satuan) && !isNaN(diskon)) {
    inputTotal.val(satuan * kuantitas - (satuan * diskon) / 100);
  } else {
    inputTotal.val(0);
  }
  console.log(rowData, inputKuantitas, inputTotal);
};

const drawnSelect2 = [];
// data
const data_supplier = [
  {
    id: 1,
    text: "Option 1",
    alamat_penagihan: "Alamat Penagihan 1",
  },
  {
    id: 2,
    text: "Option 2",
    alamat_penagihan: "Alamat Penagihan 2",
  },
  {
    id: 3,
    text: "Option 3",
    alamat_penagihan: "Alamat Penagihan 3",
  },
];

const dummy_data = [
  {
    id: 1,
    text: "Option 1",
  },
  {
    id: 2,
    text: "Option 2",
  },
  {
    id: 3,
    text: "Option 3",
  },
];

const produk_data = [
  { id: 1, text: "Produk 1", unit: [{ id: 1, text: "pcs", harga: 2500 }] },
  {
    id: 2,
    text: "Produk 2",
    unit: [
      { id: 1, text: "pcs", harga: 2500 },
      { id: 2, text: "Kg", harga: 5000 },
      { id: 3, text: "Ruangan", harga: 7500 },
    ],
  },
  {
    id: 3,
    text: "Produk 3",
    unit: [
      { id: 1, text: "Botol", harga: 2500 },
      { id: 2, text: "Kaleng", harga: 500 },
    ],
  },
];
