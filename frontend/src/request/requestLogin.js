import axios from 'axios';

//axios.defaults.baseURL = `${window.location.protocol}//${window.location.host}/api/`;
axios.defaults.baseURL = `http://127.0.0.1:8000/api/`;

export default class Request{

    static post(path, data = {}, dispatch) {
        //return axios.post(path, data, { dispatch });
        return axios.post(path,{
                    method: 'POST',
                    body: JSON.stringify(data),
                    headers: {
                      'Accept': 'application/json',
                      'Content-Type': 'application/json',
                      'Access-Control-Allow-Origin':'*',
                    },
                    })
                    .then(res => res.json())
                    .then(data => { 
                      console.log(data);
                    })
                  .catch(err => console.error(err));
        // return axios.get(path)
        //             .then(res => {
        //               console.log(res);
        //               console.log(res.data);
        //             })

        
    }
}