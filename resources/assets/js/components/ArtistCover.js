import React, { Component } from 'react';

export default class ArtistCover extends Component {
    render() {
        return (
            <div className="cover__background" style={{ backgroundImage: 'url(https://vignette.wikia.nocookie.net/rapvietunderground/images/f/f3/1.jpg/revision/latest?cb=20180403185755&path-prefix=vi)' }}>
                <div className="container">
                    <div className="cover__block">
                        <div className="row">
                            <div className="col-md-3">
                                <img className="cover__image" src="https://i.pinimg.com/originals/64/2a/5d/642a5d2be8b93da557d6ab41c90732c8.jpg" alt="DSK" />
                            </div>
                            <div className="col-md-9">
                                <div className="cover__block-name">
                                    <div className="cover__artist-name">DSK</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        )
    }
}
