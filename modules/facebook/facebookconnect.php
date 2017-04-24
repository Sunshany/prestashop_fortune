<?php
/**
 * Created by PhpStorm.
 * User: sarah.amairi@epitech.eu
 * Date: 24/04/2017
 * Time: 16:15
 */

if (!defined('_PS_VERSION_'))
    exit;

class facebookconnect extends Module
{
    public function __construct()
    {
        $this->name = 'facebookconnect';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Amairi Sarah';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('test');
        $this->description = $this->l('test');

        $this->confirmUninstall = $this->l('Are you sure you want to uninstall ;( ?');

        if (!Configuration::get('MYMODULE_NAME'))
            $this->warning = $this->l('No name provided');
    }

    public function install()
    {
        if (Shop::isFeatureActive())
            Shop::setContext(Shop::CONTEXT_ALL);

        if (!parent::install() ||
            !$this->registerHook('leftColumn') ||
            !$this->registerHook('header') ||
            !Configuration::updateValue('MYMODULE_NAME', 'my friend')
        )
            return false;

        return true;
    }

    public function uninstall()
    {
        if (!parent::uninstall())
            return false;
        return true;
    }
}