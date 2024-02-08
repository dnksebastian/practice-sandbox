import styles from '../styles/Jobs.module.css'

import Link from 'next/link'

async function getData() {
  const res = await fetch('https://jsonplaceholder.typicode.com/users')
 
  if (!res.ok) {
    throw new Error('Failed to fetch data')
  }
 
  return res.json()
}

const Ninjas = async () => {
  const data = await getData();

    return (
      <div>
        <h1>All Ninjas</h1>
        {data.map(ninja => (
        <Link key={ninja.id} className={styles.single} href={`/ninjas/${ninja.id}`}>
            <h3>{ ninja.name }</h3>
        </Link>
      ))}
      </div>
    );
  }
   
  export default Ninjas;