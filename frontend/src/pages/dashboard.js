import React from 'react'
import { Layout, Button, Row, Col,Typography, Space } from 'antd';
import { LogoutOutlined, UserOutlined } from '@ant-design/icons';
import logo from '../assets/images/logo.png'

const { Header, Content } = Layout;
const { Text } = Typography;

const dashboard = () => {
    const name = "Bou Farah, Pierre Rashid"
    return (
        <Layout style={{background: 'white'}}>
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
            <Content className="content">
                <Row>
                    <Col xs={{ span: 12 }} lg={{ span: 12 }} style={{textAlign: 'center'}}>
                        <Space direction="vertical">
                            <Text strong style={{fontSize: 20}}><UserOutlined /> Welcome {name}</Text>
                        </Space>
                    </Col>
                </Row>
            </Content>
        </Layout>
    )
}

export default dashboard
