<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialEducativoTable extends Migration
{
    public function up()
    {
        Schema::create('material_educativo', function (Blueprint $table) {
            $table->id();
            $table->string('TipoArchivo');
            $table->string('NombreArchivo', 255);
            $table->unsignedBigInteger('ProfesorID');
            $table->unsignedBigInteger('AsignaturaID');
            $table->unsignedBigInteger('CursoID');
            $table->unsignedBigInteger('NivelEducativoID');
            $table->boolean('Estado');
            $table->boolean('Visible');
            $table->string('RutaGoogleDrive', 255);
            $table->date('FechaSubida');
            $table->timestamps();
        });

        // Ejecutar consulta SQL para agregar triggers
        DB::unprepared("
            -- Trigger para el nombre del archivo y visibilidad
            DELIMITER //
            CREATE TRIGGER Material_Educativo_BI BEFORE INSERT ON material_educativo FOR EACH ROW
            BEGIN
                -- Código del trigger que asigna el nombre del archivo y establece la visibilidad
            END;
            //
            DELIMITER ;

            -- Trigger para registro de cambios
            DELIMITER //
            CREATE TRIGGER Material_Educativo_AI AFTER INSERT ON material_educativo FOR EACH ROW
            BEGIN
                -- Código del trigger para registro de inserción en el log
            END;
            //
            DELIMITER ;

            -- Trigger para registro de actualización
            DELIMITER //
            CREATE TRIGGER Material_Educativo_AU AFTER UPDATE ON material_educativo FOR EACH ROW
            BEGIN
                -- Código del trigger para registro de actualización en el log
            END;
            //
            DELIMITER ;

            -- Trigger para registro de eliminación
            DELIMITER //
            CREATE TRIGGER Material_Educativo_AD AFTER DELETE ON material_educativo FOR EACH ROW
            BEGIN
                -- Código del trigger para registro de eliminación en el log
            END;
            //
            DELIMITER ;

            -- Trigger para registro de visibilidad
            DELIMITER //
            CREATE TRIGGER Material_Educativo_Visible_AI AFTER UPDATE ON material_educativo FOR EACH ROW
            BEGIN
                -- Código del trigger para registro de cambios en la visibilidad
            END;
            //
            DELIMITER ;

            -- Trigger para registro de estado
            DELIMITER //
            CREATE TRIGGER Material_Educativo_Estado_AI AFTER UPDATE ON material_educativo FOR EACH ROW
            BEGIN
                -- Código del trigger para registro de cambios en el estado
            END;
            //
            DELIMITER ;
        ");
    }

    public function down()
    {
        Schema::dropIfExists('material_educativo');
    }
}
