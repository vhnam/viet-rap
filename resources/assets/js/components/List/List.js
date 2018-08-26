import React, { Component } from 'react';

export default class List extends Component {
    constructor(props) {
        super(props);

        this.renderList = this.renderList.bind(this);
    }

    renderList() {
        let html;

        if(this.props.isRow) { 
            html = <div className="row list__content">{this.props.children}</div>
        } else {
            html = <ul className="list__content">{this.props.children}</ul>;
        }

        return html;
    }

    render() {
        return (
            <div className="list">
                <div className={"list__title " + (this.props.isLight ? 'list__title--light' : '')}>{this.props.title}</div>
                {this.renderList()}
                <div className="list__more">
                    <a className="list__more-link" href="#">Show more</a>
                </div>
            </div>
        );
    }
}
