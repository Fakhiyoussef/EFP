<x-masterDash title="Paiements">
                

    <div class="table-ajouter-title py-2 mt-2"> 
        <h2>  La liste des Paiements </h2>
        <a class="btn btn-primary btn-lg action-btn" href="{{ route('traitements.Ajouter') }}"role="button" >
        Ajouter
        </a>
    </div>

    <table class="table table-bordered ">
        <tr>
            <th>NumDoss</th>
            <th>Numéro de traitement</th>
            <th>Prenom</th>
            <th>Nom</th>
            <th>Type de Traitement</th>
            <th>Numéro de Dent</th>
            <th>Actions</th>
        </tr>

        @foreach ($traitements as $traitement)
            <tr>
                <td>{{ $traitement->patients->first()->NumDoss }}</td>
                <td>{{ $traitement->Num_Traitement }}</td>
                <td>{{ $traitement->patients->first()->PrenomPat }}</td>
                <td>{{ $traitement->patients->first()->NomPat }}</td>
                <td>{{ $traitement->Acte }}</td>
                <td>{{ $traitement->Dent }}</td>
                <td class="text-center">
                    <a class="btn btn-success btn-sm action-btn"
                        href="{{ route('patients.Afficher',$traitement->patients->first()->NumDoss) }}" role="button">
                    Payer
                    </a>
                </td>
            </tr>
        @endforeach
    </table>

    {{ $traitements->links() }}
</x-masterDash>
