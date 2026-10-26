import React from 'react';
import {ContactHeader, ContactForm} from './components/ContactForm';
// whatever the components are

export default function App({action}) {
    const path = window.location.pathname;

    return (
        <div>
            {/* check the url and render the right component */}
            {path.includes('contact') && (
                <>
                    <ContactHeader/>
                    <ContactForm action={action}/>
                </>
                )}
        </div>
    );
}
