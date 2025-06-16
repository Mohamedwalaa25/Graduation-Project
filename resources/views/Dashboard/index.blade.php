@extends('Dashboard.Layouts.Master')
@section('css')
    {{-- Apex Charts Css --}}
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
@endsection
@section('title_page')
    Home
@endsection
@section('one')
    Home
@endsection
@section('two')
    Home
@endsection

@section('content')
    <section class="section dashboard">
        <div class="row">
            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">
                    <!-- Sales Card -->
                    <div class="col-xxl-3 col-md-6">
                        <div class="card info-card sales-card">


                            <div class="card-body">
                                <h5 class="card-title">Orders <span>| Year</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-cart"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $ordersCount }}</h6>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Sales Card -->

                    <!-- Revenue Card -->
                    <div class="col-xxl-3 col-md-6">
                        <div class="card info-card revenue-card">


                            <div class="card-body">
                                <h5 class="card-title">
                                    Revenue <span>| Year</span>
                                </h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-currency-dollar"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>${{ $money }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Revenue Card -->

                    <!-- Customers Card -->
                    <div class="col-xxl-3 col-xl-12">
                        <div class="card info-card customers-card">


                            <div class="card-body">
                                <h5 class="card-title">
                                    Users <span>| Year</span>
                                </h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $usersCount }}</h6>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Customers Card -->

                    {{-- article Count --}}
                    <div class="col-xxl-3 col-md-6">
                        <div class="card info-card sales-card">

                            <div class="card-body">
                                <h5 class="card-title">Articles <span>| Year</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-journal-text"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $articlesCount }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- End article Count --}}

                    <!-- Reports -->
                    <div class="col-12">
                        <div class="card">


                            <div class="card-body">
                                <h5 class="card-title">Reports <span>/ {{ now()->year }}</span></h5>

                                <!-- Line Chart -->
                                <div id="reportsChart"></div>

                                <script>
                                    document.addEventListener("DOMContentLoaded", () => {
                                        new ApexCharts(
                                            document.querySelector("#reportsChart"), {
                                            series: [{
                                                name: "Orders",
                                                data: @json($monthlyOrders),
                                            },
                                            {
                                                name: "Revenue",
                                                data: @json($monthlyMoney),
                                            },
                                            {
                                                name: "Users",
                                                data: @json($monthlyUsers),
                                            },
                                            ],
                                            chart: {
                                                height: 350,
                                                type: "area",
                                                toolbar: { show: false },
                                            },
                                            markers: { size: 4 },
                                            colors: ["#4154f1", "#2eca6a", "#ff771d"],
                                            fill: {
                                                type: "gradient",
                                                gradient: {
                                                    shadeIntensity: 1,
                                                    opacityFrom: 0.3,
                                                    opacityTo: 0.4,
                                                    stops: [0, 90, 100],
                                                },
                                            },
                                            dataLabels: { enabled: false },
                                            stroke: { curve: "smooth", width: 2 },
                                            xaxis: {
                                                categories: [
                                                    "Jan", "Feb", "Mar", "Apr", "May", "Jun",
                                                    "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"
                                                ]
                                            },
                                            tooltip: {
                                                x: { show: false }
                                            },
                                        }
                                        ).render();
                                    });
                                </script>
                                <!-- End Line Chart -->
                            </div>

                        </div>
                    </div>
                    <!-- End Reports -->



                </div>
            </div>

        </div>
    </section>
    {{-- add model ______________________________________________________________ --}}
@endsection
@section('js')
@endsection
