import React, { Component } from 'react';

export default class TopSongsListItem extends Component {
    render() {
        return (
            <li className="item">
                <div className="row">
                    <div className="col-3 col-sm-1">
                        <span className="item__index">{this.props.index}</span>
                    </div>
                    <div className="col-6 col-sm-9">
                        <span className="item__title">{this.props.title}</span>
                        <span className="item__artist">{this.props.artist}</span>
                    </div>
                    <div className="col-3 col-sm-2">
                        <span className="item__views">{this.props.views}</span>
                    </div>
                </div>
            </li>
        );
    }
}
