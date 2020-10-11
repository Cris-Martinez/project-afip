import React, { useContext } from 'react'
import PropTypes from 'prop-types';
import { Form, Input, Button, Checkbox, Card } from 'antd';
import { LoginContext } from '../context/loginProvider';

const Login = (props) => {
    const layout = {labelCol: { span: 8 },};
    const tailLayout = { wrapperCol: { offset: 21, }, };
    const tailLayoutRemember = { wrapperCol: { offset: 6 }, };
    const { email, changeEmail, password, changePassword, loginAccess } = useContext(LoginContext);

    const onFinish = values => {
        //console.log('Success:', values);
    };
    
    const onFinishFailed = errorInfo => {
        //console.log('Failed:', errorInfo);
    };
    
    return (
        <Card className="card-login">
            <Form 
                {...layout}              
                name="basic"
                initialValues={{
                    remember: true,
                }}
                onFinish={onFinish()}
                onFinishFailed={onFinishFailed()}
                style={{marginBottom: -25, marginLeft: '-30%'}}
            >
            <Form.Item
                label="Username"
                name="username"
                rules={[
                {
                    required: true,
                    message: 'Please input your username!',
                },
                ]}
            >
                <Input value={email} onChange={e => changeEmail(e.target.value)}/>
            </Form.Item>
        
            <Form.Item
                label="Password"
                name="password"
                rules={[
                {
                    required: true,
                    message: 'Please input your password!',
                },
                ]}
            >
                <Input.Password value={password} onChange={e => changePassword(e.target.value)}/>
            </Form.Item>
        
            <Form.Item {...tailLayoutRemember} name="remember" valuePropName="checked">
                <Checkbox>Remember me</Checkbox>
            </Form.Item>
        
            <Form.Item {...tailLayout}>
                <Button type="primary" htmlType="submit" onClick={()=>loginAccess()}>
                    Submit
                </Button>
            </Form.Item>
            </Form>
        </Card>
      )
}

Login.propTypes = {
    email: PropTypes.string,
    password: PropTypes.string,
    onChange: PropTypes.func,
}

export default Login
