BEGIN {
  fields = "\t\t\t"
}
{ 
  split($0, item, "-")
  for (i in item) {
    split(item[i], props, ":")
    if (match(item[i], "references")) {
      fields = fields "$table->integer('" props[1] "')->unsigned()->nullable();\n\t\t\t"
      fields = fields "$table->foreign('" props[1] "')->references('id')->on('" props[3] "')->onDelete('cascade')"
    }
    else {
      fields = fields "$table->" props[2] "('" props[1] "')"
    }
    if (match(item[i], "unique")) fields = fields "->unique()" 
    if (match(item[i], "nullable")) fields = fields "->nullable()" 
    if (match(item[i], "default")) fields = fields "->default(" props[4] ")" 
    fields = fields "->comment('" item[i] "');\n\t\t\t"
  }
}
END {
  fields = fields "$table->boolean('habilitado')->default(true);\n\t\t\t"
  fields = fields "// -- Audit Fields ------------------------\n\t\t\t"    
  fields = fields "$table->integer('created_by')->unsigned()->nullable();\n\t\t\t"
  fields = fields "$table->foreign('created_by')->references('id')->on('usuarios')->onDelete('cascade');\n\t\t\t"
  fields = fields "$table->integer('updated_by')->unsigned()->nullable();\n\t\t\t"
  fields = fields "$table->foreign('updated_by')->references('id')->on('usuarios')->onDelete('cascade');\n"
  print fields
}
