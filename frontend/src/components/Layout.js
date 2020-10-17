import React from "react";

function Layout({ children, location }) {
  console.log(location);
  return (
    <>          
      <div>{children}</div>
    </>
  );
}

export default Layout;
