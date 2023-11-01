function _(q, from=document){ return from.querySelector(q) }
function __(q, from=document){ return from.querySelectorAll(q) }

// ##############################
function signup(){
  _("#toast").classList.remove("hidden")
  setTimeout(function(){
    _("#toast").classList.add("hidden")
  }, 3000)
}





