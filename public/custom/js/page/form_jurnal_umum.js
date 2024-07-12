let currentRowId = 0;
const drawnSelect2 = [];
const tableName = "#table-jurnal";
let dataTable = null;

const inputKreditPrefix = "input-kredit-";
let totalKredit = 0.0;

const inputDebitPrefix = "input-debit-";
let totalDebit = 0.0;

let arrayDebitKredit = [];

$(function () {
  $(".dropify").dropify({
    messages: {
      default: "Tarik file ke sini, atau pilih file",
      replace: "Tarik atau pilih file untuk mengganti",
      remove: "Hapus",
      error: "Ooops, something wrong appended.",
    },
    error: {
      fileSize: "File terlalu besar (maksimal 10M).",
    },
  });

  $("#add_row").on("click", function () {
    dataTable.row.add(newItems()).draw();
    currentRowId++;
  });

  dataTable = $(tableName)
    .on("draw.dt", (e, settings) => {
      var api = new $.fn.dataTable.Api(settings);

      // Output the data for the visible rows to the browser's console
      // You might do something more useful with it!
      api.rows().every(function () {
        const selectedRow = this.node();
        const rowData = this.data();
        const selector = `#select-akun-${this.data().id}`;

        if (!drawnSelect2.includes(selector)) {
          renderSelect2Table(selector, rowData, selectedRow)
            .val(null)
            .trigger("change");
        }

        drawnSelect2.push(selector);
      });
    })
    .on("selectTable:selected", function (e, selectedRow, selectedVal) {
      // If you need to do something after selected
    })
    .on("click", "span.fa.fa-minus", function () {
      var row = dataTable.row($(this).parents("tr"));
      row.remove().draw();
    })
    .on("input", `.input-kredit`, function () {
      var row = dataTable.row($(this).parents("tr"));
      arrayDebitKredit[row.index()].kredit = $(this).val();

      let total = 0;
      arrayDebitKredit.forEach(function (el) {
        if (!isNaN(el.kredit)) {
          total += parseFloat(el.kredit);
        } else {
          total += 0;
        }
      });

      if (!isNaN(total)) {
        totalKredit = total;
      } else {
        totalKredit = 0;
      }

      $("#total-kredit").text(totalKredit);
    })
    .on("input", `.input-debit`, function () {
      var row = dataTable.row($(this).parents("tr"));
      arrayDebitKredit[row.index()].debit = $(this).val();

      let total = 0;
      arrayDebitKredit.forEach(function (el) {
        if (!isNaN(el.debit)) {
          total += parseFloat(el.debit);
        } else {
          total += 0;
        }
      });

      if (!isNaN(total)) {
        totalDebit = total;
      } else {
        totalDebit = 0;
      }

      $("#total-debit").text(totalDebit);
    })
    .DataTable({
      paging: false,
      ordering: false,
      searching: false,
      bInfo: false,
      responsive: false,
      columns: [
        {
          data: "data",
          render: function (data, type, row, meta) {
            return renderSelectAkun(data, type, row, meta);
          },
        },
        {
          data: "data",
          render: function (data, type, row, meta) {
            return renderTextArea();
          },
        },
        {
          data: "data",
          render: function (data, type, row, meta) {
            return renderDebit();
          },
        },
        {
          data: "data",
          render: function (data, type, row, meta) {
            return renderKredit(data, type, row, meta);
          },
        },
        {
          data: "data",
          className: "text-center",
          render: function (data, type, row, meta) {
            return renderRemoveButton();
          },
        },
      ],
    });

  dataTable.row.add(newItems()).draw();
  currentRowId++;

  dataTable.row.add(newItems()).draw();
  currentRowId++;
});

const reCalculateTotalKredit = function () {
  let datas = dataTable.rows().data();

  $.each(datas, function (key, value) {
    console.log(key, value);
  });
};

const newItems = function () {
  arrayDebitKredit.push({
    id: currentRowId,
    kredit: 0,
    debit: 0,
  });

  return {
    id: currentRowId,
    kredit: 0,
  };
};

const renderSelectAkun = function (data, type, row) {
  const selectElement = $("<select>")
    .attr("id", `select-akun-${row.id}`)
    .attr("class", "form-control w-100")
    .wrap("<div></div>")
    .parent()
    .html();

  return selectElement;
};

const renderDebit = function () {
  return $("<input>")
    .prop("class", "input-debit text-right")
    .attr("type", "number")
    .attr("step", "0.01")
    .attr("value", "0.00")
    .wrap("<div></div>")
    .parent()
    .html();
};

const renderKredit = function (data, type, row, meta) {
  return $("<input>")
    .attr("class", "input-kredit text-right")
    .attr("type", "number")
    .attr("step", "0.01")
    .attr("value", "0.00")
    .wrap("<div></div>")
    .parent()
    .html();
};

const renderTextArea = function (data, type, row, meta) {
  return $("<textarea>")
    .attr("class", "w-100")
    .attr("placeholder", "Masukan Keterangan")
    .wrap("<div></div>")
    .parent()
    .html();
};

const renderRemoveButton = function () {
  return $("<span>")
    .attr("class", "fa fa-minus text-primary")
    .css("font-size", "large")
    .wrap("<div></div>")
    .parent()
    .html();
};

const renderSelect2Table = function (selector, rowData, selectedRow) {
  return $(selector)
    .select2({ data: data_akun, placeholder: "Pilih Akun" })
    .on("select2:select", function (e) {
      rowData.selected = true;
      $(tableName).trigger("selectTable:selected", [
        selectedRow,
        e.params.data,
      ]);
    });
};

const data_akun = [
  {
    id: 1,
    text: "Akun 1",
  },
  {
    id: 2,
    text: "Akun 2",
  },
  {
    id: 3,
    text: "Akun 3",
  },
  {
    id: 4,
    text: "Akun 4",
  },
];
