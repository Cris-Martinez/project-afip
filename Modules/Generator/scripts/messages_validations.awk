BEGIN { fields = "\t\t\t" }
{ 
  split($0, item, "-")
  for (i in item) {
    split(item[i], props, ":")
    atributo = "El atributo " toupper(props[1])
    if (match(item[i], "references")) props[2] = "integer"  
    fields = fields "'" props[1] "." props[2] "' => '" atributo " error de formato.',\n\t\t\t"
    if (match(item[i], "required"))    
      fields = fields "'" props[1] ".required' => '" atributo " es obligatorio.',\n\t\t\t"
    if (match(item[i], "unique"))      
      fields = fields "'" props[1] ".unique' => '" atributo " ya existe.',\n\t\t\t"
    if (match(item[i], "date_format")) 
      fields = fields "'" props[1] ".date_format' => '" atributo " error formato fecha.',\n\t\t\t"
    if (match(item[i], "string"))      
      fields = fields "'" props[1] ".max' => '" atributo " tiene longitud maxima de " props[3] " caracteres.',\n\t\t\t"
  }
}
END { print fields }