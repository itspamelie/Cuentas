import { useState } from 'react'
import reactLogo from './assets/react.svg'
import viteLogo from '/vite.svg'
import './App.css'
import ItemComponents from './components/ItemComponents'
import Button from 'react-bootstrap/Button';
import 'bootstrap/dist/css/bootstrap.min.css';



function App() {
var x=0
//react hooks
let [contador,setContador] = useState(10)
let [arr,setArr]=useState([])
let clickBoton=()=>{
  setContador(++contador)
  console.log(contador)
  let x=[...arr,contador]
  setArr(x)
}
  return (
    <>
      <h1>CONTADOR</h1>
      <p>{contador}</p>
      <button onClick={clickBoton}>AUMENTAR</button>
      {arr.map((item)=>(<ItemComponents key={item}/> ))}
            <Button variant="primary">Dark</Button>

    </>
  )
}

export default App
