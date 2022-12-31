  <section class='my-5'>
        <div class='container'>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            @foreach ($istoric as $istProj)
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
                                            <td>{{ $istProj->id_proiect }}</td>
                                            <td>{{ $istProj->action_type }}</td>
                                            <td>{{ $istProj->colaborator_id }}</td>
                                            <td>{{ $istProj->suma }}</td>
                                            <td>{{ $istProj->data }}</td>
                                        </tr>
                                    </table>
                                </div>
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
{{-- $datadb->Status_Proiect == 'Proiect in lucru' ? 'selected':'' --}}
                                <div class="mb-3">
                                    <label class="form-label">Id proiect</label>
                                    <select name="" id="">
                                        <input type="text" class='form-control' value="{{ $istProj->id_proiect }}" name='action_type' placeholder="Action Type">
                                        <option value="{{ $istProj->id_proiect }}">{{ $istProj->id_proiect }}</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Tip actiune</label>
                                    <input type="text" class='form-control' value="{{ $istProj->action_type }}" name='action_type' placeholder="Action Type">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Colaborator</label>
                                    <input type="text" class='form-control' value="{{ $istProj->colaborator_id }}" name='firma_client' placeholder="Introduceti firma clientului">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Suma</label>
                                    <input type="text" class='form-control' value="{{ $istProj->suma }}" name='reprezentant_firma' placeholder="Introduceti numele reprezentantului">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Data</label>
                                    <input type="text" class='form-control' value="{{ $istProj->data }}" name='contact_client' placeholder="Introduceti contactul clientului">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
