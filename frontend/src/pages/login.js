import React, { useContext } from 'react'
import PropTypes from 'prop-types';
import { Form, Input, Button, Checkbox, Card, Alert } from 'antd';
import { LoginContext } from '../context/LoginProvider';
import { Redirect } from 'react-router-dom'
import { rulesForm } from '../constants/Rules';
import '../assets/css/login.css'

const Login = () => {
    const layout = {labelCol: { span: 8 },};
    const tailLayout = { wrapperCol: { offset: 21, }, };
    const tailLayoutRemember = { wrapperCol: { offset: 6 }, };
    const { email, changeEmail, password, changePassword, loginAccess, isLogged, isErrorObject } = useContext(LoginContext);
   
    const renderRedirectToDashboard = () => {
        switch (isLogged.status)
        {
            case 200:
                return <Redirect to='/dashboard' />
            case 404:
                return <Redirect to={{
                                    pathname: '/error',
                                    state:{
                                        status: "404",
                                        title: "404"
                                    }}}/>
            case 500: 
                return <Redirect to={{
                                    pathname: '/error',
                                    state:{
                                        status: "500",
                                        title: "500"
                                    }}}/>
            case isLogged !== {}:
                return <Redirect to={{
                                    pathname: '/error',
                                    state:{
                                        status: "error",
                                        title: "Submission Failed"
                                    }}}/>
            default:
                break;
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
                style={{marginBottom: -25, marginLeft: '-30%'}}
            >
            <Form.Item
                label="Username"
                name="username"
                rules={[rulesForm.username,rulesForm.email]}
            >
                <Input value={email} onChange={e => changeEmail(e.target.value)}/>
            </Form.Item>
        
            <Form.Item
                label="Password"
                name="password"
                rules={[rulesForm.password]}
            >
                <Input.Password value={password} onChange={e => changePassword(e.target.value)}/>
            </Form.Item>
        
            {isErrorObject.isError ? 
                <Form.Item {...tailLayoutRemember}>
                    <Alert style={{marginBottom: 20}} message={isErrorObject.message} type="error" />
                </Form.Item>:null}   

            <Form.Item {...tailLayoutRemember} name="remember" valuePropName="checked">
                <Checkbox>Remember me</Checkbox>
            </Form.Item>
        
            <Form.Item {...tailLayout}>
                    {renderRedirectToDashboard()}
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
