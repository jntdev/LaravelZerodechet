<?php

namespace App\Http\Controllers;
use App\Models\user;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoggedController extends Controller
{


    function index(){
        return view('/home');
    }
    function profile(){
        $user = Auth::user();
        return view('/auth.register',compact('user'));
    }

    function update(Request $request) : RedirectResponse{
        try {
            /** @var User $user */
            $user = User::find($request->user_id);
            /**
             * @var string $key
             * @var string $value
             */
            foreach ($request->all() as $key => $value) {
                if ($key == '_token' || 'user_id') {
                    continue;
                }
                $user->$key = $value;
            }

            $user->save();
        return redirect()->route('/')->with('success', 'Votre profil a bien été mis à jour');
    }catch (Exception $e) {
            return redirect()->route('profile')->with('error', 'Une erreur est survenue');
        }
    }


    /*catch (Exception $e) {
return redirect()->route('profile', ['user' => $request->user_id])->with('error', 'Une erreur est survenue');

    }*/

    //fonction qui supprime l'utilisateur de la bdd
    public function delete(Request $request){

        $user=user::find($request->user_id);

        $user->delete();
        $request->session()->invalidate();
        return redirect('/');
    }
}
