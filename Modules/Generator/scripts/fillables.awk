BEGIN { fillables = "" }
{ split($0, item, "-")
  for (i in item) {
    if (match(item[i], "fillable") || match(item[i], "references")) {
      split(item[i], props, ":")
      fillables = fillables "\t\t'" props[1] "',\n"
    }
  }
  fillables = fillables "\t\t'created_by',\n"
}
END { print fillables }