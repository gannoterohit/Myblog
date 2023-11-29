@include('admin1.layout.head')
@include('admin1.layout.header')
@include('admin1.layout.sidebar')

<main id="main" class="main">


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

                    <!-- Table with stripped rows -->
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th>Sno</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $sr = 1;
                            @endphp
                            @foreach ($model as $value)
                                <tr>
                                    <td>{{ $sr++ }} </td>
                                    <td>{{ $value->name }}</td>
                                    <td>
                                        {{ $value->email }}
                                    </td>

                                    <td>
                                        <a href="{{ route('admin-blockuser', $value->id) }}"
                                            class="btn @if ($value->status === 0) btn-danger @elseif($value->status === 1) btn-success @endif">
                                            @if ($value->status === 0)
                                                Block
                                            @elseif($value->status === 1)
                                                Unblock
                                            @endif
                                        </a>
                                    </td>

                                </tr>
                                @endforeach
                        </tbody>
                    
                    </table>
                    <!-- End Table with stripped rows -->
                    <div class="d-flex">
                        {!! $model->links() !!}
                    </div>





                </div>
    </section>

</main><!-- End #main -->
@include('admin1.layout.footer')
