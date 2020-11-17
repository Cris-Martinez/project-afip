import React from "react";
import { Col, Row, Divider, Form, Input, Button } from "antd";
import { EllipsisOutlined } from "@ant-design/icons";
import info from "../common/Modal.jsx";

const { Search } = Input;

const onSearch = (value) => console.log(value);

const CustomerInInvoice = (props) => {
  return (
    <Form>
      <Divider orientation="left" plain>
        Cliente
      </Divider>
      <Row style={{ marginBottom: 15 }}>
        <Col xs={{ span: 20 }} lg={{ span: 20 }}>
          <Search
            placeholder="Ingrese nombre del cliente"
            onSearch={onSearch}
          />
        </Col>
        <Col xs={{ span: 4 }} lg={{ span: 4 }}>
          <Button
            shape="circle"
            icon={<EllipsisOutlined />}
            onClick={() => info(true)}
            style={{ marginLeft: 35 }}
          />
        </Col>
      </Row>
      <Row>
        <Col xs={{ span: 4 }} lg={{ span: 4 }}>
          <Form.Item label="Nombre" name="nombre" />
        </Col>
        <Col xs={{ span: 8 }} lg={{ span: 8 }}>
          <Input disabled />
        </Col>
        <Col xs={{ span: 4 }} lg={{ span: 4 }}>
          <Form.Item label="CUIT" name="cuit" style={{ marginLeft: 10 }} />
        </Col>
        <Col xs={{ span: 8 }} lg={{ span: 8 }}>
          <Input disabled />
        </Col>
      </Row>
      <Row>
        <Col xs={{ span: 4 }} lg={{ span: 4 }}>
          <Form.Item label="Domicilio" name="domicilio" />
        </Col>
        <Col xs={{ span: 8 }} lg={{ span: 8 }}>
          <Input disabled />
        </Col>
        <Col xs={{ span: 4 }} lg={{ span: 4 }}>
          <Form.Item
            label="Localidad"
            name="localidad"
            style={{ marginLeft: 10 }}
          />
        </Col>
        <Col xs={{ span: 6 }} lg={{ span: 6 }}>
          <Input disabled />
        </Col>
        <Col xs={{ span: 2 }} lg={{ span: 2 }}>
          <Input disabled />
        </Col>
      </Row>
      <Row>
        <Col xs={{ span: 4 }} lg={{ span: 4 }}>
          <Form.Item label="Provincia" name="provincia" />
        </Col>
        <Col xs={{ span: 8 }} lg={{ span: 8 }}>
          <Input disabled />
        </Col>
        <Col xs={{ span: 4 }} lg={{ span: 4 }}>
          <Form.Item
            label="Telefono"
            name="telefono"
            style={{ marginLeft: 10 }}
          />
        </Col>
        <Col xs={{ span: 8 }} lg={{ span: 8 }}>
          <Input disabled />
        </Col>
      </Row>
    </Form>
  );
};

export default CustomerInInvoice;
