import React from 'react'
import { Layout, Row, Col,Typography, Space, Divider, Button } from 'antd';
import { UserOutlined } from '@ant-design/icons';
import { Link } from 'react-router-dom'
import Header from '../common/Header';
import Footer from '../common/Footer';
import '../assets/css/dashboard.css';

const { Content } = Layout;
const { Text } = Typography;

const Dashboard = () => {
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
                    <Col xs={{ span: 12 }} lg={{ span: 12 }} style={{textAlign: 'center'}}>
                        <Link to={{
                                    pathname: '/createinvoce',
                                    }}>  
                            <Button type="primary" style={{borderRadius: 3, backgroundColor: '#13c2c2'}}>Generar Factura</Button>  
                       </Link>
                    </Col>
                    <Divider style={{ color: '#002766'}}/>
                </Row>
            </Content>
            <Footer/>
        </Layout>
    )
}

export default Dashboard
