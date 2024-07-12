@extends('layout.app')
@section('content')
<!-- ========================== Konten =================================== -->
<div class="main-content">
        <div class="page-content" style="padding-bottom: 0px">
          <div class="container-fluid">
            <div class="row align-items-center">
              <div class="col d-flex align-items-center">
                <span style="font-size: 1.4rem"> Buat Faktur Pembelian </span>
                <span class="badge badge-warning badge-pill ml-2">
                  Belum ditagih
                </span>
              </div>

              <div class="col text-right d-flex justify-content-end">
                <select
                  class="form-control w-auto"
                  style="background-color: #e8e7e7"
                  id="exampleFormControlSelect1"
                >
                  <option>Faktur Pembelian</option>
                  <option>X</option>
                  <option>Y</option>
                  <option>Z</option>
                </select>
              </div>
            </div>
          </div>
        </div>

        <div class="card mt-3" style="background-color: white">
          <div class="card-body">
            <div class="container-fluid" style="font-size: 0.75rem">
              <div class="row">
                <div class="col-12 col-md-3">
                  <div class="row">
                    <div class="col-12">Supplier</div>
                    <div class="col-12">
                      <select id="supplier_dropdown" class="w-100">
                        <option value="supplier_1">Supplier 1</option>
                        <option value="supplier_2">Supplier 2</option>
                        <option value="supplier_3">Supplier 3</option>
                        <option value="supplier_4">Supplier 4</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12 col-md-5">
                  <div class="row align-items-center">
                    <div class="col">
                      <div class="row">
                        <div class="col-12">Email</div>
                        <div class="col-12">
                          <select
                            id="email_dropdown"
                            name="states[]"
                            multiple="multiple"
                          >
                            <option value="email_1">Email 1</option>
                            <option value="email_2">Email 2</option>
                            <option value="email_3">Email 3</option>
                            <option value="email_4">Email 4</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <div class="row">
                        <div class="col-auto px-0">
                          <input id="info-pengiriman" type="checkbox" />
                        </div>
                        <div class="col-auto px-1">
                          <label for="info-pengiriman">Info Pengiriman</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12 col-md-4 text-right">
                  <h4 style="color: black">Total Rp. 4.255.000,00</h4>
                </div>
              </div>

              <hr />

              <div class="row">
                <!-- Alamat -->
                <div class="col-sm-12 col-md-4">
                  <div class="row">
                    <div class="col-12">
                      <div class="form-group">
                        <label for="alamat-penagihan"> Alamat Penagihan </label>
                        <textarea
                          id="alamat-penagihan"
                          class="form-control"
                          rows="3"
                        >
                        </textarea>
                      </div>
                    </div>

                    <div class="col-12">
                      <span class="font-weight-bold">Alamat Pengiriman</span>
                    </div>

                    <div class="col-12 mt-2">
                      <div class="row">
                        <div class="col-auto pr-0">
                          <input
                            type="checkbox"
                            value=""
                            id="sama-alamat-pengiriman"
                          />
                        </div>

                        <div class="col">
                          <label
                            for="sama-alamat-pengiriman"
                            style="font-weight: normal"
                          >
                            Sama dengan penagihan
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="col-12">
                      <div class="form-group">
                        <textarea
                          id="alamat-pengiriman"
                          class="form-control"
                          rows="3"
                          style="display: none"
                        >
                        </textarea>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Tgl -->
                <div class="col-sm-12 col-md-4">
                  <div class="row">
                    <div class="col-12 col-md-6">
                      <div class="row pr-2">
                        <form>
                          <div class="form-group mb-0">
                            <label for="tgl-transaksi"> Tgl. Transaksi </label>
                            <input
                              type="date"
                              class="form-control"
                              id="tgl-transaksi"
                              placeholder=""
                            />
                            <p>
                              Tanggal mundur akan memicu perhitungan ulang.
                              <a href="#">
                                <u>info selengkapnya</u>
                              </a>
                            </p>
                          </div>

                          <div class="form-group">
                            <label for="tgl-jatuh-tempo">
                              Tgl. jatuh tempo
                            </label>
                            <input
                              type="date"
                              class="form-control"
                              id="tgl-jatuh-tempo"
                              placeholder=""
                            />
                          </div>

                          <div class="form-group">
                            <label for="syarat_pembayaran">
                              Syarat Pembayaran
                            </label>

                            <select id="syarat_pembayaran" name="pembayaran[]">
                              <option value="metode_1">Metode 1</option>
                              <option value="metode_2">Metode 2</option>
                              <option value="metode_3">Metode 3</option>
                              <option value="metode_4">Metode 4</option>
                            </select>
                          </div>
                        </form>
                      </div>
                    </div>

                    <div class="col-12 col-md-6">
                      <div class="row">
                        <form>
                          <div class="form-group">
                            <label for="tgl-pengiriman">
                              Tgl. pengiriman
                            </label>
                            <input
                              type="date"
                              class="form-control"
                              id="tgl-pengiriman"
                              placeholder=""
                            />
                          </div>

                          <div class="form-group">
                            <label for="kirim-melalui"> Kirim melalui </label>
                            <input
                              type="text"
                              class="form-control"
                              id="kirim-melalui"
                              placeholder=""
                            />
                          </div>

                          <div class="form-group">
                            <label for="no-pelacakan"> No. pelacakan </label>

                            <input
                              type="text"
                              class="form-control"
                              id="no-pelacakan"
                              placeholder=""
                            />
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- etc -->
                <div class="col-sm-12 col-md-4">
                  <div class="row">
                    <div class="col-12 col-md-6">
                      <div class="row pl-2">
                        <form>
                          <div class="form-group">
                            <label for="no-transaksi">
                              No. Transaksi
                              <span
                                class="fa fa-cog"
                                style="cursor: pointer"
                              ></span>
                            </label>
                            <input
                              type="text"
                              class="form-control"
                              id="no-transaksi"
                              placeholder=""
                            />
                          </div>

                          <div class="form-group">
                            <label for="referensi-supplier">
                              Nomor referensi supplier
                            </label>
                            <input
                              type="date"
                              class="form-control"
                              id="referensi-supplier"
                              placeholder=""
                            />
                          </div>

                          <div class="form-group">
                            <label for="gudang"> Gudang </label>

                            <select
                              id="gudang"
                              class="form-control"
                              name="pembayaran[]"
                            >
                              <option value="gudang_1">Gudang 1</option>
                              <option value="gudang_2">Gudang 2</option>
                              <option value="gudang_3">Gudang 3</option>
                              <option value="gudang_4">Gudang 4</option>
                            </select>
                          </div>
                        </form>
                      </div>
                    </div>

                    <div class="col-12 col-md-6">
                      <div class="row pl-2">
                        <form>
                          <div class="form-group">
                            <label for="tgl-pengiriman"> Tag </label>
                            <select
                              id="tag_dropdown"
                              name="tags[]"
                              multiple="multiple"
                              class="form-control"
                            >
                              <option value="tag_1">Tag 1</option>
                              <option value="tag_2">Tag 2</option>
                              <option value="tag_3">Tag 3</option>
                              <option value="tag_4">Tag 4</option>
                            </select>
                          </div>

                          <div class="form-group">
                            <label for="pengiriman">Pengiriman</label>
                            <textarea
                              rows="2"
                              class="form-control"
                              disabled
                            ></textarea>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col text-right">
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value=""
                      id="harga-pajak"
                      placeholder="false"
                    />
                    <label class="form-check-label" for="harga-pajak">
                      Harga termasuk pajak
                    </label>
                  </div>
                </div>
              </div>
            </div>

            <div class="w-full mt-3 container-fluid">
              <table
                id="table-buat-faktur"
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
                    <td>Harga Satuan</td>
                    <td>Diskon</td>
                    <td>Pajak</td>
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
                      Tagihan Lunch Training Karakuri, TJI dan New Anzen Leader
                      Tgl: (22-26 April 2024)
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
                    <button class="btn btn-primary">Buat Penagihan</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- ======================== Konten ======================================== -->