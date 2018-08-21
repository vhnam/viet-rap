import React from 'react';
import ReactDOM from 'react-dom';

import TopArtistsList from './../components/TopArtistsList';
import TopSongsList from './../components/TopSongsList';

ReactDOM.render(<TopArtistsList />, document.getElementById('top-artists'));
ReactDOM.render(<TopSongsList />, document.getElementById('top-songs'));
