import { post } from "../helpers/RequestHelper";

const loginEndpoint = "api/authentication/authenticate"; //'authentication/authenticate';
const logoutEnpoint = "logout";

export const loginRequests = (user, dispatch) =>
  post(loginEndpoint, user)
    .then((res) => {
      dispatch.setIsLogged(res);
    })
    .catch((err) => {
      if (err.response) {
        dispatch.setIsLogged(err.response);
        const newError = { isError: true, message: err.response.data.error };
        dispatch.setIsErrorObject(newError);
      } else if (err.request) {
        dispatch.setIsLogged(err.request);
      } else {
        dispatch.setIsLogged(err);
      }
    });

export const logoutRequest = () => post(logoutEnpoint);
