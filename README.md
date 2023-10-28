![diagrama entidad relacion](https://github.com/H0clar/Sistema-Quillay/assets/118459488/5e92b8db-263e-4fc8-9916-f0d6963eb2ab)



![mocup1](https://github.com/H0clar/Sistema-Quillay/assets/118459488/3e1ac3d7-f6ba-480f-9003-134229ab0fc0)


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



