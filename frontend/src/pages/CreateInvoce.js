import React, { useState, useContext, useEffect } from 'react'
import { Layout, Card, Alert, Col, Row, Divider, Form, Input, Button, Select, Table  } from 'antd';
import { CreateInvoceContext } from '../context/CreateInvoceProvider';
import { EllipsisOutlined } from '@ant-design/icons';
import { columns } from '../constants/Columns';
import '../assets/css/createinvoce.css'
import Header from '../common/Header';
import Footer from '../common/Footer';
import Complete from '../common/Complete';
import info from '../common/Modal';

const { Content } = Layout;
const { Search } = Input;

const onSearch = value => console.log(value);

const CreateInvoce = () => {
    const [operacion, setOperacion] = useState("")
    const { listProduct, getProduct } = useContext(CreateInvoceContext);   
    
    useEffect(() => {
        getProduct();
    });
    
    const onChangeOperation = value => setOperacion(value);

    const onSearchProduct = (inputValue, option) => option.value.toUpperCase().indexOf(inputValue.toUpperCase()) !== -1

    return (
        <Layout style={{background: 'white'}}>
            <Header/>
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
                            </Form>
                        </Col>
                    </Row>
                    <Row>
                        <Col xs={{span:24}} lg={{span:24}}>
                            <Divider orientation="left" plain>
                                Productos
                            </Divider>
                            <Row style={{marginBottom:15}}>
                                    <Col xs={{span:12}} lg={{span:12}}> 
                                        <Complete list={listProduct} onSearch={onSearchProduct} placeholder="Ingrese nombre del producto"/>
                                        <Button type="primary" style={{borderRadius: 3, backgroundColor: '#13c2c2', marginLeft:'2%'}}>Consultar</Button>
                                    </Col>                                 
                            </Row> 
                            <Table columns={columns} className="table-product"/>
                        </Col>
                    </Row>
                    <div style={{textAlign:'right'}}>
                        <Button type="primary" style={{borderRadius: 3, backgroundColor: '#13c2c2', marginTop:20}}>Emitir</Button>
                    </div>
                </Card>
            </Content>

            <Footer/>
        </Layout>
    )
}

export default CreateInvoce
