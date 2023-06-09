<x-masterDash title="Dashboard">
    <div class="cardbox">
        <div class="card d-flex flex-row h-100 ">
            <div>
                <div class="numbers">88</div>
                <div class="cardName">Patients  d'Aujourd'hui </div>
            </div>
            <div class="iconBx">
                <ion-icon name="eye-outline"></ion-icon>
            </div>
        </div>

    
        <div class="card d-flex flex-row h-100 ">
            <div>
                <div class="numbers">15</div>
                <div class="cardName">Payé Aujourd'hui</div>
            </div>
            <div class="iconBx">
                <ion-icon name="cart-outline"></ion-icon>
            </div>
        </div>


    
        <div class="card d-flex flex-row h-100 ">
            <div>
                <div class="numbers">504</div>
                <div class="cardName">Total du mois</div>
            </div>
            <div class="iconBx">
                <ion-icon name="chatbubbles-outline"></ion-icon>
            </div>
        </div>

    
        <div class="card d-flex flex-row h-100 ">
            <div>
                <div class="numbers">900 DH </div>
                <div class="cardName">revenus</div>
            </div>
            <div class="iconBx">
                <ion-icon name="cash-outline"></ion-icon>
            </div>
        </div>
    </div>

   <!-- ============ Patients Details List ============  -->
   <div class="details">
    <div class="recentOrders">
        <div class ="cardHeader">
            <h2>Paiements récents</h2>
            <a href="{{ route('patientspage') }}" class="btn">Voir tous</a>
        </div>


        <table>
            <thead>
                <tr>
                    <td>Nom</td>
                    <td>Prix</td>
                    <td>Remise</td>
                    <td>Statut</td>
                </tr>
            </thead>

            <tbody>
                @foreach ($patients as $patient)
                <tr>
                    <td>{{ $patient->PrenomPat }} {{ $patient->NomPat }}</td>
                    <td>1200 DH</td>
                    <td>Non</td>
                    <td><span class="status payed">Payé</span></td>
                </tr>

                @endforeach

                <tr>
                    <td>Youssef morabit</td>
                    <td>300 DH</td>
                    <td>Non</td>
                    <td><span class="status inProgress">En cours</span></td>
                </tr>

                <tr>
                    <td>Zineb en-nfissi</td>
                    <td>600 DH</td>
                    <td>Non</td>
                    <td><span class="status inProgress">En cours</span></td>
                </tr>

                <tr>
                    <td>Youssef morabit</td>
                    <td>1200 DH</td>
                    <td>Non</td>
                    <td><span class="status payed">Payé</span></td>
                </tr>

                <tr>
                    <td>Youssef morabit</td>
                    <td>500 DH</td>
                    <td>Non</td>
                    <td><span class="status inProgress">En cours</span></td>
                </tr>

                <tr>
                    <td>Youssef morabit</td>
                    <td>800 DH</td>
                    <td>Non</td>
                    <td><span class="status inProgress">En cours</span></td>
                </tr>
            </tbody>
        </table>
    
    </div>
    <!-- ================= Patients ================ -->
    <div class="recentCustomers">
        <div class="cardHeader">
            <h2>Patients récents</h2>
        </div>
        <table>
                @foreach ($patients as $patient)
                    <tr>
                        <td width="60px">
                            <div class="imgBx"><img src="{{ asset('images/customer02.jpg') }}"></div>
                        </td>
                        <td style="text-align: left">
                            <h4>{{ $patient->PrenomPat }}<br> <span> {{ $patient->NomPat }}</span></h4>
                        </td>
                    </tr>
                @endforeach
        </table>
    </div>
    </div>
</div>
</x-masterDash>    