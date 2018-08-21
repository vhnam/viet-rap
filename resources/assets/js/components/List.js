import React, { Component } from 'react';

class ListUl extends Component {
    render() {
        return <ul className="list__content">{this.props.children}</ul>;
    }
}

class ListDiv extends Component {
    render() {
        return <div className="row list__content">{this.props.children}</div>
    }
}

class ListContent extends Component {
    render() {
        if (this.props.isRow) {
            return <ListDiv children={this.props.children} />;
        }
        return <ListUl children={this.props.children} />;
    }
}

export default class List extends Component {
    constructor(props) {
        super(props);
    }

    render() {
        return (
            <div className="list">
                <div className={"list__title " + (this.props.isLight ? 'list__title--light' : '')}>{this.props.title}</div>
                <ListContent isRow={this.props.isRow} children={this.props.children} />
                <div className="list__more">
                    <a className="list__more-link" href="#">Show more</a>
                </div>
            </div>
        );
    }
}
