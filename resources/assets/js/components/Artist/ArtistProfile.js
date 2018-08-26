import React, { Component } from 'react';
import TopSongsListItem from '../List/TopSongsListItem';

export default class ArtistCover extends Component {
    render() {
        return (
            <div className="row">
                <div className="col-md-4">
                    <div className="profile__title-about">About {this.props.name}</div>
                    <p>{this.props.profile}</p>
                </div>
                <div className="col-md-8">
                    <div className="profile__title-songs">Top popular songs</div>
                    <ul className="top-songs">
                        <TopSongsListItem index="1" title="Tháng 6 của anh" artist="Khói ft Two" views="4.2M" />
                    </ul>
                </div>
            </div>
        )
    }
}
