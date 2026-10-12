import React from 'react';
import ContactForm from './components/ContactForm';

export default function App() {
    const ourData = {
        title: "Scar Confidence Support",
        release_date: "Active 24/7",
    };

    return (
        <div>
            <ContactForm contact={ourData} />
        </div>
    );
}

// update when adding components to the page