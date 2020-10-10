import axios from 'axios';

axios.defaults.baseURL = `${window.location.protocol}//${window.location.host}/api/`;

export default class Request{

    static post(path, data = {}, dispatch) {
        return axios.post(path, data, { dispatch });
      }

}