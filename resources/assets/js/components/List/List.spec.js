import React from 'react';
import { mount, shallow } from 'enzyme';
import List from './List';

describe('List Component', function () {
    let props,
        mountedListComponent;

    const listComponent = () => {
        if (!mountedListComponent) {
            mountedListComponent = mount(
                <List {...props} />
            );
        }
        return mountedListComponent;
    };

    beforeEach(() => {
        props = {
            title: undefined,
            isLight: undefined,
            isRow: undefined
        }
        mountedListComponent = undefined;
    });

    it('always renders a div', function () {
        const divs = listComponent().find('div');
        expect(divs.length).toBeGreaterThan(0);
    });

    describe('when "title" is defined', function() {
        beforeEach(() => {
            props.title = 'Top Artists';
        });

        it('title is "Top Artists"', function() {
            const heading = listComponent().find('.list__title').first();
            expect(heading.html()).toEqual('<div class=\"list__title \">Top Artists</div>');
        })
    });

    describe('when "isLight" is defined', function() {
        it('isLight is true', function() {
            props.isLight = true;
            const heading = listComponent().find('.list__title.list__title--light').first();
            expect(heading.length).toBeGreaterThan(0);
        });

        it('isLight is false', function() {
            props.isLight = false;
            const heading = listComponent().find('.list__title').first();
            expect(heading.length).toBeGreaterThan(0);
        });
    });

    describe('when "isRow" is defined', function() {
        it('isRow is true', function() {
            props.isRow = true;
            const list = listComponent().find('.row.list__content').first();
            expect(list.length).toBeGreaterThan(0);
        });

        it('isRow is false', function() {
            props.isRow = false;
            const list = listComponent().find('.list__content').first();
            expect(list.length).toBeGreaterThan(0);
        });
    });

    describe('when list have content', function() {
        beforeEach(() => {
            props.children = 'Ahihi';
        });

        it('isRow is true', function() {
            props.isRow = true;
            const list = listComponent().find('.row.list__content').first();
            expect(list.html()).toEqual('<div class=\"row list__content\">Ahihi</div>');
        });

        it('isRow is false', function() {
            props.isRow = false;
            const list = listComponent().find('.list__content').first();
            expect(list.html()).toEqual('<ul class=\"list__content\">Ahihi</ul>');
        });
    });
});
