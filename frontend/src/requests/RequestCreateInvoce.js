import { get } from "../helpers/RequestHelper";

const productsEndpoint = "afipcore/productos/";

export const productsRequests = (dispatch) =>
  get(productsEndpoint).then((res) => {
    dispatch.setProduct(res.data);
  });
