<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Detail</h6>
        </div>
        <div class="card-body pb-2">
          <form action="">
            <div class="row">
              <div class="col-6">
                <div class="form-group has-success">
                  <label>NIK</label>
                  <div class="mb-3">
                    <input
                      type="number"
                      name="nik"
                      class="form-control is-valid"
                      placeholder="NIK.."
                      required
                    />
                  </div>
                </div>
              </div>
              <div class="col-6">
                <div class="form-group has-danger">
                  <label>Nama</label>
                  <div class="mb-3">
                    <input
                      type="text"
                      name="nama"
                      class="form-control is-invalid"
                      placeholder="Nama.."
                      required
                    />
                  </div>
                </div>
              </div>
              <div class="col-6">
                <label>Bagian</label>
                <div class="mb-3">
                  <input
                    type="text"
                    name="bagian"
                    class="form-control"
                    placeholder="Bagian.."
                  />
                </div>
              </div>
              <div class="col-6">
                <label>Jabatan</label>
                <div class="mb-3">
                  <input
                    type="text"
                    name="jabatan"
                    class="form-control"
                    placeholder="Jabatan..."
                  />
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-6">
                <label>Tempat/Tanggal Lahir</label>
                <div class="mb-3">
                  <input
                    type="text"
                    name="ttl"
                    class="form-control"
                    placeholder="Tempat/Tanggal Lahir"
                  />
                </div>
              </div>
              <div class="col-6 align-content-center">
                <label>Status</label>
                <div class="form-check mt-2 mb-3">
                  <div class="form-check-inline me-5">
                    <input
                      class="form-check-input form-check-inline"
                      type="radio"
                      name="status"
                      value="belum"
                      checked
                      id="customRadio"
                    />
                    <label class="custom-control-label" for="customRadio"
                      >Belum Menikah</label
                    >
                  </div>
                  <div class="form-check-inline me-5">
                    <input
                      class="form-check-input form-check-inline"
                      type="radio"
                      name="status"
                      value="menikah"
                      id="customRadio2"
                    />
                    <label class="custom-control-label" for="customRadio2"
                      >Sudah Menikah</label
                    >
                  </div>
                  <div class="form-check-inline">
                    <input
                      class="form-check-input form-check-inline"
                      type="radio"
                      name="status"
                      value="other"
                      id="customRadio3"
                    />
                    <label class="custom-control-label" for="customRadio3"
                      >Others</label
                    >
                  </div>
                </div>
              </div>
              <div class="col-12">
                <label>Alamat</label>
                <div class="mb-3">
                  <input
                    type="text"
                    name="alamat"
                    class="form-control"
                    placeholder="Alamat.."
                    required
                  />
                </div>
              </div>
              <div class="col-6">
                <label>No Hp</label>
                <div class="mb-3">
                  <input
                    type="number"
                    name="no_hp"
                    class="form-control"
                    placeholder="No Hp..."
                    required
                  />
                </div>
              </div>
              <div class="col-6">
                <label>Pendidikan Terakhir</label>
                <div class="mb-3">
                  <input
                    type="text"
                    name="p_terakhir"
                    class="form-control"
                    placeholder="Pendidikan Terakhir..."
                  />
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-6">
                <label>Jam Masuk</label>
                <div class="mb-3">
                  <input
                    type="time"
                    name="jam_masuk"
                    class="form-control"
                    placeholder="Jam Masuk"
                    required
                  />
                </div>
              </div>
              <div class="col-6">
                <label>Jam Pulang</label>
                <div class="mb-3">
                  <input
                    type="time"
                    name="jam_pulang"
                    class="form-control"
                    placeholder="Jam Pulang.."
                    required
                  />
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <label>Password</label>
                <div class="mb-3">
                  <input
                    type="text"
                    name="pw"
                    class="form-control"
                    placeholder="Password"
                    value="123"
                    required
                  />
                </div>
              </div>
              <div class="col-12 text-end">
                <button
                  type="button"
                  onclick="toPage_3()"
                  class="btn btn-muted"
                >
                  Back
                </button>
                <button type="submit" class="btn btn-primary">
                  Edit
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
