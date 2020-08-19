BEGIN { fields = "\t\t\t" }
{ 
  split($0, item, "-")
  for (i in item) {
    split(item[i], props, ":")
    atributos = item[i]
    if (match(atributos, "email")) props[2] = "email"
    if (match(atributos, "float")) props[2] = "numeric"
    if (match(atributos, "references")) props[2] = "integer"
    fields = fields "'" props[1] "' => '" props[2]
    if (match(atributos, "nullable")) fields = fields "|nullable"
    else                              fields = fields "|required" 
    if (match(atributos, "string"))   fields = fields "|max:" props[3]
    if (match(atributos, "date"))     fields = fields "|date_format:\"Y-m-d\""
    fields = fields "',\n\t\t\t"
  }
}
END { print fields }