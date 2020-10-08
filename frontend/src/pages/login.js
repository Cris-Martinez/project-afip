import React from 'react'
import { Form, Input, Button, Checkbox, Card } from 'antd';

const login = () => {
    const layout = {labelCol: { span: 8 },};
    const tailLayout = { wrapperCol: { offset: 21, }, };
    const tailLayoutRemember = { wrapperCol: { offset: 6 }, };

    const onFinish = (values) => {
        console.log('Success:', values);
      };
    
      const onFinishFailed = (errorInfo) => {
        console.log('Failed:', errorInfo);
      };
    
      return (
        <Card className="card-login">
            <Form 
                {...layout}              
                name="basic"
                initialValues={{
                    remember: true,
                }}
                onFinish={onFinish}
                onFinishFailed={onFinishFailed}
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
                <Input />
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
                <Input.Password />
            </Form.Item>
        
            <Form.Item {...tailLayoutRemember} name="remember" valuePropName="checked">
                <Checkbox>Remember me</Checkbox>
            </Form.Item>
        
            <Form.Item {...tailLayout}>
                <Button type="primary" htmlType="submit">
                    Submit
                </Button>
            </Form.Item>
            </Form>
        </Card>
      );
}

export default login
