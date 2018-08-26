import React from 'react';
import { mount, shallow } from 'enzyme';
import ArtistProfile from './ArtistProfile';

describe('ArtistProfile Component', function () {
    let props;
    let mountedArtistProfileComponent;
    const artistProfileComponent = () => {
        if (!mountedArtistProfileComponent) {
            mountedArtistProfileComponent = mount(
                <ArtistProfile {...props} />
            );
        }
        return mountedArtistProfileComponent;
    }

    beforeEach(() => {
        props = {
            name: undefined,
            profile: undefined
        };
        mountedArtistProfileComponent = undefined;
    });

    it('always renders a div', function () {
        const divs = artistProfileComponent().find('div');
        expect(divs.length).toBeGreaterThan(0);
    });

    describe('when an artist profile is defined', function() {
        beforeEach(() => {
            props.name = 'DSK';
            props.profile = 'DSK, tên thật là Nguyễn Đức Minh.';
        });

        it('An artist profile is showing', function() {
            const block = artistProfileComponent().find('div.row').first();
            expect(block.html()).toEqual('<div class=\"row\"><div class=\"col-md-4\"><div class=\"profile__title-about\">About DSK</div><p>DSK, tên thật là Nguyễn Đức Minh.</p></div><div class=\"col-md-8\"><div class=\"profile__title-songs\">Top popular songs</div><ul class=\"top-songs\"><li class=\"item\"><div class=\"row\"><div class=\"col-3 col-sm-1\"><span class=\"item__index\">1</span></div><div class=\"col-6 col-sm-9\"><span class=\"item__title\">Tháng 6 của anh</span><span class=\"item__artist\">Khói ft Two</span></div><div class=\"col-3 col-sm-2\"><span class=\"item__views\">4.2M</span></div></div></li></ul></div></div>');
        })
    });
});
