import React from 'react';
import { mount } from 'enzyme';
import TopArtistsList from './TopArtistsList';

describe('TopArtistsList Component', function () {
    let props,
        mountedListComponent;

    const listComponent = () => {
        if (!mountedListComponent) {
            mountedListComponent = mount(
                <TopArtistsList {...props} />
            );
        }
        return mountedListComponent;
    };

    beforeEach(() => {
        props = undefined;
        mountedListComponent = undefined;
    });

    it('always renders a List', function () {
        const lists = listComponent().find('List');
        expect(lists.length).toBeGreaterThan(0);
    });
});
