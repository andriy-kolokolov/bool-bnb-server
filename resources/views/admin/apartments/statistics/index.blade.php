@extends('admin.layouts.base')

@vite(['resources/scss/views/statistics.scss'])

@section('content')
    <div class="mt-4 row justify-content-center align-items-center">
        <div class="col-sm-12 col-md-10 col-lg-8 col-xl-7 text-center">
            <h4 class="fw-bold">- {{ $apartment->name }} -</h4>
            <div class="row">
                <div class="col-6 d-flex justify-content-start align-items-center">
                    <h5 class="ms-title">Total apartment views:
                        <span class="fw-bold">{{ $apartment->views->count() }}</span>
                    </h5>
                </div>
                <div class="col-6 d-flex gap-2 justify-content-end align-items-center">
                    <label class="fw-bold" for="chartTypeSelect">Select Chart:</label>
                    <select id="chartTypeSelect" class="w-50 form-select">
                        <option value="bar">Bar</option>
                        <option value="bubble">Bubble</option>
                        <option value="line">Line</option>
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
        let thisYear = new Date().getFullYear();
        let graphicType = 'bar';


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
                        min: 0,
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
