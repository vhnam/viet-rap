import React from 'react';
import { mount } from 'enzyme';
import TopSongsListItem from './TopSongsListItem';

describe('TopSongsListItem Component', function () {
    let props,
        mountedListComponent;

    const itemComponent = () => {
        if (!mountedListComponent) {
            mountedListComponent = mount(
                <TopSongsListItem {...props} />
            );
        }
        return mountedListComponent;
    };

    beforeEach(() => {
        props = {
            index: undefined,
            title: undefined,
            artist: undefined,
            views: undefined
        };
        mountedListComponent = undefined;
    });

    it('always renders a li', function () {
        const lis = itemComponent().find('li');
        expect(lis.length).toBeGreaterThan(0);
    });

    describe('when a Song is defined', function() {
        beforeEach(() => {
            props.index = 1,
            props.title = 'Tháng 6 của anh',
            props.artist = 'Khói ft Two',
            props.views = '4.2M'
        });

        it('An Song is showing', function() {
            const heading = itemComponent().find('li.item').first();
            expect(heading.html()).toEqual('<li class=\"item\"><div class=\"row\"><div class=\"col-3 col-sm-1\"><span class=\"item__index\">1</span></div><div class=\"col-6 col-sm-9\"><span class=\"item__title\">Tháng 6 của anh</span><span class=\"item__artist\">Khói ft Two</span></div><div class=\"col-3 col-sm-2\"><span class=\"item__views\">4.2M</span></div></div></li>');
        })
    });
});
