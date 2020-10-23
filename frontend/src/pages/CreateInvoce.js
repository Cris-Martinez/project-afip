import React, { useState } from 'react'
import { Layout, Card, Alert, Col, Row, Divider, Form, Input, Button, Spin, Select, Table } from 'antd';
import { EllipsisOutlined } from '@ant-design/icons';
import '../assets/css/createinvoce.css'
import Header from '../common/Header';
import Footer from '../common/Footer';
import info from '../common/Modal';

const { Content } = Layout;
const { Search } = Input;

const onSearch = value => console.log(value);


const CreateInvoce = () => {
    const [operacion, setOperacion] = useState("")
    const onChangeOperation = value => setOperacion(value);

    // const [visible, setVisible] = useState(true)
    // setTimeout(() => {
    //     setVisible(false);
    // }, 5000);
    return (
        <Layout style={{background: 'white'}}>
            <Header/>
            {/* {
                visible ? <Spin size="large" style={{marginBottom: '13%', marginTop: '10%'}}/>
                : */}
            <Content className="content">
                <Card className="card-create-invoce">
                    <Alert message="Generación de Comprobantes" type="info" />
                    <Row>
                        <Col xs={{span:12}} lg={{span:12}}>
                        <Divider orientation="left" plain>
                            Cliente
                        </Divider>
                        <Form>
                            <Row style={{marginBottom:15}}>
                                <Col xs={{span:20}} lg={{span:20}}>
                                    <Search placeholder="Ingrese nombre del cliente" onSearch={onSearch} />
                                </Col>
                                <Col xs={{span:4}} lg={{span:4}}>
                                    <Button shape="circle" icon={<EllipsisOutlined />} onClick={()=>info(true)} style={{marginLeft:35}}/>
                                </Col>
                            </Row>
                            <Row>
                                <Col xs={{span:12}} lg={{span:12}}>
                                    <Form.Item
                                        label="Nombre"
                                        name="nombre"
                                    >
                                        <Input disabled/>
                                    </Form.Item>
                                </Col>
                                <Col xs={{span:12}} lg={{span:12}}>
                                    <Form.Item
                                        label="CUIT"
                                        name="cuit"
                                        style={{marginLeft:10}}
                                    >
                                        <Input disabled/>
                                    </Form.Item>
                                </Col>
                            </Row>
                            <Row>
                                <Col xs={{span:12}} lg={{span:12}}>
                                    <Form.Item
                                        label="Domicilio"
                                        name="domicilio"
                                    >
                                        <Input disabled/>
                                    </Form.Item>
                                </Col>
                                <Col xs={{span:10}} lg={{span:10}}>
                                    <Form.Item
                                        label="Localidad"
                                        name="localidad"
                                        style={{marginLeft:10}}
                                    >
                                        <Input disabled/>
                                    </Form.Item>
                                </Col>
                                <Col xs={{span:2}} lg={{span:2}}>
                                    <Form.Item
                                        name="codigopostal"
                                    >
                                        <Input disabled/>
                                    </Form.Item>
                                </Col>
                            </Row>
                            <Row>
                                <Col xs={{span:12}} lg={{span:12}}>
                                    <Form.Item
                                        label="Provincia"
                                        name="provincia"
                                    >
                                        <Input disabled/>
                                    </Form.Item>
                                </Col>
                                <Col xs={{span:12}} lg={{span:12}}>
                                    <Form.Item
                                        label="Telefono"
                                        name="telefono"
                                        style={{marginLeft:10}}
                                    >
                                        <Input disabled/>
                                    </Form.Item>
                                </Col>
                            </Row>
                        </Form>
                        </Col>
                        <Col xs={{span:1}} lg={{span:1}}>

                        </Col>
                        <Col xs={{span:11}} lg={{span:11}}>
                            <Divider orientation="left" plain>
                                Factura
                            </Divider>
                            <Form>
                            <Row>
                                <Col xs={{span:12}} lg={{span:12}}>
                                    <Form.Item
                                        label="N°"
                                        name="numero"
                                    >
                                        <Input disabled/>
                                    </Form.Item>
                                </Col>
                                <Col xs={{span:12}} lg={{span:12}}>
                                    <Form.Item
                                        label="Fecha"
                                        name="fecha"
                                        style={{marginLeft:10}}
                                    >
                                        <Input disabled/>
                                    </Form.Item>
                                </Col>
                            </Row>


                        </Form>
                        </Col>
                    </Row>
                    <Row>
                        <Col xs={{span:24}} lg={{span:24}}>
                            <Divider orientation="left" plain>
                                Venta/Presupuesto
                            </Divider>
                            <Form>
                                <Form.Item label="Tipo de operacion">
                                    <Select style={{width:'30%'}} value={operacion} onChange={onChangeOperation}>
                                        <Select.Option value="venta">Venta</Select.Option>
                                        <Select.Option value="presupuesto">Presupuesto</Select.Option>
                                    </Select>
                                </Form.Item>
                                {operacion === "venta" ? 
                                    <Alert message="Venta" type="warning" /> : null
                                }
                                {operacion === "presupuesto" ?
                                    <Alert message="Presupuesto" type="error" /> : null
                                }
                                {/* <Row>
                                    <Col xs={{span:8}} lg={{span:8}}>
                                        <Form.Item
                                            label="Numero"
                                            name="numero"
                                        >
                                            <Input />
                                        </Form.Item>
                                    </Col>
                                    <Col xs={{span:8}} lg={{span:8}}>
                                        <Form.Item
                                            label="Fecha"
                                            name="fecha"
                                            style={{marginLeft:10}}
                                        >
                                            <Input />
                                        </Form.Item>
                                    </Col>
                                    <Col xs={{span:8}} lg={{span:8}}>
                                        <Form.Item
                                            label="Nombre"
                                            name="nombre"
                                            style={{marginLeft:10}}
                                        >
                                            <Input />
                                        </Form.Item>
                                    </Col>
                                </Row>
                                <Row>
                                    <Col xs={{span:6}} lg={{span:6}}>
                                        <Form.Item
                                            label="Total"
                                            name="total"
                                        >
                                            <Input />
                                        </Form.Item>
                                    </Col>
                                    <Col xs={{span:6}} lg={{span:6}}>
                                        <Form.Item
                                            label="Neto"
                                            name="neto"
                                            style={{marginLeft:10}}
                                        >
                                            <Input />
                                        </Form.Item>
                                    </Col>
                                    <Col xs={{span:6}} lg={{span:6}}>
                                        <Form.Item
                                            label="Iva"
                                            name="iva"
                                            style={{marginLeft:10}}
                                        >
                                            <Input />
                                        </Form.Item>
                                    </Col>
                                    <Col xs={{span:6}} lg={{span:6}}>
                                        <Form.Item
                                            label="Exento"
                                            name="exento"
                                            style={{marginLeft:10}}
                                        >
                                            <Input />
                                        </Form.Item>
                                    </Col>
                                </Row> */}
                            </Form>

                            {/* <Row style={{marginBottom:15}}>
                                <Col xs={{span:20}} lg={{span:20}}>
                                    <Search placeholder="Ingrese nombre del cliente" onSearch={onSearch} />
                                </Col>
                                <Col xs={{span:4}} lg={{span:4}}>
                                    <Button shape="circle" icon={<EllipsisOutlined />} onClick={()=>info(true)} style={{marginLeft:35}}/>
                                </Col>
                            </Row> */}
                        </Col>
                    </Row>
                    <Row>
                        <Col xs={{span:24}} lg={{span:24}}>
                            <Divider orientation="left" plain>
                                Productos
                            </Divider> 
                            <Table />
                        </Col>
                    </Row>
                    <div style={{textAlign:'right'}}>
                        <Button type="primary" style={{borderRadius: 3, backgroundColor: '#13c2c2', marginTop:20}}>Emitir</Button>
                    </div>
                </Card>
            </Content>
            {/* } */}
            <Footer/>
        </Layout>
    )
}

export default CreateInvoce
