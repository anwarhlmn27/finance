// ========= common render
const renderNomorMemo = function (data) {
  const container = $("<div>");
  const containerSpan = $("<span>").text(`${data.no}`).css("color", "#346ee0");
  const memoSpan = $("<small>").text(`${data.memo}`);

  container.append(containerSpan).append("<br/>").append(memoSpan);

  return container.wrap("<div><div>").parent().html();
};

const renderStatusOpenClose = function (data) {
  const container = $("<span>").text(data.status);

  if (data.status === "Unpaid") {
    container.css("color", "var(--red)");
  } else {
    container.css("color", "#20b799");
  }
  return container.wrap("<div></div>").parent().html();
};

const renderRupiah = function (nilai) {
  const container = $("<div>").text(`Rp. ${nilai}`).attr("class", "text-right");

  return container.wrap("<div></div>").parent().html();
};

const renderLampiran = function (data) {
  const container = $("<a>").attr("href", data.lampiran);
  const icon = $("<span>").attr("class", "fa fa-paperclip");
  container.append(icon);

  return container.wrap("<div></div>").parent().html();
};

const renderHyperLink = function (data) {
  const container = $("<a>").attr("href", "#").text(data);
  return container.wrap("<div></div>").parent().html();
};

const renderTag = function (data) {
  const container = $("<div>");

  for (var i = 0; i < data.tag.length; i++) {
    const tag = $("<span>").text(data.tag[i]).css("color", "#1a4cad");

    container.append(tag).append($("<br/>"));
  }
  return container.wrap("<div></div>").parent().html();
};
// ========== common render

$(function () {
  createTableBiaya();
  createTablePersetujuan();

  // Listen for tab shown event and recalculate the DataTable
  $('a[data-toggle="tab"]').on("shown.bs.tab", function (e) {
    var targetTab = $(e.target).attr("href"); // Get the target tab's href value
    // Find the DataTable in the target tab content and recalculate
    $(targetTab + " .table")
      .DataTable()
      .columns.adjust()
      .responsive.recalc();
  });
});


// ============== Table Biaya
function createTableBiaya() {
  $("#table-biaya").DataTable({
    data: biayaDatas,
    ordering: true,
    responsive: true,
    columns: [
      {
        data: "tanggal",
      },
      {
        orderable: false,
        searchable: false,
        data: null,
        render: function (data) {
          return renderLampiran(data);
        },
      },
      {
        data: null,
        render: function (data) {
          return renderNomorMemo(data);
        },
      },
      {
        data: null,
        render: function (data) {
          return renderHyperLink(data.kategori);
        },
      },
      {
        data: null,
        render: function (data) {
          return renderHyperLink(data.penerima);
        },
      },
      {
        data: null,
        render: function (data) {
          return renderStatusOpenClose(data);
        },
      },
      {
        data: null,
        render: function (data) {
          return renderRupiah(numberWithCommas(data.sisa_tagihan));
        },
      },
      {
        data: null,
        render: function (data) {
          return renderRupiah(numberWithCommas(data.total));
        },
      },
      {
        data: null,
        render: function (data) {
          return renderTag(data);
        },
      },
    ],
  });
}

const biayaDatas = [
  {
    tanggal: "12-03-2024",
    lampiran: "path/to/file",
    no: "Expense#foo/bar/34/2024",
    memo: "Lorem Ipsum Dolorem",
    kategori: "Honor Dosen Training",
    penerima: "TRAINER B(LCD)",
    status: "Paid",
    sisa_tagihan: 0,
    total: 800000,
    tag: ["TRLC"],
  },
];
// ============== Table Biaya

// ============== Table Biaya
function createTablePersetujuan() {
  $("#table-persetujuan").DataTable({
    data: persetujuanDatas,
    ordering: true,
    responsive: true,
    columns: [
      {
        data: "tanggal",
      },
      {
        orderable: false,
        searchable: false,
        data: null,
        render: function (data) {
          return renderLampiran(data);
        },
      },
      {
        data: null,
        render: function (data) {
          return renderNomorMemo(data);
        },
      },
      {
        data: null,
        render: function (data) {
          return renderHyperLink(data.kategori);
        },
      },
      {
        data: null,
        render: function (data) {
          return renderHyperLink(data.penerima);
        },
      },
      {
        data: null,
        render: function (data) {
          return renderHyperLink(data.status);
        },
      },
      {
        data: null,
        render: function (data) {
          return renderRupiah(numberWithCommas(data.sisa_tagihan));
        },
      },
      {
        data: null,
        render: function (data) {
          return renderRupiah(numberWithCommas(data.total));
        },
      },
      {
        data: null,
        render: function (data) {
          return renderTag(data);
        },
      },
      {
        data: null,
        render: function(data) {
          return renderTindakan(data);
        }
      }
    ],
  });
}

const renderTindakan = function(data) {
  const container = $("<div>")
  
  const button = $("<button>").css("position","relative");
  const icon = $("<span>")
  .attr("class","fas fa-comment-alt text-xl")
  .css("padding","4px 8px")
  .css("font-size","1.2rem")
  .css("color","gray");

  const count = $("<div>")
  // .attr("class","badge badge-danger")
  .css("position","absolute")
  .css("padding","4px 8px")
  .css("top","0")
  .css("bottom","0")
  .css("left","0")
  .css("right","0")
  .css("color","white")
  .css("font-size","smaller")
  .text(0);

  button.append(icon).append(count);

  container.append(button);
  return container.wrap("<div></div>").parent().html();
}

const persetujuanDatas = [
  {
    tanggal: "12-03-2024",
    lampiran: "path/to/file",
    no: "Expense#foo/bar/34/2024",
    memo: "Lorem Ipsum Dolorem",
    kategori: "Honor Dosen Training",
    penerima: "TRAINER B(LCD)",
    status: "Draft",
    sisa_tagihan: 0,
    total: 800000,
    tag: ["TRLC"],
  },
  {
    tanggal: "13-03-2024",
    lampiran: "path/to/file",
    no: "Expense#foo/bar/35/2024",
    memo: "Lorem Ipsum Dolorem",
    kategori: "Honor Dosen Training",
    penerima: "TRAINER B(LCD)",
    status: "Draft",
    sisa_tagihan: 0,
    total: 10000000,
    tag: ["TRLC"],
  },
];
// ============== Table Biaya

function numberWithCommas(x) {
  return x.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ".");
}
