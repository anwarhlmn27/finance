@extends('layout.app')
@section('content')
<!-- ========================== Konten =================================== -->
<div class="main-content" style="background-color: rgb(239, 239, 239)">
        <div class="page-content" style="padding-right: 0px; padding-left: 0px">
          <div class="w-100">
            <!-- ========================= Tambah di dalam ini ==================================== -->
            <div class="card">
              <div
                class="card-header"
                style="background-color: rgb(239, 239, 239)"
              >
                <div class="w-100">
                  <div class="row">
                    <div class="col">
                      <h3>Kontak</h3>
                    </div>

                    <div class="col text-right">
                      <button class="btn btn-primary"><a href="{{url('form_kontak')}}" style="color:white;"> Buat Kontak</a></button>
                    </div>
                  </div>

                  <div class="row mt-2">
                    <div id="pelanggan" class="col-auto filter-kontak">
                      <span
                        class="fas fa-user mr-2"
                        style="color: orange"
                      ></span>
                      Pelanggan
                    </div>

                    <div id="supplier" class="col-auto filter-kontak">
                      <span
                        class="fas fa-user mr-2"
                        style="color: purple"
                      ></span>
                      Supplier
                    </div>

                    <div id="karyawan" class="col-auto filter-kontak">
                      <span
                        class="fas fa-user mr-2"
                        style="color: lightseagreen"
                      ></span>
                      Karyawan
                    </div>

                    <div id="lainnya" class="col-auto filter-kontak">
                      <span
                        class="fas fa-user mr-2"
                        style="color: lightgreen"
                      ></span>
                      Lainnya
                    </div>

                    <div id="semua" class="col-auto filter-kontak selected">
                      <span class="fa fa-users mr-2"></span>
                      Semua
                    </div>
                  </div>
                </div>
              </div>

              <div class="card-body">
                <div class="w-100">
                  <div class="row" style="margin-left: 0px">
                    <div class="col-12 col-md-4">
                      <div class="card warning-card">
                        <div class="card-header" style="padding-left: 8px">
                          <div class="w-100">
                            <div class="row align-items-center">
                              <div class="col text-left">
                                <span class="font-weight-bold">
                                  Piutang belum dibayar
                                </span>
                              </div>

                              <div class="col-auto text-right">
                                <span
                                  class="badge badge-pill badge-warning float-right"
                                >
                                  72
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div
                          class="card-body light"
                          style="padding-left: 8px; padding-bottom: 8px"
                        >
                          <div class="container-fluid">
                            <div class="row text-secondary">Total</div>

                            <div class="row">
                              <h5>
                                Rp. <span id="total-belum">475.590.000</span>
                              </h5>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-12 col-md-4">
                      <div class="card danger-card">
                        <div class="card-header" style="padding-left: 8px">
                          <div class="w-100">
                            <div class="row align-items-center">
                              <div class="col text-left">
                                <span class="font-weight-bold">
                                  Piutang jatuh tempo
                                </span>
                              </div>

                              <div class="col-auto text-right">
                                <span
                                  class="badge badge-pill badge-danger float-right"
                                >
                                  62
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div
                          class="card-body light"
                          style="padding-left: 8px; padding-bottom: 8px"
                        >
                          <div class="container-fluid">
                            <div class="row text-secondary">Total</div>
                            <div class="row">
                              <h5>
                                Rp. <span id="total-jatuh">393.090.000</span>
                              </h5>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-12 col-md-4">
                      <div class="card primary-card">
                        <div class="card-header" style="padding-left: 8px">
                          <div class="w-100">
                            <div class="row align-items-center">
                              <div class="col text-left">
                                <span class="font-weight-bold">
                                  Kredit memo
                                </span>
                              </div>

                              <div class="col-auto text-right">
                                <span
                                  class="badge badge-pill badge-primary float-right"
                                >
                                  10
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div
                          class="card-body"
                          style="padding-left: 8px; padding-bottom: 8px"
                        >
                          <div class="container-fluid">
                            <div class="row text-secondary">Total</div>
                            <div class="row">
                              <h5>
                                Rp. <span id="total-jatuh">28.200.000</span>
                              </h5>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row" style="margin-left: 0px">
                    <div class="col-12 col-md-6">
                      <div class="container-fluid">
                        <div class="row" style="padding-left: 0px">
                          <div
                            class="col-12 col-md-6"
                            style="padding-left: 0px"
                          >
                            <div class="btn-group" role="group">
                              <button
                                id="btnGroupVerticalDrop3"
                                type="button"
                                class="btn btn-outline-secondary dropdown-toggle waves-effect waves-light"
                                data-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <span class="fa fa-book"></span>
                                <i class="ml-2 fas fa-caret-down"></i>
                              </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">
                                  Dropdown link
                                </a>
                                <a class="dropdown-item" href="#">
                                  Dropdown link
                                </a>
                              </div>
                            </div>

                            <button class="btn btn-outline-primary">
                              Atur grup kontak
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-12 col-md-6 text-right">
                      <div class="row">
                        <div class="btn-group" role="group">
                          <button
                            id="btnGroupVerticalDrop3"
                            type="button"
                            class="mr-2 btn btn-outline-primary dropdown-toggle waves-effect waves-light"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                          >
                            Impor
                            <i class="ml-2 fas fa-caret-down"></i>
                          </button>

                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">
                              Dropdown link
                            </a>
                            <a class="dropdown-item" href="#">
                              Dropdown link
                            </a>
                          </div>
                        </div>

                        <div class="mr-2">
                          <button class="btn btn-outline-primary">
                            Ekspor
                          </button>
                        </div>

                        <div class="input-group mr-2" style="width: auto">
                          <div class="input-group-prepend">
                            <button class="btn btn-secondary" type="button">
                              <span class="fa fa-search"></span>
                            </button>
                          </div>
                          <input
                            type="text"
                            class="form-control"
                            placeholder="Cari kontak"
                            aria-label="Recipient's username"
                          />
                        </div>

                        <div>
                          <button class="btn btn-outline-primary">
                            <span class="fa fa-filter mr-2"></span>
                            Filter
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row mt-3">
                    <div class="col-12">
                      <table
                        id="table-kontak"
                        class="table display responsive table-striped nowrap"
                        style="color: black"
                        width="100%"
                      >
                        <thead>
                          <tr>
                            <th>
                              <input id="checkAll" type="checkbox" />
                            </th>
                            <th>Nama panggilan</th>
                            <th>Nama perusahaan</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>No. handphone</th>
                            <th>Saldo</th>
                          </tr>
                        </thead>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- ========================= Tambah di dalam ini ==================================== -->
          </div>
        </div>
      </div>
      <!-- ======================== Konten ======================================== -->