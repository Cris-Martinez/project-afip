import React from "react";
import { AutoComplete, Input } from 'antd'

const { Search } = Input;

const Complete = props => {
  const { list, onSearch, placeholder } = props
    return (
      <AutoComplete
          options={list}
          filterOption={onSearch}
          >
            <Search 
                    placeholder={placeholder} 
                    style={{width: 450}} 
                    allowClear/>
          </AutoComplete>
    );
  };

export default Complete
