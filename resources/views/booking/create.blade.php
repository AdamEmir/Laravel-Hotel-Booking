<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sidebar With Bootstrap</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="" />
  </head>

  <body>
    <div class="wrapper">
      <aside id="sidebar">
        <div class="d-flex">
          <button class="toggle-btn" type="button">
            <i class="lni lni-grid-alt"></i>
          </button>
          <div class="sidebar-logo">
            <a href="#">Hotel Traversal</a>
          </div>
        </div>
        <ul class="sidebar-nav">
          <li class="sidebar-item">
            <a href="#" class="sidebar-link">
              <i class="lni lni-user"></i>
              <span>Room Booking</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="#" class="sidebar-link">
              <i class="lni lni-agenda"></i>
              <span>Task</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a
              href="#"
              class="sidebar-link collapsed has-dropdown"
              data-bs-toggle="collapse"
              data-bs-target="#auth"
              aria-expanded="false"
              aria-controls="auth"
            >
              <i class="lni lni-protection"></i>
              <span>Auth</span>
            </a>
            <ul
              id="auth"
              class="sidebar-dropdown list-unstyled collapse"
              data-bs-parent="#sidebar"
            >
              <li class="sidebar-item">
                <a href="#" class="sidebar-link">Login</a>
              </li>
              <li class="sidebar-item">
                <a href="#" class="sidebar-link">Register</a>
              </li>
            </ul>
          </li>
          <li class="sidebar-item">
            <a
              href="#"
              class="sidebar-link collapsed has-dropdown"
              data-bs-toggle="collapse"
              data-bs-target="#multi"
              aria-expanded="false"
              aria-controls="multi"
            >
              <i class="lni lni-layout"></i>
              <span>Multi Level</span>
            </a>
            <ul
              id="multi"
              class="sidebar-dropdown list-unstyled collapse"
              data-bs-parent="#sidebar"
            >
              <li class="sidebar-item">
                <a
                  href="#"
                  class="sidebar-link collapsed"
                  data-bs-toggle="collapse"
                  data-bs-target="#multi-two"
                  aria-expanded="false"
                  aria-controls="multi-two"
                >
                  Two Links
                </a>
                <ul
                  id="multi-two"
                  class="sidebar-dropdown list-unstyled collapse"
                >
                  <li class="sidebar-item">
                    <a href="#" class="sidebar-link">Link 1</a>
                  </li>
                  <li class="sidebar-item">
                    <a href="#" class="sidebar-link">Link 2</a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="sidebar-item">
            <a href="#" class="sidebar-link">
              <i class="lni lni-popup"></i>
              <span>Notification</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="#" class="sidebar-link">
              <i class="lni lni-cog"></i>
              <span>Setting</span>
            </a>
          </li>
        </ul>
        <div class="sidebar-footer">
          <a href="#" class="sidebar-link">
            <i class="lni lni-exit"></i>
            <span>Logout</span>
          </a>
        </div>
      </aside>

      <div class="main p-4">
        <form action="" method="">
          <div class="form-group">
            <div class="container">
              <div class="col-lg-6 margin-tb">
                <div class="pull-left">
                  <h2>Room Booking</h2>
                  <br />
                </div>
              </div>
            </div>
            <div
              class="container-sm rounded p-4"
              style="border: 2px solid #adb5bd"
            >
              <div class="col-lg-6 margin-tb">
                <div class="pull-left"><h4>Personel-In-Charge</h4></div>
              </div>
              <div class="row">
                <div class="col-sm-4 order-1">
                  <div class="form-group">
                    <strong>Employee ID:</strong>
                    <div class="row">
                      <div class="dropdown order-1">
                        <button
                          class="btn btn-secondary dropdown-toggle"
                          type="button"
                          id="dropdownMenuButton1"
                          data-bs-toggle="dropdown"
                          aria-expanded="false"
                        >
                          Select ID
                        </button>
                        <ul
                          class="dropdown-menu"
                          aria-labelledby="dropdownMenuButton1"
                        >
                          <li><a class="dropdown-item" href="#">190020</a></li>
                          <li>
                            <a class="dropdown-item" href="#">190032</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">190041</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-8 order-2">
                  <strong>Employee Name:</strong>
                  <div class="col-sm-8 order-3">
                    <input
                      type="text"
                      name="GuestName"
                      class="form-control"
                      placeholder="Full Name"
                    />
                  </div>
                </div>
              </div>
            </div>
            <br />
            <div class="form-group">
              <div
                class="container-sm rounded p-4"
                style="border: 2px solid #adb5bd"
              >
                <div class="col-lg-12 margin-tb">
                  <div class="pull-left">
                    <h4>Guest Information</h4>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                    <strong>Full Name: </strong
                    ><input
                      type="text"
                      name="GuestName"
                      class="form-control"
                      placeholder="Full Name"
                    />
                  </div>
                </div>
                <br />
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                    <strong>Phone Number: </strong
                    ><input
                      type="text"
                      name="customerName"
                      class="form-control"
                      placeholder="Phone Number"
                    />
                  </div>
                </div>
                <br />
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                    <strong>Email: </strong
                    ><input
                      type="email"
                      name="customerName"
                      class="form-control"
                      placeholder="Email"
                    />
                  </div>
                </div>
                <br />
                <div class="row align-items-start">
                  <div class="col-6">
                    <strong>Check In: </strong
                    ><input
                      type="date"
                      name="customerName"
                      class="form-control"
                      placeholder="Check In"
                    />
                  </div>
                  <div class="col-6">
                    <strong>Check Out: </strong
                    ><input
                      type="date"
                      name="customerName"
                      class="form-control"
                      placeholder="Check Out"
                    />
                  </div>
                </div>
                <br />

                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                    <strong>Guest Number: </strong
                    ><input
                      type="number"
                      name="customerName"
                      class="form-control"
                      placeholder="Guest Number"
                    />
                  </div>
                </div>
                <br />
                <div class="row justify-content-center">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <strong>Room Type:</strong><br />
                      <div class="dropdown">
                        <button
                          class="btn btn-secondary dropdown-toggle"
                          type="button"
                          id="dropdownMenuButton1"
                          data-bs-toggle="dropdown"
                          aria-expanded="false"
                        >
                          Room Type
                        </button>
                        <ul
                          class="dropdown-menu"
                          aria-labelledby="dropdownMenuButton1"
                        >
                          <li><a class="dropdown-item" href="#">Single</a></li>
                          <li>
                            <a class="dropdown-item" href="#">Deluxe</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">Suite</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <br />
                  </div>
                  <div class="col-sm-4">
                    <strong>Smoking Preferences: </strong>
                    <br /><br />
                    <div class="row">
                      <div class="col-sm-1 order-1">
                        <input
                          type="radio"
                          name="smokingpref"
                          id="smokeNo"
                          value="No-Smoking"
                          class="form-check-input"
                        />
                      </div>
                      <div class="col-sm-2 order-2">
                        <label for="smokeNo">No</label>
                      </div>
                      <div class="col-sm-1 order-3">
                        <input
                          type="radio"
                          name="smokingpref"
                          id="smokeYes"
                          value="Yes-Smoking"
                          class="form-check-input"
                        />
                      </div>
                      <div class="col-sm-2 order-4">
                        <label for="smokeYes">Yes</label>
                      </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-2">
                      <div class="form-group"><br /><br /></div>
                    </div>
                  </div>
                  <div class="col-sm-4 order-3">
                    <strong>Food Package: </strong>
                    <br /><br />
                    <div class="row">
                      <div class="col-sm-1 order-1">
                        <input
                          type="checkbox"
                          name="foodpackage"
                          id="breakfastbuffet"
                          value="breakfastbuffet"
                          class="form-check-input"
                        />
                      </div>
                      <div class="col-sm-5 order-2">
                        <label for="breakfastbuffet">Breakfast Buffet</label>
                      </div>
                      <div class="col-sm-1 order-3">
                        <input
                          type="checkbox"
                          name="foodpackage"
                          id="dinnerbuffet"
                          value="dinnerbuffet"
                          class="form-check-input"
                        />
                      </div>
                      <div class="col-sm-4 order-4">
                        <label for="dinnerbuffet">Dinner Buffet</label>
                      </div>
                    </div>
                    <br />
                  </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                    <strong>Remarks/Questions: </strong
                    ><textarea
                      class="form-control"
                      style="height: 150px"
                      name="remarks/questions"
                      placeholder="Remarks/Questions"
                    ></textarea>
                  </div>
                </div>
                <br />
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                    <strong>Damage Remarks: </strong
                    ><textarea
                      class="form-control"
                      style="height: 150px"
                      name="damageremarks"
                      placeholder="Damage Remarks"
                    ></textarea>
                  </div>
                </div>
                <br />
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                    <strong>Total Fine: </strong>
                    <div class="input-group mb-3">
                      <span class="input-group-text">RM</span>
                      <input
                        type="number"
                        class="form-control"
                        aria-label="Amount (to the nearest dollar)"
                        placeholder="0.00"
                      />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <br />
            <div class="container">
              <div class="row justify-content-end">
                <button type="button" class="p-10 btn btn-warning col-3 mx-4">
                  Reset
                </button>
                <button type="button" class="btn btn-primary col-5">
                  Submit
                </button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
    <script src="script.js"></script>
  </body>
</html>
