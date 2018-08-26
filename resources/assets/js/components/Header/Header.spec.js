import React from 'react';
import { mount, shallow } from 'enzyme';
import Header from './Header';

describe('Header Component', function () {
    let props;
    let mountedHeaderComponent;
    const headerComponent = () => {
        if (!mountedHeaderComponent) {
            mountedHeaderComponent = mount(
                <Header {...props} />
            );
        }
        return mountedHeaderComponent;
    }

    beforeEach(() => {
        props = {
            page: undefined,
        };
        mountedHeaderComponent = undefined;
    });

    it('always renders a nav', function () {
        const nav = headerComponent().find('nav');
        expect(nav.length).toBeGreaterThan(0);
    });

    describe('when "page" is defined', function() {
        describe('page is "page-homepage"', function() {
            beforeEach(() => {
                props.page = "page-homepage";
            });

            it('highlight link with ID is "page-homepage"', function() {
                expect(headerComponent().find('#page-homepage').hasClass('nav-link nav-link--active')).toEqual(true);
            });
        });

        describe('page is "page-songs"', function() {
            beforeEach(() => {
                props.page = "page-songs";
            });
    
            it('highlight link with ID is "page-songs"', function() {
                expect(headerComponent().find('#page-songs').hasClass('nav-link nav-link--active')).toEqual(true);
            });
        });

        describe('page is "page-artists"', function() {
            beforeEach(() => {
                props.page = "page-artists";
            });
    
            it('highlight link with ID is "page-artists"', function() {
                expect(headerComponent().find('#page-artists').hasClass('nav-link nav-link--active')).toEqual(true);
            });
        });

        describe('page is "page-about"', function() {
            beforeEach(() => {
                props.page = "page-about";
            });
    
            it('highlight link with ID is "page-about"', function() {
                expect(headerComponent().find('#page-about').hasClass('nav-link nav-link--active')).toEqual(true);
            });
        });
    });
});
