import './App.css'
import {Router,Route,Routes} from 'react-router-dom'
import Home from './views/home'
import Login from './views/login'

export default function App(){
  return (
    <Router>
      <Routes>
        <Route path="/" element={<Home/>}/>
        <Route path="/login" element={<Login/>}/>
      </Routes>
    </Router>
  )
}