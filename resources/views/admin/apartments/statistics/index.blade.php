@extends('admin.layouts.base')

@vite(['resources/scss/views/statistics.scss'])

@section('content')
    {{--    @dd($labels);--}}
    {{--    @dd($compactedData);--}}
    <div class="mt-4 row justify-content-center align-items-center">
        <div class="col-sm-12 col-md-10 col-lg-8 col-xl-7 text-center">
            <h4 class="fw-bold">- {{ $apartment->name }} -</h4>
            <div class="row g-3 row-cols-1 row-cols-sm-auto justify-content-between">
                <div class="col d-flex gap-3 justify-content-start align-items-center">
                    <div class="d-flex">
                        <a class="ms-back-button" href="{{ route('admin.apartments.index') }}"> Back</a>
                    </div>
                    <div class="d-md-none ms-title">Views:
                        <span class="fw-bold">{{ $apartment->views->count() }}</span>
                    </div>
                    <div class="d-none d-md-block fs-6 ms-title text-nowrap"><span>Total </span> views:
                        <span class="fw-bold">{{ $apartment->views->count() }}</span>
                    </div>
                </div>
                <div class="col d-flex justify-content-between">
                    <div class="row row-cols-2">
                        <div class="col d-flex gap-2 align-items-center">
                            <label class="fw-bold" for="chartTypeSelect">Chart:</label>
                            <select id="chartTypeSelect" class="form-select">
                                <option selected value="bar">Bar</option>
                                <option value="bubble">Bubble</option>
                                <option value="line">Line</option>
                            </select>
                        </div>
                        <div class="col d-flex gap-2 justify-content-end align-items-center">
                            <label class="fw-bold" for="chartMonthSelect">Filter:</label>
                            <select id="chartMonthSelect" class="form-select">
                                @foreach($labels as $label)
                                    <option value="{{ $label }}">{{ $label }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <canvas id="myChart"></canvas>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script type="text/javascript">
        let apartmentTitle = {{ Js::from($apartment->name) }};
        let graphicType = 'bar';
        let scaleY = {{ JS::from($apartment->views->count()) }};

        // Create a copy of your original data
        const originalLabels = {{ Js::from($labels) }};
        const originalApartmentViews = {{ Js::from($data) }};

        // Initialize the initial data for the chart
        let labels = originalLabels;
        let apartmentViews = originalApartmentViews;

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
                // ... (your existing chart options) ...
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

        // Add an event listener to the select element with id "chartMonthSelect"
        const chartMonthSelect = document.getElementById('chartMonthSelect');
        chartMonthSelect.addEventListener('change', (event) => {
            const selectedMonth = event.target.value;

            // Filter the data based on the selected month
            if (selectedMonth === 'all') {
                labels = originalLabels;
                apartmentViews = originalApartmentViews;
            } else {
                const monthIndex = originalLabels.indexOf(selectedMonth);
                labels = [originalLabels[monthIndex]];
                apartmentViews = [originalApartmentViews[monthIndex]];
            }

            // Update the chart's data and redraw the chart
            myChart.data.labels = labels;
            myChart.data.datasets[0].data = apartmentViews;
            myChart.update();
        });

    </script>
@endsection
