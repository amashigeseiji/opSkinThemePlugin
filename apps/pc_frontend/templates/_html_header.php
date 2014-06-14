<?php include_http_metas() ?>
<?php include_metas() ?>
<?php include_title() ?>
<?php use_stylesheet('/cache/css/customizing.css') ?>
<?php if (Doctrine::getTable('SnsConfig')->get('customizing_css')): ?>
<link rel="stylesheet" type="text/css" href="<?php echo url_for('@customizing_css') ?>" />
<?php endif; ?>
<?php include_stylesheets() ?>
<?php
use_helper('Javascript');
use_javascript('jquery.min.js');
use_javascript('jquery.tmpl.min.js');
?>
<?php if (opConfig::get('enable_jsonapi') && opToolkit::isSecurePage()): ?>
<?php
$jsonData = array(
  'apiKey' => $sf_user->getMemberApiKey(),
  'apiBase' => app_url_for('api', 'homepage'),
);

echo javascript_tag('
var openpne = '.json_encode($jsonData).';
');
?>
<?php endif ?>
<?php include_javascripts() ?>
<?php echo $op_config->get('pc_html_head') ?>
