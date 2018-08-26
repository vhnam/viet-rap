import React, { Component } from 'react';

export default class ArtistCover extends Component {
    render() {
        return (
            <div className="cover__background" style={{ backgroundImage: 'url(' + this.props.background + ')' }}>
                <div className="container">
                    <div className="cover__block">
                        <div className="row">
                            <div className="col-md-3">
                                <img className="cover__image" src={this.props.photo} alt={this.props.name} />
                            </div>
                            <div className="col-md-9">
                                <div className="cover__block-name">
                                    <div className="cover__artist-name">{this.props.name}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        )
    }
}
