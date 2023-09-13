
async function get_product(id){
const conn = await fetch(`/api/products/${id}`)
  const data = await conn.text()
  console.log(data)
}












