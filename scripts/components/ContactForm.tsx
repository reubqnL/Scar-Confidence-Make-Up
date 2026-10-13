import React from 'react';

export function ContactHeader() {
    const contactHeader = {
        title: "Scar Confidence Support",
        subtitle: "Have a question? Fill in this form to contact us",
        active_date: "Active 24/7",
    };

    return (
        <div className="contactContainer">
            <div className="contactHeader">
                <h3>{contactHeader.title}</h3>
            </div>

            <div className="contactInfo">
                <h4>{contactHeader.subtitle}</h4>
                <p>{contactHeader.active_date}</p>
            </div>
        </div>
    );
}

export function ContactForm() {

    return (
        <div>
            <form>
                <input type="text" id="fname" name="fname" placeholder="First Name" required></input>
            </form>
        </div>
    );
}