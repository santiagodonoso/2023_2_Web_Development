
async function get_product(id){
const conn = await fetch(`/api/products/${id}`)
  // const data = await conn.text()
  const data = await conn.json()
  console.log(data.id)
  console.log(data.name)
  document.querySelector("#product_id").innerHTML = data.id
}












