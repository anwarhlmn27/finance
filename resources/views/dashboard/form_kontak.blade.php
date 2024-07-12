@extends('layout.app')
@section('content')
<!-- ========================== Konten =================================== -->
<div class="main-content" style="background-color: rgb(220, 220, 220)">
        <div class="page-content">
          <div class="container-fluid">
            <!-- ========================= Tambah di dalam ini ==================================== -->
            <div class="row">
              <div class="col-12 d-flex align-items-center">
                <a href="#" class="text-sm">Kontak</a>
              </div>
              <div class="col d-flex align-items-center">
                <span style="font-size: 1.8em; font-weight: bold"
                  >Buat Kontak</span
                >
                <span class="badge badge-warning badge-pill ml-2">
                  Belum ditagih
                </span>
              </div>
            </div>

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <div class="w-100">
                      <div class="row">
                        <div class="col d-flex align-items-center">
                          <i
                            class="bx bx-user-circle mr-2 text-primary"
                            style="font-size: 2.2em; font-weight: bold"
                          ></i>
                          <span style="font-size: 1.35em; font-weight: bold">
                            Info Kontak
                          </span>
                        </div>
                      </div>

                      <div class="row mt-3">
                        <form
                          style="
                            padding: 0px 12px;
                            max-width: 1024px;
                            width: 100%;
                          "
                        >
                          <div class="form-group">
                            <label for="nama_tampilan">
                              Nama Tampilan <span style="color: red">*</span>
                            </label>
                            <input
                              type="text"
                              class="form-control"
                              id="nama_tampilan"
                            />
                          </div>

                          <div style="font-weight: 600; margin-bottom: 8px">
                            Tipe Kontak <span style="color: red">*</span>
                          </div>

                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              id="checkbox-pelanggan"
                              value="option1"
                            />
                            <label
                              class="form-check-label"
                              for="checkbox-pelanggan"
                              style="font-weight: normal"
                            >
                              Pelanggan
                            </label>
                          </div>

                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              id="checkbox-supplier"
                              value="option2"
                            />
                            <label
                              class="form-check-label"
                              for="checkbox-supplier"
                              style="font-weight: normal"
                            >
                              Supplier
                            </label>
                          </div>

                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              id="checkbox-karyawan"
                              value="option1"
                            />
                            <label
                              class="form-check-label"
                              for="checkbox-karyawan"
                              style="font-weight: normal"
                            >
                              Karyawan
                            </label>
                          </div>

                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              id="checkbox-lainnya"
                              value="option1"
                            />
                            <label
                              class="form-check-label"
                              for="checkbox-lainnya"
                              style="font-weight: normal"
                            >
                              Lainnya
                            </label>
                          </div>

                          <div class="form-group mt-3">
                            <label for="inputPassword5">Grup Kontak</label>
                            <input
                              type="text"
                              id="inputPassword5"
                              class="form-control"
                              aria-describedby="passwordHelpBlock"
                            />
                            <small
                              id="passwordHelpBlock"
                              class="form-text text-muted"
                            >
                              Anda dapat memilih maksimal 3 grup
                            </small>
                          </div>

                          <div class="row" style="margin-top: 32px">
                            <div class="col d-flex align-items-center">
                              <span
                                class="bx bx-book-open mr-2 text-primary"
                                style="font-size: 2.2em; font-weight: bold"
                              ></span>
                              <span
                                style="font-size: 1.35em; font-weight: bold"
                              >
                                Info umum
                              </span>
                            </div>
                          </div>

                          <div class="font-weight-bold mt-3">Nama Lengkap</div>
                          <div class="w-100">
                            <div class="row" style="margin: 0px">
                              <div class="col-12 col-md-6 col-lg-3 p-1">
                                <select class="form-control">
                                  <option value="1">(Kosong)</option>
                                  <option value="2">(Pilihan 1)</option>
                                  <option value="3">(Pilihan 2)</option>
                                  <option value="4">(Pilihan 3)</option>
                                </select>
                              </div>

                              <div class="col-12 col-md-6 col-lg-3 p-1">
                                <input
                                  type="text"
                                  class="form-control"
                                  placeholder="Nama awal"
                                />
                              </div>

                              <div class="col-12 col-md-6 col-lg-3 p-1">
                                <input
                                  type="text"
                                  class="form-control"
                                  placeholder="Nama tengah"
                                />
                              </div>

                              <div class="col-12 col-md-6 col-lg-3 p-1">
                                <input
                                  type="text"
                                  class="form-control"
                                  placeholder="Nama akhir"
                                />
                              </div>
                            </div>
                          </div>

                          <div class="row mt-3">
                            <div class="col-auto">
                              <div class="form-group">
                                <label for="inputPassword5">Identitas</label>
                                <select class="form-control">
                                  <option value="1">(Kosong)</option>
                                  <option value="2">(Pilihan 1)</option>
                                  <option value="3">(Pilihan 2)</option>
                                  <option value="4">(Pilihan 3)</option>
                                </select>
                              </div>
                            </div>

                            <div class="col">
                              <div class="form-group">
                                <label for="inputPassword5"
                                  >Nomor Identitas</label
                                >
                                <input
                                  type="text"
                                  id="inputPassword5"
                                  class="form-control"
                                  aria-describedby="passwordHelpBlock"
                                />
                              </div>
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="email">Email</label>
                            <input
                              type="text"
                              id="email"
                              class="form-control"
                            />
                            <small
                              id="email"
                              class="form-text text-muted"
                            >
                              Anda dapat memilih lebih dari 1 email
                            </small>
                          </div>

                          <div class="form-group">
                            <label for="inputPassword5">Nama Perusahaan</label>
                            <input
                              type="text"
                              id="inputPassword5"
                              class="form-control"
                              aria-describedby="passwordHelpBlock"
                            />
                          </div>

                          <div class="w-100">
                            <div class="row" style="margin: 0px">
                              <div class="col-12 col-md-6 p-1">
                                <div class="form-group">
                                  <label for="no_hp"> Nomor Handphone </label>

                                  <input
                                    type="text"
                                    id="no_hp"
                                    class="form-control"
                                    aria-describedby="passwordHelpBlock"
                                    placeholder="Contoh: 0812 9374 1289"
                                  />
                                </div>
                              </div>

                              <div class="col-12 col-md-6 p-1">
                                <div class="form-group">
                                  <label for="no_telepon">
                                    Nomor Handphone
                                  </label>

                                  <input
                                    type="text"
                                    id="no_telepon"
                                    class="form-control"
                                    aria-describedby="passwordHelpBlock"
                                    placeholder="Contoh: 012 93741289"
                                  />
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="w-100">
                            <div class="row" style="margin: 0px">
                              <div class="col-12 col-md-6 p-1">
                                <div class="form-group">
                                  <label for="fax"> Fax </label>

                                  <input
                                    type="text"
                                    id="fax"
                                    class="form-control"
                                    aria-describedby="passwordHelpBlock"
                                    placeholder="Contoh: 0812 9374 1289"
                                  />
                                </div>
                              </div>

                              <div class="col-12 col-md-6 p-1">
                                <div class="form-group">
                                  <label for="no_telepon"> NPWP </label>

                                  <input
                                    type="text"
                                    id="npwp"
                                    class="form-control"
                                    aria-describedby="passwordHelpBlock"
                                    placeholder="Contoh: 012 93741289"
                                  />
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="alamat-penagihan">
                              Alamat Penagihan
                            </label>
                            <textarea
                              class="form-control"
                              id="alamat-penagihan"
                              rows="3"
                              placeholder="Contoh: Jalan Indonesia Block D"
                            ></textarea>

                            <div class="form-check">
                              <input
                                class="form-check-input"
                                type="checkbox"
                                value=""
                                id="tambah_rincian"
                              />
                              <label
                                class="form-check-label font-weight-normal"
                                for="tambah_rincian"
                              >
                                Tambah rincian
                              </label>
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="alamat-penagihan">
                              Alamat pengiriman
                            </label>
                            <textarea
                              class="form-control"
                              id="alamat-penagihan"
                              rows="3"
                              placeholder="Contoh: Jalan Indonesia Block D"
                            ></textarea>
                            <div class="form-check">
                              <input
                                class="form-check-input"
                                type="checkbox"
                                value=""
                                id="sama_penagihan"
                              />
                              <label
                                class="form-check-label font-weight-normal"
                                for="sama_penagihan"
                              >
                                Sama dengan alamat penagihan
                              </label>
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="inputPassword5">Info Lainnya</label>
                            <input
                              type="text"
                              id="inputPassword5"
                              class="form-control"
                              aria-describedby="passwordHelpBlock"
                            />
                          </div>

                          <div class="row" style="margin-top: 32px">
                            <div class="col d-flex align-items-center">
                              <span
                                class="bx bxs-bank mr-2 text-primary"
                                style="font-size: 2.2em; font-weight: bold"
                              ></span>
                              <span
                                style="font-size: 1.35em; font-weight: bold"
                              >
                                Info bank
                              </span>
                            </div>
                          </div>

                          <div class="row mt-3">
                            <div class="col">
                              <span style="font-size: 1.2em; font-weight: bold">
                                Akun bank
                              </span>
                            </div>
                          </div>

                          <div class="w-100 mt-3">
                            <div class="row" style="margin: 0px">
                              <div class="col-12 col-md-6 p-1">
                                <div class="form-group">
                                  <label for="nama_bank">Nama bank</label>

                                  <input
                                    type="text"
                                    id="nama_bank"
                                    class="form-control"
                                    aria-describedby="passwordHelpBlock"
                                    placeholder="Contoh: 0812 9374 1289"
                                  />
                                </div>
                              </div>

                              <div class="col-12 col-md-6 p-1">
                                <div class="form-group">
                                  <label for="cabang_bank"> Cabang bank </label>

                                  <input
                                    type="text"
                                    id="cabang_bank"
                                    class="form-control"
                                    aria-describedby="passwordHelpBlock"
                                    placeholder="Contoh: 012 93741289"
                                  />
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="w-100">
                            <div class="row" style="margin: 0px">
                              <div class="col-12 col-md-6 p-1">
                                <div class="form-group">
                                  <label for="pemegang_bank">
                                    Pemegang akun bank
                                  </label>

                                  <input
                                    type="text"
                                    id="pemegang_bank"
                                    class="form-control"
                                  />
                                </div>
                              </div>

                              <div class="col-12 col-md-6 p-1">
                                <div class="form-group">
                                  <label for="rekening_bank">
                                    Nomor rekening
                                  </label>

                                  <input
                                    type="text"
                                    id="rekening_bank"
                                    class="form-control"
                                  />
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="w-100">
                            <button class="btn btn-outline-primary">
                              <span class="bx bx-plus-circle"></span>
                              Tambah bank lainnya
                            </button>
                          </div>

                          <div class="row" style="margin-top: 32px">
                            <div class="col d-flex align-items-center">
                              <span
                                class="bx bx-border-all mr-2 text-primary"
                                style="font-size: 2.2em; font-weight: bold"
                              ></span>
                              <span
                                style="font-size: 1.35em; font-weight: bold"
                              >
                                Pemetaan akun
                              </span>
                            </div>
                          </div>

                          <div class="w-100 mt-3">
                            <div class="row" style="margin: 0px">
                              <div class="col-12 col-md-6 p-1">
                                <div class="form-group">
                                  <label for="akun_piutang">Akun piutang</label>

                                  <select class="form-control">
                                    <option value="1">(Kosong)</option>
                                    <option value="2">(Pilihan 1)</option>
                                    <option value="3">(Pilihan 2)</option>
                                    <option value="4">(Pilihan 3)</option>
                                  </select>
                                </div>
                              </div>

                              <div class="col-12 col-md-6 p-1">
                                <div class="form-group">
                                  <label for="akun_hutang">Akun hutang</label>

                                  <select class="form-control">
                                    <option value="1">(Kosong)</option>
                                    <option value="2">(Pilihan 1)</option>
                                    <option value="3">(Pilihan 2)</option>
                                    <option value="4">(Pilihan 3)</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="akun_piutang"
                              >Syarat pembayaran utama</label
                            >

                            <select class="form-control">
                              <option value="1">(Kosong)</option>
                              <option value="2">(Pilihan 1)</option>
                              <option value="3">(Pilihan 2)</option>
                              <option value="4">(Pilihan 3)</option>
                            </select>
                          </div>

                          <div class="row" style="margin: 0px">
                            <div class="col text-right">
                              <button class="btn">Batalkan</button>

                              <button class="btn btn-primary">Simpan</button>
                            </div>
                          </div>
                        </form>
                      </div>
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