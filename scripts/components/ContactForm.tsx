import React from 'react';

export function ContactHeader() {
    const contactHeader = {
        title: "Scar Confidence Support",
        subtitle: "Have a question? Fill in this form to contact us",
        active_date: "Enquiries welcome",
    };

    return (
        <div className="contactContainer">
            <div className="contactHeader">
                <h2>{contactHeader.title}</h2>
            </div>

            <div className="contactInfo">
                <p className="contact-subtitle">{contactHeader.subtitle}</p>
                <p className="activeDate">{contactHeader.active_date} <span className="dot">•</span></p>
            </div>
        </div>
    );
}

export function ContactForm({action}: {action: string}) {
    return (
        <form className="contactForm" action={action} method="POST">
            <div className="form-field">
                <label htmlFor="fname">First name <span aria-hidden="true">*</span></label>
                <input type="text" id="fname" name="first-name" autoComplete="given-name" className="widthHalf" maxLength={100} required />
            </div>
            <div className="form-field">
                <label htmlFor="lname">Last name <span className="optional">(optional)</span></label>
                <input type="text" id="lname" name="last-name" autoComplete="family-name" className="widthHalf" maxLength={100} />
            </div>
            <div className="form-field">
                <label htmlFor="email">Email <span aria-hidden="true">*</span></label>
                <input type="email" id="email" name="email" placeholder="you@example.com" autoComplete="email" className="widthHalf" maxLength={100} required />
            </div>
            <div className="form-field">
                <label htmlFor="tel">Phone <span className="optional">(optional)</span></label>
                <input type="tel" id="tel" name="tel" placeholder="0114 200 0000" autoComplete="tel" className="widthFull" maxLength={100} />
            </div>
            <div className="form-field field-full">
                <label htmlFor="message">How can we help? <span aria-hidden="true">*</span></label>
                <textarea id="message" name="message" placeholder="Tell us about your enquiry" className="widthFull text" maxLength={5000} rows={6} aria-describedby="message-help" required></textarea>
                <span id="message-help" className="field-help">Up to 5,000 characters. Please leave out medical records and sensitive information.</span>
            </div>
            <button type="submit" className="btnHover">Send enquiry</button>
        </form>
    );
}
