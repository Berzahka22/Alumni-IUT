<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('css/listetud.css') }}">
    
    {{-- SweetAlert2 --}}
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">

    <title>Liste des entreprises enregistrées</title>
</head>
<body>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <h1>Liste des entreprises enregistrées</h1>
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>piece identite</th>
                                <th>Nom Entreprise</th>
                                <th>Secteur</th>
                                <th>Email</th>
                                <th>Forme juridique</th>
                                <th>Site web</th>
                                <th>Téléphone</th>
                                <th colspan="2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($entreprise as $e)
                                <tr>
                                    <td>@if($e->piece_identite)
                                            <img src="{{ asset('storage/' . $e->piece_identite) }}" alt="Pièce identité" width="100" height="100">
                                        @else
                                            <span>Aucune image</span>
                                        @endif
                                    </td> 
                                    <td>{{ $e->nom_entreprise }}</td>
                                    <td>{{ $e->secteur }}</td>
                                    <td>{{ $e->email }}</td>
                                    <td>{{ $e->forme_juridique }}</td>
                                    <td>{{ $e->site_web }}</td>
                                    <td>{{ $e->telephone }}</td>
                                    <td colspan="2">
                                        <a class="btn btn-danger delete" data-id="{{ $e->id }}">Supprimer</a>
                                        <a data-id="{{ $e->id }}" class="btn btn-success valider">Valider</a>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- JS scripts --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Garde une seule version -->    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function () {
            $('.delete').on('click', function (e) {
                e.preventDefault(); // Empêche le lien de rediriger

                const entrepriseId = $(this).data('id');

                Swal.fire({
                    title: 'Êtes-vous sûr ?',
                    text: "Cette action est irréversible !",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Oui, supprimer',
                    cancelButtonText: 'Annuler'
                }).then((result) => {
                    if (result.isConfirmed) {
                       window.location.href = "{{ route('deteleEntreprise', ['id' => '__ID__']) }}".replace('__ID__', entrepriseId);
                        Swal.fire(
                            'Supprimé !',
                            'L\'entreprise a été supprimée.',
                            'success'
                        );
                    }
                });
            });
        });
    </script>

    <script src="{{ url('js/listetud.js') }}"></script>
</body>
</html>
