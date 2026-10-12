import React from 'react';
import { createRoot } from 'react-dom/client';

function App() {
    return (
        <>
            <Text display="whats up"/>
            <Text display="hello"/>
        </>
    )
}

function Text({display}) {
    return (
        <div>
            <p>{display}</p>
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