<div class="row">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">INVENTAIRE DU DEPARTEMENT DE (D' ) {{ $departement->Designation }}</h4>
                <h5>Au Total {{ $nbr }} Materiel(s)</h5>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th> Designation </th>
                            <th> Description </th>
                            <th> Etat </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($materiels as $p)

                            <tr>
                                <td> {{ $p->Designation }} </td>
                                <td> {{ $p->Description }} </td>
                                <td>
                                    @if($p->etat=='1')
                                        <label class="badge badge-gradient-info">Bon etat</label>
                                    @elseif($p->etat=='2')
                                        <label class="badge badge-gradient-warning">Un peu degrade</label>
                                    @else
                                        <label class="badge badge-gradient-danger">A Declasse</label>
                                    @endif
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
