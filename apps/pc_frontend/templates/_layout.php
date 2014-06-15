<?php use_helper('opSkinThemePlugin') ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
  <?php include_partial('global/html_header') ?>
  <?php echo $op_config->get('pc_html_head') ?>
</head>
<body id="<?php printf('page_%s_%s', $view->getModuleName(), $view->getActionName()) ?>" class="<?php echo opToolkit::isSecurePage() ? 'secure_page' : 'insecure_page' ?>">

  <?php echo $op_config->get('pc_html_top2') ?>

  <div id="Body">

    <?php echo $op_config->get('pc_html_top') ?>

    <div id="Container">

      <div id="Header" class="navbar <?php if('friend' == getNavType()): ?>navbar-inverse<?php endif; ?>">
        <div id="HeaderContainer" class="navbar-inner">
          <div class="container">
            <?php include_partial('global/header') ?>
          </div>
        </div><!-- HeaderContainer -->
      </div><!-- Header -->

      <div id="Contents">
        <div id="ContentsContainer">

          <div id="Layout<?php echo $layout ?>" class="Layout">
            <?php include_partial('global/flash', array('sf_user' => $sf_user, 'sf_data' => $sf_data)) ?>

            <?php if (has_slot('op_top')): ?>
              <div id="Top">
                <?php include_slot('op_top') ?>
              </div><!-- Top -->
            <?php endif; ?>

            <?php if (has_slot('op_sidemenu')): ?>
              <div id="Left">
                <?php include_slot('op_sidemenu') ?>
              </div><!-- Left -->
            <?php endif; ?>

            <div id="Center">
              <?php echo $sf_content ?>
            </div><!-- Center -->

            <?php if (has_slot('op_bottom')): ?>
              <div id="Bottom">
                <?php include_slot('op_bottom') ?>
              </div><!-- Bottom -->
            <?php endif; ?>
          </div><!-- Layout -->

          <div id="sideBanner">
            <?php include_component('default', 'sideBannerGadgets'); ?>
          </div><!-- sideBanner -->

        </div><!-- ContentsContainer -->
      </div><!-- Contents -->

      <?php if ($sf_request->isSmartphone(false)): ?>
        <?php include_partial('default/SmtSwitch') ?>
      <?php endif ?>

      <div id="Footer">
        <div id="FooterContainer">
          <?php include_partial('global/footer') ?>
        </div><!-- FooterContainer -->
      </div><!-- Footer -->

      <?php echo $op_config->get('pc_html_bottom2') ?>

    </div><!-- Container -->

  <?php echo $op_config->get('pc_html_bottom') ?>

  </div><!-- Body -->
</body>
</html>
