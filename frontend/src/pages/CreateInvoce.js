import React from 'react'
import { Layout } from 'antd';
import Header from '../common/Header';
import Footer from '../common/Footer';

const { Content } = Layout;

const CreateInvoce = () => {
    return (
        <Layout style={{background: 'white'}}>
            <Header/>
            <Content className="content">
                <p>Prueba!</p>
            </Content>
            <Footer/>
        </Layout>
    )
}

export default CreateInvoce
