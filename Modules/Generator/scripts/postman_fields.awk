BEGIN { fields = "" }
{ 
  n = split($0, item, "-")
  for (i = 1; i <= n; i++) {
    split(item[i], props, ":")
    if (i > 1) fields = fields ",\n" 
    fields = fields "\t\t\t\t\t{\n"
    fields = fields "\t\t\t\t\t\t\"key\": \"" props[1] "\",\n"
    fields = fields "\t\t\t\t\t\t\"value\": \"xxx\",\n"
    fields = fields "\t\t\t\t\t\t\"type\": \"text\"\n"
    fields = fields "\t\t\t\t\t}"
  }
}
END { print fields }