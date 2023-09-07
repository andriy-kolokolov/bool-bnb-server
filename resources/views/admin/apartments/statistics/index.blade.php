@extends('admin.layouts.base')

@section('content')
    <div class="mt-4 row justify-content-center align-items-center">
        <div class="col-sm-12 col-md-10 col-lg-8 col-xl-7 text-center">
            <h4 class="fw-bold">- {{ $apartment->name }} -</h4>
            <h5>Total apartment views: {{ $apartment->views->count() }}</h5>
            <canvas id="myChart"></canvas>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script type="text/javascript">

        let labels = {{ Js::from($labels) }};
        let apartmentViews = {{ Js::from($data) }};
        let apartmentTitle = {{ Js::from($apartment->name) }};

        const data = {
            labels: labels,
            datasets: [{
                label: 'Views',
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 99, 132)',
                data: apartmentViews,
            }]
        };

        const config = {
            type: 'line',
            data: data,
            options: {}
        };

        const myChart = new Chart(
            document.getElementById('myChart'),
            config
        );

    </script>
@endsection
