@include('admin1.layout.head')
@include('admin1.layout.header')
@include('admin1.layout.sidebar')

<main id="main" class="main shadow">


    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">

                    <!-- Sales Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                        class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
        
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Total user <span>| </span></h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-cart"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{$userCount }}</h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Sales Card -->

                    <!-- Revenue Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card revenue-card">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                        class="bi bi-three-dots"></i></a>
                                
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Total Post <span>|</span></h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-currency-dollar"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{$postCount}}</h6>
                                     

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Revenue Card -->

                    <!-- Customers Card -->
                    <div class="col-xxl-4 col-xl-12">

                        <div class="card info-card customers-card">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                        class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Customers <span>| This Year</span></h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>1244</h6>
                                        <span class="text-danger small pt-1 fw-bold">12%</span> <span
                                            class="text-muted small pt-2 ps-1">decrease</span>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div><!-- End Customers Card -->

                    <div class="container">
                     
                      @foreach ($model as $value)
                  
                          <div class="card shadow-lg p-3 mb-5 bg-body rounded ">
                              <p> <b>user name:</b> </p>
                                  {{ $value->user->name }}
                                  {{$value->created_at}}
                              <p> <b>Title</b> </p>
                              <div class="card-header">
                                  {{ $value->title }}
                              </div>
                              <div class="card-body">
                                  <p> <b>Discruption</b> </p>
                                  <blockquote class="blockquote mb-0">
                                      {{ strip_tags($value->description) }}
                                  </blockquote>
                              </div>
                              <div >
                                  <a href="{{route('admin-delete-post',$value->id)}}" class="btn btn-danger"> Delete </a>
                                  
                                  <a href="{{route('admin-edit-post',$value->id)}}" class="btn btn-info"> Edit </a>
                                  <a href="{{route('admin-blockuser',$value->id)}}" class="btn btn-info"> Block </a>
                                  </div>
                          </div><br>
                      @endforeach
                  </div>
                  <div class="d-flex">
                    {!! $model->links() !!}
                </div>
                </div>
    </section>

</main><!-- End #main -->
@include('admin1.layout.footer')
