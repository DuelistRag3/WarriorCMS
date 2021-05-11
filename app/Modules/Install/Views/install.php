<!DOCTYPE html>
<html>
  <head>
    <?php Arifrh\Themes\Themes::renderCSS('installer'); ?>
  </head>
  <body>
      <div class="logo-container">
        <img class="logo" src="/themes/installer/img/logo.png"/>
      </div>
      <div class="container">
        <div class="row" id="startpan">
          <div class="col">
            <div class="head">
              <h1 class="lc">Installation</h1>
            </div>
              <div class="desc">
                <p class="hv">
                   Welcome to the WarriorCMS version <?= $version ?> installation. <br />
                   In the next steps you will install the CMS, it´s requiered you have already setuped your WoW Server <br />
                   and created an empty database for the CMS
                 </p>
                <button class="btn" id="" onclick="next('startpan', 'genpan')">Next</button>
            </div>
          </div>
        </div>
        <div class="row hidden-right" id="genpan">
          <div class="col">
            <div class="head">
              <h1 class="lc">Website settings</h1>
            </div>
            <div class="desc">
              <p class="hv">
                 Change settings for your website:<br />
                 <?= form_open('/home', array('id' => 'siteSettingsForm')) ?>
                 <button class="btn" id="" onclick="">Save</button>
                 <?= form_close() ?>
               </p>
              <button class="btn" id="" onclick="prev('genpan', 'startpan')">Prev</button>
              <button class="btn" id="" onclick="next('genpan', 'webdbpan')">Next</button>
            </div>
          </div>
        </div>
        <div class="row hidden-right" id="webdbpan">
          <div class="col">
            <div class="head">
              <h1 class="lc">Web Db</h1>
            </div>
            <div class="desc">
              <p class="hv">
                 Test
               </p>
               <button class="btn" id="" onclick="prev('webdbpan', 'genpan')">Prev</button>
              <button class="btn" id="" onclick="next('genpan', '')">Next</button>
            </div>
          </div>
        </div>
      </div>
  </body>
</html>

<!-- Import JavaScripts -->
<?php Arifrh\Themes\Themes::renderJS('installer'); ?>
