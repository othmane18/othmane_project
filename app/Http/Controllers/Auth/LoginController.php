<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        // dd('ici');
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');
        $this->middleware('guest:enseignant')->except('logout');
        $this->middleware('guest:etudiant')->except('logout');
        $this->middleware('guest:directeur_reg')->except('logout');
        $this->middleware('guest:directeur_prov')->except('logout');
        $this->middleware('guest:inspecteur_reg')->except('logout');
        $this->middleware('guest:gestionnaire_salle')->except('logout');
        $this->middleware('guest:parent_tuteur')->except('logout');
    }

    // Pour l'Admin
    public function showAdminLoginForm()
    {
        return view('auth.login', ['url' => 'admin']);
    }
    public function adminLogin(Request $request)
    {
        $this->validate($request, [
            'email_admin'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('admin')->attempt(['email_admin' => $request->email_admin, 'password' => $request->password], $request->get('remember'))) {
            // dd('attendons ici!');
            return redirect()->intended('/admins');
        }
        return back()->withInput($request->only('email_admin', 'remember'));
    }

    // Pour l'enseignant
    public function showEnseignantLoginForm()
    {
        return view('auth.login.enseignant', ['enseignant' => 'enseignant']);
    }
    public function enseignantLogin(Request $request)
    {
        $this->validate($request, [
            'email_enseignant'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('enseignant')->attempt(['email_enseignant' => $request->email_enseignant, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/enseignants');
        }
        return back()->withInput($request->only('email_enseignant', 'remember'));
    }

    // Pour l'élève
    public function showEleveLoginForm()
    {
        return view('auth.login.etudiant', ['etudiant' => 'etudiant']);
    }
    public function EleveLogin(Request $request)
    {
        $this->validate($request, [
            'email_etudiant'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('etudiant')->attempt(['email_etudiant' => $request->email_etudiant, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/etudiants');
        }
        return back()->withInput($request->only('email_etudiant', 'remember'));
    }

    // Pour Directeur régional
    public function showDirecteur_regLoginForm()
    {
        return view('auth.login.directeur_reg', ['dr' => 'Directeur régional']);
    }
    public function DirecteurRegLogin(Request $request)
    {
        $this->validate($request, [
            'email_dreg'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('directeur_reg')->attempt(['email_dreg' => $request->email_dreg, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/directeur_regs');
        }
        return back()->withInput($request->only('email_dreg', 'remember'));
    }

    // Pour Directeur provincial
    public function showDirecteur_provLoginForm()
    {
        return view('auth.login.directeur_prov', ['drProv' => 'Directeur provincial']);
    }
    public function DirecteurProvLogin(Request $request)
    {
        $this->validate($request, [
            'email_dr_prov'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('directeur_prov')->attempt(['email_dr_prov' => $request->email_dr_prov, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/directeur_provs');
        }
        return back()->withInput($request->only('email_dr_prov', 'remember'));
    }

    // Pour Inspecteur
    public function showInspecteurLoginForm()
    {
        return view('auth.login.inspecteur', ['inspect' => 'Inspecteur provincial']);
    }
    public function InspecteurLogin(Request $request)
    {
        $this->validate($request, [
            'email_inspect'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('inspecteur_reg')->attempt(['email_inspect' => $request->email_inspect, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/inspecteurs');
        }
        return back()->withInput($request->only('email_inspect', 'remember'));
    }

    // Pour Gestinnnaire de salle
    public function showGestionnaireLoginForm()
    {
        return view('auth.login.gestionnaire', ['gest' => 'Gestionnaire salle']);
    }
    public function GestionnaireLogin(Request $request)
    {
        $this->validate($request, [
            'email_gestionnaire'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('gestionnaire_salle')->attempt(['email_gestionnaire' => $request->email_gestionnaire, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/gestionnaires');
        }
        return back()->withInput($request->only('email_gestionnaire', 'remember'));
    }

    // Pour Parent ou Tuteur
    public function showParentLoginForm()
    {
        return view('auth.login.parent_tut', ['tuteur' => 'parent ou tuteur']);
    }
    public function ParentLogin(Request $request)
    {
        $this->validate($request, [
            'email_parent'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('parent_tuteur')->attempt(['email_parent' => $request->email_parent, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/parent_tuts');
        }
        return back()->withInput($request->only('email_parent', 'remember'));
    }
}
