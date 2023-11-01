function _(q, from=document){ return from.querySelector(q) }
function __(q, from=document){ return from.querySelectorAll(q) }

// ##############################
async function signup(){
  const conn = await fetch("api/api-signup")
  if( ! conn.ok ){
    toast("Ups...", "error")
    return
  }
  const res = await conn.json()
  toast(res.info)
}

// ##############################
function toast(message, type="ok"){
  let color = ""
  switch(type){
    case "ok": color = "bg-green-500"; break
    case "error" : color = "bg-red-500"; break
    default: color = "bg-orange-600"
  }
  _("#toast").classList.remove("hidden")
  _("#toast").classList.add(color)
  _("#toast").innerText = message
  setTimeout(function(){
    _("#toast").classList.add("hidden")
  }, 3000)
}











