BEGIN {separador="" }
/Esta\ carpeta/ { separador = "," }
/__postman__/   { print separador campos } 
                { print $0 } 
END { }