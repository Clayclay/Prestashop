<?php
if (!defined('_PS_VERSION_'))
  exit;
 
class MyModule extends Module
{
  public function __construct()
  {
    $this->name = 'mymodule';
    $this->tab = 'front_office_features';
    $this->version = '1.0';
    $this->author = 'Firstname Lastname';
    $this->need_instance = 0;
    $this->ps_versions_compliancy = array('min' => '1.5', 'max' => '1.5');
    $this->dependencies = array('blockcart');
 
    parent::__construct();
 
    $this->displayName = $this->l('mymodule');
    $this->description = $this->l('Description of my module.');
 
    $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');
 
    if (!Configuration::get('MYMODULE_NAME'))      
      $this->warning = $this->l('No name provided');
  }
  
  public function install()
{
  if (Shop::isFeatureActive())
    Shop::setContext(Shop::CONTEXT_ALL);
 
  return parent::install() &&
    $this->registerHook('leftColumn') &&
    $this->registerHook('header') &&
    Configuration::updateValue('MYMODULE_NAME', 'my friend');
  }

  
  public function uninstall()
{
  return parent::uninstall() && Configuration::deleteByName('MYMODULE_NAME');
}
  
  
}
?>
