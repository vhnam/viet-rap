import React from 'react';
import { mount } from 'enzyme';
import TopArtistsListItem from './TopArtistsListItem';

describe('TopArtistsListItem Component', function () {
    let props,
        mountedListComponent;

    const itemComponent = () => {
        if (!mountedListComponent) {
            mountedListComponent = mount(
                <TopArtistsListItem {...props} />
            );
        }
        return mountedListComponent;
    };

    beforeEach(() => {
        props = {
            artistImage: undefined,
            name: undefined
        };
        mountedListComponent = undefined;
    });

    it('always renders a div', function () {
        const divs = itemComponent().find('div');
        expect(divs.length).toBeGreaterThan(0);
    });

    describe('when an artist is defined', function() {
        beforeEach(() => {
            props.name =  'DSK';
            props.artistImage = 'https://example.com/dsk.jpg'
        });

        it('An artist is showing', function() {
            const heading = itemComponent().find('.item.col-md-4').first();
            expect(heading.html()).toEqual('<div class=\"item col-md-4\"><img class=\"item__image\" src=\"https://example.com/dsk.jpg\" alt=\"DSK\"><a class=\"item__artist\" href=\"/artists/dsk\">DSK</a></div>');
        })
    });
});
