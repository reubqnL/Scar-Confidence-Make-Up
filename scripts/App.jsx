import React from 'react';
import ContactForm from './components/ContactForm';
// whatever the components are

export default function App() {
    const path = window.location.pathname;

    return (
        <div>
            {/* check the url and render the right component */}
            {path.includes('contact') && <ContactForm />}
        </div>
    );
}