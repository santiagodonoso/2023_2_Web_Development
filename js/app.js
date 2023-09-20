async function signup(){
  const frm = event.target
  console.log(frm)
  const conn = await fetch("/api/api-signup.php", {
    method : "POST",
    body : new FormData(frm)
  })
  if( ! conn.ok ){
    alert("ups...")
    return
  }

  const data = await conn.text()
  console.log(data)
}