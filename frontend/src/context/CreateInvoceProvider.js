import React, { createContext, useState } from 'react'
import PropTypes from 'prop-types';
import requestCreateInvoce from '../request/RequestCreateInvoce'

export const CreateInvoceContext = createContext({
    listProduct:[],
});

const CreateInvoceProvider = ({ children }) => {

    const [listProduct, setListProduct] = useState([]);

    const setProduct = responseProducts =>{
        var newListProducts = [];
        var objectProduct = {};
        responseProducts.forEach(element => newListProducts.push(
                        objectProduct = {
                            value: element.nombre,
                            id: element.id,
                            vencimiento: element.vencimiento,
                            costo: element.costo,
                            precio: element.precio,
                            bulto: element.bulto,
                            pieza: element.pieza,
                            stock_minimo: element.stock_minimo,
                            tipo_producto_id: element.tipo_producto_id,
                            tipo_iva_id: element.tipo_iva_id,
                            unidad_medida_id: element.unidad_medida_id,
                            habilitado: element.habilitado,
                        }
        ));

        setListProduct(newListProducts);
    }

    const getProduct = () =>{
        requestCreateInvoce.get("afipcore/productos/", { setProduct }); 
    }

    return(
        <CreateInvoceContext.Provider value={{ listProduct, getProduct }}>
            {children}
        </CreateInvoceContext.Provider>
    );
};


CreateInvoceProvider.propTypes = {
    listProduct:PropTypes.array,
}

export default CreateInvoceProvider;

