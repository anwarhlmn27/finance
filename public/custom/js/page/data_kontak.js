let dataTable = null;

$(function () {
  dataTable = $("#table-kontak").DataTable({
    data: kontakDatas,
    paging: false,
    ordering: false,
    info: false,
    searching: false,
    columns: [
      {
        data: null,
        render: function (data, type, row, meta) {
          return renderCheckBox();
        },
      },
      {
        data: "nama",
      },
      {
        data: "perusahaan",
      },
      {
        data: "alamat",
      },
      {
        data: "email",
      },
      {
        data: "hp",
      },
      {
        data: null,
        render: function (data, type, row, meta) {
          return renderSaldo(data.saldo);
        },
      },
    ],
  });

  $(".filter-kontak").on("click", function () {
    $(".filter-kontak").removeClass("selected");

    const selEl = $(this);
    selEl.addClass("selected");

    console.log(kontakDatas);
    let newData = kontakDatas;
    switch (selEl.attr("id")) {
      case "pelanggan":
      case "supplier":
      case "karyawan":
      case "lainnya":
        newData = kontakDatas.filter(
          (el) => el.tipe === selEl.attr("id")
        );
        break;
    }

    dataTable.clear();
    dataTable.rows.add(newData);
    dataTable.draw();
  });
});

const renderCheckBox = function () {
  return $("<input>")
    .attr("type", "checkbox")
    .wrap("<div></div>")
    .parent()
    .html();
};

const renderSaldo = function (nilai) {
  const container = $("<div>").text(`Rp. ${nilai}`).attr("class", "text-right");

  return container.wrap("<div></div>").parent().html();
};

const kontakDatas = [
  {
    nama: "Dummy Nama 1",
    perusahaan: "",
    alamat: "Jln. Dummy 1",
    email: "",
    hp: "",
    tipe: "pelanggan",
    saldo: 0,
  },
  {
    nama: "Dummy Nama 2",
    perusahaan: "",
    alamat: "Jln. Dummy 2",
    email: "",
    hp: "",
    tipe: "pelanggan",
    saldo: 0,
  },
  {
    nama: "Dummy Nama 3",
    perusahaan: "",
    alamat: "Jln. Dummy 3",
    email: "",
    hp: "",
    tipe: "pelanggan",
    saldo: 0,
  },
  {
    nama: "Dummy Nama 4",
    perusahaan: "PT. Dummy 1",
    alamat: "Jln. Dummy 4",
    email: "email1@gmail.com",
    hp: "",
    tipe: "supplier",
    saldo: 0,
  },
  {
    nama: "Dummy Nama 5",
    perusahaan: "PT. Dummy 2",
    alamat: "Jln. Dummy 5",
    email: "email1@gmail.com",
    hp: "",
    tipe: "supplier",
    saldo: 0,
  },
  {
    nama: "Dummy Nama 6",
    perusahaan: "",
    alamat: "",
    email: "",
    hp: "111111111111",
    tipe: "karyawan",
    saldo: 0,
  },
  {
    nama: "Dummy Nama 7",
    perusahaan: "",
    alamat: "",
    email: "",
    hp: "111111111112",
    tipe: "karyawan",
    saldo: 0,
  },
  {
    nama: "Dummy Nama 8",
    perusahaan: "",
    alamat: "",
    email: "",
    hp: "111111111113",
    tipe: "karyawan",
    saldo: 0,
  },
  {
    nama: "Dummy Nama 9",
    perusahaan: "",
    alamat: "",
    email: "",
    hp: "111111111114",
    tipe: "karyawan",
    saldo: 0,
  },
  {
    nama: "Dummy Nama 10",
    perusahaan: "",
    alamat: "",
    email: "",
    hp: "111111111115",
    tipe: "karyawan",
    saldo: 0,
  },
  {
    nama: "Dummy Nama 11",
    perusahaan: "",
    alamat: "",
    email: "",
    hp: "",
    tipe: "lainnya",
    saldo: 0,
  },
  {
    nama: "Dummy Nama 12",
    perusahaan: "Ormas Dummy 3",
    alamat: "",
    email: "",
    hp: "",
    tipe: "lainnya",
    saldo: 0,
  },
  {
    nama: "Dummy Nama 13",
    perusahaan: "Ormas Dummy 1",
    alamat: "",
    email: "",
    hp: "",
    tipe: "lainnya",
    saldo: 0,
  },
  {
    nama: "Dummy Nama 14",
    perusahaan: "Ormas Dummy 2",
    alamat: "",
    email: "",
    hp: "",
    tipe: "lainnya",
    saldo: 0,
  },
];
