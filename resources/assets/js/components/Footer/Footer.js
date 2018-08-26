import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Footer extends Component {
    render() {
        return (
            <footer className="footer">
                <div className="container">
                    &copy; {process.env.MIX_APP_NAME}
                </div>
            </footer>
        )
    }
}
