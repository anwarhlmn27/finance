const tableId = `#table-list-beli`;

$(function () {
    createTableFakturBeli();
    createTablePengiriman();
    createTablePemesanan();
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

// ========= common render
const renderNomorMemoFaktur = function (data) {
    const container = $("<div>");
    const containerSpan = $("<a>")
        .text(`${data.no}`)
        .css("color", "#346ee0")
        .attr("href", "{{url('detail_faktur')}}");
    const memoSpan = $("<small>").text(`${data.memo}`);

    container.append(containerSpan).append("<br/>").append(memoSpan);

    return container.wrap("<div><div>").parent().html();
};

// ========= common render
const renderNomorMemoPengiriman = function (data) {
    const container = $("<div>");
    const containerSpan = $("<a>")
        .text(`${data.no}`)
        .css("color", "#346ee0")
        .attr("href", "form_buat_pengiriman_pembelian.html");
    const memoSpan = $("<small>").text(`${data.memo}`);

    container.append(containerSpan).append("<br/>").append(memoSpan);

    return container.wrap("<div><div>").parent().html();
};

// ========= common render
const renderNomorMemoPesan = function (data) {
    const container = $("<div>");
    const containerSpan = $("<a>")
        .text(`${data.no}`)
        .css("color", "#346ee0")
        .attr("href", "form_penerimaan.html");
    const memoSpan = $("<small>").text(`${data.memo}`);

    container.append(containerSpan).append("<br/>").append(memoSpan);

    return container.wrap("<div><div>").parent().html();
};

// ========= common render
const renderNomorMemoPo = function (data) {
    const container = $("<div>");
    const containerSpan = $("<a>")
        .text(`${data.no}`)
        .css("color", "#346ee0")
        .attr("href", "pengajuan_po.html");
    const memoSpan = $("<small>").text(`${data.memo}`);

    container.append(containerSpan).append("<br/>").append(memoSpan);

    return container.wrap("<div><div>").parent().html();
};

const renderStatus = function (data) {
    return $("<span>")
        .text(data.status)
        .attr("class", "badge badge-secondary")
        .wrap("<div></div>")
        .parent()
        .html();
};

const renderStatusOpenClose = function (data) {
    const container = $("<span>").text(data.status);

    if (data.status === "Open") {
        container.attr("class", "badge badge-warning");
    } else {
        container.attr("class", "badge badge-success");
    }
    return container.wrap("<div></div>").parent().html();
};

const renderTag = function (data) {
    const container = $("<div>");

    for (var i = 0; i < data.tag.length; i++) {
        const tag = $("<span>")
            .text(data.tag[i])
            .attr("class", "badge badge-secondary");

        container.append(tag).append($("<br/>"));
    }
    return container.wrap("<div></div>").parent().html();
};
// ========= common render

// ========= tabel faktur beli
function createTableFakturBeli() {
    $("#table-list-faktur-beli").DataTable({
        data: fakturDatas,
        ordering: true,
        responsive: true,
        columns: [
            {
                data: "tanggal",
            },
            {
                data: null,
                render: function (data) {
                    return renderNomorMemoFaktur(data);
                },
            },
            {
                data: "supplier",
            },
            {
                data: "tgl_jatuh_tempo",
            },
            {
                data: null,
                render: function (data) {
                    return renderStatus(data);
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

const renderRupiah = function (nilai) {
    const container = $("<div>")
        .text(`Rp. ${nilai}`)
        .attr("class", "text-right");

    return container.wrap("<div></div>").parent().html();
};

const fakturDatas = [
    {
        tanggal: "14/03/2024",
        no: "PE01-102-3012",
        memo: "Lorem Ipsum Dolorem",
        supplier: "PT. Lorem Ipsum",
        tgl_jatuh_tempo: "13/04/2024",
        status: "draft",
        sisa_tagihan: 0,
        total: 2672800,
        tag: ["TRLC"],
    },
    {
        tanggal: "15/03/2024",
        no: "PE03-402-3012",
        memo: "Dorol Sit Amet",
        supplier: "PT. Dorol Sit Amet",
        tgl_jatuh_tempo: "13/04/2024",
        status: "draft",
        sisa_tagihan: 0,
        total: 15000000,
        tag: ["TRLC"],
    },
    {
        tanggal: "20/04/2024",
        no: "PE03-402-3012",
        memo: "Consecteur Adipisicing elit",
        supplier: "PT. consecteur elit",
        tgl_jatuh_tempo: "13/04/2024",
        status: "draft",
        sisa_tagihan: 0,
        total: 12387642,
        tag: ["TRLC"],
    },
];
// ========= tabel faktur beli

// ========= tabel Pengiriman
function createTablePengiriman() {
    $("#table-pengiriman").DataTable({
        data: pengirimans,
        ordering: true,
        responsive: true,
        columns: [
            {
                data: "tanggal",
            },
            {
                data: null,
                render: function (data) {
                    return renderNomorMemoPengiriman(data);
                },
            },
            {
                data: "supplier",
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
                    return renderTag(data);
                },
            },
        ],
    });
}

const pengirimans = [
    {
        tanggal: "12/03/2024",
        no: "Delivery Dummy",
        memo: "Dummy Delivery",
        supplier: "Percetakan Dummy",
        status: "Open",
        tag: ["TRLC"],
    },
    {
        tanggal: "11/04/2024",
        no: "Delivery Dummy 2",
        memo: "Dummy Delivery 2",
        supplier: "Rumah Makan Dummy",
        status: "Open",
        tag: ["TRLC"],
    },
    {
        tanggal: "12/03/2024",
        no: "Delivery Dummy",
        memo: "Dummy Delivery",
        supplier: "PT. Dummy",
        status: "Closed",
        tag: ["TRLC"],
    },
];
// ========= tabel Pengiriman

// ========= tabel pemesanan pembelian
function createTablePemesanan() {
    $("#table-pemesanan").DataTable({
        data: pemesanans,
        ordering: true,
        responsive: true,
        columns: [
            {
                data: "tanggal",
            },
            {
                data: null,
                render: function (data) {
                    return renderNomorMemoPesan(data);
                },
            },
            {
                data: "supplier",
            },
            {
                data: "tgl_jatuh_tempo",
            },
            {
                data: null,
                render: function (data) {
                    return renderStatus(data);
                },
            },
            {
                data: null,
                render: function (data) {
                    return renderRupiah(numberWithCommas(data.jumlah_dp));
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

const pemesanans = [
    {
        tanggal: "12/03/2024",
        no: "PE03-402-3012",
        memo: "Lorem Ipsum Dolorem",
        supplier: "PT. Lorem Ipsum",
        tgl_jatuh_tempo: "13/04/2024",
        status: "draft",
        jumlah_dp: 0,
        total: 520000,
        tag: ["TRLC"],
    },
    {
        tanggal: "11/03/2024",
        no: "PE03-402-3012",
        memo: "Sit Amet Ipsum Dolorem",
        supplier: "PT. Simet Amet",
        tgl_jatuh_tempo: "12/04/2024",
        status: "draft",
        jumlah_dp: 0,
        total: 9335000,
        tag: ["TRLC"],
    },
];
// ========= tabel pemesanan pembelian

// ========= tabel persetujuan
function createTablePersetujuan() {
    $("#table-list-beli").DataTable({
        data: persetujuanDatas,
        ordering: true,
        responsive: true,
        columns: [
            {
                data: "tanggal",
            },
            {
                data: null,
                render: function (data) {
                    return renderNomorMemoPo(data);
                },
            },
            {
                data: "supplier",
            },
            {
                data: "tgl_kedaluwarsa",
            },
            {
                data: null,
                render: function (data) {
                    return renderStatus(data);
                },
            },
            {
                data: null,
                render: function (data) {
                    return renderTotal(data);
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
                render: function (data) {
                    return renderAction(data);
                },
            },
        ],
    });
}

const renderTotal = function (data) {
    return $("<span>")
        .text(numberWithCommas(data.total))
        .wrap("<div></div>")
        .parent()
        .html();
};

const renderAction = function (data) {
    const container = $("<div>").attr(
        "class",
        "container-fluid d-flex flex-nowrap align-items-center"
    );

    const button = $("<buttton>")
        .attr("class", "btn btn-outline-primary btn-sm")
        .text("setujui");

    const iconClock = $("<span>").attr("class", "far fa-clock ml-3");

    const containerChat = $("<div>").attr(
        "class",
        "position-relative noti-icon"
    );
    const iconChat = $("<span>").attr("class", "far fa-comment-alt ml-3");
    const badgeInfo = $("<span>")
        .attr("class", "badge badge-primary badge-pill")
        .css("position", "absolute")
        .css("top", "-6px")
        .css("right", "-10px")
        .css("font-size", ".5rem")
        .text(0);

    containerChat.append(iconChat).append(badgeInfo);

    container.append(button).append(iconClock).append(containerChat);
    return container.wrap("<div></div>").parent().html();
};

const persetujuanDatas = [
    {
        tanggal: "14/03/2024",
        no: "PE03-402-3012",
        memo: "Lorem Ipsum Dolorem",
        supplier: "PT. Lorem Ipsum",
        tgl_kedaluwarsa: "13/04/2024",
        status: "draft",
        total: "3238200",
        tag: ["TRLC"],
    },
    {
        tanggal: "15/03/2024",
        no: "PE03-402-3012",
        memo: "Dorol Sit Amet",
        supplier: "PT. Dorol Sit Amet",
        tgl_kedaluwarsa: "14/04/2024",
        status: "draft",
        total: "1239200",
        tag: ["SARP", "NON AKADEMIK"],
    },
    {
        tanggal: "20/04/2024",
        no: "PE03-402-3012",
        memo: "Consecteur Adipisicing elit",
        supplier: "PT. consecteur elit",
        tgl_kedaluwarsa: "20/05/2024",
        status: "draft",
        total: "3238200",
        tag: ["TRLC", "LOREM", "IPSUM"],
    },
];
// ========= tabel persetujuan

function numberWithCommas(x) {
    return x.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ".");
}
