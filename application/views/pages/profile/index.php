<div class="container-fluid">
  <div
    class="page-header min-height-300 border-radius-xl mt-4"
    style="
      background-image: url('<?=base_url();?>/assets/img/curved-images/curved0.jpg');
      background-position-y: 50%;
    "
  >
    <span class="mask bg-gradient-primary opacity-6"></span>
  </div>
  <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
    <div class="row gx-4">
      <div class="col-auto">
        <div class="avatar avatar-xl position-relative">
          <img
            src="<?=base_url();?>/assets/img/bruce-mars.jpg"
            alt="profile_image"
            class="w-100 border-radius-lg shadow-sm"
          />
        </div>
      </div>
      <div class="col-auto my-auto">
        <div class="h-100">
          <h5 class="mb-1">Alec Thompson</h5>
          <p class="mb-0 font-weight-bold text-sm">
            IT Support / Staff IT
          </p>
        </div>
      </div>
      <div
        class="
          col-lg-4 col-md-6
          my-sm-auto
          ms-sm-auto
          me-sm-0
          mx-auto
          mt-3
        "
      >
        <div class="nav-wrapper position-relative end-0">
          <ul
            class="nav nav-pills nav-fill p-1 bg-transparent"
            role="tablist"
          >
            <li class="nav-item">
              <a
                class="nav-link mb-0 px-0 py-1 active"
                data-bs-toggle="tab"
                href="javascript:;"
                role="tab"
                aria-selected="false"
              >
                <svg
                  class="text-dark"
                  width="16px"
                  height="16px"
                  viewBox="0 0 40 40"
                  version="1.1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                >
                  <title>settings</title>
                  <g
                    stroke="none"
                    stroke-width="1"
                    fill="none"
                    fill-rule="evenodd"
                  >
                    <g
                      transform="translate(-2020.000000, -442.000000)"
                      fill="#FFFFFF"
                      fill-rule="nonzero"
                    >
                      <g transform="translate(1716.000000, 291.000000)">
                        <g transform="translate(304.000000, 151.000000)">
                          <polygon
                            class="color-background"
                            opacity="0.596981957"
                            points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667"
                          ></polygon>
                          <path
                            class="color-background"
                            d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z"
                            opacity="0.596981957"
                          ></path>
                          <path
                            class="color-background"
                            d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z"
                          ></path>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
                <span class="ms-1">Settings</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12 col-xl-4">
      <div class="card h-100">
        <div class="card-header pb-0 p-3">
          <h6 class="mb-0">Change Password</h6>
        </div>
        <div class="card-body p-3">
          <h6 class="text-uppercase text-body text-xs font-weight-bolder">
            Account
          </h6>
          <form action="">
            <ul class="list-group">
              <li class="list-group-item border-0 px-0">
                <div class="form-group">
                  <label>Old Password</label>
                  <input
                    type="text"
                    name="opw"
                    class="form-control"
                    autocomplete="off"
                  />
                </div>
              </li>
              <li class="list-group-item border-0 px-0">
                <div class="form-group">
                  <label>New Password</label>
                  <input
                    type="text"
                    name="pw"
                    class="form-control"
                    autocomplete="off"
                  />
                </div>
              </li>
              <li class="list-group-item border-0 px-0">
                <div class="form-group">
                  <label>Confirm Password</label>
                  <input
                    type="text"
                    name="cpw"
                    class="form-control"
                    autocomplete="off"
                  />
                </div>
              </li>
              <li class="list-group-item border-0 px-0">
                <div class="form-group text-end">
                  <button class="btn btn-primary">Change</button>
                </div>
              </li>
            </ul>
          </form>
        </div>
      </div>
    </div>
    <div class="col-12 col-xl-4">
      <div class="card h-100 mt-3">
        <div class="card-header pb-0 p-3">
          <div class="row">
            <div class="col-md-8 d-flex align-items-center">
              <h6 class="mb-0">Profile Information</h6>
            </div>
            <div class="col-md-4 text-end">
              <a href="javascript:;">
                <i
                  class="fas fa-user-edit text-secondary text-sm"
                  data-bs-toggle="tooltip"
                  data-bs-placement="top"
                  title="Edit Profile"
                ></i>
              </a>
            </div>
          </div>
        </div>
        <div class="card-body p-3">
          <hr class="horizontal gray-light" />
          <ul class="list-group">
            <li class="list-group-item border-0 ps-0 pt-0 text-sm">
              <strong class="text-dark">Full Name:</strong> &nbsp; Alec M.
              Thompson
            </li>
            <li class="list-group-item border-0 ps-0 pt-0 text-sm">
              <strong class="text-dark">NIK:</strong> &nbsp; 1083937892
            </li>
            <li class="list-group-item border-0 ps-0 pt-0 text-sm">
              <strong class="text-dark">Bagian:</strong> &nbsp; IT Support
            </li>
            <li class="list-group-item border-0 ps-0 pt-0 text-sm">
              <strong class="text-dark">Jabatan:</strong> &nbsp; Staff IT
            </li>
            <li class="list-group-item border-0 ps-0 text-sm">
              <strong class="text-dark">No Hp:</strong> &nbsp; 0896355277
            </li>
            <li class="list-group-item border-0 ps-0 text-sm">
              <strong class="text-dark">Tempat/Tanggal Lahir:</strong>
              &nbsp; Pekanbaru, 10 Mei 2000
            </li>
            <li class="list-group-item border-0 ps-0 text-sm">
              <strong class="text-dark">Status:</strong> &nbsp; Belum
              Menikah
            </li>
            <li class="list-group-item border-0 ps-0 pb-0">
              <strong class="text-dark text-sm">Pendidikan:</strong>
              &nbsp; S1 Teknik Mesin
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-12 col-xl-4">
      <div class="card h-100 mt-3">
        <div class="card-header pb-0 p-3">
          <h6 class="mb-0">Change Profile</h6>
        </div>
        <div class="card-body p-3 text-center">
          <img
            src="<?=base_url();?>/assets/img/bruce-mars.jpg"
            class="img-fluid w-75 img-thumbnail"
            alt=""
          />
          <form action="">
            <button class="btn btn-secondary mt-4">Upload</button>
          </form>
        </div>
      </div>
    </div>
  </div>
