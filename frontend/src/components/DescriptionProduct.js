import React from "react";
import { Descriptions, Card, Button, Row, Col, Divider } from "antd";
import "../assets/css/createinvoce.css";

const DescriptionProduct = (props) => {
  const {
    value,
    id,
    vencimiento,
    costo,
    precio,
    bulto,
    pieza,
    stock_minimo,
    tipo_producto_id,
    unidad_medida_id,
  } = props.productResult;
  const { closeInfoProduct, addProductInTable } = props;
  return (
    <Card className="descriptionProduct">
      <Descriptions title="Informacion de Producto">
        <Descriptions.Item label="Nombre">{value}</Descriptions.Item>
        <Descriptions.Item label="Vencimiento">{vencimiento}</Descriptions.Item>
        <Descriptions.Item label="Precio">$ {precio}</Descriptions.Item>
        <Descriptions.Item label="Costo">$ {costo}</Descriptions.Item>
        <Descriptions.Item label="Bulto">{bulto}</Descriptions.Item>
        <Descriptions.Item label="Pieza">{pieza}</Descriptions.Item>
        <Descriptions.Item label="Stock">{stock_minimo}</Descriptions.Item>
        <Descriptions.Item label="Tipo de Producto">
          {tipo_producto_id}
        </Descriptions.Item>
        <Descriptions.Item label="Unidad de Medida">
          {unidad_medida_id}
        </Descriptions.Item>
      </Descriptions>
      <Divider />
      <Row style={{ textAlign: "right" }}>
        <Col xs={{ span: 22 }} lg={{ span: 22 }}>
          <Button
            type="primary"
            style={{ borderRadius: 3, backgroundColor: "#13c2c2" }}
            onClick={() => addProductInTable(id)}
          >
            Agregar
          </Button>
        </Col>
        <Col xs={{ span: 2 }} lg={{ span: 2 }}>
          <Button
            type="primary"
            style={{ borderRadius: 3 }}
            onClick={closeInfoProduct}
            danger
          >
            Cerrar
          </Button>
        </Col>
      </Row>
    </Card>
  );
};

export default DescriptionProduct;
