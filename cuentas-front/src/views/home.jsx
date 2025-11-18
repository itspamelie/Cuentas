import { useState } from 'react'
import './../App.css'
import 'bootstrap/dist/css/bootstrap.min.css';
import Header from '../layouts/header';
import Sidebar from '../layouts/sidebar';
import Card from '../layouts/Card';
import CreditCard from '../layouts/CreditCard';


function Home() {
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
     
<div className="d-flex">
<Sidebar/>
    <div className="content-area flex-grow-1">
<Header/>


        <div className="row g-4">
            <div className="col-md-4">
<Card amount={8450.75} title={"Main Balance"} percent={5.2}/>
</div>
            <div className="col-md-4">
               <CreditCard name={"Pamela Martinez"} brand={"BBVA"} numbers={"4152 3139 7839 3242"} date={"10/24"}/>
            </div>

            <div className="col-md-4">
              <Card amount={5200} title={"Total Income"} percent={8.5}/>
            </div>

            <div className="col-md-4">
              <Card amount={3750.90} title={"Total Expenses"} percent={-4.2}/>
            </div>
        </div>

        <div className="card-main mt-4">
            <h5 className="fw-bold mb-3">Recent Transfer Activity</h5>

            <table className="table align-middle">
                <thead>
                    <tr>
                        <th>Date & Time</th>
                        <th>Description</th>
                        <th>Account</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>

                    <tr className="recent-transfer-row">
                        <td>Feb 5, 2025</td>
                        <td><img src="https://i.pravatar.cc/50?img=32"/> Alex Johnson</td>
                        <td>Savings (***5678)</td>
                        <td>$500.00</td>
                    </tr>

                    <tr>
                        <td>Feb 4, 2025</td>
                        <td><i className="fa-brands fa-netflix me-2 text-danger"></i> Netflix Billing</td>
                        <td>Billing</td>
                        <td>$15.99</td>
                    </tr>

                    <tr className="recent-transfer-row">
                        <td>Feb 3, 2025</td>
                        <td><img src="https://i.pravatar.cc/50?img=14"/> John Doe</td>
                        <td>Savings (***9876)</td>
                        <td>$450.00</td>
                    </tr>

                </tbody>
            </table>

        </div>

    </div>
</div>
    </>
  )
}

export default Home
