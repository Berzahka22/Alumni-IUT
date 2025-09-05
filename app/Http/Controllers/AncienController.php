<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use App\Models\Ancien;
use App\Models\Question;
use App\Models\Entreprise;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Mail;
use App\Mail\EntrepriseValidee;
use Illuminate\Support\Facades\Auth;

class AncienController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Affiche le formulaire d'inscription
     */
    public function index (){
        return view('index');
    }
    public function indexa (){
        return view('indexa');
    }
    public function empoi (){
        return view('emploi');
    }
    public function login ()
    {
    return view('log_sig');
    }

    public function insccon ()
    {
         return view('insccon');
    }

    public function admin ()
    {
        return view('admin');
    }

    public function profil()
    {
        return view('profil');

    }
    
    public function emploi()
    {
        return view('emploi');
    }
    public function chat ()
    {
        return view('chat');
    }
public function temoignage ()
    {
        return view('temoignage');
    }
public function profilutilisateur ()
    {
        return view('profilutilisateur');
    }
    public function question()
    {
        $id = $_GET['id'];
        return view('question0', compact('id'));
    }

    public function listeEtudiant()
    {
        $ancien = Ancien::all();
         return view('ListeEtudiant', compact('ancien'));
    }

    public function listeEntreprise()
    {
         $entreprise = Entreprise::all();
         return view('listEntreprise', compact('entreprise'));
    }
    /**
     * Enregistre un nouvel étudiant
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */

public function ajouterEtudiant(Request $request)
{
    $validate = $request->validate([
        'nom' => 'required|string|max:50',
        'datenaissance' => 'required|date|before:today',
        'lieunaissance' => 'required|string',
        'email' => 'required|email',
        'telephone' => 'nullable|int',
        'annee_entree' => 'required|integer|min:1950|max:' . date('Y'),
        'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    if ($request->hasFile('photo')) {
        $file = $request->file('photo');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->storeAs('public/photos', $filename);

        $validate['photo'] = 'photos/' . $filename;
    } else {
        // Si tu arrives ici, ça veut dire que la validation photo a pourtant passé,
        // ce qui est étonnant. Sinon tu peux gérer une erreur ou mettre une valeur par défaut.
        return back()->withErrors(['photo' => 'La photo est obligatoire.']);
    }

    Ancien::create($validate);

    // Redirection ou réponse
    return redirect('/question0?id=' . Ancien::latest()->first()->id);
}



    public function ajouterEtudiantQuestion( Request $request)
    {
             $validated = $request->validate([
                'id_ancien' => 'required|int',
                'couleur_logo' => 'required|string|max:100',
                'nom_directeur' => 'required|string|max:100',
                'nbr_departement' => 'required|numeric|min:1',
                'ville_iut' => 'required|string|max:100',
                'platforme_iut' => 'required|string|max:100',
            ]);

            $question = Question::create($validated);
           return redirect('/index');
    }public function ajouterEntreprise(Request $request)
{
    $validated = $request->validate([
        'nom_entreprise' => 'required|string',
        'secteur' => 'required|string|max:100',
        'email' => 'required|email|max:100',
        'forme_juridique' => 'required|string|max:100',
        'site_web' => 'required|string|max:100',
        'telephone' => 'required|numeric',
        'piece_identite' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    if ($request->hasFile('piece_identite')) {
        $path = $request->file('piece_identite')->store('uploads', 'public');
        $validated['piece_identite'] = $path;
    }

    // On crée l'entreprise et on récupère le modèle créé
    $entreprise = Entreprise::create($validated);

    // On stocke l'id de l'entreprise en session (optionnel, juste si besoin)
    // $request->session()->flash('entreprise_id', $entreprise->id);

    // On redirige vers la route profil avec l'id de l'entreprise en paramètre
    return redirect()->route('profil', ['entreprise_id' => $entreprise->id]);
}

   
   public function showProfil(Request $request)
{
    // Récupérer l'id passé en paramètre GET (ex: /profil?entreprise_id=123)
    $entreprise = null;

    if ($request->has('id')) {
        $entreprise = Entreprise::find($request->query('id'));
    }

    // Sinon, récupérer l'entreprise liée à l'utilisateur connecté
    if (!$entreprise) {
        $entreprise = Entreprise::where('user_id', Auth::id())->first();
    }

    return view('profil', compact('entreprise'));
}


    public function delete($id)
    {
        $entreprise = Entreprise::findOrFail($id);
        $entreprise->delete();

       return redirect()->back();
    }

    public function validerEntreprise($id)
{
    // Trouver l'entreprise
    $entreprise = Entreprise::findOrFail($id);

    // Exemple : envoyer un email à l'entreprise
    Mail::to($entreprise->email)->send(new \App\Mail\EntrepriseValidee($entreprise));

    // Redirection après envoi
    return redirect()->back()->with('success', 'Email de validation envoyé à l’entreprise.');
}

public function showLoginForm()
{
    return view('log_sig'); // Ou la vue correspondant à ton formulaire de connexion
}

public function log_sin (Request $request)
{
    $credentials = $request->validate([
        'email' => 'required|email',
        'motdepasse' => 'required',
    ]);

    // Auth::attempt s'attend par défaut à un champ 'password',  
    // il faut spécifier que c'est 'motdepasse' dans ton modèle (cf getAuthPassword),
    // donc ici tu peux faire :
     
        // Authentification réussie, rediriger vers la page d'accueil ou une autre page
        return redirect()->route('indexa');
    }
 
}



 