<?php echo link_to($op_config['sns_name'], '@homepage', array('class' => 'brand')) ?>

<?php $culture = $sf_user->getCulture() ?>

<ul class="nav" id="localNav">
<li id="notificationCenter">
<?php include_partial('default/notificationCenter') ?>
</li>

<?php
$localNavOptions = array(
  'is_secure' => $is_secure,
  'type'      => getNavType(),
  'culture'   => $culture,
);
if ('default' !== $localNavOptions['type'])
{
  $localNavOptions['nav_id'] = sfConfig::get('sf_nav_id', $sf_request->getParameter('id'));
}
include_component('default', 'localNav', $localNavOptions);
?>
</ul><!-- localNav -->

<div id="globalNav">
<ul class="nav pull-right">
<?php
$globalNavOptions = array(
  'type'      => $is_secure ? 'secure_global' : 'insecure_global',
  'culture'   => $culture,
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
