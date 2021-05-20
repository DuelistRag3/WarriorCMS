function addRealm() {
    (async () => {

    const { value: formValues } = await Swal.fire({
    title: 'Realm Settings',
    html:
      '<input type="input" id="realmname" class="swal2-input" stlye="margin-right: 5px;" placeholder="Realm Name">' +
      '<input type="input" id="realmportal" class="swal2-input" placeholder="Realm Portal / List">' +
      '<input type="input" id="realmdbhost" class="swal2-input" stlye="margin-right: 5px;" placeholder="DB Hostname">' +
      '<input type="input" id="realmdbuser" class="swal2-input" placeholder="DB Username">' +
      '<input type="password" id="realmdbpass" class="swal2-input" placeholder="DB Password"><br>' +
      '<input type="input" id="realmdbauthname" class="swal2-input" stlye="margin-right: 5px;" placeholder="Auth DB Name">' +
      '<input type="input" id="realmdbcharname" class="swal2-input" placeholder="Char DB Name">' +
      '<select id="realmemulator" class="swal2-select"><option value="none" disabled selected>---Select the Emulator---</option><option value="srp6">SRP6</option><option value="TrinityCore">TrinityCore</option><option value="Hex">Hex</option></select>' +
      '<select id="realmbnetsupport" class="swal2-select"><option value="none" disabled selected>---Battlenet Support?---</option><option value="true">YES</option><option value="false">NO</option></select>',

    focusConfirm: false,
    showCancelButton: true,
    confirmButtonText: 'Add Realm',
    preConfirm: () => {
      return [
          rname     = document.getElementById('realmname').value,
          rportal   = document.getElementById('realmportal').value,
          rdbhost   = document.getElementById('realmdbhost').value,
          rdbuser   = document.getElementById('realmdbuser').value,
          rdbpass   = document.getElementById('realmdbpass').value,
          rdbauthname   = document.getElementById('realmdbauthname').value,
          rdbcharname   = document.getElementById('realmdbcharname').value,
          remulat   = document.getElementById('realmemulator').value,
          rbnetsu   = document.getElementById('realmbnetsupport').value
        ]
      }
    })

    if (formValues) {
      var i = 0;
      var table = document.getElementById('realmlist');
      var row = table.insertRow();
      var cell1 = row.insertCell(0);
      var cell2 = row.insertCell(1);
      var cell3 = row.insertCell(2);
      cell1.innerHTML = rname;
      cell2.innerHTML = remulat;
      cell3.innerHTML = rbnetsu;
      $.ajax({
        url: 'addrealmdb',
        type: 'post',
        dataType: "json",
        data: {
          rname: rname,
          rportal: rportal,
          rdbhost: rdbhost,
          rdbuser: rdbuser,
          rdbpass: rdbpass,
          rdbauthname: rdbauthname,
          rdbcharname: rdbcharname,
          remutype: remulat,
          rbnetsup: rbnetsu
        },
        success: function(data) {
          Swal.fire(
            'Realm added',
            'The realm was successfully added',
            'success'
          )
        }
      });
    }
  })()
}
