@push('pricing-script')
<script src="{{asset('assets/panel/js/pages-pricing.js')}}"></script>
@endpush

<!-- Pricing Modal -->
<div class="modal fade" id="pricingModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-simple modal-pricing">
    <div class="modal-content bg-body p-2 p-md-5">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <!-- Pricing Plans -->
        <div class="pricing-plans">
          <div class="text-center mb-4">
            <h3>Find the right plan for your site</h3>
            <p> Get started with us - it's perfect for individuals and teams. Choose a subscription plan that meets your needs. </p>
          </div>
          <div class="d-flex align-items-center justify-content-center mt-5 pt-2 mb-4 pb-1 flex-wrap gap-2">
            <label class="switch switch-primary switch-lg ms-3 ms-sm-0">
              <span class="switch-label fw-semibold">Monthly</span>
              <input type="checkbox" class="switch-input price-duration-toggler" checked />
              <span class="switch-toggle-slider">
                <span class="switch-on"></span>
                <span class="switch-off"></span>
              </span>
              <span class="switch-label fw-semibold">Annual</span>
            </label>
          </div>
          <div class="row mx-0 gy-3">
            <!-- Starter -->
            <div class="col-xl mb-lg-0 lg-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="text-start text-uppercase">Starter</h5>

                  <div class="text-center position-relative mb-4 pb-1">
                    <div class="mb-2 d-flex">
                      <h1 class="price-toggle text-primary price-yearly mb-0">$49</h1>
                      <h1 class="price-toggle text-primary price-monthly mb-0 d-none">$99</h1>
                      <sub class="h5 text-muted pricing-duration mt-auto mb-2">/mo</sub>
                    </div>
                    <small class="position-absolute start-0 m-auto price-yearly price-yearly-toggle text-muted">$ 588 / year</small>
                  </div>

                  <p>All the basics for business that are just getting started</p>

                  <hr>

                  <ul class="list-unstyled pt-2 pb-1">
                    <li class="mb-2">
                      <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-primary me-2">
                        <i class="bx bx-check bx-xs"></i>
                      </span>
                      Up to 10 users
                    </li>
                    <li class="mb-2">
                      <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-primary me-2">
                        <i class="bx bx-check bx-xs"></i>
                      </span>
                      150+ components
                    </li>
                    <li class="mb-2">
                      <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-primary me-2">
                        <i class="bx bx-check bx-xs"></i>
                      </span>
                      Basic support on Github
                    </li>
                    <li class="mb-2">
                      <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-secondary me-2">
                        <i class="bx bx-x fs-5 lh-1"></i>
                      </span>
                      Monthly updates
                    </li>
                    <li class="mb-2">
                      <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-secondary me-2">
                        <i class="bx bx-x fs-5 lh-1"></i>
                      </span>
                      Integrations
                    </li>
                    <li class="mb-2">
                      <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-secondary me-2">
                        <i class="bx bx-x fs-5 lh-1"></i>
                      </span>
                      Full Support
                    </li>
                  </ul>

                  <a href="{{url('auth/register-basic')}}" class="btn btn-primary d-grid w-100">Get Started</a>
                </div>
              </div>
            </div>

            <!-- Exclusive -->
            <div class="col-xl mb-lg-0 lg-4">
              <div class="card border border-2 border-primary">
                <div class="card-body">
                  <div class="d-flex justify-content-between flex-wrap mb-3">
                    <h5 class="text-start text-uppercase mb-0">Pro / 15% OFF</h5>
                    <span class="badge bg-primary rounded-pill">Popular</span>
                  </div>

                  <div class="text-center position-relative mb-4 pb-1">
                    <div class="mb-2 d-flex">
                      <h1 class="price-toggle text-primary price-yearly mb-0">$99</h1>
                      <h1 class="price-toggle text-primary price-monthly mb-0 d-none">$199</h1>
                      <sub class="h5 text-muted pricing-duration mt-auto mb-2">/mo</sub>
                    </div>
                    <small class="position-absolute start-0 m-auto price-yearly price-yearly-toggle text-muted">$ 1,188 / year</small>
                  </div>
                  <p>Batter for growing business that want to more customers</p>

                  <hr>

                  <ul class="list-unstyled pt-2 pb-1">
                    <li class="mb-2">
                      <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-primary me-2">
                        <i class="bx bx-check bx-xs"></i>
                      </span>
                      Up to 10 users
                    </li>
                    <li class="mb-2">
                      <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-primary me-2">
                        <i class="bx bx-check bx-xs"></i>
                      </span>
                      150+ components
                    </li>
                    <li class="mb-2">
                      <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-primary me-2">
                        <i class="bx bx-check bx-xs"></i>
                      </span>
                      Basic support on Github
                    </li>
                    <li class="mb-2">
                      <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-primary me-2">
                        <i class="bx bx-check bx-xs"></i>
                      </span>
                      Monthly updates
                    </li>
                    <li class="mb-2">
                      <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-secondary me-2">
                        <i class="bx bx-x fs-5 lh-1"></i>
                      </span>
                      Integrations
                    </li>
                    <li class="mb-2">
                      <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-secondary me-2">
                        <i class="bx bx-x fs-5 lh-1"></i>
                      </span>
                      Full Support
                    </li>
                  </ul>

                  <a href="{{url('auth/register-basic')}}" class="btn btn-primary d-grid w-100">Get Started</a>
                </div>
              </div>
            </div>

            <!-- Enterprise -->
            <div class="col-xl mb-lg-0 lg-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="text-start text-uppercase">ENTERPRISE</h5>

                  <div class="text-center position-relative mb-4 pb-1">
                    <div class="mb-2 d-flex">
                      <h1 class="price-toggle text-primary price-yearly mb-0">$149</h1>
                      <h1 class="price-toggle text-primary price-monthly mb-0 d-none">$499</h1>
                      <sub class="h5 text-muted pricing-duration mt-auto mb-2">/mo</sub>
                    </div>
                    <small class="position-absolute start-0 m-auto price-yearly price-yearly-toggle text-muted">$ 1,788 / year</small>
                  </div>
                  <p>Advance features for enterprise who need more customization</p>

                  <hr>

                  <ul class="list-unstyled pt-2 pb-1">
                    <li class="mb-2">
                      <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-primary me-2">
                        <i class="bx bx-check bx-xs"></i>
                      </span>
                      Up to 10 users
                    </li>
                    <li class="mb-2">
                      <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-primary me-2">
                        <i class="bx bx-check bx-xs"></i>
                      </span>
                      150+ components
                    </li>
                    <li class="mb-2">
                      <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-primary me-2">
                        <i class="bx bx-check bx-xs"></i>
                      </span>
                      Basic support on Github
                    </li>
                    <li class="mb-2">
                      <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-primary me-2">
                        <i class="bx bx-check bx-xs"></i>
                      </span>
                      Monthly updates
                    </li>
                    <li class="mb-2">
                      <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-primary me-2">
                        <i class="bx bx-check bx-xs"></i>
                      </span>
                      Integrations
                    </li>
                    <li class="mb-2">
                      <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-primary me-2">
                        <i class="bx bx-check bx-xs"></i>
                      </span>
                      Full Support
                    </li>
                  </ul>

                  <a href="{{url('auth/register-basic')}}" class="btn btn-primary d-grid w-100">Get Started</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/ Pricing Plans -->
      </div>
    </div>
  </div>
</div>
<!--/ Pricing Modal -->
