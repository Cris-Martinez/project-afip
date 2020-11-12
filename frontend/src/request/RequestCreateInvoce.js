import axios from 'axios';

axios.defaults.baseURL = `http://127.0.0.1:8000/`;

export default class Request {

    static get(path, dispatch) {
        return axios.get(path)
                        .then(res =>{
                            dispatch.setProduct(res.data)                                                  
                        })
    }

}
