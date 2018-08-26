import React from 'react';
import { mount } from 'enzyme';
import Footer from './Footer';

describe('Header Component', function () {
    let props;
    let mountedFooterComponent;
    const footerComponent = () => {
        if (!mountedFooterComponent) {
            mountedFooterComponent = mount(
                <Footer {...props} />
            );
        }
        return mountedFooterComponent;
    }

    beforeEach(() => {
        props = {
            page: undefined,
        };
        mountedFooterComponent = undefined;
    });

    it('always renders a footer', function () {
        const footer = footerComponent().find('footer');
        expect(footer.length).toBeGreaterThan(0);
    });
});
