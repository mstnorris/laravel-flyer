<?php

namespace App\Http\Controllers\Traits;

use App\Flyer;
use Illuminate\Http\Request;

trait AuthorisesUsers
{
    private function userCreatedFlyer(Request $request)
    {
        return Flyer::where([
            'zip'     => $request->zip,
            'street'  => $request->street,
            'user_id' => $this->user->id
        ])->exists();
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function unauthorised(Request $request)
    {
        if ($request->ajax()) {
            return response(['message' => 'No way!'], 403);
        }

        flash()->error('No way!');

        return redirect()->route('home_path');
    }
}