# Lumen PHP Framework - Documentation API


Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Official Documentation

Documentation for the framework can be found on the [Lumen website](http://lumen.laravel.com/docs).

## API

### Login
```
Method:POST
Data :  {
 name : x
 password : x
}

> /auth/login
```
### Logout
```
Method:GET
Data :  {}

> /auth/logout
```

### Users
```
Method:GET
Data :  {}

> /api/users/{id}
```

### Employees
```
Method:GET
Data :  {}
Description: retorna toda la información de todos los empleados registrados
> /api/employees
```

```
Method:POST
Data :  {} // todos los campos con el mismo nombre de la base de datos
Description: retorna guarda un empleado

> /api/employees
```

```
Method:GET
Data :  {}
Description: retorna toda la información de un empleado por medio de un id del empleado

> /api/employees/{id}
```

### Attendances

```
Method:POST
Data :  {} // todos los campos con el mismo nombre de la base de datos
Description: almacena un checkout o checkint

> /api/attendances
```

```
Method:GET
Data :  {}
Description: retorna todos los checkout de un empleado por medio del id del empleado

> /api/employees/{id}/attendances
```

### Shops
 
```
Method:GET
Data :  {}
Description: retorna una la información de todas las tiendas

> /api/shops
```

```
Method:GET
Data :  {}
Description: retorna una la información de una tienda por medio del id

> /api/shops/{id}
```

### Products

```
Method:GET
Data :  {}
Description: retorna toda la información de todos los productos registrados

> /api/products
```

```
Method:GET
Data :  {}
Description: retorna toda la inforamción de todos los productos de una tienda atravez de su id

> /api/shops/{shops}/products
```

```
Method:PUT
Data :  {} // los datos de la base de datos mismo nombre de las tablas
Description: modifica la data de un producto a travez del id de una tienda.

> /api/shops/{shops}/products/{product}
```

## License

The Lumen framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
