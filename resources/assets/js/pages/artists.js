import React from 'react';
import ReactDOM from 'react-dom';

import ArtistCover from './../components/ArtistCover';
import ArtistProfile from './../components/ArtistProfile';

ReactDOM.render(<ArtistCover />, document.getElementById('cover'));
ReactDOM.render(<ArtistProfile />, document.getElementById('profile'));
