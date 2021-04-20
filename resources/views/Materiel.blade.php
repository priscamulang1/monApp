<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Nouvelle affection du materiel Au departement {{ $departement->Designation }}</h4>
            <form class="forms-sample" action="{{ url('/storeM') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="designation">Designation</label>
                    <input type="hidden" name="DepartementId" value="{{ $departement->id }}">
                    <input type="text" class="form-control" name="designation" placeholder="Designation">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" rows="2" placeholder="Description du departement"></textarea>
                </div>
                <button type="submit" class="btn btn-gradient-primary mr-2">Enregistrer</button>
                <button class="btn btn-light">Annuler</button>
            </form>
        </div>
    </div>
</div>
