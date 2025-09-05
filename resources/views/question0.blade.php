<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="{{ url('css/style2.css')}}">
  <title>login/sigin</title>
  
</head>
<body>
  
  <div class="container" id="container">
  

    <div class="form-container sign-in">
      <form method="POST" action="{{ route('ancien.ajouter.question') }}" >
      @csrf
      <input type="hidden" name="id_ancien" value="{{ $id }}">
        <h1>Repond à ces question</h1>
        <div class="social-icons">
          <a href="#" class="icon"><i class="fa-brands fa-whatsapp"></i></a>
          <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
        </div>
        <span>Quelle est la couleur dominante du logo de l'IUT ?</span>
    <input type="text" name="couleur_logo" placeholder="Réponse" >
    @error('couleur_logo')
        <span style="color:red">{{ $message }}</span>
    @enderror
    
    <span>Quel est le nom du directeur actuel de l'IUT ?</span>
    <input type="text" name="nom_directeur" placeholder="Réponse">
     @error('nom_directeur')
        <span style="color:red">{{ $message }}</span>
    @enderror
    
    <span>Combien de départements composent l'IUT ?*</span>
    <input type="text" name="nbr_departement" placeholder="Réponse" >
     @error('nbr_departement')
        <span style="color:red">{{ $message }}</span>
    @enderror
    
    <span>Quelle est la ville où se trouve le bâtiment principal de l'IUT ?*</span>
    <input type="text" name="ville_iut" placeholder="Réponse" >
    @error('ville_iut')
        <span style="color:red">{{ $message }}</span>
    @enderror
    
    <span>Quel est le nom de la plateforme pédagogique en ligne de l'IUT ?</span>
    <input type="text" name="platforme_iut" placeholder="Réponse" >
    @error('platforme_iut')
        <span style="color:red">{{ $message }}</span>
    @enderror
    

      <button type="submit">Enregistrer</button>

  <a href="{{route ('log_sig')}}">Retour</a>
      </form>
    </div>

     
    </div>
    </form>
  </div>

  <script src="{{url('js/main2.js')}}"></script>
</body>

</html>