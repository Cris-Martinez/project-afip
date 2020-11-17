import React, { useContext } from "react";
import { Form, Input, Button, Checkbox, Card, Alert } from "antd";
import { LoginContext } from "../context/LoginProvider";
import { rulesForm } from "../constants/Rules";
import "../assets/css/login.css";

const Login = () => {
  const layout = { labelCol: { span: 8 } };
  const tailLayout = { wrapperCol: { offset: 21 } };
  const tailLayoutRemember = { wrapperCol: { offset: 6 } };
  const {
    email,
    changeEmail,
    password,
    changePassword,
    loginAccess,
    isErrorObject,
    renderRedirectToDashboard,
  } = useContext(LoginContext);

  return (
    <Card className="card-login">
      <Form
        {...layout}
        name="basic"
        initialValues={{
          remember: true,
        }}
        style={{ marginBottom: -25, marginLeft: "-30%" }}
      >
        <Form.Item
          label="Username"
          name="username"
          rules={[rulesForm.username, rulesForm.email]}
        >
          <Input value={email} onChange={(e) => changeEmail(e.target.value)} />
        </Form.Item>

        <Form.Item
          label="Password"
          name="password"
          rules={[rulesForm.password]}
        >
          <Input.Password
            value={password}
            onChange={(e) => changePassword(e.target.value)}
          />
        </Form.Item>

        {isErrorObject.isError ? (
          <Form.Item {...tailLayoutRemember}>
            <Alert
              style={{ marginBottom: 20 }}
              message={isErrorObject.message}
              type="error"
            />
          </Form.Item>
        ) : null}

        <Form.Item
          {...tailLayoutRemember}
          name="remember"
          valuePropName="checked"
        >
          <Checkbox>Remember me</Checkbox>
        </Form.Item>

        <Form.Item {...tailLayout}>
          {renderRedirectToDashboard()}
          <Button
            type="primary"
            htmlType="submit"
            onClick={() => loginAccess()}
          >
            Submit
          </Button>
        </Form.Item>
      </Form>
    </Card>
  );
};

export default Login;
