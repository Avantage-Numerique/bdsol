<?php

namespace Domain\Admin\Controllers;

use Backpack\CRUD\app\Http\Controllers\CrudController;

/**
 * PersonCrudController
 * Gestion des entités personnes
 * @projet BDSOL
 * @organisation Avantage Numérique <avantage-numerique.org>
 * @author Marc-André Martin <marcandre@mamarmite.com>
 * @license <https://opensource.org/licenses/MIT> MIT
 */
class BaseCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation {
        show as traitShow;
    }
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation {
        index as traitList;
    }
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation {
        create as traitCreate;
        store as traitStore;
    }
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation {
        update as traitUpdate;
        edit as traitEdit;
    }
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation {
        destroy as traitDelete;
    }

    public $tab_info;
    public $tab_medias;
    public $tab_contact;
    public $tab_identifiants;
    public $tab_parameters;


    public function setupShowOperation()
    {
        $this->_addColumns('list');
    }

    public function setupListOperation()
    {
        $this->_addColumns('list');
        $this->_addFilters('list');
        $this->_setQuery('list');
    }


    public function setupCreateOperation()
    {
        $this->_addFields('create');
    }


    public function setupUpdateOperation()
    {
        $this->_addFields('update');
    }


    //  ##  CRUD Methods    ##  //

    public function setup() {
        parent::setup();
        $this->tab_info = __('admin.tab-info');
        $this->tab_medias = __('admin.tab-medias');
        $this->tab_contact = __('admin.tab-contacts');
        $this->tab_identifiants = __('admin.tab-identifiants');
        $this->tab_parameters = __('admin.tab-parameters');
    }

    public function index()
    {
        return $this->traitList();
    }

    public function create()
    {
        return $this->traitCreate();
    }

    public function store()
    {
        return $this->traitStore();
    }

    public function edit($id)
    {
        return $this->traitEdit($id);
    }

    public function show($id)
    {
        return $this->traitShow($id);
    }

    public function destroy($id)
    {
        return $this->traitDelete($id);
    }


    //  ##  Private methods for columns, fields, filters, etc.  ##  //

    protected function _addColumns($state='all')
    {

    }


    protected function _addFields($state='all')
    {

    }


    protected function _addFilters($state='all')
    {

    }


    protected function _setQuery($state='all')
    {

    }
}
