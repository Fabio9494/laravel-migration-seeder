@extends('layout.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-primary table-striped  p-3 border  mt-4">
                    <thead class="">
                        <tr>
                            <th>COMPAGNIA</th>
                            <th>CODICE TRENO</th>
                            <th>STAZIONE DI PARTENZA</th>
                            <th>STAZIONE DI ARRIVO</th>
                            <th>DATA</th>
                            <th>ORARIO DI PARTENZA</th>
                            <th>ORARIO DI ARRIVO</th>
                            <th>NUMERO DI CARROZZE</th>
                            <th>IN ORARIO</th>
                            <th>CANCELLATO</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($trains as $train)
                            <tr>
                                <td>{{ $train['azienda'] }}</td>
                                <td>{{ $train['codice_treno'] }}</td>
                                <td>{{ $train['stazione_di_partenza'] }}</td>
                                <td>{{ $train['stazione_di_arrivo'] }}</td>
                                <td>{{ date('d/m/Y', strtotime($train['data'])) }}</td>
                                <td>{{ $train['orario_di_partenza'] }}</td>
                                <td>{{ $train['orario_di_arrivo'] }}</td>
                                <td>{{ $train['numero_carrozze'] }}</td>
                                <td>{{ $train['in_orario'] == 1 ? 'SI' : 'NO' }}</td>
                                <td>{{ $train['cancellato'] == 0 ? 'SI' : 'NO' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
