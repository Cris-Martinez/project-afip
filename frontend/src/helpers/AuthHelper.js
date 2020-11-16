import jwtDecode from "jwt-decode";

const jwtToken = "jwtToken";
const permissions = "permissions";

const storeJwtToken = (token) => localStorage.setItem(jwtToken, token);

const getJwtToken = () => localStorage.getItem(jwtToken);

const clearStorage = () => localStorage.clear();

const getDecodedToken = () => jwtDecode(localStorage.getItem(jwtToken));

const storeUserPermissions = (userPermissions) =>
  localStorage.setItem(permissions, JSON.stringify(userPermissions));

const getUserPermissions = () => JSON.parse(localStorage.getItem(permissions));

const isAuthenticated = () => {
  return localStorage.getItem(jwtToken) !== null;
};

export {
  storeJwtToken,
  getJwtToken,
  getDecodedToken,
  storeUserPermissions,
  getUserPermissions,
  isAuthenticated,
  clearStorage,
};
