

## Pasos para ver el proyecto:

1 Clonar el repositorio
   

     git clone git@github.com:YennerS21/tienda-laravel.git

2 Abrir la carpeta que se ha creado tienda-virtual

    cd tienda-virtual

Ahora puede ver el contenido de **tienda-virtual** en Visua Studio Code o en el editor que prefiera.

3 Instalar dependencias mediante composer y npm:
    Para instalar las dependencias de composer use:
        

> composer install

    Para instalar las dependencias de npm:

        

> npm install
> 
> 
> npm run dev

4 Configurar el archivo .env
    Al momento de clonar el repositorio se obtiene un archivo molde llamado **.env.example**    el cual se debe duplicar y renombrar como .env
    
   Modificar el nuevo archivo llamado .env:
    
    APP_NAME = "Tienda Virtual"
    APP_KEY  = ?
    Laravel nos genera un APP_KEY usando el comando 
    

> php artisan key:generate

5 Ejecutar el proyecto **tienda-virtual** con *php artisan*

> php artisan serve

6 Abrir el proyecto en el navegador
