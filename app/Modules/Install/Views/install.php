<!DOCTYPE html>
<html>
  <head>
    <?php Arifrh\Themes\Themes::renderCSS('installer'); ?>
  </head>
  <body>
    <div class="inline">
      <div class="logo-container">
        <img class="logo" src="/themes/installer/img/logo.png"/>
      </div>
      <div class="container" id="startpan">
        <div class="row">
          <div class="col">
            <div class="head">
              <h1 class="lc">Installation</h1>
            </div>
            <p class="gi">
               Welcome to the WarriorCMS version <?= $version ?> installation. <br />
               In the next steps you will install the CMS, it´s requiered you have already setuped your WoW Server <br />
               and created an empty database for the CMS
             </p>
            <button class="btn" id="" onclick="next('startpan', 'genpan')">Next</button>
          </div>
        </div>
      </div>
      <div class="container hidden-panel" id="genpan">
        <div class="row">
          <div class="col">
            <div class="head">
              <h1 class="lc">Installation</h1>
            </div>
            <p class="gi">
               Welcome to the WarriorCMS version <?= $version ?> installation. <br />
               In the next steps you will install the CMS, it´s requiered you have already setuped your WoW Server <br />
               and created an empty database for the CMS
             </p>
            <button class="btn" id="" onclick="next('genpan', '')">Next</button>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

<script>
function next(curpanel, nextpanel) {

}

function prev(curpanel, prevpanel) {

}
</script>
