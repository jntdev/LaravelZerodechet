<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class FromAdminController extends Controller
{

    function all_user()
    {
        $users = User::All();

        return view('/admin.all_user', compact('users'), ['title' => 'The Fanny\'s ']);
    }

    function show(Request $request)
    {
        /** @var int $userId */
        $userId = $request->user;
        /** @var User|null $user */
        $user = User::find($userId);

        if ($user === null) {
            return redirect()->route('all_user')->with('error', 'La fiche n\'existe pas ou a été supprimée');
        }
        return view('/admin.profile_FromAdmin', compact('user'), ['title' => 'Profile de ' . $user->first_name]);
    }

    public function update(Request $request): RedirectResponse
    {
        $userId = $request->user_id;
        $user = User::find($userId);

        foreach ($request->all() as $key => $value) {
            if ($key == '_token' || $key == 'user_id') {
                continue;
            }
            $user[$key] = $value;
        }
        $user->save();
        return redirect()->route('profile_FromAdmin', compact('user'))
            ->with('success', 'Le profil a bien été mis à jour');
    }

    public function delete(Request $request)
    {
        $userId = $request->user_id;
        $user = User::find($userId);
        $user->delete();

        return redirect('all_user')->with('error', 'le profil a bien été supprimé');
    }
}


