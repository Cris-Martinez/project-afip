#!groovy

def FERR = fileExists '/etc/nginx/sites-available/lab.ferreteria-rendace.dpi-frt-utn.com.ar.conf'
def AVAILABLE = '/etc/nginx/sites-available/'
def ENABLED = '/etc/nginx/sites-enabled/'

if ( FERR ){
    echo "El archivo de configuracion ya existe"
}
else {
    sh "sudo cp ${ROOT}/build/files/lab.ferreteria-rendace.dpi-frt-utn.com.ar.conf ${AVAILABLE}"
    sh "cd ${ENABLED} && find . -type f -not -name '*.conf' -delete"
    sh "sudo ln -sf ${AVAILABLE}lab.ferreteria-rendace.dpi-frt-utn.com.ar.conf ${ENABLED}"
    sh "sudo service nginx restart  && sudo service nginx status"
    echo "Servidor Web configurado"
}
