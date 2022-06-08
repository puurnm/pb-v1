@extends('layouts.homepage')

@section('content')
<div class="flash-news-banner">
    <div class="container">
      <div class="d-lg-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center">
          <span class="badge badge-dark mr-3">Flash news</span>
          <p class="mb-0">
            Lorem Ipsum has been the industry's standard dummy text ever
            since the 1500s.
          </p>
        </div>
        <div class="d-flex">
            <span class="mr-3 text-danger">
                <?php
                echo date('l, F d, Y');
                ?>
            </span>
          <span class="text-danger">30°C,London</span>
        </div>
      </div>
    </div>
  </div>
  <div class="content-wrapper">
    <div class="container">
      <div class="col-sm-12">
        <div class="card" data-aos="fade-up">
          <div class="card-body">
            <div class="row">
              <div class="col-lg-10">
                <div class="row">
                  <div class="col-sm-10 grid-margin text-center">
                    <img
                        src="{{ $berita->image }}"
                        alt="banner"
                        class="img-fluid"
                      />
                  </div>
                  <div class="col-sm-10 grid-margin">
                    <h2 class="font-weight-600 mb-2">
                      {{ $berita->judul }}
                    </h2>
                    <p class="fs-13 text-muted mb-0">
                      <span class="mr-2">Photo </span>{{ date('M j, Y', strtotime($berita->created_at)) }}
                    </p>
                    <p class="fs-15">
                      {!! $berita->isi !!}
                    </p>
                    <div class="sharethis-inline-share-buttons"></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-2">
                <h2 class="mb-4 text-primary font-weight-600">
                  Latest news
                </h2>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="border-bottom pb-4 pt-4">
                      <div class="row">
                        <div class="col-sm-8">
                          <h5 class="font-weight-600 mb-1">
                            Ways to stay social online while in self..
                          </h5>
                          <p class="fs-13 text-muted mb-0">
                            <span class="mr-2">Photo </span>10 Minutes ago
                          </p>
                        </div>
                        <div class="col-sm-4">
                          <div class="rotate-img">
                            <img
                              src="../assets/images/magazine/Magzine_1.jpg"
                              alt="banner"
                              class="img-fluid"
                            />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="border-bottom pb-4 pt-4">
                      <div class="row">
                        <div class="col-sm-8">
                          <h5 class="font-weight-600 mb-1">
                            Premier League players join charity..
                          </h5>
                          <p class="fs-13 text-muted mb-0">
                            <span class="mr-2">Photo </span>10 Minutes ago
                          </p>
                        </div>
                        <div class="col-sm-4">
                          <div class="rotate-img">
                            <img
                              src="../assets/images/magazine/Magzine_2.jpg"
                              alt="banner"
                              class="img-fluid"
                            />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="pt-4">
                      <div class="row">
                        <div class="col-sm-8">
                          <h5 class="font-weight-600 mb-1">
                            UK Athletics board changed stance on..
                          </h5>
                          <p class="fs-13 text-muted mb-0">
                            <span class="mr-2">Photo </span>10 Minutes ago
                          </p>
                        </div>
                        <div class="col-sm-4">
                          <div class="rotate-img">
                            <img
                              src="../assets/images/magazine/Magzine_3.jpg"
                              alt="banner"
                              class="img-fluid"
                            />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="trending">
                  <h2 class="mb-4 text-primary font-weight-600">
                    Trending
                  </h2>
                  <div class="mb-4">
                    <div class="rotate-img">
                      <img
                        src="../assets/images/magazine/Magzine_4.jpg"
                        alt="banner"
                        class="img-fluid"
                      />
                    </div>
                    <h3 class="mt-3 font-weight-600">
                      Virus Kills Member Of Advising Iran’s Supreme
                    </h3>
                    <p class="fs-13 text-muted mb-0">
                      <span class="mr-2">Photo </span>10 Minutes ago
                    </p>
                  </div>
                  <div class="mb-4">
                    <div class="rotate-img">
                      <img
                        src="../assets/images/magazine/Magzine_5.jpg"
                        alt="banner"
                        class="img-fluid"
                      />
                    </div>
                    <h3 class="mt-3 font-weight-600">
                      Virus Kills Member Of Advising Iran’s Supreme
                    </h3>
                    <p class="fs-13 text-muted mb-0">
                      <span class="mr-2">Photo </span>10 Minutes ago
                    </p>
                  </div>
                  <div class="mb-4">
                    <div class="rotate-img">
                      <img
                        src="../assets/images/magazine/Magzine_6.jpg"
                        alt="banner"
                        class="img-fluid"
                      />
                    </div>
                    <h3 class="mt-3 font-weight-600">
                      Virus Kills Member Of Advising Iran’s Supreme
                    </h3>
                    <p class="fs-13 text-muted mb-0">
                      <span class="mr-2">Photo </span>10 Minutes ago
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
