import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Footer extends Component {
    render() {
        return (
            <footer className="footer">
                <div className="container">
                    &copy; 2018 VietRap2018
                </div>
            </footer>
        )
    }
}

if (document.getElementById('footer')) {
    ReactDOM.render(<Footer />, document.getElementById('footer'));
}
