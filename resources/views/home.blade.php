@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('main-content')
  <section>
    <div class="container py-4">
      <h1>Trains</h1>
      <div class="table">
        <thead>
          <tr>
              <th>id</th>
              <th>Azienda</th>
              <th>Stazione di partenza</th>
              <th>Stazione di arrivo</th>
              <th>Orario di partenza</th>
              <th>Orario di arrivo</th>
              <th>Codice Treno</th>
              <th>Numero Carrozze</th>
              <th>In Orario</th>
              <th>Cancellato</th>
              <th>Creazione</th>
              <th>Ultima Modifica</th>
          </tr>
        </thead>
        <tbody>
          @forelse($trains as $train)
          <tr>
            <td>{{ $train->id }}</td>
            <td>{{ $train->Azienda }}</td>
            <td>{{ $train->Stazione_di_partenza }}</td>
            <td>{{ $train->Stazione_di_arrivo }}</td>
            <td>{{ $train->Orario_di_partenza }}</td>
            <td>{{ $train->Orario_di_arrivo }}</td>
            <td>{{ $train->Codice_Treno }}</td>
            <td>{{ $train->Numero_Carrozze }}</td>
            <td>{{ $train->In_Orario }}</td>
            <td>{{ $train->Cancellato }}</td>
            <td>{{ $train->created_at }}</td>
            <td>{{ $train->updated_at }}</td>
          </tr>
          @empty
          @endforelse
        </tbody>
      </div>
    </div>
  </section>
@endsection
