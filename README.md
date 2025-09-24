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

