import React from 'react'
import { Result } from 'antd';

const PageError = props => {
    return (
        <Result
            status="warning"
            title="Hay algunos problemas con su operación."
        />
    )
}

export default PageError