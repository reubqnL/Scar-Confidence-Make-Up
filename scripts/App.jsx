import React from 'react';
import ContactForm from './components/ContactForm';

export default function App() {
    const myData = {
        title: "Scar Confidence Support",
        release_date: "Active 24/7",
        url: "https://via.placeholder.com/150"
    };

    return (
        <div>
            <ContactForm contact={myData} />
        </div>
    );
}