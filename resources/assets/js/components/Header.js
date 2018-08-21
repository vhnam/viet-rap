import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Header extends Component {
    componentDidMount() {
        let pageID = document.getElementById('page').innerText;
        let navLink = document.getElementById(pageID);
        navLink.classList.add('nav-link--active');
    }

    render() {
        return (
            <nav className="navbar navbar-expand-lg navbar-light">
                <div className="container">
                    <a className="navbar-brand" href="#">{ Vars.APP_NAME }</a>
                    <button className="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span className="navbar-toggler-icon"></span>
                    </button>

                    <div className="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul className="navbar-nav ml-auto">
                            <li className="nav-item">
                                <a className="nav-link" href="#" id="page-homepage">Home</a>
                            </li>
                            <li className="nav-item">
                                <a className="nav-link" href="#" id="page-songs">Songs</a>
                            </li>
                            <li className="nav-item">
                                <a className="nav-link" href="#" id="page-artists">Artists</a>
                            </li>
                            <li className="nav-item">
                                <a className="nav-link" href="#" id="page-about">About</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        );
    }
}

if (document.getElementById('header')) {
    ReactDOM.render(<Header />, document.getElementById('header'));
}
