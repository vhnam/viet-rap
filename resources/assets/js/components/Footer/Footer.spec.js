import React from 'react';
import { mount } from 'enzyme';
import Footer from './Footer';

describe('Footer Component', function () {
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
        mountedFooterComponent = undefined;
    });

    it('always renders a footer', function () {
        const footer = footerComponent().find('footer');
        expect(footer.length).toBeGreaterThan(0);
    });
});
