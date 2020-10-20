import React from 'react'
import logo from '../assets/images/logo.png'
import logoDPI from '../assets/images/UTN DPI-Blanco.png'
import { Layout, Divider, Row, Col, Tag } from 'antd'
import {
    TwitterOutlined,
    YoutubeOutlined,
    FacebookOutlined,
    LinkedinOutlined,
    InstagramOutlined,
  } from '@ant-design/icons';
import '../assets/css/footer.css';

const { Footer } = Layout;

function SectionFooter() {
    return (
            <Footer className="footer">               
                <Divider style={{ color: '#002766'}}/>
                <Row>
                    <Col xs={{ span: 12 }} lg={{ span: 12 }}>
                        <img src={logo} alt='logo' className='header-logo'/>                    
                    </Col>
                </Row>
                <Row>
                    <Col xs={{ span: 12 }} lg={{ span: 12 }}>
                        <img src={logoDPI} alt='logo' className='header-logo'/>                    
                    </Col>
                    <Col xs={{ span: 12 }} lg={{ span: 12 }}>
                            <a href="https://twitter.com/afipcomunica">
                            <Tag style={{ cursor: 'pointer'}} icon={<TwitterOutlined />} color="#55acee">
                                Twitter
                            </Tag>
                            </a>
                            <a href="https://www.youtube.com/channel/UCe0zC5Uf5U1YDDMF3_W-97A">
                            <Tag style={{ cursor: 'pointer'}} icon={<YoutubeOutlined />} color="#cd201f">
                                Youtube
                            </Tag>
                            </a>
                            <a href="https://www.facebook.com/AFIPComunica/">
                            <Tag style={{ cursor: 'pointer'}} icon={<FacebookOutlined />} color="#3b5999">
                                Facebook
                            </Tag>
                            </a>
                            <a href="https://www.instagram.com/afipcomunica/">
                            <Tag style={{ cursor: 'pointer'}} icon={<InstagramOutlined />} color="#ff7875">
                                Instagram
                            </Tag> 
                            </a> 
                            <a href="https://www.linkedin.com/company/afip/?originalSubdomain=es">
                            <Tag style={{ cursor: 'pointer'}} icon={<LinkedinOutlined />} color="#55acee">
                                LinkedIn
                            </Tag> 
                            </a>                   
                    </Col>
                </Row>
            </Footer>
    )
}

export default SectionFooter
