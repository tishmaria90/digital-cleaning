<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\UserRequest as StoreRequest;
use App\Http\Requests\UserRequest as UpdateRequest;
use Illuminate\Http\Request;

/**
 * Class UserCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class UserCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\User');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/user');
        $this->crud->setEntityNameStrings('user', 'users');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // TODO: remove setFromDb() and manually define Fields and Columns
        //$this->crud->setFromDb();
        $this->crud->setColumns(['name', 'email']);
        $this->crud->addField([
            'name' => 'name',
            'label' => "Name",
            'type' => 'text'
        ], 'create/update');
        $this->crud->addField([
            'name' => 'email',
            'label' => "Email",
            'type' => 'email'
        ], 'create/update');
        $this->crud->addField([
            'name' => 'password',
            'label' => "Password",
            'type' => 'password'
        ], 'create');
        /*$this->crud->addField([
            'name' => 'remember_token',
            'label' => "Remember me",
            'type' => 'checkbox'
        ], 'create');*/

        // add asterisk for fields that are required in UserRequest
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');
    }

    public function store(StoreRequest $request)
    {
        $request->offsetSet('password', \Hash::make($request->password));
//        if ($request->remember_token) $request->offsetSet('remember_token', str_random(10));

        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    /**
     * Show user settings.
     *
     * @return \Illuminate\Http\Response
     */
    public function settings() {
        return view('user_settings');
    }

    /**
     * Save user settings
     *
     * @param UserSettingRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function post_settings(Request $request) {
        $user_settings = \App\User::firstOrNew(['id' => \Auth::id()]);
        foreach ($request->except('_token') as $name => $value) {
            $user_settings->$name = $value;
        }
        $user_settings->save();

        return redirect()->back()->with('status', 'Profile updated!');
    }
}
