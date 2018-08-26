import React from 'react';
import ReactDOM from 'react-dom';

import Header from './../components/Header';
import Footer from './../components/Footer';
import TopArtistsList from './../components/TopArtistsList';
import TopSongsList from './../components/TopSongsList';

ReactDOM.render(<Header page="page-homepage" />, document.getElementById('header'));
ReactDOM.render(<Footer />, document.getElementById('footer'));
ReactDOM.render(<TopArtistsList />, document.getElementById('top-artists'));
ReactDOM.render(<TopSongsList />, document.getElementById('top-songs'));
