# Proyecto de laravel - Api rest de productos

Este proyecto es implementado en php utilizando laravel como framework.

# Uso

## Obtener productos

    Método: GET
    Obtener todos los productos => /api/productos
    Obtener los primeros 5 productos => /api/productos?limit=5
    Obtener los productos desde el 5 hasta el 10 /api/productos?limit=5&offset=5

    Parámetros:

        limit => cantidad de recursos a obtener
        offset => factor de paginación. Un offset de 5 significa que ignorara los primeros 5 registros y empezará a contar a partir de ese punto. 

    Response:
    Status: 200 
    
    {
        "productos": [
            {
                "id": 3,
                "nombre": "Funko: Charmander",
                "precio": 120000.7,
                "descripcion": "Tu amigo charmander siempre contigo",
                "imagen": "https://asgardstores.com/797-large_default/funko-pop-charmander.jpg"
            },
            {
                "id": 4,
                "nombre": "Camisa: Avenger",
                "precio": 82000,
                "descripcion": "Camisa de avengers",
                "imagen": "https://wikirock.net/tienda/wp-content/uploads/2020/07/81Z8g77pyML._AC_UX522_.jpg"
            },
            .
            .
            .
        ]
    }

## Obtener un producto

    Método: GET
    Obtener un producto => /api/productos/id Ej. /api/productos/3

    Response:
    Status: 200 
    
    {
        "id": 3,
        "nombre": "Funko: Charmander",
        "precio": 120000.7,
        "descripcion": "Tu amigo charmander siempre contigo",
        "imagen": "https://asgardstores.com/797-large_default/funko-pop-charmander.jpg"
    }

    -----------------------------------------

    Método: GET
    Se asume que el recurso con el id "12321312" no existe => /api/productos/12321312
    Status: 404
    
    {
        "mensaje": "Not found"
    }

## Crear un producto

    Requerimientos:

        nombre => requerido.
        descripcion => requerido.
        precio => requerido.
        imagen => opcional.

    Método: POST
    Crear un producto => /api/productos

    body: 

    {
        "nombre":"bandera",
        "descripcion": "bandera negra con rosa",
        "precio": 22000,
        "imagen": "http://myimagen.com/imagen.jpg"
    }

    Response:
    Status: 201
    
    {
        "mensaje ": "El producto ha sido creado satisfactoriamente",
        "data": {
            "nombre": "bandera",
            "descripcion": "bandera negra con rosa",
            "precio": 22000,
            "imagen": http://myimagen.com/imagen.jpg,
            "id": 100
        }
    }

    -----------------------------------------

    body: 

    {
        "nombre":"bandera",
        "descripcion": "bandera negra con rosa",
        "imagen": "http://myimagen.com/imagen.jpg"
    }

    Response:
    Status: 400
    
    {
        "errors": {
            "precio": [
                "El precio es obligatorio"
            ]
        }
    }

    Nota: Al incumplir con los requerimientos de los campos, se crea una un objeto de errores con claves para cada campo que falle.

## Eliminar un producto

    Método: DELETE
    Obtener un producto => /api/productos/id Ej. /api/productos/3

    Response:
    Status: 204

    -----------------------------------------

    Método: DELETE
    Se asume que el recurso con el id "12321312" no existe => /api/productos/12321312
    Status: 404
    
    {
        "mensaje": "Not found"
    }

## Actualizar un producto

    Método: PATCH
    Crear un producto => /api/productos/id Ej. /api/productos/3

    Requerimientos:

        nombre => opcional.
        descripcion => opcional.
        precio => opcional.
        imagen => opcional.

    body: 

    {
        "precio": 26000.2,
    }

    Response:
    Status: 200
    
    {
        "mensaje ": "El producto ha sido actualizado satisfactoriamente",
        "data": {
            "id": 3,
            "nombre": "Funko: Charmander",
            "precio": 26000.2,
            "descripcion": "Tu amigo charmander siempre contigo",
            "imagen": "https://asgardstores.com/797-large_default/funko-pop-charmander.jpg"
        }
    }

    -----------------------------------------

    body: 

    {

    }

    Response:
    Status: 204
    
    -----------------------------------------

    Método: PATCH
    Se asume que el recurso con el id "12321312" no existe => /api/productos/12321312
    Status: 404
    
    {
        "mensaje": "Not found"
    }


# Autor

Alejandro Cárdenas
