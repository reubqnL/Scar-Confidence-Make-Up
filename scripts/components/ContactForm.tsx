import React from 'react';

function ContactForm({ contact }) {
    function onFav() {
        alert("Favorited!");
    }

    if (!contact) {
        return <div className="contact-card">No contact data available.</div>;
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