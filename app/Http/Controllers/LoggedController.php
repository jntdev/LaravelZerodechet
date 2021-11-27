<?php

namespace App\Http\Controllers;
use App\Http\Requests\Users\UpdateProfileRequest;
use App\Models\user;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoggedController extends Controller
{

    /**
     * @param user $user
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|RedirectResponse
     */
    function index(user $user, request $request){

        if (Auth::user()->id == $user->id){
            //dd('tata');
            return $this->update($request);
        }
        else{

            return view('/home',['title'=>'Bienvenue !']);

        }

    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    function profile(){
        $user = Auth::user();

        return view('/auth.profile',compact('user'),['title'=>'Mon profil']);
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
        function update(Request $request) : RedirectResponse
    {

        $user = Auth::user();
        foreach ($request->except('password_confirmation') as $key => $value) {
            if ($key == '_token' || $key == 'user_id') {
                continue;
            }
            if ($key == 'password') {
                $hashedPassword = Hash::make($request->password);
                $user[$key] = $hashedPassword;
            } else {
                $user[$key] = $value;
            }
        }$user->save();
            return redirect()->route('profile', compact('user'))->with('success', 'Votre profil a bien été mis à jour');
        }


    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function delete(Request $request){
        $user=Auth::user();
        $user->delete();
        $request->session()->invalidate();
        return redirect('/')->with('error', 'Votre profil a bien été supprimé');
    }
}
