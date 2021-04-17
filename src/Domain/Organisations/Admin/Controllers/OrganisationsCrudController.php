<?php

namespace Domain\Organisations\Admin\Controllers;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use Domain\Admin\Controllers\BaseCrudController;

/**
 * OrganisationCrudController
 *
 * @projet
 * @organisation <>
 * @author  <>
 * @license <https://opensource.org/licenses/MIT> MIT
 */
class OrganisationsCrudController extends BaseCrudController
{
    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        $this->crud->setModel(\Domain\Organisations\Models\Organisation::class);
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/organisations');
        $this->crud->setEntityNameStrings('organisation', 'organisations');
    }

    protected function _addColumns($state='all')
    {
        $this->crud->setFromDb(); // columns
    }

    protected function _addFields($state='all')
    {
        $this->crud->setFromDb(); // fields

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
    }
}
