async function getNinja(id) {
  const res = await fetch(`https://jsonplaceholder.typicode.com/users/${id}`)
 
  if (!res.ok) {
    throw new Error('Failed to fetch data')
  }

  const data = res.json()

  return data;
}

const Details = async ({ params }) => {
  const ninja = await getNinja(params.id);

    return (
      <div>
        <h1>{ ninja.name }</h1>
        <p>{ ninja.email }</p>
        <p>{ ninja.website }</p>
        <p>{ ninja.address.city }</p>
      </div>
    );
  }
  
  export default Details;