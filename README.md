# VisualUsuarioDelicias

## Descripción

VisualUsuarioDelicias es la interfaz web orientada al usuario final de la plataforma **Delicias**, diseñada para que clientes exploren el menú, realicen pedidos y descubran promociones de forma intuitiva y atractiva. Incluye páginas responsivas, interacción dinámica con JavaScript y lógica de servidor en PHP para consultas a la base de datos y gestión de sesiones.

---

## Tabla de contenidos

1. [Tecnologías](#tecnologías)  
2. [Estructura del proyecto](#estructura-del-proyecto)  
3. [Instalación](#instalación)  
4. [Uso](#uso)  
5. [Contribución](#contribución)  
6. [Autor](#autor)  
7. [Licencia](#licencia)  

---

## Tecnologías

- HTML5  
- CSS3 (Flexbox, Grid y media queries)  
- JavaScript (DOM, Fetch API)  
- PHP (gestión de sesiones, consultas MySQL)  
- MySQL (modelo de datos para productos, usuarios y pedidos)  

---

## Estructura del proyecto

```
VistaUsuarioDelicias-main/
│
├─ assets/             # Imágenes, fuentes y recursos estáticos
│
├─ css/
│  └─ styles.css       # Estilos globales y responsivos
│
├─ js/
│  └─ app.js           # Lógica de interacción y llamadas AJAX
│
├─ php/
│  ├─ config.php       # Parámetros de conexión a la base de datos
│  ├─ login.php        # Autenticación de usuarios
│  ├─ logout.php       # Cierre de sesión
│  ├─ productos.php    # Endpoints para obtener items del menú
│  └─ pedidos.php      # Gestión de creación y consulta de pedidos
│
└─ index.html          # Página principal de exploración de menú
```

---

## Instalación

1. Clona el repositorio en tu máquina local:  
   ```
   git clone https://github.com/axeljeanpiero10/VisualUsuarioDelicias.git
   ```
2. Instala un servidor local con soporte PHP y MySQL (por ejemplo, XAMPP o WAMP).  
3. Copia la carpeta `VistaUsuarioDelicias-main/` dentro del directorio público de tu servidor (p. ej., `htdocs/` o `www/`).  
4. Crea una base de datos en MySQL llamada `delicias_db` (o ajusta el nombre en `config.php`).  
5. Importa el esquema y datos iniciales (`delicias_db.sql`) usando phpMyAdmin o la consola MySQL.  
6. Abre `php/config.php` y define:  
   ```php
   $host     = 'localhost';
   $usuario  = 'root';
   $password = '';
   $bd       = 'delicias_db';
   ```
7. Inicia el servidor Apache y MySQL.  

---

## Uso

1. En tu navegador, navega a `http://localhost/VisualUsuarioDelicias-main/index.html`.  
2. Regístrate o inicia sesión para ver el menú completo.  
3. Explora categorías y añade productos al carrito.  
4. Finaliza tu pedido desde la sección “Mis Pedidos” y recibirás confirmación instantánea.  

---

## Contribución

¡Las contribuciones son bienvenidas! Para colaborar:

1. Haz un _fork_ del repositorio.  
2. Crea una rama con tu mejora:  
   ```
   git checkout -b feature/nombre-mejora
   ```
3. Realiza tus cambios y confirma con mensajes claros:  
   ```
   git commit -m "Añade sección de recomendaciones personalizadas"
   ```
4. Envía tu _pull request_ al branch `main`.  

---

## Licencia

Este proyecto está bajo la licencia MIT. Consulta el archivo [LICENSE](LICENSE) para más detalles.  

---

¿Te gustaría que agreguemos ejemplos de datos de prueba, documentación de la API de PHP o sugerencias para enriquecer la narrativa de la plataforma Delicias? ¡Dime y seguimos profundizando!
