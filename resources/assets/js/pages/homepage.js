import React from 'react';
import ReactDOM from 'react-dom';

import Header from '../components/Header/Header';
import Footer from './../components/Footer/Footer';
import TopArtistsList from './../components/List/TopArtistsList';
import TopSongsList from './../components/List/TopSongsList';

ReactDOM.render(<Header page="page-homepage" />, document.getElementById('header'));
ReactDOM.render(<Footer />, document.getElementById('footer'));
ReactDOM.render(<TopArtistsList />, document.getElementById('top-artists'));
ReactDOM.render(<TopSongsList />, document.getElementById('top-songs'));
