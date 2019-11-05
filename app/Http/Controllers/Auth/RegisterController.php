<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Admin;
use App\Models\Enseignant;
use App\Http\Controllers\Controller;
use App\Models\DirecteurProv;
use App\Models\DirecteurReg;
use App\Models\Etudiant;
use App\Models\GestSalle;
use App\Models\InspecteurReg;
use App\Models\ParentTuteur;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:admin');
        $this->middleware('guest:enseignant');
        $this->middleware('guest:etudiant');
        $this->middleware('guest:directeur_reg');
        $this->middleware('guest:directeur_prov');
        $this->middleware('guest:gestionnaire_salle');
        $this->middleware('guest:parent_tuteur');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    // Pour admin
    public function showAdminRegisterForm()
    {
        return view('auth.register', ['url' => 'admin']);
    }

    protected function adminValidator(array $data)
    {
        return Validator::make($data, [
            'name_admin' => ['required', 'string', 'max:255'],
            'email_admin' => ['required', 'string', 'email', 'max:255', 'unique:admins'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }
    protected function createAdmin(Request $request)
    {
        // dd($request->all());
        $this->adminValidator($request->all())->validate();
        $admin = Admin::create([
            'name_admin' => $request['name_admin'],
            'email_admin' => $request['email_admin'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->intended('login/admin');
    }


    // Pour enseignants
    public function showEnseignantRegisterForm()
    {
        return view('auth.register.enseignant', ['enseignant' => 'enseignant']);
    }

    protected function enseignantValidator(array $data)
    {
        return Validator::make($data, [
            'nom_enseignant' => ['required', 'string', 'max:255'],
            'email_enseignant' => ['required', 'string', 'email', 'max:255', 'unique:enseignants'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function createEnseignant(Request $request)
    {
        // dd($request->all());
        $this->enseignantValidator($request->all())->validate();
        $admin = Enseignant::create([
            'nom_enseignant' => $request['nom_enseignant'],
            'email_enseignant' => $request['email_enseignant'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->intended('login/enseignant');
    }

    // Pour Etudiants
    public function showEtudiantRegisterForm()
    {
        return view('auth.register.etudiant', ['etudiant' => 'etudiant']);
    }

    protected function etudiantValidator(array $data)
    {
        return Validator::make($data, [
            'nom_etudiant' => ['required', 'string', 'max:255'],
            'email_etudiant' => ['required', 'string', 'email', 'max:255', 'unique:etudiants'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function createEtudiant(Request $request)
    {
        $this->etudiantValidator($request->all())->validate();
        $admin = Etudiant::create([
            'nom_etudiant' => $request['nom_etudiant'],
            'email_etudiant' => $request['email_etudiant'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->intended('login/etudiant');
    }


    // Pour Directeur Régional
    public function showDirecteur_regRegisterForm()
    {
        return view('auth.register.directeur_reg', ['dr' => 'Directeur régional']);
    }

    protected function directeurRegValidator(array $data)
    {
        return Validator::make($data, [
            'nom_dreg' => ['required', 'string', 'max:255'],
            'email_dreg' => ['required', 'string', 'email', 'max:255', 'unique:directeur_regs'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function createDir_reg(Request $request)
    {
        // dd($request->all());
        $this->directeurRegValidator($request->all())->validate();
        $admin = DirecteurReg::create([
            'nom_dreg' => $request['nom_dreg'],
            'email_dreg' => $request['email_dreg'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->intended('login/directeur_reg');
    }

    // Pour Directeur Provinciale
    public function showDirecteur_provRegisterForm()
    {
        return view('auth.register.directeur_prov', ['drProv' => 'Directeur Provincial']);
    }

    protected function directeurProvValidator(array $data)
    {
        return Validator::make($data, [
            'nom_dr_prov' => ['required', 'string', 'max:255'],
            'email_dr_prov' => ['required', 'string', 'email', 'max:255', 'unique:directeur_provs'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function createDir_prov(Request $request)
    {
        // dd($request->all());
        $this->directeurProvValidator($request->all())->validate();
        $admin = DirecteurProv::create([
            'nom_dr_prov' => $request['nom_dr_prov'],
            'email_dr_prov' => $request['email_dr_prov'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->intended('login/directeur_prov');
    }


    // Pour Directeur Provinciale
    public function showInspecteurRegisterForm()
    {
        return view('auth.register.inspecteur', ['inspect' => 'Inspecteur Régional']);
    }

    protected function inspecteurValidator(array $data)
    {
        return Validator::make($data, [
            'nom_inspect' => ['required', 'string', 'max:255'],
            'email_inspect' => ['required', 'string', 'email', 'max:255', 'unique:inspecteur_regs'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function createInspecteur(Request $request)
    {
        // dd($request->all());
        $this->inspecteurValidator($request->all())->validate();
        $admin = InspecteurReg::create([
            'nom_inspect' => $request['nom_inspect'],
            'email_inspect' => $request['email_inspect'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->intended('login/inspecteur');
    }


    // Pour Directeur Provinciale
    public function showGestionnaireRegisterForm()
    {
        return view('auth.register.gestionnaire', ['gest' => 'Gestionnaire de salle']);
    }

    protected function gestionnnaireValidator(array $data)
    {
        return Validator::make($data, [
            'nom_gestionnaire' => ['required', 'string', 'max:255'],
            'email_gestionnaire' => ['required', 'string', 'email', 'max:255', 'unique:gest_salles'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function createGestionnaire(Request $request)
    {
        // dd($request->all());
        $this->gestionnnaireValidator($request->all())->validate();
        $admin = GestSalle::create([
            'nom_gestionnaire' => $request['nom_gestionnaire'],
            'email_gestionnaire' => $request['email_gestionnaire'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->intended('login/gestionnaire');
    }


    // Pour Parent ou Tuteur
    public function showParentRegisterForm()
    {
        return view('auth.register.parent_tut', ['tuteur' => 'Parent ou Tuteur']);
    }

    protected function parentValidator(array $data)
    {
        return Validator::make($data, [
            'nom_parent' => ['required', 'string', 'max:255'],
            'email_parent' => ['required', 'string', 'email', 'max:255', 'unique:parent_tuteurs'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function createParent(Request $request)
    {
        // dd($request->all());
        $this->parentValidator($request->all())->validate();
        $admin = ParentTuteur::create([
            'nom_parent' => $request['nom_parent'],
            'email_parent' => $request['email_parent'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->intended('login/parent_tut');
    }
}
