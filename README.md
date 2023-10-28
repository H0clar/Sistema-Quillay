![diagrama entidad relacion](https://github.com/H0clar/Sistema-Quillay/assets/118459488/5e92b8db-263e-4fc8-9916-f0d6963eb2ab)


![material-educativo-17 octubre](https://github.com/H0clar/Sistema-Quillay/assets/118459488/9b906ee1-af8b-4f31-8f1c-b1f410bcf801)


<<<<<<< HEAD
![mocup2](https://github.com/H0clar/Sistema-Quillay/assets/118459488/ed9f673b-c664-45c8-b301-dff33e20b4e8)



orden de ejecucion de las migraciones de la base de datos:

todo de una: php artisan migrate


php artisan migrate --path=database/migrations/2023_10_04_023617_create_tipo_usuario_table.php
php artisan migrate --path=database/migrations/2023_10_04_023939_create_nivel_educativo_table.php
php artisan migrate --path=database/migrations/2023_10_04_023948_create_cursos_table.php
php artisan migrate --path=database/migrations/2023_10_04_023954_create_asignatura_table.php
php artisan migrate --path=database/migrations/2023_10_04_024001_create_tipo_cambio_table.php
php artisan migrate --path=database/migrations/2023_10_04_024006_create_usuario_table.php
php artisan migrate --path=database/migrations/2023_10_04_024012_create_material_educativo_table.php
php artisan migrate --path=database/migrations/2023_10_04_024024_create_log_table.php
php artisan migrate --path=database/migrations/2023_10_27_155106_create_comentario_table.php
php artisan migrate --path=database/migrations/2023_10_27_155200_create_respuesta_table.php


migracion de los seed con cursos, asignaturas, etc

php artisan db:seed


php artisan db:seed --class=TipoUsuarioSeeder
php artisan db:seed --class=TipoCambioSeeder
php artisan db:seed --class=TipoUsuarioSeeder



=======
![crear-material-educativo](https://github.com/H0clar/Sistema-Quillay/assets/118459488/c54f3e4a-e955-49c7-a2ad-a24425c25302)
>>>>>>> 6e0bd7ceb2d74ec80d8bdea28125290879949435
