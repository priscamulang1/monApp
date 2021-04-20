
<div class="col-12 grid-margin">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Liste des departements</h4>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th> Designation </th>
                        <th> Description </th>
                        <th> Nbr Equipement </th>
                        <th> Action(s) </th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($departements as $p)

                            <tr>
                                <td> {{ $p->designation }} </td>
                                <td> {{ $p->description }} </td>
                                <td>
                                    <label class="badge badge-gradient-success">10</label>
                                </td>
                                <td>
                                    <a href="{{ url('/show/'.$p->id) }}" class="btn btn-sm btn-warning">Voir Inventaire</a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
