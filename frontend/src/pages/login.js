import React, { useContext } from 'react'
import PropTypes from 'prop-types';
import { Form, Input, Button, Checkbox, Card } from 'antd';
import { LoginContext } from '../context/loginProvider';
import { Link, Redirect } from 'react-router-dom'

const Login = (props) => {
    const layout = {labelCol: { span: 8 },};
    const tailLayout = { wrapperCol: { offset: 21, }, };
    const tailLayoutRemember = { wrapperCol: { offset: 6 }, };
    const { email, changeEmail, password, changePassword, loginAccess, isLogged } = useContext(LoginContext);

    const onFinish = values => {
        //console.log('Success:', values);
    };
    
    const onFinishFailed = errorInfo => {
        //console.log('Failed:', errorInfo);
    };
    
    const renderRedirectToDashboard = () => {
        if (!isLogged) {
           return <Redirect to='/dashboard' />
        }
    }

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
            {/* {email != "" && password != "" ?
                <Link to={{
                    pathname: '/dashboard',
                    }}> */}
                    {renderRedirectToDashboard()}
                    <Button type="primary" htmlType="submit" onClick={()=>loginAccess()}>
                        Submit
                    </Button>
                {/* </Link>
            : <Button type="primary" htmlType="submit" onClick={()=>loginAccess()}>
                                Submit
             </Button>
            } */}
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
