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
            <form className="contactForm">
                <input
                    type="text" id="fname" name="first-name"
                    placeholder="First Name" autoComplete="given-name" required>
                </input><br></br>
                <input
                    type="text" id="lname" name="last-name"
                    placeholder="Last Name" autoComplete="family-name">
                </input><br></br>
                <input
                    type="text" id="email" name="email"
                    placeholder="youremail@gmail.com" autoComplete="email" required>
                </input><br></br>
                <input
                    type="text" id="tel" name="tel"
                    placeholder="(+44) XXXX XXX XXX" autoComplete="tel">
                </input><br></br>
                <textarea
                    id="message" name="message"
                    placeholder="Explain how we may help you" required>
                </textarea><br></br>
                <button type="submit">Submit</button>
            </form>
        </div>
    );
}