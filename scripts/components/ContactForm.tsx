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
                <input
                    type="text" id="fname" name="first-name"
                    placeholder="First Name" autocomplete="given-name" required>
                </input><br></br>
                <input
                    type="text" id="fname" name="last-name"
                    placeholder="Last Name" autocomplete="family-name">
                </input><br></br>
                <input
                    type="text" id="email" name="email"
                    placeholder="youremail@gmail.com" autocomplete="email" required>
                </input><br></br>
                <input
                    type="text" id="tel" name="tel"
                    placeholder="(+44) XXXX XXX XXX" autocomplete="tel">
                </input><br></br>
                <input
                    type="textarea" id="textarea" name="textarea"
                    placeholder="Explain how we may help you" required></input>
            </form>
        </div>
    );
}