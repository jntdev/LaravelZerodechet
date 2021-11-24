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

            return view('/home');

        }

    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    function profile(){
        $user = Auth::user();
        return view('/auth.profile',compact('user'));
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    function update(UpdateProfileRequest $request) : RedirectResponse{
            $user = Auth::user();

            $user ->update([
                'first_name'=> $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'phone_nb' => $request->phone_nb,
                'captn_mail' => $request->captn_mail,
            ]);
        return redirect()->route('profile')->with('success', 'Votre profil a bien été mis à jour');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function delete(Request $request){

        $user=Auth::user();

        $user->delete();
        $request->session()->invalidate();
        return redirect('/');
    }
}
