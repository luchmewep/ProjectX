import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';
import { BrowserRouter as Router, Link, Route } from 'react-router-dom';

export default class Post extends Component {
    constructor(){
        super();
        this.state = {
            posts: []
        };
        console.log(super());
    }

    componentDidMount(){
        axios.get('/api/posts').then(response=>{
            this.setState({
               posts: response.data 
            });
        }).catch(error=>{
            console.log('Error: '+error);
        });
    }

    render() {
        return (
            <div className="container">
                <div className="row justify-content-center">
                    <div className="col-md-8">
                        <div className="card">
                            <div className="card-header">Post Component</div>
                            <div className="card-body">
                                {this.state.posts.map(post =>
                                        <li>
                                            <Link to={"/posts/"+post.id}> {post.title} </Link>
                                        </li>
                                    )}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

if (document.getElementById('example')) {
    ReactDOM.render(<Post />, document.getElementById('example'));
}
