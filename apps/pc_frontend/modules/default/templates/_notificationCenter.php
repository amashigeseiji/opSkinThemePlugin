<?php if (opConfig::get('enable_jsonapi') && opToolkit::isSecurePage()): ?>
<?php use_javascript('jquery.notify.js') ?>
<?php use_javascript('op_notify.js') ?>
<a class="ncbutton">
  <i class="fa fa-envelope-o"></i>
  <i class="fa fa-users"></i>
  <b>@</b>
</a>

<div id="notificationCenterDetail" class="alert alert-block">
  <div id="notificationCenterDetailHeader">
    <?php echo __('Notification Center') ?>
  </div>
  <div id="notificationCenterLoading">
    <?php echo op_image_tag('ajax-loader.gif') ?>
  </div>
  <div id="notificationCenterError">
    <?php echo __('There is no new notification.') ?>
  </div>
</div>

<script id="notificationCenterListTemplate" type="text/x-jquery-tmpl">
    <div class="{{if unread==false}}isread {{/if}}{{if category=="message" || category=="other"}}nclink {{/if}}push" data-notify-id="${id}" data-location-url="${url}" data-member-id="${member_id_from}">
      <div class="push_icon">
        <img src="${icon_url}" width="48">
      </div>
      <div class="push_content">
      {{if category=="link"}}
        {{if unread==false}}
        <?php echo __('%Friend% link request') ?>
        {{else}}
        <?php echo __('Do you accept %friend% link request?') ?>
        <div class="push_yesno">
          <button class="friend-accept">YES</button>
          <button class="friend-reject">NO</button>
          <div class="ncfriendloading"><?php echo op_image_tag('ajax-loader.gif') ?></div>
          <div class="ncfriendresultmessage"></div>
        </div>
        {{/if}}
      {{else}}
        ${body}
      {{/if}}
      </div>
    </div>
</script>

<script id="notificationCenterCountTemplate" type="text/x-jquery-tmpl">
  {{if message!==0}}
  <span id="nc_icon1">${message}</span>
  {{/if}}
  {{if link!==0}}
  <span id="nc_icon2">${link}</span>
  {{/if}}
  {{if other!==0}}
  <span id="nc_icon3">${other}</span>
  {{/if}}
</script>
<?php endif; ?>
