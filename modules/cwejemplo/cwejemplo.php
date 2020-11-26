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
        $this->bootstrap = true;
        $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
        $this->displayName = 'Módulo de Ejemplo';
        $this->description = 'Módulo de ejemplo par el curso';
        parent::__construct();
    }

    public function install()
    {
        if (!parent::install() || !ConfigurationCore::updateValue('CWEJEMPLO_URL', 'http://urlejemplo.com'))
            return false;
        return true;
    }

    public function uninstall()
    {
        if (!parent::uninstall() || !ConfigurationCore::deleteByName('CWEJEMPLO_URL'))
            return false;
        return true;
    }

    public function getContent()
    {
        $this->smarty->assign('save', false);

        if (Tools::isSubmit('submitCwEjemplo')) {
            $myUrl = Tools::getValue('exampleUrl');
            ConfigurationCore::updateValue('CWEJEMPLO_URL', $myUrl);
            $this->smarty->assign('save', true);
        }

        $urlvalue = ConfigurationCore::get('CWEJEMPLO_URL');
        $this->smarty->assign('urlvalue', $urlvalue);
        return $this->display(__FILE__, 'configure.tpl');
    }
}
