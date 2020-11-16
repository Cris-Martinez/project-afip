import axios from "axios";
import { getJwtToken, isAuthenticated } from "./AuthHelper";

axios.defaults.baseURL = `${window.location.protocol}//localhost:8000/`;

export const get = (path, dispatch) => axios.get(path, { dispatch });

export const post = (path, data = {}, dispatch) =>
  axios.post(path, data, { dispatch });

export const postMultipart = (path, data = {}, dispatch) =>
  axios.post(path, data, {
    dispatch,
    headers: {
      "Content-Type": `multipart/form-data; boundary=${data._boundary}`,
    },
  });

export const put = (path, data = {}, dispatch) =>
  axios.put(path, data, { dispatch });

export const destroy = (path, dispatch) => axios.delete(path, { dispatch });

export const patch = (path, data = {}, dispatch) =>
  axios.patch(path, data, { dispatch });

axios.interceptors.request.use(
  (config) => {
    if (isAuthenticated())
      config.headers.Authorization = "Bearer " + getJwtToken();
    return config;
  },
  (error) => {
    return Promise.reject(error);
  }
);

export default {
  get,
  post,
  postMultipart,
  destroy,
  put,
  patch,
};
