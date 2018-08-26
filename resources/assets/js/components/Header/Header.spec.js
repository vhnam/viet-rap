import React from "react";
import { mount } from "enzyme";
import Header from './Header';

describe("Header Component Testing", () => {
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

    // All tests will go here

    it("always renders a div", () => {
        const divs = headerComponent().find("div");
        expect(divs.length).toBeGreaterThan(0);
    });
});
