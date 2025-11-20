import { useState } from 'react'
import './../App.css'
import 'bootstrap/dist/css/bootstrap.min.css';
import Header from '../layouts/header';
import Sidebar from '../layouts/sidebar';
import Card from '../layouts/Card';
import CreditCard from '../layouts/CreditCard';
import {Outlet} from 'react-router-dom'

function Dashboard() {

  return (
    <>
     
<div className="d-flex">
<Sidebar/>
    <div className="content-area flex-grow-1">
<Header/>
<Outlet/>


    </div>
</div>
    </>
  )
}

export default Dashboard
