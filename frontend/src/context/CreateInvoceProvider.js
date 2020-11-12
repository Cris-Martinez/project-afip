import React, { createContext, useState } from 'react'
import PropTypes from 'prop-types';
import requestCreateInvoce from '../request/RequestCreateInvoce'

export const CreateInvoceContext = createContext({
    listProduct:[],
});

const CreateInvoceProvider = ({ children }) => {

    const [listProduct, setListProduct] = useState([]);
    const [productResult, setProductResult] = useState({});
    const [listInTable, setListInTable] = useState([]);

    const setProduct = responseProducts =>{
        var newListProducts = [];

        responseProducts.forEach(element => newListProducts.push(
                        {
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

    const searchProduct = value =>{
        var objectProduct = listProduct.find(item => {
            const lc = item.value.toLowerCase();
            const filter = value.toLowerCase();
            return lc.includes(filter);
        });

        setProductResult(objectProduct);
    }

    const closeInfoProduct = () =>{
        setProductResult({});
    }

    const addProductInTable = idProduct =>{
        var newListInTable = [];

        var objectProduct = listProduct.find(item => item.id === idProduct);

        newListInTable.push(objectProduct);

        setListInTable(newListInTable);
    }

    const getProduct = () =>{
        requestCreateInvoce.get("afipcore/productos/", { setProduct }); 
    }

    return(
        <CreateInvoceContext.Provider 
                                    value={{ 
                                        listProduct, 
                                        productResult, 
                                        listInTable, 
                                        getProduct, 
                                        searchProduct, 
                                        closeInfoProduct, 
                                        addProductInTable, 
                                        }}>
            {children}
        </CreateInvoceContext.Provider>
    );
};


CreateInvoceProvider.propTypes = {
    listProduct:PropTypes.array,
}

export default CreateInvoceProvider;

