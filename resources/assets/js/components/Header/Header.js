import React, { Component } from 'react';

export default class Header extends Component {
    setActivedNavItem(navItemID) {
        if (navItemID === this.props.page)
            return 'nav-link nav-link--active';
        return 'nav-link';
    }

    render() {
        return (
            <nav className="navbar navbar-expand-lg navbar-light">
                <div className="container">
                    <a className="navbar-brand" href="#">{process.env.MIX_APP_NAME}</a>
                    <button className="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span className="navbar-toggler-icon"></span>
                    </button>

                    <div className="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul className="navbar-nav ml-auto">
                            <li className="nav-item">
                                <a className={this.setActivedNavItem('page-homepage')} href="#" id="page-homepage">Home</a>
                            </li>
                            <li className="nav-item">
                                <a className={this.setActivedNavItem('page-songs')} href="#" id="page-songs">Songs</a>
                            </li>
                            <li className="nav-item">
                                <a className={this.setActivedNavItem('page-artists')} href="#" id="page-artists">Artists</a>
                            </li>
                            <li className="nav-item">
                                <a className={this.setActivedNavItem('page-about')} href="#" id="page-about">About</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        );
    }
}
