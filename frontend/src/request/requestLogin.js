import axios from 'axios';

//axios.defaults.baseURL = `${window.location.protocol}//${window.location.host}/api/`;
axios.defaults.baseURL = `http://127.0.0.1:8000/api/`;

export default class Request{

    static post(path, data = {}, dispatch) { 
      return axios.post(path, data, { dispatch })
                    .then(res => { 
                        dispatch.setIsLogged(res);                
                    })
                    .catch(err => {
                      if(err.response){
                          dispatch.setIsLogged(err.response); 
                          const newError = {isError:true, message:err.response.data.error};
                          dispatch.setIsErrorObject(newError);
                      }else if(err.request){
                          dispatch.setIsLogged(err.request); 
                      }else{
                          dispatch.setIsLogged(err); 
                      }
                  });    
    }
}