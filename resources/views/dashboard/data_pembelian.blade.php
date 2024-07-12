@extends('layout.app')
@section('content')
<div class="main-content">
        <div class="page-content-header w-100">
          <div class="container-fluid">
            <div class="row bg-light pl-3 pr-3 pt-2 pb-2 align-items-center">
              <div class="col">
                <h3>Pembelian</h3>
              </div>

              <div class="col text-right">
                <div class="row">
                  <div class="col">
                    <button class="btn btn-outline-primary">Impor</button>
                  </div>
                  <div class="col-auto">
                    <div class="btn-group mb-2">
                      <button
                        type="button"
                        class="btn btn-primary dropdown-toggle waves-effect waves-light"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                      >
                        Propose
                        <i class="mdi mdi-chevron-down"></i>
                      </button>
                      <div class="dropdown-menu custom-drop">
                        <a class="dropdown-item" href="{{url('form_faktur')}}"
                          >Faktur Pembelian</a
                        >
                        <a class="dropdown-item" href="{{url('form_beli')}}">
                          Pemesanan Pembelian
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div>
          <div class="container-fluid">
            <!-- ========================= Tambah di dalam ini ==================================== -->

            <div class="row mt-2">
              <div class="col-12 col-md-4">
                <div class="card warning-card">
                  <div class="card-header">
                    <div class="row">
                      <div class="col-10 text-bold text-sm">
                        Pembelian belum dibayar
                      </div>
                      <div class="col-2 text-right">
                        <span class="badge badge-danger badge-pill">4</span>
                      </div>
                    </div>
                  </div>
                  <div class="card-body padding-small">
                    <div class="container-fluid">
                      <div class="row">
                        <span class="text-muted">Total</span>
                      </div>
                      <div class="row">Rp. 4.307.225</div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-12 col-md-4">
                <div class="card danger-card">
                  <div class="card-header">
                    <div class="row">
                      <div class="col-10 text-bold text-sm">
                        Pembelian Jatuh Tempo
                      </div>
                      <div class="col-2 text-right">
                        <span class="badge badge-danger badge-pill">4</span>
                      </div>
                    </div>
                  </div>
                  <div class="card-body padding-small">
                    <div class="container-fluid">
                      <div class="row">
                        <span class="text-muted">Total</span>
                      </div>
                      <div class="row">Rp. 4.307.225</div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-12 col-md-4">
                <div class="card success-card">
                  <div class="card-header">
                    <div class="row">
                      <div class="col-10 text-bold text-sm">
                        Pelunasan dibayar 30 hari terakhir
                      </div>
                      <div class="col-2 text-right">
                        <span class="badge badge-danger badge-pill">4</span>
                      </div>
                    </div>
                  </div>
                  <div class="card-body padding-small">
                    <div class="container-fluid">
                      <div class="row">
                        <span class="text-muted">Total</span>
                      </div>
                      <div class="row">Rp. 4.307.225</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs mb-3" id="myTab">
                      <li class="nav-item">
                        <a
                          class="nav-link active"
                          data-toggle="tab"
                          href="#faktur_pembelian"
                        >
                          Faktur Pembelian
                        </a>
                      </li>
                      <li class="nav-item">
                        <a
                          class="nav-link"
                          data-toggle="tab"
                          href="#pengiriman"
                        >
                          Pengiriman
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#pemesanan">
                          Pemesanan Pembelian
                        </a>
                      </li>
                      <li class="nav-item">
                        <a
                          class="nav-link"
                          data-toggle="tab"
                          href="#persetujuan"
                        >
                          Purchase Order
                        </a>
                      </li>
                    </ul>

                    <div class="tab-content">
                      <!-- ========================= TABLE FAKTUR ========================================= -->
                      <div
                        class="tab-pane container active"
                        id="faktur_pembelian"
                      >
                        <div class="container-fluid overflow-auto">
                          <table
                            id="table-list-faktur-beli"
                            class="table display responsive table-striped nowrap"
                            width="100%"
                          >
                            <thead
                              style="background-color: #aee9f9; color: black"
                            >
                              <tr>
                                <th>Tanggal</th>
                                <th>No</th>
                                <th>Supplier</th>
                                <th>Tgl. jatuh tempo</th>
                                <th>Status</th>
                                <th>Sisa Tagihan</th>
                                <th>Total</th>
                                <th>Tag</th>
                              </tr>
                            </thead>
                            <tbody></tbody>
                          </table>
                        </div>
                      </div>
                      <!-- ========================= TABLE FAKTUR ========================================= -->

                      <!-- ========================= TABLE PENGIRIMAN ========================================= -->
                      <div class="tab-pane container fade" id="pengiriman">
                        <div class="container-fluid overflow-auto">
                          <table
                            id="table-pengiriman"
                            class="table display responsive table-striped nowrap"
                            width="100%"
                          >
                            <thead
                              style="background-color: #aee9f9; color: black"
                            >
                              <tr>
                                <th>Tanggal</th>
                                <th>No</th>
                                <th>Supplier</th>
                                <th>Status</th>
                                <th>Tag</th>
                              </tr>
                            </thead>
                            <tbody></tbody>
                          </table>
                        </div>
                      </div>
                      <!-- ========================= TABLE PENGIRIMAN ========================================= -->

                      <!-- ========================= TABLE PEMESANAN ========================================= -->
                      <div class="tab-pane container fade" id="pemesanan">
                        <div class="container-fluid overflow-auto">
                          <table
                            id="table-pemesanan"
                            class="table display responsive table-striped nowrap"
                            width="100%"
                          >
                            <thead
                              style="background-color: #aee9f9; color: black"
                            >
                              <tr>
                                <th>Tanggal</th>
                                <th>No</th>
                                <th>Supplier</th>
                                <th>Tgl. Jatuh Tempo</th>
                                <th>Status</th>
                                <th>Jumlah DP</th>
                                <th>Total</th>
                                <th>Tag</th>
                              </tr>
                            </thead>
                            <tbody></tbody>
                          </table>
                        </div>
                      </div>
                      <!-- ========================= TABLE PEMESANAN ========================================= -->

                      <!-- ========================= TABLE PERSETUJUAN ========================================= -->
                      <div class="tab-pane container fade" id="persetujuan">
                        <div class="container-fluid overflow-auto">
                          <table
                            id="table-list-beli"
                            class="table display responsive table-striped nowrap"
                            width="100%"
                          >
                            <thead
                              style="background-color: #aee9f9; color: black"
                            >
                              <tr>
                                <th>Tanggal</th>
                                <th>No</th>
                                <th>Supplier</th>
                                <th>Tgl. kedaluwarsa</th>
                                <th>Status</th>
                                <th>Total</th>
                                <th>Tag</th>
                                <th></th>
                              </tr>
                            </thead>
                            <tbody></tbody>
                          </table>
                        </div>
                      </div>
                      <!-- ========================= TABLE PERSETUJUAN ========================================= -->

                      <div class="tab-pane container fade" id="menu2">...</div>
                    </div>
                  </div>
                  <!-- end card body-->
                </div>
                <!-- end card -->
              </div>
              <!-- end col-->
            </div>

            <!-- ========================= Tambah di dalam ini ==================================== -->
          </div>
        </div>
      </div>