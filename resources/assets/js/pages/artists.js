import React from 'react';
import ReactDOM from 'react-dom';

import ArtistCover from './../components/ArtistCover';
import ArtistProfile from './../components/ArtistProfile';
import Header from '../components/Header/Header';
import Footer from './../components/Footer';

ReactDOM.render(<Header page="page-artists" />, document.getElementById('header'));
ReactDOM.render(<Footer />, document.getElementById('footer'));
ReactDOM.render(<ArtistCover />, document.getElementById('cover'));
ReactDOM.render(<ArtistProfile />, document.getElementById('profile'));
