<x-masterDash title='Search'>
    @if ($results->isEmpty())
    <p>Aucun résultat trouvé.</p>
@else
    <ul>
        @foreach ($results as $result)
            <li>{{ $result->NomPat }}, {{ $result->PrenomPat }}</li>
        @endforeach
    </ul>
@endif
</x-masterDash>
