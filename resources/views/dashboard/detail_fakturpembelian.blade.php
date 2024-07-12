@extends('layout.app')
@section('content')
<!-- ========================== Konten =================================== -->
<div class="main-content">
        <div class="page-content" style="padding-bottom: 0px">
          <div class="container-fluid">
            <h2>Faktur Pembelian #PV#240386</h2>
          </div>
        </div>

        <div class="card" style="background-color: white">
          <div class="card-body">
            <div class="container-fluid" style="font-size: 0.7rem">
              <div class="row">
                <div class="col-12 col-md-4 col-lg-4">
                  <div class="row">
                    <div class="col-sm-12 col-md-5 text-secondary">
                      Supplier
                    </div>
                    <div class="col-sm-12 col-md-7 text-secondary">
                      CV. Nitashi Rizkada
                    </div>
                  </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                  <div class="row">
                    <div class="col-sm-12 col-md-5 text-secondary">
                      Tgl. jatuh tempo
                    </div>
                    <div class="col-sm-12 col-md-7 text-secondary">
                      <span class="badge badge-secondary">
                        nitashikasdi@yahoo.co.id
                      </span>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 text-right">
                  <span
                    class="text-nowrap font-weight-bold"
                    style="font-size: 1.3em"
                  >
                    Sisa tagihan Rp. 8.507.040
                  </span>
                  <br />
                  <span style="color: rgb(52, 110, 224)">
                    Lihat Journal Entry
                  </span>
                </div>
              </div>

              <hr />

              <div class="row">
                <div class="col-sm-12 col-md-4">
                  <div class="row">
                    <div class="col-sm-12 col-md-5 text-secondary">
                      Alamat Supplier
                    </div>
                    <div class="col-sm-12 col-md-7">
                      Glodok Jaya Building Lt. 4 blok C no.02 Jakarta Barat
                    </div>
                  </div>

                  <div class="row mt-1">
                    <div class="col-sm-12 col-md-5 text-secondary">
                      Alamat Pengiriman
                    </div>
                    <div class="col-sm-12 col-md-7">
                      Glodok Jaya Building Lt. 4 blok C no.02 Jakarta Barat
                    </div>
                  </div>
                </div>

                <div class="col-sm-12 col-md-3">
                  <div class="row">
                    <div class="col-sm-12 col-md-6 text-secondary">
                      Tgl. transaksi
                    </div>
                    <div class="col-sm-12 col-md-6">08/05/2024</div>
                  </div>

                  <div class="row mt-1">
                    <div class="col-sm-12 col-md-6 text-secondary">
                      Tgl. jatuh tempo
                    </div>
                    <div class="col-sm-12 col-md-6">07/06/2024</div>
                  </div>

                  <div class="row mt-1">
                    <div class="col-sm-12 col-md-6 text-secondary">
                      Syarat Pembayaran
                    </div>
                    <div class="col-sm-12 col-md-6">Net 30</div>
                  </div>

                  <div class="row mt-1">
                    <div class="col-sm-12 col-md-6 text-secondary">
                      Tgl. pengiriman
                    </div>
                    <div class="col-sm-12 col-md-6">08/05/2024</div>
                  </div>

                  <div class="row mt-1">
                    <div class="col-sm-12 col-md-6 text-secondary">
                      Kirim melalui
                    </div>
                    <div class="col-sm-12 col-md-6">-</div>
                  </div>

                  <div class="row mt-1">
                    <div class="col-sm-12 col-md-6 text-secondary">
                      No. pelacakan
                    </div>
                    <div class="col-sm-12 col-md-6">-</div>
                  </div>
                </div>

                <div class="col-sm-12 col-md-5">
                  <div class="row">
                    <div class="col-sm-12 col-md-4 text-secondary">
                      No transaksi
                    </div>
                    <div class="col-sm-12 col-md-8">
                      Purchase Invoice #PV#240386
                    </div>
                  </div>

                  <div class="row mt-1">
                    <div class="col-sm-12 col-md-4 text-secondary">
                      No Referensi
                    </div>
                    <div class="col-sm-12 col-md-4">-</div>
                  </div>

                  <div class="row mt-1">
                    <div class="col-sm-12 col-md-4 text-secondary">
                      No Pemesanan
                    </div>
                    <div class="col-sm-12 col-md-8">
                      Purchase Order #PO/BAAK/19/2024
                    </div>
                  </div>

                  <div class="row mt-1">
                    <div class="col-sm-12 col-md-4 text-secondary">Tag</div>
                    <div class="col-sm-12 col-md-8">
                      <span class="p-1" style="background-color: #d7d7d7">
                        BAAK
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="w-full mt-3">
              <table
                id="table-detail"
                class="table display responsive table-striped nowrap"
                style="color: black"
                width="100%"
              >
                <thead>
                  <tr
                    class="font-weight-bold"
                    style="border-bottom: 3px solid gray"
                  >
                    <td>Produk</td>
                    <td>Deskripsi</td>
                    <td>Kuantitas</td>
                    <td>Unit</td>
                    <td class>Harga satuan</td>
                    <td>Diskon</td>
                    <td class="text-right">Jumlah</td>
                  </tr>
                </thead>
                <tbody></tbody>
              </table>
            </div>

            <hr />

            <div class="w-full mt-3">
              <div class="row">
                <div class="col-12 col-md-6">
                  <div class="w-100">
                    <div class="row">
                      <div class="col-12 col-md-8 col-lg-6">
                        <div class="form-group">
                          <label for="pesan" class="col-form-label">
                            Pesan
                          </label>
                          <textarea id="pesan" class="form-control" rows="3">
                          </textarea>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-12 col-md-8 col-lg-6">
                        <div class="form-group">
                          <label for="pesan" class="col-form-label">
                            Memo
                          </label>
                          <textarea id="pesan" class="form-control" rows="3">
                          </textarea>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-12 col-md-8 col-lg-6">
                        <div class="form-group">
                          <label for="memo"> Lampiran </label>
                          <div class="custom-file">
                            <input
                              type="file"
                              class="custom-file-input"
                              id="customFile"
                            />
                            <label class="custom-file-label" for="customFile">
                              Choose file
                            </label>
                            <small>
                              File dapat berupa Excel, Word, PDF, JPG, PNG, atau
                              ZIP (maksimum 5 file dan 10 MB per file)
                            </small>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-12 col-md-4 col-lg-6"></div>
                </div>

                <div class="col-12 col-md-6">
                  <div class="w-100">
                    <div class="row h6">
                      <div class="col-12 col-sm-6">
                        <span class="font-weight-bold">Subtotal</span>
                      </div>
                      <div class="col-12 col-sm-6 text-right">
                        <span class="font-weight-bold">
                          Rp <span id="subtotal"></span>
                        </span>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-12">
                        <div class="form-group">
                          <label for="pesan" class="col-form-label">
                            Pesan
                          </label>
                          <textarea id="pesan" class="form-control" rows="3">
                          </textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- ======================== Konten ======================================== -->