export default function Sidebar(){
    return(
    <>
     <div className="sidebar">
        <h4 className="fw-bold mb-4"><i className="fa-solid fa-building-columns me-2"></i>Bankio</h4>

        <div className="menu-title">Main Menu</div>
        <a href="#"><i className="fa-solid fa-chart-line me-2"></i> Dashboard</a>
        <a href="#"><i className="fa-solid fa-user me-2"></i>  Users</a>
        <a href="#"><i className="fa-solid fa-credit-card me-2"></i> Cuentas</a>
        
    </div>

    </>
    )
}