@extends('admin.layouts.base')

@vite(['resources/scss/views/statistics.scss'])

@section('content')
    <div class="mt-4 row justify-content-center align-items-center">
        <div class="col-sm-12 col-md-10 col-lg-8 col-xl-7 text-center">
            <h4 class="fw-bold">- {{ $apartment->name }} -</h4>
            <div class="row">
                <div class="col-7 d-flex gap-3 justify-content-start align-items-center">
                    <div class="d-flex">
                        <a class="ms-back-button" href="{{ route('admin.apartments.index') }}"> Back</a>
                    </div>
                    <div class="d-md-none ms-title">Views:
                        <span class="fw-bold">{{ $apartment->views->count() }}</span>
                    </div>
                    <div class="d-none d-md-block fs-6 ms-title"><span class="">Total apartment</span> views:
                        <span class="fw-bold">{{ $apartment->views->count() }}</span>
                    </div>
                </div>
                <div class="col-5 d-flex gap-2 justify-content-end align-items-center">
                    <label class="fw-bold" for="chartTypeSelect">Chart:</label>
                    <select id="chartTypeSelect" class="form-select">
                        <option value="bar">Bar</option>
                        <option value="bubble">Bubble</option>
                        <option selected value="line">Line</option>
                    </select>
                </div>
            </div>

            <canvas id="myChart"></canvas>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script type="text/javascript">

        let labels = {{ Js::from($labels) }};
        let apartmentViews = {{ Js::from($data) }};
        let apartmentTitle = {{ Js::from($apartment->name) }};
        let graphicType = 'bar';
        let scaleY = {{ JS::from($apartment->views->count()) }} / 2;

        const data = {
            labels: labels,
            datasets: [{
                label: 'Views',
                backgroundColor: 'rgb(72,91,161)',
                borderColor: 'rgb(72,91,161)',
                data: apartmentViews,
            }]
        };

        const config = {
            type: graphicType,
            data: data,
            options: {
                responsive: true,
                animations: {
                    tension: {
                        duration: 1000,
                        easing: 'linear',
                        from: 0.55,
                        to: 0.5,
                        loop: true
                    }
                },
                scales: {
                    y: { // defining min and max so hiding the dataset does not change scale range
                        max: scaleY,
                    }
                },
                plugins: {
                    legend: {
                        display: true,
                    },
                },
                elements: {
                    bar: {
                       borderRadius: 7
                    },
                    point: {
                        hitRadius: 30,
                        hoverRadius: 10,
                        radius: 5,
                        pointStyle: 'circle'
                    }
                }
            }
        };

        const myChart = new Chart(
            document.getElementById('myChart'),
            config
        );

        // Add an event listener to the select element with id "chartTypeSelect"
        const chartTypeSelect = document.getElementById('chartTypeSelect');
        chartTypeSelect.addEventListener('change', (event) => {
            graphicType = event.target.value; // Get the selected chart type from the select element

            // Update the chart's type property and redraw the chart
            myChart.config.type = graphicType;
            myChart.update();
        });

    </script>
@endsection
