<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF</title>
    <style>
        body{
            padding: 0 30px;
        }
        p {
           
        }
    </style>
</head>
<body>
    <p style="font-size:16px; font-weight:bold;">Numele firmei <span style="float:right; color:gray; margin-right:4rem; font-size:18px;">FACTURA </span><br></p>
    <p style="margin-top:-1rem; font-size:12px; color:gray;">Sloganul firmei dvs.</p> 

    <div style="margin-top:2.5rem;">
        Adresa postala: <br>
        Localitate, judet, cod postal: <br><span style="float:right; margin-right:4rem; margin-top:-2.5rem;">Numarul Facturii <br>Data: {{ $time }}</span>
        Telefon: <br>
    </div>

    <table style="margin-top:4rem; border: 1px solid gray; width:100%; height: 35rem;">
        <tr>
            <th style="font-size:15px;">Nume Proiect</th>
            <th style="font-size:15px;">Nume firma client</th>
            <th style="font-size:15px;">Nume reprezentant</th>
            <th style="font-size:15px;">Pretul proiectului</th>
            <th style="font-size:15px;">Transe</th>
        </tr>
        <tr style="text-align: center; font-size:15px;">
            <td>{{ $proiecte->Denumire_Proiect }}</td>
            <td>{{ $proiecte->Firma_Client }}</td>
            <td>{{ $proiecte->Reprezentant_Firma }}</td>
            <td>{{ $proiecte->Suma_Proiect }}</td>
            <td>{{ $proiecte->Numar_Transe }}</td>
        </tr>
    </table>
    <br>Contact client: {{ $proiecte->Contact_Client }}

    <p style="margin-top:4rem; font-weight:bold;">Semnatura companie <span style="float:right">Semnatura client</span></p>
</body>
</html>