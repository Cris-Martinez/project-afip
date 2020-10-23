import React from 'react'
import { Modal } from 'antd'

export default function info(data) {
    Modal.info({
      title: 'Detalle',
      content: (
        <div>
          <p>Informacion Adicional del cliente...</p>
        </div>
      ),
      onOk() {},
    });
}