import React, { Component } from 'react';
import List from './List.js';
import TopSongsListItem from './TopSongsListItem';

export default class TopSongsList extends Component {
    render() {
        return (
            <List title="Top songs">
                <TopSongsListItem index="1" title="Tháng 6 của anh" artist="Khói ft Two" views="4.2M" />
                <TopSongsListItem index="1" title="Tháng 6 của anh" artist="Khói ft Two" views="4.2M" />
                <TopSongsListItem index="1" title="Tháng 6 của anh" artist="Khói ft Two" views="4.2M" />
                <TopSongsListItem index="1" title="Tháng 6 của anh" artist="Khói ft Two" views="4.2M" />
                <TopSongsListItem index="1" title="Tháng 6 của anh" artist="Khói ft Two" views="4.2M" />
                <TopSongsListItem index="1" title="Tháng 6 của anh" artist="Khói ft Two" views="4.2M" />
                <TopSongsListItem index="1" title="Tháng 6 của anh" artist="Khói ft Two" views="4.2M" />
                <TopSongsListItem index="1" title="Tháng 6 của anh" artist="Khói ft Two" views="4.2M" />
                <TopSongsListItem index="1" title="Tháng 6 của anh" artist="Khói ft Two" views="4.2M" />
                <TopSongsListItem index="1" title="Tháng 6 của anh" artist="Khói ft Two" views="4.2M" />
            </List>
        );
    }
}
