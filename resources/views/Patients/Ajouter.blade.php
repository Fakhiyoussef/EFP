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

    <form class="form-inputss" method="POST" action="{{ route('patients.store') }}">
        @csrf
        <div class="prenom-box p-3">
                <h2> Ajouter Patient : </h2>
            <div class="row mt-2 ">
                <div class="col-md-6">
                    <label class="form-label labels">Prenom</label>
                    <input type="text" placeholder="Prenom" name="PrenomPat" class="form-control" value="{{ old('PrenomPat') }}">
                    @error('PrenomPat')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label class="form-label labels">nom</label>
                    <input type="text" name="NomPat" placeholder="nom" class="form-control" value="{{ old('NomPat') }}">
                    @error('NomPat')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>



            <div class="ajouter-inputs-box row mt-3">
                <div class="">
                    <label class="form-label">Sexe :</label>
                    <select id="sexe" name="Sexe" class="form-control">
                        <option value="M">M</option>
                        <option value="F">F</option>
                    </select><br>
                    @error('Sexe')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label class="form-label">Né le :</label>
                    <input type="date" class="form-control" name="DateNaiss" id="dateNaiss" placeholder="Né le :"><br>
                </div>


                <div>
                    <label id="à" class="form-label">à :</label>
                    <input type="text" class="form-control" name="LieuNaiss" placeholder="à :"><br>
                </div>



                <div>
                    <label class="form-label">Age:</label>
                    <input type="text" class="form-control" name="Age" id="age" placeholder="Age:"><br>
                </div>


                <div>
                    <label class="form-label">Etat Civil :</label>
                    <input type="text" class="form-control" name="Etat_civil" placeholder="Etat Civil :"><br>
                </div>



                <div>
                    <label class="form-label">Addresse :</label>
                    <input type="text" class="form-control" name="AddressePat"  placeholder="Addresse :"><br>
                </div>


                <div class="select-label">
                    <label class="form-label">Mutuelle :</label>
                    <select class="form-control select-input" name="Mutuelle">
                        <option value="YES">YES</option>
                        <option value="NO">NO</option>
                    </select><br>
                </div>

                <div>
                    <label class="form-label">Profession:</label>
                    <input type="text" class="form-control" name="Profession" placeholder="Profession:"><br>
                </div>



                <div>
                    <label class="form-label">Email:</label>
                    <input type="email" class="form-control" name="Email" placeholder="Email"><br>
                </div>



                <div class="tel">
                    <input type="tel" class="form-control" name="Tel" placeholder="Tel: ">
                    <label class="form-label">Tel:</label>
                </div>

                <div>
                    <label class="form-label">Observations :</label>
                    <textarea name="Observations" class="form-control"></textarea>
                </div>

            </div>



            <div class="my-4">
                <button type="submit" class="btn  profile-button">Ajouter</button>
                <a href="{{ route('patientspage') }}" class="btn btn-default">Retour</a>
            </div>
        </div>

    </form>

<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
</x-masterDash>