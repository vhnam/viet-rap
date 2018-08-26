import React from 'react';
import { mount } from 'enzyme';
import TopSongsList from './TopSongsList';

describe('TopSongsList Component', function () {
    let props,
        mountedListComponent;

    const listComponent = () => {
        if (!mountedListComponent) {
            mountedListComponent = mount(
                <TopSongsList {...props} />
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
