import React, { Component } from 'react';
import List from './List';
import TopArtistsListItem from './TopArtistsListItem';

export default class TopArtistsList extends Component {
    render() {
        return (
            <List title="Top artists" isLight="true" isRow="true">
                <TopArtistsListItem name="DSK" artistImage="https://i.pinimg.com/originals/64/2a/5d/642a5d2be8b93da557d6ab41c90732c8.jpg" />
                <TopArtistsListItem name="DSK" artistImage="https://i.pinimg.com/originals/64/2a/5d/642a5d2be8b93da557d6ab41c90732c8.jpg" />
                <TopArtistsListItem name="DSK" artistImage="https://i.pinimg.com/originals/64/2a/5d/642a5d2be8b93da557d6ab41c90732c8.jpg" />
            </List>
        );
    }
}
