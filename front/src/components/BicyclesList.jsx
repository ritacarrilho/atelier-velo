import React from 'react';
// import image from '../images/bicycle.jpg'

const BicyclesList = ({ bicycle }) => {
    const priceFormat = ((price) => {
        if (price.indexOf(',') > -1 && price.includes(',')) { 
            return `${price}O €` ;
        } else {
            return `${price} €`;
        }
    })

    return (
        <div className='home-bycicles-cards'>
            <img key={bicycle.id} src={ bicycle.image } alt={bicycle.model} className="home-bicycles-image"/>
            <div className='home-bycicles-card-bg'>
                <div className='home-bycicles-card-left'>
                    <h6>{bicycle.model}</h6>
                    <p>{bicycle.type.type} - {bicycle.size.size}</p>
                    <p>{ priceFormat(bicycle.price.toLocaleString(navigator.language, { minimumFractionDigits: 0 }))}</p>
                </div>
                <div className='home-bycicles-card-right'>
                    <p>Condition de Pneus : {bicycle.tires_condition}</p>
                    <p>Condition de Freins : {bicycle.breaks_condition}</p>
                    <p>Condition de Vitesses : {bicycle.gears_condition}</p>
                </div>
            </div>
        </div>
    );
};

export default BicyclesList;