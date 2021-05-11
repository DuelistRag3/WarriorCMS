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
