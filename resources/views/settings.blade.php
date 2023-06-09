<x-masterDash title="Settings">
    <form action="{{ route('insertPrice') }}" method="post">
        @csrf
        <table>
            <tr>
                <th style="background-color: #ff0000; color: #ffffff;">Nom du traitement</th>
                <th style="background-color: #00ff00; color: #ffffff;">Prix du traitement</th> 
            </tr>
            @foreach ($traitements as $traitement)
            <tr>
                <td>{{ $traitement->Acte }}</td>
                <td>
                    <input type="number" class="form-control" name="prix{{ $traitement->Num_Traitement }}" placeholder="Prix du traitement">
                </td>
            </tr>
            @endforeach
        </table>
        <div class="text-center">
            <button type="submit" class="btn btn-success">Valider</button>
        </div>
    </form>
</x-masterDash>
