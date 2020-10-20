import React from 'react'
import logo from '../assets/images/logo.png'
import { Layout, Button, Row, Col } from 'antd'
import { LogoutOutlined } from '@ant-design/icons';
import '../assets/css/header.css';

const { Header } = Layout;

function SectionHeader() {
    return (
            <Header className="header">
                <Row>
                    <Col xs={{ span: 12 }} lg={{ span: 12 }}>
                        <img src={logo} alt='logo' className='header-logo'/>                    
                    </Col>
                    <Col xs={{ span: 12 }} lg={{ span: 12 }} style={{textAlign: 'right'}}>
                        <Button icon={<LogoutOutlined />}>Logout</Button>
                    </Col>
                </Row>
            </Header>
    )
}

export default SectionHeader
