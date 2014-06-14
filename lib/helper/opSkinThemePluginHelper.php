<?php
function getNavType()
{
  $module = sfContext::getInstance()->getActionStack()->getLastEntry()->getModuleName();

  return sfConfig::get('sf_nav_type', sfConfig::get('mod_'.$module.'_default_nav', 'default'));
}
