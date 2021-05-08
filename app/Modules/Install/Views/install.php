<!DOCTYPE html>
<html>
  <head>
    <?php Arifrh\Themes\Themes::renderCSS('installer'); ?>
  </head>
  <body>
    <div class="container pan-1" id="startpan">
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
          <button class="btn" id="startnextbtn" onclick="changeSection('startpan', 'generalpan')">Next</button>
        </div>
      </div>
    </div>
    <div class="container pan-2 hide-pan" id="generalpan">
      <div class="row">
        <div class="col">
          <img src="/themes/installer/img/logo.png" width="100px;" height="100px;"/>
          <h1>General</h1>
          <hr />
          <p class="desc">
             In this section you will configure some basic infos about your website.
           </p>
           <div class="inline">
              <button class="btn" id="dbprevbtn" onclick="changeSection('generalpan', 'startpan')">Prev</button>
              <button class="btn" id="dbnextbzn" onclick="changeSection('generalpan', 'webdbpan')">Next</button>
           </div>
        </div>
      </div>
    </div>
    <div class="container pan-3 hide-pan" id="webdbpan">
      <div class="row">
        <div class="col">
          <img src="/themes/installer/img/logo.png" width="100px;" height="100px;"/>
          <h1>Web DB</h1>
          <hr />
          <p class="desc">
             In this section you will configure your website database
           </p>
           <div class="inline">
              <button class="btn" id="dbprevbtn" onclick="changeSection('webdbpan', 'generalpan')">Prev</button>
              <button class="btn" id="dbnextbzn" onclick="changeSection('webdbpan', 'gamedbpan')">Next</button>
           </div>
        </div>
      </div>
    </div>
    <div class="container pan-4 hide-pan" id="gamedbpan">
      <div class="row">
        <div class="col">
          <img src="/themes/installer/img/logo.png" width="100px;" height="100px;"/>
          <h1>Game DB</h1>
          <hr />
          <p class="desc">
             In this section you will configure your Databases for the installed emulator.
           </p>
           <div class="inline">
              <button class="btn" id="dbprevbtn" onclick="changeSection('gamedbpan', 'webdbpan')">Prev</button>
              <button class="btn" id="dbnextbzn" onclick="">Finish</button>
           </div>
        </div>
      </div>
    </div>
  </body>
</html>

<script>
function changeSection(hide, show) {
  var showele = document.getElementById(show);
  var hideele = document.getElementById(hide);
  hideele.classList.add('hide-pan');
  showele.classList.remove('hide-pan');
}
</script>
