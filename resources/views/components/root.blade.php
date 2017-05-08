@foreach ($blok['body'] as $blok)
  @include('components/' . $blok['component'], ['blok' => $blok])
@endforeach