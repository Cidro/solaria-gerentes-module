<?php
namespace Asimov\Solaria\Modules\Gerentes;

use Asimov\Solaria\Modules\Gerentes\Models\Gerente;
use Solaria\Modules\SolariaModule;

class Gerentes implements SolariaModule {

    protected $name = 'Gerentes';

    protected $menu_name = 'Gerentes';

    public function getName() {
        return $this->name;
    }

    public function getMenuName() {
        return $this->menu_name;
    }

    public function getBackendMenuUrl() {
        return url('backend/modules/gerentes');
    }

    public function getBackendStyles() {
        return [asset('modules/gerentes/css/gerentes-module.css')];
    }

    public function getFrontendStyles() {
        // TODO: Implement getFrontendStyles() method.
    }

    public function getBackendScripts() {
        return [asset('modules/gerentes/js/gerentes-module.js')];
    }

    public function getFrontendScripts() {
        // TODO: Implement getFrontendScripts() method.
    }

    public function getCustomFields() {
        // TODO: Implement getCustomFields() method.
    }

    public function render($gerente_alias){

    }
}