Clonar repositorio de Laravel subido en GitHub:

Debes instalar:
 - Composer
 - Git

- Debes ingresar a la carpeta en donde tines tus proyectos 
    - abrir una consola de comandos
    - git clone <urlRepositorio> ejem: git clone https://github.com/laravel/laravel.git
    - depues de que el proyecto se clone corretamete:
        - composer install
    - Al ingresar al proyecto encotraras un archivo llamado .env.example
        debes crear una copia de este y cambiarle el nombre a .env
    
    - Debes crear una APP_KEY con el siguiente comando
        - php artisan key:generate

    - Inicia el proyecto con:
        - php artisan serve
    

---- comandos para subir repositorio por primera ves---
git init
git remote add origin -link-   //para enlazar tu carpeta local con tu repo creado en github
git status   // ver el estatus de tus archivos locales
git add *  // agregar archivos
git commit -m "mensaje"  // Git mapee los cambios
git push origin master   // subir archivos
