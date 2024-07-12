@extends('layout.app')
@section('content')

<div class="main-content">
        <div class="page-content">
          <div class="container-fluid">
            <!-- ========================= Tambah di dalam ini ==================================== -->
            <form>
              <div class="row align-items-end">
                <div class="col-md-4">
                  <div class="container-fluid">
                    <div class="row">
                      Supplier
                      <select id="supplier_dropdown"></select>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  Email
                  <input type="text" class="w-100" />
                </div>
                <div class="col-md-4">
                  <input type="checkbox" /> Info Pengiriman
                </div>
              </div>

              <div class="row mt-4">
                <div class="col-md-3">
                  <div class="container-fluid">
                    <div class="row font-bold">
                      <strong>Alamat Penagihan</strong>
                    </div>
                    <div class="row">
                      <textarea
                        id="alamat_penagihan"
                        rows="5"
                        class="w-100"
                      ></textarea>
                    </div>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-12">
                        <strong>Tgl. Transaksi</strong>
                      </div>
                      <div class="col-12">
                        <input type="date" class="w-100" />
                      </div>
                    </div>

                    <div class="row mt-4">
                      <div class="col-12">
                        <strong>Tgl. Jatuh Tempo</strong>
                      </div>
                      <div class="col-12">
                        <input type="date" class="w-100" />
                      </div>
                    </div>

                    <div class="row mt-4">
                      <div class="col-12">
                        <strong>Syarat Pembayaran</strong>
                      </div>
                      <div class="col-12">
                        <select class="dropdown-select2 w-100"></select>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-12">
                        <strong>No. Transaksi</strong>
                        <span
                          class="fa fa-cog text-muted"
                          style="cursor: pointer"
                          data-toggle="modal"
                          data-target="#exampleModalCenter"
                        ></span>
                      </div>
                      <div class="col-12">
                        <input type="text" class="w-100" />
                      </div>
                    </div>

                    <div class="row mt-4">
                      <div class="col-12 text-nowrap">
                        <strong>Nomor Referensi Supplier</strong>
                      </div>
                      <div class="col-12">
                        <input type="text" class="w-100" />
                      </div>
                    </div>

                    <div class="row mt-4">
                      <div class="col-12">
                        <strong>Gudang</strong>
                      </div>
                      <div class="col-12">
                        <select class="dropdown-select2 w-100"></select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-12">
                        <strong>Tag</strong>
                      </div>
                      <div class="col-12">
                        <select class="dropdown-select2 w-100"></select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row mt-4">
                <div class="col text-right w-100">
                  <input type="checkbox" /> Harga Termasuk Pajak
                </div>
              </div>

              <div class="row mt-2">
                <div class="col-12 overflow-auto">
                  <table
                    id="produk_pembelian"
                    class="custom-table table table-striped w-100"
                  >
                    <thead>
                      <tr>
                        <th style="min-width: 250px">Produk</th>
                        <th style="min-width: 150px">Deskripsi</th>
                        <th style="min-width: 50px">Kuantitas</th>
                        <th style="min-width: 100px">Unit</th>
                        <th style="min-width: 200px; text-align: right">
                          Harga Satuan
                        </th>
                        <th style="min-width: 150px">Diskon</th>
                        <th style="min-width: 150px">Pajak</th>
                        <th style="min-width: 250px">Jumlah</th>
                        <th style="min-width: 50px"></th>
                      </tr>
                    </thead>
                    <tbody></tbody>
                  </table>
                </div>
              </div>

              <div class="row mt-4">
                <div class="col-12 col-md-6 pr-3">
                  <div class="row">
                    <div class="col-12 col-md-9">
                      <span class="font-weight-bold">Pesan</span>
                      <textarea class="form-control" rows="5"></textarea>
                    </div>
                  </div>

                  <div class="row mt-4">
                    <div class="col-12 col-md-9">
                      <span class="font-weight-bold">Memo</span>
                      <textarea class="form-control" rows="5"></textarea>
                    </div>
                  </div>
                </div>

                <div class="col-12 col-md-6 pr-3-">
                  <div class="row">
                    <div class="col-auto">
                      <span class="font-weight-bold">Subtotal:</span>
                    </div>
                    <div class="col text-right">
                      <span class="font-weight-bold">9,000,000</span>
                    </div>
                  </div>
                </div>
              </div>
            </form>

            <!-- ========================= Tambah di dalam ini ==================================== -->
          </div>
        </div>
      </div>