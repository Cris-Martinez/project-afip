BEGIN { fields = "\t\t\t" }
{ 
  split($0, item, "-")
  for (i in item) {
    if (match(item[i], "unique")) {
      split(item[i], props, ":")
      if (match(item[i], "references")) props[2] = "integer"
      fields = fields "'" props[1] "' => '" props[2]
      fields = fields "|unique:" entidad "',\n\t\t\t"
    }
  }
}
END { print fields }