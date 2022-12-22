@extends('layouts.app')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="{{ url('css/main.css') }}">
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <table class='table'>
                <tr class="table-row-heads">
                    <th>Id</th>
                    <th>Denumire client </th>
                    <th>Firma client </th>
                    <th>Reprezentant firma </th>
                    <th>Contact client </th>
                    <th>Suma proiect </th>
                    <th>Numar transe </th>
                    <th>Status Proiect </th>
                    <th>Schimbare status proiect </th>
                </tr>
                @foreach($data as $datadb)
                    <tr class="table-row-data">
                        <td>{{ $datadb->id }}</td>
                        <td>{{ $datadb->Denumire_Proiect }}</td>
                        <td>{{ $datadb->Firma_Client }}</td>
                        <td>{{ $datadb->Reprezentant_Firma }}</td>
                        <td>{{ $datadb->Contact_Client }}</td>
                        <td>{{ $datadb->Suma_Proiect }}</td>
                        <td>{{ $datadb->Numar_Transe }}</td>
                        <td>{{ $datadb->Status_Proiect }}</td>
                        <td>
                            <form action="{{ route('update') }}" method="POST">
                                @csrf
                                @method('put')
                                <input type="hidden" name="id" value="{{ $datadb->id }}" >
                                <select name="Status_Proiect">
                                    <option value="Proiect in lucru" {{$datadb->Status_Proiect == 'Proiect in lucru' ? 'selected':''}}>Proiect in lucru</option>
                                    <option value="Contract semnat" {{$datadb->Status_Proiect == 'Contract semnat' ? 'selected':''}}>Contract semnat</option>
                                    <option value="Proiect finalizat" {{$datadb->Status_Proiect == 'Proiect finalizat' ? 'selected':''}}>Proiect finalizat</option>
                                </select>
                                <button type="submit" class="btn btn-primary">Schimbare</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
            {{ $data->links('pagination::bootstrap-5') }}
        </div>
    </div>
</div>
@endsection

