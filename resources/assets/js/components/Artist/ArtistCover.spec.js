import React from 'react';
import { mount, shallow } from 'enzyme';
import ArtistCover from './ArtistCover';

describe('ArtistCover Component', function () {
    let props;
    let mountedArtistCoverComponent;
    const artistCoverComponent = () => {
        if (!mountedArtistCoverComponent) {
            mountedArtistCoverComponent = mount(
                <ArtistCover {...props} />
            );
        }
        return mountedArtistCoverComponent;
    }

    beforeEach(() => {
        props = {
            name: undefined,
            background: undefined,
            photo: undefined
        };
        mountedArtistCoverComponent = undefined;
    });

    it('always renders a div', function () {
        const divs = artistCoverComponent().find('div');
        expect(divs.length).toBeGreaterThan(0);
    });

    describe('when an artist cover is defined', function() {
        beforeEach(() => {
            props.name = 'DSK';
            props.background = 'htts://example.com/artists/dsk-background.jpg';
            props.photo = 'htts://example.com/artists/dsk-photo.jpg';
        });

        it('An artist cover is showing', function() {
            const block = artistCoverComponent().find('div.cover__background').first();
            expect(block.html()).toEqual('<div class=\"cover__background\" style=\"background-image: url(htts://example.com/artists/dsk-background.jpg);\"><div class=\"container\"><div class=\"cover__block\"><div class=\"row\"><div class=\"col-md-3\"><img class=\"cover__image\" src=\"htts://example.com/artists/dsk-photo.jpg\" alt=\"DSK\"></div><div class=\"col-md-9\"><div class=\"cover__block-name\"><div class=\"cover__artist-name\">DSK</div></div></div></div></div></div></div>');
        })
    });
});
