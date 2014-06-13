<?php echo link_to($op_config['sns_name'], '@homepage', array('class' => 'brand')) ?>


<ul class="nav" id="localNav">
  <li id="notificationCenter">
  <?php include_partial('default/notificationCenter') ?>
  </li>

<?php
$context = sfContext::getInstance();
$module = $context->getActionStack()->getLastEntry()->getModuleName();
$localNavOptions = array(
  'is_secure' => opToolkit::isSecurePage(),
  'type'      => sfConfig::get('sf_nav_type', sfConfig::get('mod_'.$module.'_default_nav', 'default')),
  'culture'   => $context->getUser()->getCulture(),
);
if ('default' !== $localNavOptions['type'])
{
  $localNavOptions['nav_id'] = sfConfig::get('sf_nav_id', $context->getRequest()->getParameter('id'));
}
include_component('default', 'localNav', $localNavOptions);
?>
</ul>

<div id="globalNav">
<ul class="nav pull-right" >
<?php
$globalNavOptions = array(
  'type'      => opToolkit::isSecurePage() ? 'secure_global' : 'insecure_global',
  'culture'   => sfContext::getInstance()->getUser()->getCulture(),
);
include_component('default', 'globalNav', $globalNavOptions);
?>
</ul>
</div><!-- globalNav -->

<div id="topBanner">
<?php if ($sf_user->isSNSMember()): ?>
<?php echo op_banner('top_after') ?>
<?php else: ?>
<?php echo op_banner('top_before') ?>
<?php endif ?>
</div>
