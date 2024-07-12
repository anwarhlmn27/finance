$(function () {
  $("#check_beli").prop("checked", false);
  $("#check_jual").prop("checked", false);
  $("#check_monitor").prop("checked", false);
});

$("#check_jual").change(function (val) {
  const containerJual = $("#container_jual");
  const inputHargaJual = $("#input_harga_jual");
  const inputAkunJual = $("#input_akun_jual");
  const inputPajakJual = $("#input_pajak_jual");

  inputHargaJual.attr("disabled", !val.target.checked);
  inputAkunJual.attr("disabled", !val.target.checked);
  inputPajakJual.attr("disabled", !val.target.checked);

  if (val.target.checked) {
    containerJual.css("opacity", "1");
  } else {
    containerJual.css("opacity", "0.3");
  }
});

$("#check_beli").change(function (val) {
  const containerBeli = $("#container_beli");
  const inputHargaBeli = $("#input_harga_beli");
  const inputAkunBeli = $("#input_akun_beli");
  const inputPajakBeli = $("#input_pajak_beli");

  inputHargaBeli.attr("disabled", !val.target.checked);
  inputAkunBeli.attr("disabled", !val.target.checked);
  inputPajakBeli.attr("disabled", !val.target.checked);

  if (val.target.checked) {
    containerBeli.css("opacity", "1");
  } else {
    containerBeli.css("opacity", "0.3");
  }
});

$("#check_monitor").change(function (val) {
  const containerMonitor = $("#container_monitor");
  const inputBatasMinimum = $("#batas_minimum");
  const inputAkunDefault = $("#input_akun_default");

  inputBatasMinimum.attr("disabled", !val.target.checked);
  inputAkunDefault.attr("disabled", !val.target.checked);
  if (val.target.checked) {
    containerMonitor.css("opacity", "1");
  } else {
    containerMonitor.css("opacity", "0.3");
  }
});

$("#upload_gambar").click(function () {
  // creating input on-the-fly
  var input = $(document.createElement("input"));
  input.attr("type", "file");
  input.attr("accept", "image/*");

  // add onchange handler if you wish to get the file :)

  input.trigger("click"); // opening dialog

  input.change(function () {
    var inputTemp = this;
    var url = $(inputTemp).val();
    var ext = url.substring(url.lastIndexOf(".") + 1).toLowerCase();

    if (
      inputTemp.files &&
      inputTemp.files[0] &&
      (ext == "png" || ext == "jpeg" || ext == "jpg")
    ) {
      var reader = new FileReader();

      reader.onload = function (e) {
        $("#img_upload").css("display", "block");
        $("#img_upload").attr("src", e.target.result);
      };
      reader.readAsDataURL(inputTemp.files[0]);
    }
  });

  return false; // avoiding navigation
});

$(".dropify").dropify({
  messages: {
    default: "Drag and drop a file here or click",
    replace: "Drag and drop or click to replace",
    remove: "Remove",
    error: "Ooops, something wrong appended.",
  },
  error: {
    fileSize: "The file size is too big (1M max).",
  },
});
