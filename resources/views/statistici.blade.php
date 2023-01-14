@extends('layouts.app')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="{{ url('css/main.css') }}">

@section('content')
<section class='my-2'>
        <div class='container'>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-head">
                                <h2>Statistici</h2><hr>
                            </div>
                            
                            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                            <script type="text/javascript">
                            google.charts.load('current', {'packages':['bar']});
                            google.charts.setOnLoadCallback(drawChart);

                            function drawChart() {
                                var data = google.visualization.arrayToDataTable([
                                ['An', 'Incasari', 'Cheltuieli', 'Plati'],
                                ['2023', {{ $incasari23 }}, {{ $cheltuieli23 }}, {{ $plati23 }}],
                                ['2024', 0, 0, 0],
                                ['2025', 0,0,0],
                                ['2026', 0,0,0],
                                ['2027', 0,0,0],
                                ['2028', 0,0,0]
                                ]);

                                var options = {
                                chart: {
                                    title: 'Performanta Companiei',
                                    subtitle: 'Incasari, Cheltuieli, si Plati: 2023-2028',
                                }
                                };

                                var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

                                chart.draw(data, google.charts.Bar.convertOptions(options));
                            }
                            </script>
                            <div id="columnchart_material" style="width: 77rem; height: 40rem;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

