<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('css/listetud.css') }}">
    <title>Liste des anciens étudiants inscrits</title>
   
</head>


    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <h1>Liste des anciens étudiants inscrits</h1>
    
    <div class="table-container">
        <table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Date de naissance</th>
            <th>Lieu</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Année d'entrée</th>
            <th>Photos</th>
            <th colspan="2">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($ancien as $a)
            <tr>
                <td>{{ $a->nom }}</td>
                <td>{{ $a->datenaissance }}</td>
                <td>{{ $a->lieunaissance }}</td>
                <td>{{ $a->email }}</td>
                <td>{{ $a->telephone }}</td>
                <td>{{ $a->annee_entree }}</td>
                <td>
                    {{-- Exemple d'affichage de fichier s'il y a une pièce d'identité --}}
                    @if ($a->piece_identite)
                        <a href="{{ asset('storage/' . $a->photo) }}" target="_blank">Voir</a>
                    @else
                        Aucune
                    @endif
                </td>
                <td colspan="2">
                    <a class="btn btn-danger">Modifier</a>
                    <a class="btn btn-success">Valider</a>
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



<body>
   

    <script src="{{ url ('js/listetud.js') }}"></script>
</body>
</html>