<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageComponent extends Controller
{
    public function edit(string $component, string $type){
        return response()
            ->view('account.admin.admin_component', [
                'component' => $component,
                'type' => $type
            ]);
    }
}
