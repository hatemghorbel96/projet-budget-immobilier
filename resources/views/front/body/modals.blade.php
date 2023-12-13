<div class="modal fade" id="signin-modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered p-2 my-0 mx-auto" style="max-width: 950px;">
      <div class="modal-content">
        <div class="modal-body px-0 py-2 py-sm-0">
          <button class="btn-close position-absolute top-0 end-0 mt-3 me-3" type="button" data-bs-dismiss="modal"></button>
          <div class="row mx-0 align-items-center">
            <div class="col-md-6 border-end-md p-4 p-sm-5">
              <h2 class="h3 mb-4 mb-sm-5">Hey there!<br>Welcome back.</h2><img class="d-block mx-auto" src="img/signin-modal/signin.svg" width="344" alt="Illustartion">
              <div class="mt-4 mt-sm-5">Don't have an account? <a href="#signup-modal" data-bs-toggle="modal" data-bs-dismiss="modal">Sign up here</a></div>
            </div>
            <div class="col-md-6 px-4 pt-2 pb-4 px-sm-5 pb-sm-5 pt-md-5"><a class="btn btn-outline-info w-100 mb-3" href="#"><i class="fi-google fs-lg me-1"></i>Sign in with Google</a><a class="btn btn-outline-info w-100 mb-3" href="#"><i class="fi-facebook fs-lg me-1"></i>Sign in with Facebook</a>
              <div class="d-flex align-items-center py-3 mb-3">
                <hr class="w-100">
                <div class="px-3">Or</div>
                <hr class="w-100">
              </div>
              <form class="needs-validation" novalidate>
                <div class="mb-4">
                  <label class="form-label mb-2" for="signin-email">Email address</label>
                  <input class="form-control" type="email" id="signin-email" placeholder="Enter your email" required>
                </div>
                <div class="mb-4">
                  <div class="d-flex align-items-center justify-content-between mb-2">
                    <label class="form-label mb-0" for="signin-password">Password</label><a class="fs-sm" href="#">Forgot password?</a>
                  </div>
                  <div class="password-toggle">
                    <input class="form-control" type="password" id="signin-password" placeholder="Enter password" required>
                    <label class="password-toggle-btn" aria-label="Show/hide password">
                      <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                    </label>
                  </div>
                </div>
                <button class="btn btn-primary btn-lg w-100" type="submit">Sign in         </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Sign Up Modal-->
  <div class="modal fade" id="signup-modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered p-2 my-0 mx-auto" style="max-width: 950px;">
      <div class="modal-content">
        <div class="modal-body px-0 py-2 py-sm-0">
          <button class="btn-close position-absolute top-0 end-0 mt-3 me-3" type="button" data-bs-dismiss="modal"></button>
          <div class="row mx-0 align-items-center">
            <div class="col-md-6 border-end-md p-4 p-sm-5">
              <h2 class="h3 mb-4 mb-sm-5">Join Finder.<br>Get premium benefits:</h2>
              <ul class="list-unstyled mb-4 mb-sm-5">
                <li class="d-flex mb-2"><i class="fi-check-circle text-primary mt-1 me-2"></i><span>Add and promote your listings</span></li>
                <li class="d-flex mb-2"><i class="fi-check-circle text-primary mt-1 me-2"></i><span>Easily manage your wishlist</span></li>
                <li class="d-flex mb-0"><i class="fi-check-circle text-primary mt-1 me-2"></i><span>Leave reviews</span></li>
              </ul><img class="d-block mx-auto" src="img/signin-modal/signup.svg" width="344" alt="Illustartion">
              <div class="mt-sm-4 pt-md-3">Already have an account? <a href="#signin-modal" data-bs-toggle="modal" data-bs-dismiss="modal">Sign in</a></div>
            </div>
            <div class="col-md-6 px-4 pt-2 pb-4 px-sm-5 pb-sm-5 pt-md-5"><a class="btn btn-outline-info w-100 mb-3" href="#"><i class="fi-google fs-lg me-1"></i>Sign in with Google</a><a class="btn btn-outline-info w-100 mb-3" href="#"><i class="fi-facebook fs-lg me-1"></i>Sign in with Facebook</a>
              <div class="d-flex align-items-center py-3 mb-3">
                <hr class="w-100">
                <div class="px-3">Or</div>
                <hr class="w-100">
              </div>
              <form class="needs-validation" novalidate>
                <div class="mb-4">
                  <label class="form-label" for="signup-name">Full name</label>
                  <input class="form-control" type="text" id="signup-name" placeholder="Enter your full name" required>
                </div>
                <div class="mb-4">
                  <label class="form-label" for="signup-email">Email address</label>
                  <input class="form-control" type="email" id="signup-email" placeholder="Enter your email" required>
                </div>
                <div class="mb-4">
                  <label class="form-label" for="signup-password">Password <span class='fs-sm text-muted'>min. 8 char</span></label>
                  <div class="password-toggle">
                    <input class="form-control" type="password" id="signup-password" minlength="8" required>
                    <label class="password-toggle-btn" aria-label="Show/hide password">
                      <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                    </label>
                  </div>
                </div>
                <div class="mb-4">
                  <label class="form-label" for="signup-password-confirm">Confirm password</label>
                  <div class="password-toggle">
                    <input class="form-control" type="password" id="signup-password-confirm" minlength="8" required>
                    <label class="password-toggle-btn" aria-label="Show/hide password">
                      <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                    </label>
                  </div>
                </div>
                <div class="form-check mb-4">
                  <input class="form-check-input" type="checkbox" id="agree-to-terms" required>
                  <label class="form-check-label" for="agree-to-terms">By joining, I agree to the <a href='#'>Terms of use</a> and <a href='#'>Privacy policy</a></label>
                </div>
                <button class="btn btn-primary btn-lg w-100" type="submit">Sign up         </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="cost-calculator" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header d-block position-relative border-0 px-sm-5 px-4">
          <h3 class="h4 modal-title mt-4 text-center">Explore your property’s value</h3>
          <button class="btn-close position-absolute top-0 end-0 mt-3 me-3" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body px-sm-5 px-4">
          <form class="needs-validation" novalidate>
            <div class="mb-3">
              <label class="form-label fw-bold mb-2" for="property-city">Property location</label>
              <select class="form-control form-select" id="property-city" required>
                <option value="" selected disabled hidden>Choose city</option>
                <option value="Chicago">Chicago</option>
                <option value="Dallas">Dallas</option>
                <option value="Los Angeles">Los Angeles</option>
                <option value="New York">New York</option>
                <option value="San Diego">San Diego</option>
              </select>
              <div class="invalid-feedback">Please choose the city.</div>
            </div>
            <div class="mb-3">
              <select class="form-control form-select" id="property-district" required>
                <option value="" selected disabled hidden>Choose district</option>
                <option value="Brooklyn">Brooklyn</option>
                <option value="Manhattan">Manhattan</option>
                <option value="Staten Island">Staten Island</option>
                <option value="The Bronx">The Bronx</option>
                <option value="Queens">Queens</option>
              </select>
              <div class="invalid-feedback">Please choose the district.</div>
            </div>
            <div class="pt-2 mb-3">
              <label class="form-label fw-bold mb-2" for="property-address">Address</label>
              <input class="form-control" type="text" id="property-address" placeholder="Enter your address" required>
              <div class="invalid-feedback">Please enter your property's address.</div>
            </div>
            <div class="pt-2 mb-3">
              <label class="form-label fw-bold mb-2">Number of rooms</label>
              <div class="btn-group" role="group" aria-label="Choose number of rooms">
                <input class="btn-check" type="radio" id="rooms-1" name="rooms">
                <label class="btn btn-outline-secondary" for="rooms-1">1</label>
                <input class="btn-check" type="radio" id="rooms-2" name="rooms">
                <label class="btn btn-outline-secondary" for="rooms-2">2</label>
                <input class="btn-check" type="radio" id="rooms-3" name="rooms">
                <label class="btn btn-outline-secondary" for="rooms-3">3</label>
                <input class="btn-check" type="radio" id="rooms-4" name="rooms">
                <label class="btn btn-outline-secondary" for="rooms-4">4</label>
                <input class="btn-check" type="radio" id="rooms-5" name="rooms">
                <label class="btn btn-outline-secondary" for="rooms-5">5+</label>
              </div>
            </div>
            <div class="pt-2 mb-4">
              <label class="form-label fw-bold mb-2" for="property-area">Total area, sq.m.</label>
              <input class="form-control" type="text" id="property-area" placeholder="Enter your area" required>
              <div class="invalid-feedback">Please enter your property's area.</div>
            </div>
            <button class="btn btn-primary d-block w-100 mb-4" type="submit"><i class="fi-calculator me-2"></i>Calculate</button>
          </form>
        </div>
      </div>
    </div>
  </div>