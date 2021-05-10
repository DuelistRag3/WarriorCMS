<!DOCTYPE html>
<html>
  <head>
    <?php Arifrh\Themes\Themes::renderCSS('installer'); ?>
  </head>
  <body>
    <div class="inline">
      <img class="logo" src="/themes/installer/img/logo.png" width="100px;" height="100px;"/>
      <div class="container pan-1" id="startpan">
        <div class="row">
          <div class="col">
            <div class="head">
              <h1>Installation</h1>
            </div>
            <p class="gi">
               Welcome to the WarriorCMS version <?= $version ?> installation. <br />
               In the next steps you will install the CMS, it´s requiered you have already setuped your WoW Server <br />
               and created an empty database for the CMS
             </p>
            <button class="btn" id="startnextbtn" onclick="changeSection('startpan', 'generalpan')">Next</button>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

<script>
function changeSection(hide, show, hidedirect) {
  var left = 'hide-pan-' + hidedirect;
  var right = 'hide'
  var showele = document.getElementById(show);
  var hideele = document.getElementById(hide);
  hideele.classList.add(direct);
  showele.classList.remove(direct);
}
</script>
