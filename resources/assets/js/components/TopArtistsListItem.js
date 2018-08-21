import React, { Component } from 'react';

export default class TopArtistsListItem extends Component {
    render() {
        return (
            <div className="item col-md-4">
                <img className="item__image" src={this.props.artistImage} alt="DSK" />
                <a className="item__artist" href="/artists/dsk">
                    {this.props.name}
                </a>
            </div>
        );
    }
}
