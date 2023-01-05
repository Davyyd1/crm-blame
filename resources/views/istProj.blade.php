@extends('layouts.app')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="{{ url('css/main.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @section('content')

   <section class='my-2'>
        <div class='container'>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-head">
                                <h2>Istoric Proiect</h2><hr>
                            </div>
                            <form action="{{ url('view/') }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label class="form-label">Id</label>
                                    <input type="text" class='form-control' value="{{ $istoric->id }}" name='denumire_proiect' placeholder="Introduceti numele clientului" readonly>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Id Proiecte</label>
                                    <input type="text" class='form-control' value="{{ $istoric->proiecte_id }}" name='firma_client' placeholder="Introduceti firma clientului" readonly>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Tipul actiunii</label>
                                    <input type="text" class='form-control' value="{{ $istoric->action_type }}" name='reprezentant_firma' placeholder="Introduceti numele reprezentantului">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Id Colaborator</label>
                                    <input type="text" class='form-control' value="{{ $istoric->colaborator_id }}" name='contact_client' placeholder="Introduceti contactul clientului">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Suma</label>
                                    <input type="text" class='form-control' value="{{ $istoric->suma }}" name='suma_proiect' placeholder="Introduceti suma proiectului">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Data</label>
                                    <input type="text" class='form-control' value="{{ $istoric->data }}" name='numar_transe' placeholder="introduceti numarul transelor">
                                </div>

                                {{-- <div class="mb-3">
                                    <label class="form-label">Status Proiect</label>
                                    <input type="text" class='form-control' name='Status_Proiect' placeholder="introduceti numarul transelor">
                                </div> --}}
                                <button type='submit' class='btn btn-danger' style="float: right; margin-left:1rem;">Sterge date</button>
                                <button type='submit' class='btn btn-primary' style="float: right;">Actualizeaza date</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
@endsection

