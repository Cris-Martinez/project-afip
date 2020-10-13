import React from 'react'
import { Result, Button } from 'antd';
import { Link } from 'react-router-dom'

const Error = props => {
    const { status, title } = props.location.state;
    return (
        <Result
            status={status}
            title={title}
            extra={
                <Link to={{
                    pathname: '/dashboard',
                    }}>
                    <Button type="primary">Back Home</Button>
                </Link>   
                }
        />
    )
}

export default Error