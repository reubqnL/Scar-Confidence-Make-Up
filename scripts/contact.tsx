import React from 'react';
import { createRoot } from 'react-dom/client';

function ContactCard({contact}) {

    function onFav() {
        alert("Favorited!")
    }

    return (
        <div className="contact-card">
            <div className="contact-poster">
                <img src={contact.url} alt={contact.title}/>
                <div className="contact-overlay">
                    <button className="favorite-btn" onClick={onFav}> X </button>
                </div>
            </div>
            <div className="contact-info">
                <h3>{contact.title}</h3>
                <p>{contact.release_date}</p>
            </div>
        </div>
    )
}

// trigger to show on page
const container = document.getElementById('root');
if (container) {
    const root = createRoot(container);
    root.render(<App/>);
}

export default App;