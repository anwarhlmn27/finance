@extends('layout.app')
@section('content')
<!-- ========================== Konten =================================== -->
<div class="main-content">
        <div class="page-content" style="padding-bottom: 0px">
          <div class="container-fluid">
            <div class="row align-items-center">
              <div class="col d-flex align-items-center">
                <span style="font-size: 1.4rem">
                  Pemesanan Pembelian #PO/SARP/56/2024
                </span>
                <span class="badge badge-secondary ml-2"> Draf </span>
              </div>
            </div>
          </div>
        </div>

        <div class="card mt-3" style="background-color: white">
          <div class="card-body">
            <div class="container-fluid" style="font-size: 0.75rem">
              <div class="row">
                <div class="col-12 col-md-4 col-lg-4">
                  <div class="row">
                    <div class="col-sm-12 col-md-5 text-secondary">
                      Supplier
                    </div>
                    <div class="col-sm-12 col-md-7 text-secondary">
                      <a href="#">PT. Forta Larese</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                  <div class="row">
                    <div class="col-sm-12 col-md-5 text-secondary">Email</div>
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
                    Sisa tagihan Rp. 22.803.840
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
                      Jl. Musi no. 16, Jakarta, 10150
                    </div>
                  </div>
                </div>

                <div class="col-sm-12 col-md-3">
                  <div class="row">
                    <div class="col-sm-12 col-md-6 text-secondary">
                      Tgl. transaksi
                    </div>
                    <div class="col-sm-12 col-md-6">16/05/2024</div>
                  </div>

                  <div class="row mt-1">
                    <div class="col-sm-12 col-md-6 text-secondary">
                      Tgl. jatuh tempo
                    </div>
                    <div class="col-sm-12 col-md-6">15/08/2024</div>
                  </div>

                  <div class="row mt-1">
                    <div class="col-sm-12 col-md-6 text-secondary">
                      Syarat Pembayaran
                    </div>
                    <div class="col-sm-12 col-md-6">Net 30</div>
                  </div>
                </div>

                <div class="col-sm-12 col-md-5">
                  <div class="row">
                    <div class="col-sm-12 col-md-4 text-secondary">
                      No transaksi
                    </div>
                    <div class="col-sm-12 col-md-8">
                      Purchase Order #PO#SARP/56/2024
                    </div>
                  </div>

                  <div class="row mt-1">
                    <div class="col-sm-12 col-md-4 text-secondary">
                      No Referensi
                    </div>
                    <div class="col-sm-12 col-md-4">-</div>
                  </div>

                  <div class="row mt-1">
                    <div class="col-sm-12 col-md-4 text-secondary">Tag</div>
                    <div class="col-sm-12 col-md-8">
                      <span class="p-1 mr-2" style="background-color: #d7d7d7">
                        SARP
                      </span>
                      <span class="p-1" style="background-color: #d7d7d7">
                        NON-AKADEMIK
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="w-full mt-3 container-fluid">
              <table
                id="table-detail"
                class="table responsive overflow-auto table-striped nowrap"
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
                    <td>Jumlah</td>
                  </tr>
                </thead>
                <tbody></tbody>
              </table>
            </div>

            <div
              class="w-full mt-3 pt-3 container-fluid"
              style="border-top: solid 1px gray; font-size: 0.75rem"
            >
              <div class="row">
                <div class="col-12 col-md-6 pr-2">
                  <div class="row">
                    <div class="col-12 col-sm-2">
                      <span class="text-secondary">Pesan</span>
                    </div>
                    <div class="col font-weight-bold">-</div>
                  </div>

                  <div class="row mt-2">
                    <div class="col-12 col-sm-2">
                      <span class="text-secondary">Memo</span>
                    </div>
                    <div class="col font-weight-bold">
                      Pembelian Sepatu Safety Mahasiswa Baru 2024 (64 set) Harga
                      termasuk ppn 11%
                    </div>
                  </div>

                  <div class="row mt-3">
                    <div class="col-12">
                      <span class="font-weight-bold">Lampiran (0)</span>
                    </div>
                  </div>

                  <div class="row mt-1">
                    <!-- array lampiran -->
                  </div>

                  <div class="row mt-3">
                    <div class="col" style="color: #346ee0">
                      Terakhir diubah oleh X pada 17/05/2024 11:26:21 AM GMT +7
                    </div>
                  </div>
                </div>

                <div class="col-12 col-md-6 font-weight-bold">
                  <div class="row">
                    <div class="col-12 col-sm-4 pr-2">
                      <span>Subtotal</span>
                    </div>
                    <div class="col pr-2 text-right">
                      <span id="subtotal-price">Total</span>
                    </div>
                  </div>

                  <div class="row mt-3">
                    <div class="col-12 col-sm-4 pr-2">
                      <span>Total</span>
                    </div>
                    <div class="col pr-2 text-right">
                      <span id="total-price">Total</span>
                    </div>
                  </div>

                  <div class="row mt-3" style="font-size: 1.05rem">
                    <div class="col-12 col-sm-4 pr-2">
                      <span>Sisa tagihan</span>
                    </div>
                    <div class="col pr-2 text-right">
                      <span id="sisa-tagihan">Total</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="w-full mt-3">
              <div class="container-fluid">
                <div class="row">
                  <div class="col">
                    <button class="btn btn-outline-dark">Hapus</button>
                  </div>
                  <div class="col text-right">
                    <button class="btn btn-outline-primary">Ubah</button>
                    <button class="btn btn-outline-primary">
                      Cetak & bagikan
                      <span class="fa fa-caret-down ml-2"></span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- ======================== Konten ======================================== -->