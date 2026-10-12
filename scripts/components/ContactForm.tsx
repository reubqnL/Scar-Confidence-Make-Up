import React from 'react';

function ContactForm() {
    const contact = {
        title: "Scar Confidence Support",
        release_date: "Active 24/7",
        url: "https://via.placeholder.com/150"
    };

    function onFav() {
        alert("Favorited!");
    }

    return (
        <div className="contact-card">
            <div className="contact-poster">
                <img src={contact.url} alt={contact.title} />
                <div className="contact-overlay">
                    <button className="favorite-btn" onClick={onFav}> X </button>
                </div>
            </div>
            <div className="contact-info">
                <h3>{contact.title}</h3>
                <p>{contact.release_date}</p>
            </div>
        </div>
    );
}

export default ContactForm;