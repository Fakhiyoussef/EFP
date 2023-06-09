<x-masterDash title="les patients">
    @if ($errors->any())
        <x-alert type="danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </x-alert>
    @endif

    <form class="form-inputss" method="POST" action="{{ route('patients.update',$patient->NumDoss) }}">
        @csrf
        <div class="prenom-box p-3">
                <h2> Modifier Un Patient : </h2>
            <div class="row mt-2 ">
                <div class="col-md-6">
                    <label class="form-label labels">Prenom</label>
                    <input type="text" placeholder="Prenom" name="PrenomPat" class="form-control" value="{{ old('PrenomPat',$patient->PrenomPat) }}">
                    @error('PrenomPat')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label class="form-label labels">nom</label>
                    <input type="text" name="NomPat" placeholder="nom" class="form-control" value="{{ old('NomPat',$patient->NomPat) }}">
                    @error('NomPat')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>



            <div class="ajouter-inputs-box row mt-3">
                <div >
                    <label class="form-label">Sexe :</label>
                    <select id="sexe" name="Sexe" class="form-control">
                        <option value="M" {{ old('Sexe', $patient->Sexe) == 'M' ? 'selected' : '' }}>M</option>
                        <option value="F" {{ old('Sexe', $patient->Sexe) == 'F' ? 'selected' : '' }}>F</option>
                    </select><br>
                    @error('Sexe')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label class="form-label">Né le :</label>
                    <input type="date" class="form-control" name="DateNaiss" id="dateNaiss" placeholder="Né le :" value="{{ old('DateNaiss', $patient->DateNaiss) }}"><br>
                </div>


                <div>
                    <label id="à" class="form-label">à :</label>
                    <input type="text" class="form-control" name="LieuNaiss" placeholder="à :" value="{{ old('LieuNaiss', $patient->LieuNaiss) }}"><br>
                </div>



                <div>
                    <label class="form-label">Age:</label>
                    <input type="text" class="form-control" name="Age" id="age" placeholder="Age:"value="{{ old('Age', $patient->Age) }}"><br>
                </div>


                <div>
                    <label class="form-label">Etat Civil :</label>
                    <input type="text" class="form-control" name="Etat_civil" placeholder="Etat Civil :"value="{{ old('Etat_civil', $patient->Etat_civil) }}"><br>
                </div>



                <div>
                    <label class="form-label">Addresse :</label>
                    <input type="text" class="form-control" name="AddressePat"  placeholder="Addresse :" value="{{ old('AddressePat', $patient->AddressePat) }}"><br>
                </div>


                <div class="select-label">
                    <label class="form-label">Mutuelle :</label>
                    <select class="form-control select-input" name="Mutuelle">
                        <option value="YES" {{ old('Mutuelle', $patient->Mutuelle) == 'YES' ? 'selected' : '' }}>YES</option>
                        <option value="NO" {{ old('Mutuelle', $patient->Mutuelle) == 'NO' ? 'selected' : '' }}>NO</option>
                    </select><br>
                </div>

                <div>
                    <label class="form-label">Profession:</label>
                    <input type="text" class="form-control" name="Profession" placeholder="Profession:" value="{{ old('Profession', $patient->Profession) }}"><br>
                </div>



                <div>
                    <label class="form-label">Email:</label>
                    <input type="email" class="form-control" name="Email" placeholder="Email"value="{{ old('Email', $patient->Email) }}"><br>
                </div>



                <div class="tel">
                    <input type="tel" class="form-control" name="Tel" placeholder="Tel: "value="{{ old('Tel', $patient->Tel) }}">
                    <label class="form-label">Tel:</label>
                </div>

                <div>
                    <label class="form-label">Observations :</label>
<<<<<<< HEAD
                    <textarea name="Observations" class="form-control" >{{ old('Observations', $patient->Observations) }}</textarea>
=======
                    <textarea name="Observations" class="form-control">{{ old('Observations', $patient->Observations) }}</textarea>
>>>>>>> 431dff10dfc3fe4984aeebb51a36009be4a2b535
                </div>

            </div>



            <div class="my-4">
                <button type="submit" class="btn  profile-button">Modifier</button>
                <a href="{{ route('patientspage') }}" class="btn btn-default">Retour</a>
            </div>
        </div>

    </form>
</x-masterDash>
