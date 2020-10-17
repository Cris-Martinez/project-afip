import React from 'react'
import { Layout, Row, Col,Typography, Space } from 'antd';
import { UserOutlined } from '@ant-design/icons';
import Header from '../common/Header';
import '../assets/css/dashboard.css';

const { Content } = Layout;
const { Text } = Typography;

const dashboard = () => {
    const name = "Bou Farah, Pierre Rashid"
    return (
        <Layout style={{background: 'white'}}>
            <Header/>
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
