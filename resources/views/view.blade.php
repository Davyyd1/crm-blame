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
                            <form action="{{ url('insert-data') }}" method="POST">
                                {{ csrf_field() }}
                                <div class="mb-3">
                                    <label class="form-label">Denumire Client</label>
                                    <input type="text" class='form-control' value="{{ $proiecte->Denumire_Proiect }}" name='denumire_client' placeholder="Introduceti numele clientului">
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
                                    <input type="text" class='form-control' value="{{ $proiecte->Contact_Client }}" name='Contact_Client' placeholder="Introduceti contactul clientului">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Suma Proiect</label>
                                    <input type="text" class='form-control' value="{{ $proiecte->Suma_Proiect }}" name='Suma_Proiect' placeholder="Introduceti suma proiectului">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Numar Transe</label>
                                    <input type="text" class='form-control' value="{{ $proiecte->Numar_Transe }}" name='Numar_Transe' placeholder="introduceti numarul transelor">
                                </div>

                                {{-- <div class="mb-3">
                                    <label class="form-label">Status Proiect</label>
                                    <input type="text" class='form-control' name='Status_Proiect' placeholder="introduceti numarul transelor">
                                </div> --}}
                                <button type='submit' class='btn btn-primary'>Actualizeaza date</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
