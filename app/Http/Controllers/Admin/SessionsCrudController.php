<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class SessionsCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class SessionsCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        CRUD::setModel(\App\Models\Sessions::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/sessions');
        CRUD::setEntityNameStrings('sessions', 'sessions');
    }

    protected function setupListOperation()
    {
        CRUD::column('ip_address');
        CRUD::column('last_activity');
        CRUD::column('payload');
        CRUD::column('user_agent');
        CRUD::column('user_id');

        CRUD::removeButton('create');
        CRUD::removeButton('update');
    }

    protected function setupShowOperation()
    {
        CRUD::column('id');
        CRUD::addColumn([
            'name' => 'user_id',
            'label' => 'User',
            'attribute' => 'name',
            'entity' => 'user'
        ]);
        CRUD::column('ip_address');
        CRUD::column('last_activity');
        CRUD::column('payload');
        CRUD::column('user_agent');

        CRUD::removeButton('update');
    }
}
