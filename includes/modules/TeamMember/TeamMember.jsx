// External Dependencies
import React, { Component, Fragment } from 'react';

// Internal Dependencies
import './style.css';


class TeamMember extends Component {

  static slug = 'divi_team_member';

  render() {
    return (
        <Fragment>
            <div className="et_pb_module divi_team_member divi_team_member_0 et_pb_bg_layout_light clearfix">
                <div className="et_pb_module_inner">
                    <div className="members">
                        <img src={this.props.image_url} alt="Sk. Shourov hossain" />
                        <div className="team-det">
                            <h4>{this.props.name}</h4>
                            <h6>{this.props.position}</h6>
                            <p>{this.props.content()}</p>
                        </div>
                        <div className="team-soc">
                            <a href={this.props.facebook_url} className="et_pb_font_icon et_pb_facebook_icon"><span>Facebook</span></a>
                            <a href={this.props.twitter_url} className="et_pb_font_icon et_pb_twitter_icon"><span>Twitter</span></a>
                            <a href={this.props.google_url} className="et_pb_font_icon et_pb_google_icon"><span>Google+</span></a>
                            <a href={this.props.linkedin_url} className="et_pb_font_icon et_pb_linkedin_icon"><span>LinkedIn</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </Fragment>
    );
  }
}

export default TeamMember;
