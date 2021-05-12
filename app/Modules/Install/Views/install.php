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
                </p>
                 <?= form_open('savesitesettings', array('id' => 'siteSettingsForm')) ?>
                  <label class="hv" for="sitename">Website name:</label><br>
                  <input type="input" id="sitename" name="sitename" value=""><br>
                  <label for="discordid">Discord ID:</label><br>
                  <input class="hv" type="input" id="discordid" name="discordid" value=""><br><br>
                 <button class="btn" id="settingssubmit" onclick="">Save</button>
                 <?= form_close() ?>
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
                 Enter Database credentials for your website Database:<br />
                </p>
                 <?= form_open('savesitedatabase', array('id' => 'siteDatabaseForm')) ?>
                  <label class="hv" for="dbhostname">DB Hostname:</label><br>
                  <input type="input" id="dbhostname" name="dbhostname" value=""><br>
                  <label for="dbusername">DB Username:</label><br>
                  <input class="hv" type="input" id="dbusername" name="dbusername" value=""><br>
                  <label for="dbpassword">DB Password:</label><br>
                  <input class="hv" type="input" id="dbpassword" name="dbpassword" value=""><br>
                  <label for="dbname">DB Name:</label><br>
                  <input class="hv" type="input" id="dbname" name="dbname" value=""><br>
                 <button class="btn" id="databasesubmit" onclick="">Save</button>
                 <?= form_close() ?>
               <button class="btn" id="" onclick="prev('webdbpan', 'genpan')">Prev</button>
              <button class="btn" id="" onclick="next('webdbpan', 'realmspan')">Next</button>
            </div>
          </div>
        </div>
        <div class="row hidden-right" id="realmspan">
          <div class="col">
            <div class="head">
              <h1 class="lc">Realms</h1>
            </div>
            <div class="desc">
              <p class="hv">
                 In this section you will add you´r realms:<br />
                </p>
                <div id="realmlist">

                </div>
                 <button class="btn" id="addrealm" onclick="addrealm()">Add</button><br />
               <button class="btn" id="" onclick="prev('realmspan', 'webdbpan')">Prev</button>
              <button class="btn" id="" onclick="finish()">Finish</button>
            </div>
          </div>
        </div>
      </div>
  </body>
</html>

<!-- Import JavaScripts -->
<?php Arifrh\Themes\Themes::renderJS('installer'); ?>

<script>
function addrealm() {
var tag = document.createElement("p");
var text = document.createTextNode("Test");
tag.appendChild(text);
var element = document.getElementById("realmlist");
element.appendChild(tag);
}

</script>
