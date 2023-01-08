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
                                <h2>Colaboratori</h2><hr>
                            </div>
                            <table class="table">
                                <tr class="table-row-heads">
                                    <th>Id</th>
                                    <th>Nume</th>
                                    <th>Skillset</th>
                                    <th>Pret_h</th>
                                    <th>Suma</th>
                                    <th>Suma totala</th>
                                </tr>
                                @foreach($colaborator as $colaboratori)
                                <tr class="table-row-data"></tr>
                                    <td>{{ $colaboratori->id }}</td>
                                    <td>{{ $colaboratori->Nume }}</td>
                                    <td>{{ $colaboratori->Skillset}}</td>
                                    <td>{{ $colaboratori->Pret_h}}</td>
                                    {{-- <td>{{ $data }}</td> --}}
                                    <td>{{ $colaboratori->istoric_proiecte_sum_suma }}</td>
                                    @endforeach
                                    <td style="border: 2px solid black;">{{ $calc }}</td>
                                </tr> 
                            </table>
                                {{-- {{ $colaborator->links('pagination::bootstrap-5') }} --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

