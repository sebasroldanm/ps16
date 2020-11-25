<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

class CwEjemplo extends ModuleCore
{
    public function __construct()
    {
        $this->name = 'cwejemplo';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Sebastian Roldan';
        $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
        $this->displayName = 'Módulo de Ejemplo';
        $this->description = 'Módulo de ejemplo par el curso';
        parent::__construct();
    }
}
