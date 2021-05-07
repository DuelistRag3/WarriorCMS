<!DOCTYPE html>
<html>
  <head>
    <?php Arifrh\Themes\Themes::renderCSS('installer'); ?>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col">
          <img src="/themes/installer/img/logo.png" width="100px;" height="100px;"/>
          <h1>Installation</h1>
          <hr />
          <p class="desc">
             Wellcome to the WarriorCMS version <?= $version ?> installation. <br />
             In the next steps you will install the CMS, it´s requiered you have already setuped your WoW Server <br />
             and created an empty database for the CMS
           </p>
          <button class="btn">Start</button>
        </div>
      </div>
    </div>
  </body>
</html>
