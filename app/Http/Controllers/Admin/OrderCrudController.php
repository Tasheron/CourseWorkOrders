<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class OrderCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class OrderCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        CRUD::setModel(\App\Models\Order::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/order');
        CRUD::setEntityNameStrings('order', 'orders');
    }

    protected function setupListOperation()
    {
        CRUD::column('id');
        CRUD::column('email');
        CRUD::column('phone');
        CRUD::addColumn([
            'name'  => 'plan',
            'label' => 'Plan',
            'type'  => 'enum',
            'options' => [
                Order::PLAN_FREE => 'Free',
                Order::PLAN_VIP => 'VIP',
            ],
        ]);
        CRUD::addColumn([
            'name'  => 'status',
            'label' => 'Status',
            'type'  => 'enum',
            'options' => [
                Order::STATUS_NEW => 'New',
                Order::STATUS_CALLED => 'Called',
                Order::STATUS_PAYED => 'Payed',
                Order::STATUS_DONE => 'Done',
            ],
        ]);
        CRUD::column('name');
    }

    protected function setupShowOperation()
    {
        CRUD::column('id');
        CRUD::column('email');
        CRUD::column('phone');
        CRUD::column('name');
        CRUD::addColumn([
            'name'  => 'plan',
            'label' => 'Plan',
            'type'  => 'enum',
            'options' => [
                Order::PLAN_FREE => 'Free',
                Order::PLAN_VIP => 'VIP',
            ],
        ]);
        CRUD::addColumn([
            'name'  => 'status',
            'label' => 'Status',
            'type'  => 'enum',
            'options' => [
                Order::STATUS_NEW => 'New',
                Order::STATUS_CALLED => 'Called',
                Order::STATUS_PAYED => 'Payed',
                Order::STATUS_DONE => 'Done',
            ],
        ]);
        CRUD::column('created_at');
        CRUD::column('updated_at');
    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation([
            'email' => 'required|email',
            'name' => 'string|min:2',
            'phone' => 'required|min:10',
            'plan' => 'required',
            'status' => 'required',
        ]);

        CRUD::field('email')->type('email');
        CRUD::field('name')->type('text');
        CRUD::field('phone')->type('text');
        CRUD::addField([
            'name'  => 'plan',
            'label' => 'Plan',
            'type'  => 'enum',
            'options' => [
                Order::PLAN_FREE => 'Free',
                Order::PLAN_VIP => 'VIP',
            ],
        ]);
        CRUD::addField([
            'name'  => 'status',
            'label' => 'Status',
            'type'  => 'enum',
            'options' => [
                Order::STATUS_NEW => 'New',
                Order::STATUS_CALLED => 'Called',
                Order::STATUS_PAYED => 'Payed',
                Order::STATUS_DONE => 'Done',
            ],
        ]);
    }

    protected function setupUpdateOperation()
    {
        CRUD::setValidation([
            'email' => 'required|email',
            'name' => 'string|min:2',
            'phone' => 'required|min:10',
            'plan' => 'required',
            'status' => 'required',
        ]);

        CRUD::field('email')->type('email');
        CRUD::field('name')->type('text');
        CRUD::field('phone')->type('text');
        CRUD::addField([
            'name'  => 'plan',
            'label' => 'Plan',
            'type'  => 'enum',
            'options' => [
                Order::PLAN_FREE => 'Free',
                Order::PLAN_VIP => 'VIP',
            ],
        ]);
        CRUD::addField([
            'name'  => 'status',
            'label' => 'Status',
            'type'  => 'enum',
            'options' => [
                Order::STATUS_NEW => 'New',
                Order::STATUS_CALLED => 'Called',
                Order::STATUS_PAYED => 'Payed',
                Order::STATUS_DONE => 'Done',
            ],
        ]);
    }
}
