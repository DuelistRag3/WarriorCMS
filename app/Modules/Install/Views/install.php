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
                <p class="gi">
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
              <h1 class="lc">Test</h1>
            </div>
            <div class="desc">
              <p class="gi">
                 Test
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
              <p class="gi">
                 Test
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
    var add = document.getElementById(nextpanel);
    var remove = document.getElementById(curpanel)
    add.classList.remove("hidden-right");
    remove.classList.add("hidden-left");
}

function prev(curpanel, prevpanel) {
  var add = document.getElementById(prevpanel);
  var remove = document.getElementById(curpanel)
  add.classList.remove("hidden-left");
  remove.classList.add("hidden-right");
}
</script>
