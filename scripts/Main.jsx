import React from 'react';
import { createRoot } from 'react-dom/client';
import App from './App';

const container = document.getElementById('root');
if (container) {
    const root = createRoot(container);
    root.render(<App action={container.dataset.action || '../process.php'}/>);
}

// the only job of this file is to start react
