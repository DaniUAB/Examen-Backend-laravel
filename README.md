# Crear/sobrescribir el README.md
echo "# Backend Laravel - Sistema de Empleados

API REST para gestión de empleados desarrollada en Laravel.

## 🚀 Instalación y Ejecución

### Requisitos
- PHP 8.1+
- Composer
- MySQL
- Laravel 10+

### Pasos de instalación

1. **Clonar el repositorio**
   \`\`\`bash
   git clone https://github.com/DaniUAB/Examen-Backend-laravel.git
   cd Examen-Backend-laravel
   \`\`\`

2. **Instalar dependencias**
   \`\`\`bash
   composer install
   \`\`\`

3. **Configurar base de datos**
   - Crear base de datos MySQL: \`examen_empleados\`
   - Copiar \`.env.example\` a \`.env\`
   - Configurar variables de BD en \`.env\`:
     \`\`\`
     DB_DATABASE=examen_empleados
     DB_USERNAME=root
     DB_PASSWORD=
     \`\`\`

4. **Ejecutar migraciones y seeders**
   \`\`\`bash
   php artisan migrate --seed
   \`\`\`

5. **Iniciar servidor**
   \`\`\`bash
   php artisan serve
   \`\`\`

## 📡 Endpoints de la API

### GET /api/empleados
- **Descripción:** Obtener lista de todos los empleados
- **Respuesta:** Array JSON con empleados

### POST /api/empleados  
- **Descripción:** Crear nuevo empleado
- **Body:**
   \`\`\`json
   {
     \"nombre\": \"string\",
     \"apellido\": \"string\", 
     \"correo\": \"string\",
     \"salario\": \"number\"
   }
   \`\`\`
- **Validaciones:** Todos los campos requeridos, correo único

## 🗃️ Estructura de Base de Datos

**Tabla: empleados**
- \`id\` (Primary Key, Auto Increment)
- \`nombre\` (string, required)
- \`apellido\` (string, required) 
- \`correo\` (string, unique, required)
- \`salario\` (decimal(10,2), required)
- \`timestamps\`

## 👨‍💻 Desarrollo

Proyecto desarrollado para examen parcial de Tecnologías de Internet." > README.md
