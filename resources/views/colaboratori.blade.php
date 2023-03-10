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
                                    <th>Status</th>
                                    <th>Realizeaza plata</th>
                                    <th>Suma totala</th>
                                </tr>

                                @foreach($colaborator as $colaboratori)
                                <tr class="table-row-data"></tr>
                                    <td>{{ $colaboratori->id }}</td>
                                    <td>{{ $colaboratori->Nume }}</td>
                                    <td>{{ $colaboratori->Skillset}}</td>
                                    <td>{{ $colaboratori->Pret_h}}</td>
                                    
                                    @if ($colaboratori->istoric_proiecte_sum_suma > 0)
                                        <td>{{ '+'.$colaboratori->istoric_proiecte_sum_suma.' Lei' }}</td>
                                    @elseif ($colaboratori->istoric_proiecte_sum_suma < 0)
                                        <td>{{ $colaboratori->istoric_proiecte_sum_suma.' Lei' }}</td>
                                    @else
                                        <td>{{ '0 Lei' }}</td>
                                    @endif

                                    @if ($colaboratori->istoric_proiecte_sum_suma < 0)
                                        <td>Neachitat</td>
                                    @elseif ($colaboratori->istoric_proiecte_sum_suma > 0)
                                        <td>Platit</td>
                                    @else
                                        <td>Achitat</td>
                                    @endif

                                   <form action="{{ url('colaboratori/'.$colaboratori->id) }}" method="POST">
                                    @csrf
                                    @method('put')
                                    <td>
                                    <input type="text" name='introduSuma' placeholder="Suma">
                                    <button type="submit" class="btn btn-primary">Realizeaza plata</button>
                                    </td>
                                    </form>
                                    @endforeach
                                    <td style="border: 2px solid black;">{{ $calc.' Lei' }}</td>
                                </tr> 
                            </table>
                                {{ $colaboratorPaginare->links('pagination::bootstrap-5') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

