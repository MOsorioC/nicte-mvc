# nicte-mvc
* Conexion a BD mediante Singleton
* Se deberá crear un host virtual para que pueda correr el sistema
    emjemplo
    <p><strong>Configurar httpd-vhosts.conf</strong></p>
        
         ```
        <VirtualHost *:80>
            DocumentRoot "C:/xampp/htdocs/nicte-mvc/public"
            ServerName nicte.com
        </VirtualHost>
        ```
* Se debera configurar el host de windows también

    - Abrir el bloc de nota como Administrador
    - ir a la ruta `C:\Windows\System32\drivers\etc`, y configurar **hosts**
       : agregar
       `127.0.0.1	siums.com` y guardar cambios.
      
* Reinicia el servicio Apache y podra accesar a al navegador con **nicte.com**