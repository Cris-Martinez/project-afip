import axios from 'axios';

//axios.defaults.baseURL = `${window.location.protocol}//${window.location.host}/api/`;
axios.defaults.baseURL = `http://127.0.0.1:8000/api/`;

export default class Request{

    static post(path, data = {}, dispatch) { 
      axios.post(path, data, { dispatch })
                    .then(res => { 
                      console.log(res);   
                      return res;                
                    })
                    .catch(err => console.error(err));    
    }
}