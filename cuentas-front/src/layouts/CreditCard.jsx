export default function CreditCard({name,numbers,brand,date}){
    return(
                <>
                 <div className="credit-card">
                    <h5>{brand}</h5>
                    <div className="credit-card-number">{numbers}</div>
                    <div className="d-flex justify-content-between">
                        <span>{name}</span>
                        <span>{date}</span>
                    </div>
                </div>
                </>
    )
}