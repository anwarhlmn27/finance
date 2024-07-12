@extends('layout.app')
@section('content')

<!-- ========================== Konten =================================== -->
<div class="main-content">
        <div class="page-content" style="padding-bottom: 0px">
          <div class="container-fluid">
            <div class="row align-items-center">
              <div class="col d-flex align-items-center">
                <span style="font-size: 1.4rem">
                  Buat Pengiriman Pembelian
                </span>
                <span class="badge badge-warning badge-pill ml-2">
                  Belum ditagih
                </span>
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
                      <a href="#">RM. KEBULI CINTA</a>
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
                  </div>
                </div>
              </div>

              <hr />

              <div class="row">
                <!-- Alamat -->
                <div class="col-sm-12 col-md-4">
                  <div class="row">
                    <div class="col-12">
                      <div class="form-group">
                        <label for="alamat-penagihan">
                          Alamat Pengiriman
                        </label>
                        <textarea
                          id="alamat-penagihan"
                          class="form-control"
                          rows="3"
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
                          <div class="form-group">
                            <label for="tgl-transaksi"> Tgl. Pengiriman </label>
                            <input
                              type="date"
                              class="form-control"
                              id="tgl-transaksi"
                              placeholder=""
                            />
                          </div>

                          <div class="form-group">
                            <label for="tgl-jatuh-tempo"> Kirim melalui </label>
                            <input
                              type="text"
                              class="form-control"
                              id="tgl-jatuh-tempo"
                              placeholder=""
                            />
                          </div>

                          <div class="form-group">
                            <label for="syarat_pembayaran">
                              No Pelacakan
                            </label>

                            <input
                              type="text"
                              class="form-control"
                              id="tgl-jatuh-tempo"
                              placeholder=""
                            />
                          </div>
                        </form>
                      </div>
                    </div>

                    <div class="col-12 col-md-6">
                      <div class="row">
                        <form>
                          <div class="form-group">
                            <label for="tgl-pengiriman"> No Transaksi </label>
                            <input
                              type="text"
                              class="form-control"
                              id="tgl-pengiriman"
                              placeholder=""
                            />
                          </div>

                          <div class="form-group">
                            <label for="kirim-melalui">
                              Nomor referensi supplier
                            </label>
                            <input
                              type="text"
                              class="form-control"
                              id="kirim-melalui"
                              placeholder=""
                            />
                          </div>

                          <div class="form-group">
                            <label for="gudang"> Gudang </label>

                            <select
                              id="gudang"
                              name="gudang"
                              class="form-control"
                            >
                              <option value="email_1">Gudang 1</option>
                              <option value="email_2">Gudang 2</option>
                              <option value="email_3">Gudang 3</option>
                              <option value="email_4">Gudang 4</option>
                            </select>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- etc -->
                <div class="col-sm-12 col-md-4">
                  <div class="row">
                    <div class="col-12">
                      <form>
                        <div class="form-group">
                          <label> Nomor pemesanan pembelian </label>
                          <div>
                            <a href="#">Purchase Order #PO/TRLC/51/2024</a>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="pengiriman">Tag</label>
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
                      </form>
                    </div>
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
                    <td class="text-center">Produk</td>
                    <td class="text-center">Deskripsi</td>
                    <td class="text-center">Kuantitas</td>
                    <td class="text-center">Unit</td>
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
                  <div class="form-group">
                    <label for="pesan"> Pesan </label>
                    <textarea
                      id="pesan"
                      class="form-control"
                      rows="3"
                      placeholder="pesan"
                    >
                    </textarea>
                  </div>

                  <div class="form-group">
                    <label for="memo"> Memo </label>
                    <textarea
                      id="memo"
                      class="form-control"
                      rows="3"
                      placeholder="memo"
                    >
                    </textarea>
                  </div>

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
                    </div>
                  </div>
                </div>

                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <label for="ongkos-kirim"> Ongkos kirim </label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">
                          Rp.
                        </span>
                      </div>
                      <input
                        id="ongkos-kirim"
                        type="text"
                        class="form-control"
                      />
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="w-full mt-3">
              <div class="container-fluid">
                <div class="row">
                  <div class="col text-right">
                    <button class="btn btn-outline-secondary">Batalkan</button>
                    <button class="btn btn-primary">Buat</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- ======================== Konten ======================================== -->