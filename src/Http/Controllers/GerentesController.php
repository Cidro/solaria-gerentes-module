<?php

namespace Asimov\Solaria\Modules\Gerentes\Http\Controllers;

use Asimov\Solaria\Modules\Gerentes\Models\Gerente;
use Illuminate\Http\Request;
use Mail;
use Solaria\Http\Controllers\Backend\BackendController;
use Solaria\Models\User;

class GerentesController extends BackendController {
    public function getIndex(){
        view()->share([
            'gerentes' => Gerente::all(),
            'users' => User::all()
        ]);
        $data['content'] = view('moduleforms::backend.index');
        return view($this->layout, $data);
    }

    public function postIndex(Request $request){

    }
}