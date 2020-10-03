<?php

return [
  /*
    |--------------------------------------------------------------------------
    | Permissions Category
    |--------------------------------------------------------------------------
    |
    | Here you will find all what you need to version permissions in your App
    */

  'Permissions' => [
    'PermissionsTemplateDefinition' => '
      {  
        "reportes": {
          "visualizar_menu_reportes": {
            "label": "Visualizar Menu de reportes",
            "tooltip": "El usuario tendra la habilidad visualizar el menu de reportes.",
            "importancia": "alta",
            "value": true
          },
          "crear_reportes": {
            "label": "Crear Reportes",
            "tooltip": "El usuario tendra la habilidad de crear reportes ",
            "importancia": "alta",
            "value": true
          },
          "modificar_reportes": {
            "label": "Modificar Reportes",
            "tooltip": "El usuario tendra la habilidad de modificar reportes",
            "importancia": "alta",
            "value": true
          },
          "eliminar_reportes": {
            "label": "Eliminar Reportes",
            "tooltip": "El usuario tendra la habilidad de eliminar reportes.",
            "importancia": "alta",
            "value": true
          }
        },
        "listadoprecios": {
          "visualizar_menu_listadoprecios": {
            "label": "Visualizar Menu de lista de precios",
            "tooltip": "El usuario tendra la habilidad visualizar el menu de lista de precios.",
            "importancia": "alta",
            "value": true
          },
          "crear_listadoprecios": {
            "label": "Crear lista de precios",
            "tooltip": "El usuario tendra la habilidad de crear lista de precios ",
            "importancia": "alta",
            "value": true
          },
          "modificar_listadoprecios": {
            "label": "Modificar lista de precios",
            "tooltip": "El usuario tendra la habilidad de modificar lista de precios",
            "importancia": "alta",
            "value": true
          },
          "eliminar_listadoprecios": {
            "label": "Eliminar lista de precios",
            "tooltip": "El usuario tendra la habilidad de eliminar lista de precios.",
            "importancia": "alta",
            "value": true
          }
        },
        "proveedorproductos": {
          "visualizar_menu_proveedorproductos": {
            "label": "Ver Menu ProveedorProducto",
            "tooltip": "El usuario tendra la habilidad de visualizar el menu de ProveedorProducto.",
            "importancia": "alta",
            "value": false
          },
          "crear_proveedorproductos": {
            "label": "Crear ProveedorProducto",
            "tooltip": "El usuario tendra la habilidad de crear ProveedorProducto ",
            "importancia": "alta",
            "value": true
          },
          "modificar_proveedorproductos": {
            "label": "Modificar ProveedorProducto",
            "tooltip": "El usuario tendra la habilidad de modificar ProveedorProducto",
            "importancia": "alta",
            "value": true
          },
          "eliminar_proveedorproductos": {
            "label": "Eliminar ProveedorProducto",
            "tooltip": "El usuario tendra la habilidad de eliminar ProveedorProducto.",
            "importancia": "alta",
            "value": false
          },
          "habilitar_proveedorproductos": {
            "label": "Habilitar ProveedorProducto",
            "tooltip": "El usuario tendra la habilidad de habilitar ProveedorProducto",
            "importancia": "alta",
            "value": true
          },
          "deshabilitar_proveedorproductos": {
            "label": "Deshabilitar ProveedorProducto",
            "tooltip": "El usuario tendra la habilidad de deshabilitar ProveedorProducto",
            "importancia": "alta",
            "value": true
          }
        },
        "clienteproveedores": {
          "visualizar_menu_clienteproveedores": {
            "label": "Ver Menu ClienteProveedor",
            "tooltip": "El usuario tendra la habilidad de visualizar el menu de ClienteProveedor.",
            "importancia": "alta",
            "value": false
          },
          "crear_clienteproveedores": {
            "label": "Crear ClienteProveedor",
            "tooltip": "El usuario tendra la habilidad de crear ClienteProveedor ",
            "importancia": "alta",
            "value": true
          },
          "modificar_clienteproveedores": {
            "label": "Modificar ClienteProveedor",
            "tooltip": "El usuario tendra la habilidad de modificar ClienteProveedor",
            "importancia": "alta",
            "value": true
          },
          "eliminar_clienteproveedores": {
            "label": "Eliminar ClienteProveedor",
            "tooltip": "El usuario tendra la habilidad de eliminar ClienteProveedor.",
            "importancia": "alta",
            "value": false
          },
          "habilitar_clienteproveedores": {
            "label": "Habilitar ClienteProveedor",
            "tooltip": "El usuario tendra la habilidad de habilitar ClienteProveedor",
            "importancia": "alta",
            "value": true
          },
          "deshabilitar_clienteproveedores": {
            "label": "Deshabilitar ClienteProveedor",
            "tooltip": "El usuario tendra la habilidad de deshabilitar ClienteProveedor",
            "importancia": "alta",
            "value": true
          }
        },
        "personal": {
          "visualizar_menu_personal": {
            "label": "Ver Menu Personal",
            "tooltip": "El usuario tendra la habilidad de visualizar el menu de Personal.",
            "importancia": "alta",
            "value": false
          },
          "crear_personal": {
            "label": "Crear Personal",
            "tooltip": "El usuario tendra la habilidad de crear Personal ",
            "importancia": "alta",
            "value": true
          },
          "modificar_personal": {
            "label": "Modificar Personal",
            "tooltip": "El usuario tendra la habilidad de modificar Personal",
            "importancia": "alta",
            "value": true
          },
          "eliminar_personal": {
            "label": "Eliminar Personal",
            "tooltip": "El usuario tendra la habilidad de eliminar Personal.",
            "importancia": "alta",
            "value": false
          },
          "habilitar_personal": {
            "label": "Habilitar Personal",
            "tooltip": "El usuario tendra la habilidad de habilitar Personal",
            "importancia": "alta",
            "value": true
          },
          "deshabilitar_personal": {
            "label": "Deshabilitar Personal",
            "tooltip": "El usuario tendra la habilidad de deshabilitar Personal",
            "importancia": "alta",
            "value": true
          }
        },
        "despieces": {
          "visualizar_menu_despieces": {
            "label": "Ver Menu Despiece",
            "tooltip": "El usuario tendra la habilidad de visualizar el menu de Despiece.",
            "importancia": "alta",
            "value": false
          },
          "crear_despieces": {
            "label": "Crear Despiece",
            "tooltip": "El usuario tendra la habilidad de crear Despiece ",
            "importancia": "alta",
            "value": true
          },
          "modificar_despieces": {
            "label": "Modificar Despiece",
            "tooltip": "El usuario tendra la habilidad de modificar Despiece",
            "importancia": "alta",
            "value": true
          },
          "eliminar_despieces": {
            "label": "Eliminar Despiece",
            "tooltip": "El usuario tendra la habilidad de eliminar Despiece.",
            "importancia": "alta",
            "value": false
          },
          "habilitar_despieces": {
            "label": "Habilitar Despiece",
            "tooltip": "El usuario tendra la habilidad de habilitar Despiece",
            "importancia": "alta",
            "value": true
          },
          "deshabilitar_despieces": {
            "label": "Deshabilitar Despiece",
            "tooltip": "El usuario tendra la habilidad de deshabilitar Despiece",
            "importancia": "alta",
            "value": true
          }
        },
        "stocks": {
          "visualizar_menu_stocks": {
            "label": "Ver Menu Stock",
            "tooltip": "El usuario tendra la habilidad de visualizar el menu de Stock.",
            "importancia": "alta",
            "value": false
          },
          "crear_stocks": {
            "label": "Crear Stock",
            "tooltip": "El usuario tendra la habilidad de crear Stock ",
            "importancia": "alta",
            "value": true
          },
          "modificar_stocks": {
            "label": "Modificar Stock",
            "tooltip": "El usuario tendra la habilidad de modificar Stock",
            "importancia": "alta",
            "value": true
          },
          "eliminar_stocks": {
            "label": "Eliminar Stock",
            "tooltip": "El usuario tendra la habilidad de eliminar Stock.",
            "importancia": "alta",
            "value": false
          },
          "habilitar_stocks": {
            "label": "Habilitar Stock",
            "tooltip": "El usuario tendra la habilidad de habilitar Stock",
            "importancia": "alta",
            "value": true
          },
          "deshabilitar_stocks": {
            "label": "Deshabilitar Stock",
            "tooltip": "El usuario tendra la habilidad de deshabilitar Stock",
            "importancia": "alta",
            "value": true
          }
        },
        "productoubicaciones": {
          "visualizar_menu_productoubicaciones": {
            "label": "Ver Menu ProductoUbicacion",
            "tooltip": "El usuario tendra la habilidad de visualizar el menu de ProductoUbicacion.",
            "importancia": "alta",
            "value": false
          },
          "crear_productoubicaciones": {
            "label": "Crear ProductoUbicacion",
            "tooltip": "El usuario tendra la habilidad de crear ProductoUbicacion ",
            "importancia": "alta",
            "value": true
          },
          "modificar_productoubicaciones": {
            "label": "Modificar ProductoUbicacion",
            "tooltip": "El usuario tendra la habilidad de modificar ProductoUbicacion",
            "importancia": "alta",
            "value": true
          },
          "eliminar_productoubicaciones": {
            "label": "Eliminar ProductoUbicacion",
            "tooltip": "El usuario tendra la habilidad de eliminar ProductoUbicacion.",
            "importancia": "alta",
            "value": false
          },
          "habilitar_productoubicaciones": {
            "label": "Habilitar ProductoUbicacion",
            "tooltip": "El usuario tendra la habilidad de habilitar ProductoUbicacion",
            "importancia": "alta",
            "value": true
          },
          "deshabilitar_productoubicaciones": {
            "label": "Deshabilitar ProductoUbicacion",
            "tooltip": "El usuario tendra la habilidad de deshabilitar ProductoUbicacion",
            "importancia": "alta",
            "value": true
          }
        },
        "ubicaciones": {
          "visualizar_menu_ubicaciones": {
            "label": "Ver Menu Ubicacion",
            "tooltip": "El usuario tendra la habilidad de visualizar el menu de Ubicacion.",
            "importancia": "alta",
            "value": false
          },
          "crear_ubicaciones": {
            "label": "Crear Ubicacion",
            "tooltip": "El usuario tendra la habilidad de crear Ubicacion ",
            "importancia": "alta",
            "value": true
          },
          "modificar_ubicaciones": {
            "label": "Modificar Ubicacion",
            "tooltip": "El usuario tendra la habilidad de modificar Ubicacion",
            "importancia": "alta",
            "value": true
          },
          "eliminar_ubicaciones": {
            "label": "Eliminar Ubicacion",
            "tooltip": "El usuario tendra la habilidad de eliminar Ubicacion.",
            "importancia": "alta",
            "value": false
          },
          "habilitar_ubicaciones": {
            "label": "Habilitar Ubicacion",
            "tooltip": "El usuario tendra la habilidad de habilitar Ubicacion",
            "importancia": "alta",
            "value": true
          },
          "deshabilitar_ubicaciones": {
            "label": "Deshabilitar Ubicacion",
            "tooltip": "El usuario tendra la habilidad de deshabilitar Ubicacion",
            "importancia": "alta",
            "value": true
          }
        },
        "productos": {
          "visualizar_menu_productos": {
            "label": "Ver Menu Producto",
            "tooltip": "El usuario tendra la habilidad de visualizar el menu de Producto.",
            "importancia": "alta",
            "value": false
          },
          "crear_productos": {
            "label": "Crear Producto",
            "tooltip": "El usuario tendra la habilidad de crear Producto ",
            "importancia": "alta",
            "value": true
          },
          "modificar_productos": {
            "label": "Modificar Producto",
            "tooltip": "El usuario tendra la habilidad de modificar Producto",
            "importancia": "alta",
            "value": true
          },
          "eliminar_productos": {
            "label": "Eliminar Producto",
            "tooltip": "El usuario tendra la habilidad de eliminar Producto.",
            "importancia": "alta",
            "value": false
          },
          "habilitar_productos": {
            "label": "Habilitar Producto",
            "tooltip": "El usuario tendra la habilidad de habilitar Producto",
            "importancia": "alta",
            "value": true
          },
          "deshabilitar_productos": {
            "label": "Deshabilitar Producto",
            "tooltip": "El usuario tendra la habilidad de deshabilitar Producto",
            "importancia": "alta",
            "value": true
          }
        },
        "detallepresupuestos": {
          "visualizar_menu_detallepresupuestos": {
            "label": "Ver Menu DetallePresupuesto",
            "tooltip": "El usuario tendra la habilidad de visualizar el menu de DetallePresupuesto.",
            "importancia": "alta",
            "value": false
          },
          "crear_detallepresupuestos": {
            "label": "Crear DetallePresupuesto",
            "tooltip": "El usuario tendra la habilidad de crear DetallePresupuesto ",
            "importancia": "alta",
            "value": true
          },
          "modificar_detallepresupuestos": {
            "label": "Modificar DetallePresupuesto",
            "tooltip": "El usuario tendra la habilidad de modificar DetallePresupuesto",
            "importancia": "alta",
            "value": true
          },
          "eliminar_detallepresupuestos": {
            "label": "Eliminar DetallePresupuesto",
            "tooltip": "El usuario tendra la habilidad de eliminar DetallePresupuesto.",
            "importancia": "alta",
            "value": false
          },
          "habilitar_detallepresupuestos": {
            "label": "Habilitar DetallePresupuesto",
            "tooltip": "El usuario tendra la habilidad de habilitar DetallePresupuesto",
            "importancia": "alta",
            "value": true
          },
          "deshabilitar_detallepresupuestos": {
            "label": "Deshabilitar DetallePresupuesto",
            "tooltip": "El usuario tendra la habilidad de deshabilitar DetallePresupuesto",
            "importancia": "alta",
            "value": true
          }
        },
        "presupuestos": {
          "visualizar_menu_presupuestos": {
            "label": "Ver Menu Presupuesto",
            "tooltip": "El usuario tendra la habilidad de visualizar el menu de Presupuesto.",
            "importancia": "alta",
            "value": false
          },
          "crear_presupuestos": {
            "label": "Crear Presupuesto",
            "tooltip": "El usuario tendra la habilidad de crear Presupuesto ",
            "importancia": "alta",
            "value": true
          },
          "modificar_presupuestos": {
            "label": "Modificar Presupuesto",
            "tooltip": "El usuario tendra la habilidad de modificar Presupuesto",
            "importancia": "alta",
            "value": true
          },
          "eliminar_presupuestos": {
            "label": "Eliminar Presupuesto",
            "tooltip": "El usuario tendra la habilidad de eliminar Presupuesto.",
            "importancia": "alta",
            "value": false
          },
          "habilitar_presupuestos": {
            "label": "Habilitar Presupuesto",
            "tooltip": "El usuario tendra la habilidad de habilitar Presupuesto",
            "importancia": "alta",
            "value": true
          },
          "deshabilitar_presupuestos": {
            "label": "Deshabilitar Presupuesto",
            "tooltip": "El usuario tendra la habilidad de deshabilitar Presupuesto",
            "importancia": "alta",
            "value": true
          }
        },
        "detalleimpuestos": {
          "visualizar_menu_detalleimpuestos": {
            "label": "Ver Menu DetalleImpuesto",
            "tooltip": "El usuario tendra la habilidad de visualizar el menu de DetalleImpuesto.",
            "importancia": "alta",
            "value": false
          },
          "crear_detalleimpuestos": {
            "label": "Crear DetalleImpuesto",
            "tooltip": "El usuario tendra la habilidad de crear DetalleImpuesto ",
            "importancia": "alta",
            "value": true
          },
          "modificar_detalleimpuestos": {
            "label": "Modificar DetalleImpuesto",
            "tooltip": "El usuario tendra la habilidad de modificar DetalleImpuesto",
            "importancia": "alta",
            "value": true
          },
          "eliminar_detalleimpuestos": {
            "label": "Eliminar DetalleImpuesto",
            "tooltip": "El usuario tendra la habilidad de eliminar DetalleImpuesto.",
            "importancia": "alta",
            "value": false
          },
          "habilitar_detalleimpuestos": {
            "label": "Habilitar DetalleImpuesto",
            "tooltip": "El usuario tendra la habilidad de habilitar DetalleImpuesto",
            "importancia": "alta",
            "value": true
          },
          "deshabilitar_detalleimpuestos": {
            "label": "Deshabilitar DetalleImpuesto",
            "tooltip": "El usuario tendra la habilidad de deshabilitar DetalleImpuesto",
            "importancia": "alta",
            "value": true
          }
        },
        "detallemovimientos": {
          "visualizar_menu_detallemovimientos": {
            "label": "Ver Menu DetalleMovimiento",
            "tooltip": "El usuario tendra la habilidad de visualizar el menu de DetalleMovimiento.",
            "importancia": "alta",
            "value": false
          },
          "crear_detallemovimientos": {
            "label": "Crear DetalleMovimiento",
            "tooltip": "El usuario tendra la habilidad de crear DetalleMovimiento ",
            "importancia": "alta",
            "value": true
          },
          "modificar_detallemovimientos": {
            "label": "Modificar DetalleMovimiento",
            "tooltip": "El usuario tendra la habilidad de modificar DetalleMovimiento",
            "importancia": "alta",
            "value": true
          },
          "eliminar_detallemovimientos": {
            "label": "Eliminar DetalleMovimiento",
            "tooltip": "El usuario tendra la habilidad de eliminar DetalleMovimiento.",
            "importancia": "alta",
            "value": false
          },
          "habilitar_detallemovimientos": {
            "label": "Habilitar DetalleMovimiento",
            "tooltip": "El usuario tendra la habilidad de habilitar DetalleMovimiento",
            "importancia": "alta",
            "value": true
          },
          "deshabilitar_detallemovimientos": {
            "label": "Deshabilitar DetalleMovimiento",
            "tooltip": "El usuario tendra la habilidad de deshabilitar DetalleMovimiento",
            "importancia": "alta",
            "value": true
          }
        },
        "movimientos": {
          "visualizar_menu_movimientos": {
            "label": "Ver Menu Movimiento",
            "tooltip": "El usuario tendra la habilidad de visualizar el menu de Movimiento.",
            "importancia": "alta",
            "value": false
          },
          "crear_movimientos": {
            "label": "Crear Movimiento",
            "tooltip": "El usuario tendra la habilidad de crear Movimiento ",
            "importancia": "alta",
            "value": true
          },
          "modificar_movimientos": {
            "label": "Modificar Movimiento",
            "tooltip": "El usuario tendra la habilidad de modificar Movimiento",
            "importancia": "alta",
            "value": true
          },
          "eliminar_movimientos": {
            "label": "Eliminar Movimiento",
            "tooltip": "El usuario tendra la habilidad de eliminar Movimiento.",
            "importancia": "alta",
            "value": false
          },
          "habilitar_movimientos": {
            "label": "Habilitar Movimiento",
            "tooltip": "El usuario tendra la habilidad de habilitar Movimiento",
            "importancia": "alta",
            "value": true
          },
          "deshabilitar_movimientos": {
            "label": "Deshabilitar Movimiento",
            "tooltip": "El usuario tendra la habilidad de deshabilitar Movimiento",
            "importancia": "alta",
            "value": true
          }
        },
        "detalleventas": {
          "visualizar_menu_detalleventas": {
            "label": "Ver Menu DetalleVenta",
            "tooltip": "El usuario tendra la habilidad de visualizar el menu de DetalleVenta.",
            "importancia": "alta",
            "value": false
          },
          "crear_detalleventas": {
            "label": "Crear DetalleVenta",
            "tooltip": "El usuario tendra la habilidad de crear DetalleVenta ",
            "importancia": "alta",
            "value": true
          },
          "modificar_detalleventas": {
            "label": "Modificar DetalleVenta",
            "tooltip": "El usuario tendra la habilidad de modificar DetalleVenta",
            "importancia": "alta",
            "value": true
          },
          "eliminar_detalleventas": {
            "label": "Eliminar DetalleVenta",
            "tooltip": "El usuario tendra la habilidad de eliminar DetalleVenta.",
            "importancia": "alta",
            "value": false
          },
          "habilitar_detalleventas": {
            "label": "Habilitar DetalleVenta",
            "tooltip": "El usuario tendra la habilidad de habilitar DetalleVenta",
            "importancia": "alta",
            "value": true
          },
          "deshabilitar_detalleventas": {
            "label": "Deshabilitar DetalleVenta",
            "tooltip": "El usuario tendra la habilidad de deshabilitar DetalleVenta",
            "importancia": "alta",
            "value": true
          }
        },
        "ventas": {
          "visualizar_menu_ventas": {
            "label": "Ver Menu Venta",
            "tooltip": "El usuario tendra la habilidad de visualizar el menu de Venta.",
            "importancia": "alta",
            "value": false
          },
          "crear_ventas": {
            "label": "Crear Venta",
            "tooltip": "El usuario tendra la habilidad de crear Venta ",
            "importancia": "alta",
            "value": true
          },
          "modificar_ventas": {
            "label": "Modificar Venta",
            "tooltip": "El usuario tendra la habilidad de modificar Venta",
            "importancia": "alta",
            "value": true
          },
          "eliminar_ventas": {
            "label": "Eliminar Venta",
            "tooltip": "El usuario tendra la habilidad de eliminar Venta.",
            "importancia": "alta",
            "value": false
          },
          "habilitar_ventas": {
            "label": "Habilitar Venta",
            "tooltip": "El usuario tendra la habilidad de habilitar Venta",
            "importancia": "alta",
            "value": true
          },
          "deshabilitar_ventas": {
            "label": "Deshabilitar Venta",
            "tooltip": "El usuario tendra la habilidad de deshabilitar Venta",
            "importancia": "alta",
            "value": true
          }
        },
        "detallecompras": {
          "visualizar_menu_detallecompras": {
            "label": "Ver Menu DetalleCompra",
            "tooltip": "El usuario tendra la habilidad de visualizar el menu de DetalleCompra.",
            "importancia": "alta",
            "value": false
          },
          "crear_detallecompras": {
            "label": "Crear DetalleCompra",
            "tooltip": "El usuario tendra la habilidad de crear DetalleCompra ",
            "importancia": "alta",
            "value": true
          },
          "modificar_detallecompras": {
            "label": "Modificar DetalleCompra",
            "tooltip": "El usuario tendra la habilidad de modificar DetalleCompra",
            "importancia": "alta",
            "value": true
          },
          "eliminar_detallecompras": {
            "label": "Eliminar DetalleCompra",
            "tooltip": "El usuario tendra la habilidad de eliminar DetalleCompra.",
            "importancia": "alta",
            "value": false
          },
          "habilitar_detallecompras": {
            "label": "Habilitar DetalleCompra",
            "tooltip": "El usuario tendra la habilidad de habilitar DetalleCompra",
            "importancia": "alta",
            "value": true
          },
          "deshabilitar_detallecompras": {
            "label": "Deshabilitar DetalleCompra",
            "tooltip": "El usuario tendra la habilidad de deshabilitar DetalleCompra",
            "importancia": "alta",
            "value": true
          }
        },
        "compras": {
          "visualizar_menu_compras": {
            "label": "Ver Menu Compra",
            "tooltip": "El usuario tendra la habilidad de visualizar el menu de Compra.",
            "importancia": "alta",
            "value": false
          },
          "crear_compras": {
            "label": "Crear Compra",
            "tooltip": "El usuario tendra la habilidad de crear Compra ",
            "importancia": "alta",
            "value": true
          },
          "modificar_compras": {
            "label": "Modificar Compra",
            "tooltip": "El usuario tendra la habilidad de modificar Compra",
            "importancia": "alta",
            "value": true
          },
          "eliminar_compras": {
            "label": "Eliminar Compra",
            "tooltip": "El usuario tendra la habilidad de eliminar Compra.",
            "importancia": "alta",
            "value": false
          },
          "habilitar_compras": {
            "label": "Habilitar Compra",
            "tooltip": "El usuario tendra la habilidad de habilitar Compra",
            "importancia": "alta",
            "value": true
          },
          "deshabilitar_compras": {
            "label": "Deshabilitar Compra",
            "tooltip": "El usuario tendra la habilidad de deshabilitar Compra",
            "importancia": "alta",
            "value": true
          }
        },
        "egresos": {
          "visualizar_menu_egresos": {
            "label": "Ver Menu Compra",
            "tooltip": "El usuario tendra la habilidad de visualizar el menu de Compra.",
            "importancia": "alta",
            "value": false
          },
          "crear_egresos": {
            "label": "Crear Compra",
            "tooltip": "El usuario tendra la habilidad de crear Compra ",
            "importancia": "alta",
            "value": true
          },
          "modificar_egresos": {
            "label": "Modificar Compra",
            "tooltip": "El usuario tendra la habilidad de modificar Compra",
            "importancia": "alta",
            "value": true
          },
          "eliminar_egresos": {
            "label": "Eliminar Compra",
            "tooltip": "El usuario tendra la habilidad de eliminar Compra.",
            "importancia": "alta",
            "value": false
          },
          "habilitar_egresos": {
            "label": "Habilitar Compra",
            "tooltip": "El usuario tendra la habilidad de habilitar Compra",
            "importancia": "alta",
            "value": true
          },
          "deshabilitar_egresos": {
            "label": "Deshabilitar Compra",
            "tooltip": "El usuario tendra la habilidad de deshabilitar Compra",
            "importancia": "alta",
            "value": true
          }
        },
        "unidadmedidas": {
          "visualizar_menu_unidadmedidas": {
            "label": "Ver Menu UnidadMedidas",
            "tooltip": "El usuario tendra la habilidad de visualizar el menu de UnidadMedidas.",
            "importancia": "alta",
            "value": false
          },
          "crear_unidadmedidas": {
            "label": "Crear UnidadMedidas",
            "tooltip": "El usuario tendra la habilidad de crear UnidadMedidas ",
            "importancia": "alta",
            "value": true
          },
          "modificar_unidadmedidas": {
            "label": "Modificar UnidadMedidas",
            "tooltip": "El usuario tendra la habilidad de modificar UnidadMedidas",
            "importancia": "alta",
            "value": true
          },
          "eliminar_unidadmedidas": {
            "label": "Eliminar UnidadMedidas",
            "tooltip": "El usuario tendra la habilidad de eliminar UnidadMedidas.",
            "importancia": "alta",
            "value": false
          },
          "habilitar_unidadmedidas": {
            "label": "Habilitar UnidadMedidas",
            "tooltip": "El usuario tendra la habilidad de habilitar UnidadMedidas",
            "importancia": "alta",
            "value": true
          },
          "deshabilitar_unidadmedidas": {
            "label": "Deshabilitar UnidadMedidas",
            "tooltip": "El usuario tendra la habilidad de deshabilitar UnidadMedidas",
            "importancia": "alta",
            "value": true
          }
        },
        "tipoubicaciones": {
          "visualizar_menu_tipoubicaciones": {
            "label": "Ver Menu TipoUbicacion",
            "tooltip": "El usuario tendra la habilidad de visualizar el menu de TipoUbicacion.",
            "importancia": "alta",
            "value": false
          },
          "crear_tipoubicaciones": {
            "label": "Crear TipoUbicacion",
            "tooltip": "El usuario tendra la habilidad de crear TipoUbicacion ",
            "importancia": "alta",
            "value": true
          },
          "modificar_tipoubicaciones": {
            "label": "Modificar TipoUbicacion",
            "tooltip": "El usuario tendra la habilidad de modificar TipoUbicacion",
            "importancia": "alta",
            "value": true
          },
          "eliminar_tipoubicaciones": {
            "label": "Eliminar TipoUbicacion",
            "tooltip": "El usuario tendra la habilidad de eliminar TipoUbicacion.",
            "importancia": "alta",
            "value": false
          },
          "habilitar_tipoubicaciones": {
            "label": "Habilitar TipoUbicacion",
            "tooltip": "El usuario tendra la habilidad de habilitar TipoUbicacion",
            "importancia": "alta",
            "value": true
          },
          "deshabilitar_tipoubicaciones": {
            "label": "Deshabilitar TipoUbicacion",
            "tooltip": "El usuario tendra la habilidad de deshabilitar TipoUbicacion",
            "importancia": "alta",
            "value": true
          }
        },
        "tipoproductos": {
          "visualizar_menu_tipoproductos": {
            "label": "Ver Menu TipoProducto",
            "tooltip": "El usuario tendra la habilidad de visualizar el menu de TipoProducto.",
            "importancia": "alta",
            "value": false
          },
          "crear_tipoproductos": {
            "label": "Crear TipoProducto",
            "tooltip": "El usuario tendra la habilidad de crear TipoProducto ",
            "importancia": "alta",
            "value": true
          },
          "modificar_tipoproductos": {
            "label": "Modificar TipoProducto",
            "tooltip": "El usuario tendra la habilidad de modificar TipoProducto",
            "importancia": "alta",
            "value": true
          },
          "eliminar_tipoproductos": {
            "label": "Eliminar TipoProducto",
            "tooltip": "El usuario tendra la habilidad de eliminar TipoProducto.",
            "importancia": "alta",
            "value": false
          },
          "habilitar_tipoproductos": {
            "label": "Habilitar TipoProducto",
            "tooltip": "El usuario tendra la habilidad de habilitar TipoProducto",
            "importancia": "alta",
            "value": true
          },
          "deshabilitar_tipoproductos": {
            "label": "Deshabilitar TipoProducto",
            "tooltip": "El usuario tendra la habilidad de deshabilitar TipoProducto",
            "importancia": "alta",
            "value": true
          }
        },
        "tipoivas": {
          "visualizar_menu_tipoivas": {
            "label": "Ver Menu TipoIva",
            "tooltip": "El usuario tendra la habilidad de visualizar el menu de TipoIva.",
            "importancia": "alta",
            "value": false
          },
          "crear_tipoivas": {
            "label": "Crear TipoIva",
            "tooltip": "El usuario tendra la habilidad de crear TipoIva ",
            "importancia": "alta",
            "value": true
          },
          "modificar_tipoivas": {
            "label": "Modificar TipoIva",
            "tooltip": "El usuario tendra la habilidad de modificar TipoIva",
            "importancia": "alta",
            "value": true
          },
          "eliminar_tipoivas": {
            "label": "Eliminar TipoIva",
            "tooltip": "El usuario tendra la habilidad de eliminar TipoIva.",
            "importancia": "alta",
            "value": false
          },
          "habilitar_tipoivas": {
            "label": "Habilitar TipoIva",
            "tooltip": "El usuario tendra la habilidad de habilitar TipoIva",
            "importancia": "alta",
            "value": true
          },
          "deshabilitar_tipoivas": {
            "label": "Deshabilitar TipoIva",
            "tooltip": "El usuario tendra la habilidad de deshabilitar TipoIva",
            "importancia": "alta",
            "value": true
          }
        },
        "tipoegresos": {
          "visualizar_menu_tipoegresos": {
            "label": "Ver Menu TipoEgreso",
            "tooltip": "El usuario tendra la habilidad de visualizar el menu de TipoEgreso.",
            "importancia": "alta",
            "value": false
          },
          "crear_tipoegresos": {
            "label": "Crear TipoEgreso",
            "tooltip": "El usuario tendra la habilidad de crear TipoEgreso ",
            "importancia": "alta",
            "value": true
          },
          "modificar_tipoegresos": {
            "label": "Modificar TipoEgreso",
            "tooltip": "El usuario tendra la habilidad de modificar TipoEgreso",
            "importancia": "alta",
            "value": true
          },
          "eliminar_tipoegresos": {
            "label": "Eliminar TipoEgreso",
            "tooltip": "El usuario tendra la habilidad de eliminar TipoEgreso.",
            "importancia": "alta",
            "value": false
          },
          "habilitar_tipoegresos": {
            "label": "Habilitar TipoEgreso",
            "tooltip": "El usuario tendra la habilidad de habilitar TipoEgreso",
            "importancia": "alta",
            "value": true
          },
          "deshabilitar_tipoegresos": {
            "label": "Deshabilitar TipoEgreso",
            "tooltip": "El usuario tendra la habilidad de deshabilitar TipoEgreso",
            "importancia": "alta",
            "value": true
          }
        },
        "tipoimpuestos": {
          "visualizar_menu_tipoimpuestos": {
            "label": "Ver Menu TipoImpuesto",
            "tooltip": "El usuario tendra la habilidad de visualizar el menu de TipoImpuesto.",
            "importancia": "alta",
            "value": false
          },
          "crear_tipoimpuestos": {
            "label": "Crear TipoImpuesto",
            "tooltip": "El usuario tendra la habilidad de crear TipoImpuesto ",
            "importancia": "alta",
            "value": true
          },
          "modificar_tipoimpuestos": {
            "label": "Modificar TipoImpuesto",
            "tooltip": "El usuario tendra la habilidad de modificar TipoImpuesto",
            "importancia": "alta",
            "value": true
          },
          "eliminar_tipoimpuestos": {
            "label": "Eliminar TipoImpuesto",
            "tooltip": "El usuario tendra la habilidad de eliminar TipoImpuesto.",
            "importancia": "alta",
            "value": false
          },
          "habilitar_tipoimpuestos": {
            "label": "Habilitar TipoImpuesto",
            "tooltip": "El usuario tendra la habilidad de habilitar TipoImpuesto",
            "importancia": "alta",
            "value": true
          },
          "deshabilitar_tipoimpuestos": {
            "label": "Deshabilitar TipoImpuesto",
            "tooltip": "El usuario tendra la habilidad de deshabilitar TipoImpuesto",
            "importancia": "alta",
            "value": true
          }
        },
        "tipocomprobantes": {
          "visualizar_menu_tipocomprobantes": {
            "label": "Ver Menu TipoComprobante",
            "tooltip": "El usuario tendra la habilidad de visualizar el menu de TipoComprobante.",
            "importancia": "alta",
            "value": false
          },
          "crear_tipocomprobantes": {
            "label": "Crear TipoComprobante",
            "tooltip": "El usuario tendra la habilidad de crear TipoComprobante ",
            "importancia": "alta",
            "value": true
          },
          "modificar_tipocomprobantes": {
            "label": "Modificar TipoComprobante",
            "tooltip": "El usuario tendra la habilidad de modificar TipoComprobante",
            "importancia": "alta",
            "value": true
          },
          "eliminar_tipocomprobantes": {
            "label": "Eliminar TipoComprobante",
            "tooltip": "El usuario tendra la habilidad de eliminar TipoComprobante.",
            "importancia": "alta",
            "value": false
          },
          "habilitar_tipocomprobantes": {
            "label": "Habilitar TipoComprobante",
            "tooltip": "El usuario tendra la habilidad de habilitar TipoComprobante",
            "importancia": "alta",
            "value": true
          },
          "deshabilitar_tipocomprobantes": {
            "label": "Deshabilitar TipoComprobante",
            "tooltip": "El usuario tendra la habilidad de deshabilitar TipoComprobante",
            "importancia": "alta",
            "value": true
          }
        },
        "categoriaivas": {
          "visualizar_menu_categoriaivas": {
            "label": "Ver Menu CategoriaIva",
            "tooltip": "El usuario tendra la habilidad de visualizar el menu de CategoriaIva.",
            "importancia": "alta",
            "value": false
          },
          "crear_categoriaivas": {
            "label": "Crear CategoriaIva",
            "tooltip": "El usuario tendra la habilidad de crear CategoriaIva ",
            "importancia": "alta",
            "value": true
          },
          "modificar_categoriaivas": {
            "label": "Modificar CategoriaIva",
            "tooltip": "El usuario tendra la habilidad de modificar CategoriaIva",
            "importancia": "alta",
            "value": true
          },
          "eliminar_categoriaivas": {
            "label": "Eliminar CategoriaIva",
            "tooltip": "El usuario tendra la habilidad de eliminar CategoriaIva.",
            "importancia": "alta",
            "value": false
          },
          "habilitar_categoriaivas": {
            "label": "Habilitar CategoriaIva",
            "tooltip": "El usuario tendra la habilidad de habilitar CategoriaIva",
            "importancia": "alta",
            "value": true
          },
          "deshabilitar_categoriaivas": {
            "label": "Deshabilitar CategoriaIva",
            "tooltip": "El usuario tendra la habilidad de deshabilitar CategoriaIva",
            "importancia": "alta",
            "value": true
          }
        },
        "localidades": {
          "visualizar_menu_localidades": {
            "label": "Ver Menu Localidad",
            "tooltip": "El usuario tendra la habilidad de visualizar el menu de Localidad.",
            "importancia": "alta",
            "value": false
          },
          "crear_localidades": {
            "label": "Crear Localidad",
            "tooltip": "El usuario tendra la habilidad de crear Localidad ",
            "importancia": "alta",
            "value": true
          },
          "modificar_localidades": {
            "label": "Modificar Localidad",
            "tooltip": "El usuario tendra la habilidad de modificar Localidad",
            "importancia": "alta",
            "value": true
          },
          "eliminar_localidades": {
            "label": "Eliminar Localidad",
            "tooltip": "El usuario tendra la habilidad de eliminar Localidad.",
            "importancia": "alta",
            "value": false
          },
          "habilitar_localidades": {
            "label": "Habilitar Localidad",
            "tooltip": "El usuario tendra la habilidad de habilitar Localidad",
            "importancia": "alta",
            "value": true
          },
          "deshabilitar_localidades": {
            "label": "Deshabilitar Localidad",
            "tooltip": "El usuario tendra la habilidad de deshabilitar Localidad",
            "importancia": "alta",
            "value": true
          }
        },
        "provincias": {
          "visualizar_menu_provincias": {
            "label": "Ver Menu Provincia",
            "tooltip": "El usuario tendra la habilidad de visualizar el menu de Provincia.",
            "importancia": "alta",
            "value": false
          },
          "crear_provincias": {
            "label": "Crear Provincia",
            "tooltip": "El usuario tendra la habilidad de crear Provincia ",
            "importancia": "alta",
            "value": true
          },
          "modificar_provincias": {
            "label": "Modificar Provincia",
            "tooltip": "El usuario tendra la habilidad de modificar Provincia",
            "importancia": "alta",
            "value": true
          },
          "eliminar_provincias": {
            "label": "Eliminar Provincia",
            "tooltip": "El usuario tendra la habilidad de eliminar Provincia.",
            "importancia": "alta",
            "value": false
          },
          "habilitar_provincias": {
            "label": "Habilitar Provincia",
            "tooltip": "El usuario tendra la habilidad de habilitar Provincia",
            "importancia": "alta",
            "value": true
          },
          "deshabilitar_provincias": {
            "label": "Deshabilitar Provincia",
            "tooltip": "El usuario tendra la habilidad de deshabilitar Provincia",
            "importancia": "alta",
            "value": true
          }
        },
        "paises": {
          "visualizar_menu_paises": {
            "label": "Visualizar Menu de paises",
            "tooltip": "El usuario tendra la habilidad visualizar el menu de paises.",
            "importancia": "alta",
            "value": false
          },
          "crear_paises": {
            "label": "Crear Pais",
            "tooltip": "El usuario tendra la habilidad de crear paises ",
            "importancia": "alta",
            "value": false
          },
          "modificar_paises": {
            "label": "Modificar Pais",
            "tooltip": "El usuario tendra la habilidad de modificar paises",
            "importancia": "alta",
            "value": false
          },
          "eliminar_paises": {
            "label": "Eliminar Pais",
            "tooltip": "El usuario tendra la habilidad de eliminar paises.",
            "importancia": "alta",
            "value": false
          }
        },
        "usuarios": {
          "visualizar_menu_usuarios": {
            "label": "Visualizar Menu de Usuarios",
            "tooltip": "El usuario tendra la habilidad visualizar el menu de usuarios en el sistema.",
            "importancia": "alta",
            "value": false
          },
          "crear_usuarios": {
            "label": "Crear Usuarios",
            "tooltip": "El usuario tendra la habilidad de crear otros usuarios ",
            "importancia": "alta",
            "value": false
          },
          "editar_permisos_usuarios": {
            "label": "Editar Permisos de Usuarios",
            "tooltip": "El usuario tendra la habilidad de modificar los permisos de otros usuarios",
            "importancia": "alta",
            "value": false
          },
          "eliminar_usuarios": {
            "label": "Eliminar Usuarios",
            "tooltip": "El usuario tendra la habilidad de eliminar usuarios del sistema.",
            "importancia": "alta",
            "value": false
          }
        },
        "configuracion": {
          "visualizar_menu_parametros": {
            "label": "Visualizar Menu Parametros",
            "tooltip": "El usuario tendra la habilidad de agregar configuraciones globales al sistema",
            "importancia": "alta",
            "value": false
          },
          "crear_parametro": {
            "label": "Agregar Parametros",
            "tooltip": "El usuario tendra la habilidad de agregar parametros globales al sistema",
            "importancia": "alta",
            "value": false
          },
          "modificar_parametro": {
            "label": "Modificar parametros",
            "tooltip": "El usuario tendra la habilidad de modificar parametros globales al sistema",
            "importancia": "alta",
            "value": false
          },
          "eliminar_parametro": {
            "label": "Eliminar parametros",
            "tooltip": "El usuario tendra la habilidad de eliminar parametros globales al sistema",
            "importancia": "alta",
            "value": false
          }
        },
        "dashboard": {
          "visualizar_menu_dashboard": {
            "label": "Visualizar Menu Dashboard",
            "tooltip": "El usuario tendra la habilidad visualizar el menu de dasboard en el sistema.",
            "importancia": "baja",
            "value": false
          }
        }
      }
    ',
    'role_super_administrador' => '
      {
        "usuarios": {
          "visualizar_menu_usuarios": {
            "label": "Visualizar Menu de Usuarios",
            "tooltip": "El usuario tendra la habilidad visualizar el menu de usuarios en el sistema.",
            "importancia": "alta",
            "value": true
          },
          "crear_usuarios": {
            "label": "Crear Usuarios",
            "tooltip": "El usuario tendra la habilidad de crear otros usuarios ",
            "importancia": "alta",
            "value": true
          },
          "editar_permisos_usuarios": {
            "label": "Editar Permisos de Usuarios",
            "tooltip": "El usuario tendra la habilidad de modificar los permisos de otros usuarios",
            "importancia": "alta",
            "value": true
          },
          "eliminar_usuarios": {
            "label": "Eliminar Usuarios",
            "tooltip": "El usuario tendra la habilidad de eliminar usuarios del sistema.",
            "importancia": "alta",
            "value": true
          }
        },
        "configuracion": {
          "visualizar_menu_parametros": {
            "label": "Visualizar Menu Parametros",
            "tooltip": "El usuario tendra la habilidad de agregar configuraciones globales al sistema",
            "importancia": "alta",
            "value": true
          },
          "crear_parametro": {
            "label": "Agregar Parametros",
            "tooltip": "El usuario tendra la habilidad de agregar parametros globales al sistema",
            "importancia": "alta",
            "value": true
          },
          "modificar_parametro": {
            "label": "Modificar parametros",
            "tooltip": "El usuario tendra la habilidad de modificar parametros globales al sistema",
            "importancia": "alta",
            "value": true
          },
          "eliminar_parametro": {
            "label": "Eliminar parametros",
            "tooltip": "El usuario tendra la habilidad de eliminar parametros globales al sistema",
            "importancia": "alta",
            "value": true
          }
        },
        "dashboard": {
          "visualizar_menu_dashboard": {
            "label": "Visualizar Menu Dashboard",
            "tooltip": "El usuario tendra la habilidad visualizar el menu de dasboard en el sistema.",
            "importancia": "baja",
            "value": true
          }
        }
      }
    ',
    'role_administrador' => '
      {
        "usuarios": {
          "visualizar_menu_usuarios": {
            "label": "Visualizar Menu de Usuarios",
            "tooltip": "El usuario tendra la habilidad visualizar el menu de usuarios en el sistema.",
            "importancia": "alta",
            "value": true
          },
          "crear_usuarios": {
            "label": "Crear Usuarios",
            "tooltip": "El usuario tendra la habilidad de crear otros usuarios ",
            "importancia": "alta",
            "value": true
          },
          "editar_permisos_usuarios": {
            "label": "Editar Permisos de Usuarios",
            "tooltip": "El usuario tendra la habilidad de modificar los permisos de otros usuarios",
            "importancia": "alta",
            "value": true
          },
          "eliminar_usuarios": {
            "label": "Eliminar Usuarios",
            "tooltip": "El usuario tendra la habilidad de eliminar usuarios del sistema.",
            "importancia": "alta",
            "value": true
          }
        },
        "configuracion": {
          "visualizar_menu_parametros": {
            "label": "Visualizar Menu Parametros",
            "tooltip": "El usuario tendra la habilidad de agregar configuraciones globales al sistema",
            "importancia": "alta",
            "value": false
          },
          "crear_parametro": {
            "label": "Agregar Parametros",
            "tooltip": "El usuario tendra la habilidad de agregar parametros globales al sistema",
            "importancia": "alta",
            "value": false
          },
          "modificar_parametro": {
            "label": "Modificar parametros",
            "tooltip": "El usuario tendra la habilidad de modificar parametros globales al sistema",
            "importancia": "alta",
            "value": false
          },
          "eliminar_parametro": {
            "label": "Eliminar parametros",
            "tooltip": "El usuario tendra la habilidad de eliminar parametros globales al sistema",
            "importancia": "alta",
            "value": false
          }
        },
        "dashboard": {
          "visualizar_menu_dashboard": {
            "label": "Visualizar Menu Dashboard",
            "tooltip": "El usuario tendra la habilidad visualizar el menu de dasboard en el sistema.",
            "importancia": "baja",
            "value": true
          }
        }
      }
    ',
    'role_usuario' => '
      {
        "usuarios": {
          "visualizar_menu_usuarios": {
            "label": "Visualizar Menu de Usuarios",
            "tooltip": "El usuario tendra la habilidad visualizar el menu de usuarios en el sistema.",
            "importancia": "alta",
            "value": true
          },
          "crear_usuarios": {
            "label": "Crear Usuarios",
            "tooltip": "El usuario tendra la habilidad de crear otros usuarios ",
            "importancia": "alta",
            "value": true
          },
          "editar_permisos_usuarios": {
            "label": "Editar Permisos de Usuarios",
            "tooltip": "El usuario tendra la habilidad de modificar los permisos de otros usuarios",
            "importancia": "alta",
            "value": true
          },
          "eliminar_usuarios": {
            "label": "Eliminar Usuarios",
            "tooltip": "El usuario tendra la habilidad de eliminar usuarios del sistema.",
            "importancia": "alta",
            "value": true
          }
        },
        "configuracion": {
          "visualizar_menu_parametros": {
            "label": "Visualizar Menu Parametros",
            "tooltip": "El usuario tendra la habilidad de agregar configuraciones globales al sistema",
            "importancia": "alta",
            "value": false
          },
          "crear_parametro": {
            "label": "Agregar Parametros",
            "tooltip": "El usuario tendra la habilidad de agregar parametros globales al sistema",
            "importancia": "alta",
            "value": false
          },
          "modificar_parametro": {
            "label": "Modificar parametros",
            "tooltip": "El usuario tendra la habilidad de modificar parametros globales al sistema",
            "importancia": "alta",
            "value": false
          },
          "eliminar_parametro": {
            "label": "Eliminar parametros",
            "tooltip": "El usuario tendra la habilidad de eliminar parametros globales al sistema",
            "importancia": "alta",
            "value": false
          },
          "crear_parametro": {
            "label": "Agregar Parametros",
            "tooltip": "El usuario tendra la habilidad de agregar parametros globales al sistema",
            "importancia": "alta",
            "value": false
          },
          "modificar_parametro": {
            "label": "Modificar parametros",
            "tooltip": "El usuario tendra la habilidad de modificar parametros globales al sistema",
            "importancia": "alta",
            "value": false
          },
          "eliminar_parametro": {
            "label": "Eliminar parametros",
            "tooltip": "El usuario tendra la habilidad de eliminar parametros globales al sistema",
            "importancia": "alta",
            "value": false
          }
        },
        "dashboard": {
          "visualizar_menu_dashboard": {
            "label": "Visualizar Menu Dashboard",
            "tooltip": "El usuario tendra la habilidad visualizar el menu de dasboard en el sistema.",
            "importancia": "baja",
            "value": true
          }
        }
      }
    ',
  ],
];
