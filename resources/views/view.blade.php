@extends('layouts.app')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="{{ url('css/main.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

@section('content')
    <section class='my-2'>
        <div class='container'>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-head">
                                <h2>Proiect</h2><hr>
                            </div>
                            <form action="{{ url('view/'.$proiecte->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label class="form-label">Denumire Proiect</label>
                                    <input type="text" class='form-control' value="{{ $proiecte->Denumire_Proiect }}" name='denumire_proiect' placeholder="Introduceti numele clientului">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Firma Client</label>
                                    <input type="text" class='form-control' value="{{ $proiecte->Firma_Client }}" name='firma_client' placeholder="Introduceti firma clientului">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Reprezentant Firma</label>
                                    <input type="text" class='form-control' value="{{ $proiecte->Reprezentant_Firma }}" name='reprezentant_firma' placeholder="Introduceti numele reprezentantului">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Contact Client</label>
                                    <input type="text" class='form-control' value="{{ $proiecte->Contact_Client }}" name='contact_client' placeholder="Introduceti contactul clientului">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Suma Proiect</label>
                                    <input type="text" class='form-control' value="{{ $proiecte->Suma_Proiect }}" name='suma_proiect' placeholder="Introduceti suma proiectului">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Numar Transe</label>
                                    <input type="text" class='form-control' value="{{ $proiecte->Numar_Transe }}" name='numar_transe' placeholder="introduceti numarul transelor">
                                </div>

                                {{-- <div class="mb-3">
                                    <label class="form-label">Status Proiect</label>
                                    <input type="text" class='form-control' name='Status_Proiect' placeholder="introduceti numarul transelor">
                                </div> --}}
                                <button type='submit' class='btn btn-primary' style="float: right;">Actualizeaza date</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class='my-5'>
        <div class='container'>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            @forelse ($proiecte->istoricProiecte as $istProj)
                                <div class="mb-3">
                                    <table class='table'>
                                        <tr class="table-row-heads">
                                            <th>Id Proiect</th>
                                            <th>Tip actiune </th>
                                            <th>Colaborator </th>
                                            <th>Suma </th>
                                            <th>Data </th>
                                        </tr>
                                        <tr class="table-row-data">
                                            <td>{{ $istProj->proiecte_id }}</td>
                                            <td>{{ $istProj->action_type }}</td>
                                            <td>{{ $istProj->colaborator_id }}</td>
                                            <td>{{ $istProj->suma }}</td>
                                            @if ( $istProj->data > 0 )
                                               <td> {{ $istProj->data }} </td>
                                            @else     
                                            <td>{{ $istProj->created_at->format('d-m-Y') }}</td>
                                            @endif
                                        </tr>
                                    </table>
                                </div>
                            @empty
                                <div class="card-body">
                                <h2>Nu au fost gasite inregistrari</h2>
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class='my-5'>
        <div class='container'>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ url('/') }}" method="POST">
                                @csrf
                                @method('PUT')
                                
                                <div class="mb-3">
                                    <label class="form-label">Id proiect</label>
                                    <input type="text" class='form-control' value="{{ $proiecte->id }}" name='id_proiect' id='id_proiect' placeholder="Id proiect" readonly>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Tip actiune(0 = cheltuiala, 1 = plata, 2 = incasare)</label>
                                    <select class="form-select" aria-label="Default select example"  name='Status_Tranzactii'>
                                        <option value="cheltuiala">0</option>
                                        <option value="plata">1</option>
                                        <option value="incasare">2</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Colaborator</label>
                                    <select class="form-select" aria-label="Default select example" name="Colab_id">
                                        <option selected>Nu</option>
                                        @foreach ($colaborator as $colaboratori)
                                        <option value="{{ $colaboratori->id }}">{{ $colaboratori->id }} </option>
                                        @endforeach
                                    </select>
                                    
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Suma</label>
                                    <input type="text" class='form-control' value="" name='suma' placeholder="Introduceti suma">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Data</label>
                                    {{-- <input type="text" class='form-control' value="" name='data' placeholder="Introduceti data"> --}}
                                    <div class="input-group date" data-provide="datepicker">
                                        <input type="text" class="form-control" name='data'>
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-th"></span>
                                        </div>
                                    </div>
                                </div>
                                <button type='submit' class='btn btn-primary' style="float: right;">Adauga</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
<script type="text/javascript">
    $(function(){
        $('#datepicker').datepicker();
    })
    $('.datepicker').datepicker({
    format: 'yyyy-mm-dd'
});
</script>
