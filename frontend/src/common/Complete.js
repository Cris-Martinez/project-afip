import React from "react";
import { AutoComplete, Input } from 'antd'
import '../assets/css/complete.css'

const { Search } = Input;

const Complete = props => {
    return (
      <AutoComplete
          options={props.list}
          filterOption={props.onSearch}
          >
            <Search placeholder={props.placeholder} style={{width: 450}} allowClear/>
          </AutoComplete>


    );
  };

export default Complete
