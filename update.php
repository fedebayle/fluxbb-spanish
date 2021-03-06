<?php

// Language definitions used in db_update.php

$lang_update = array(

'Update'						=>	'Actualiza FluxBB',
'Update message'				=>	'Tu base de datos de FluxBB está desactualizada, y debe actualizarse para poder continuar. Si eres el administrador del foro, por favor sigue las instrucciones siguientes para completar la actualización.',
'Note'							=>	'Nota:',
'Members message'				=>	'Este proceso es para administradores del foro únicamente. Si eres un miembro no hay nada de qué preocuparse: ¡El foro estará de vuelta pronto!',
'Administrator only'			=>	'¡Este proceso es para administradores del foro únicamente!',
'Database password info'		=>	'Para actualizar la base de datos, por favor introduce la contraseña de la base de datos con la cual se instaló FluxBB. Si no la recuerdas, está almacenada en tu archivo \'config.php\'.',
'Database password note'		=>	'Si estás utilizando SQLite (y por tanto no tienes contraseña de la base de datos), por favor utiliza el nombre del archivo en su lugar. Este debe coincidir exactamente con el nombre del arhivo de la base de datos que se te dio en el archivo de configuración.',
'Database password'				=>	'Contraseña de la base de datos',
'Maintenance'					=>	'Mantenimiento',
'Maintenance message info'		=>	'El mensaje que será mostrado a los usuarios durante el proceso de actualización. Este texto no se procesará como los mensajes regulares, y por tanto puede contener HTML.',
'Maintenance message'		    =>	'Mensaje de mantenimiento',
'Next'							=>	'Siguiente',

'You are running error'			=>	'Estás utilizando %1$s en su versión %2$s. FluxBB %3$s requiere al menos %1$s %4$s para funcionar adecuadamente. Debes actualizar tu instalación de %1$s antes de poder continuar.',
'Version mismatch error'		=>	'Discrepancia en la versión. La base de datos \'%s\' no parece utilizar un esquema de base de datos de FluxBB soportado por este script de actualización.',
'Invalid file error'			=>	'Nombre de archivo de base de datos inválido. Cuando utilizas SQLite, el nombre del archivo de base de datos debe introducirse exactamente como aparece en tu \'%s\'',
'Invalid password error'		=>	'Contraseña de la base de datos inválida. Para actualizar FluxBB debes introducir la contraseña de tu base de datos exactamente como aparece en tu \'%s\'',
'No password error'				=>	'No se indicó la contraseña de la base de datos',
'Script runs error'				=>	'Parece que el script de actualización ya se está ejecutando por alguien más. Si este no es el caso, elimina manualmente el archivo \'%s\', e inténtalo de nuevo',
'No update error'				=>	'Tu foro ya está actualizado de acuerdo a este script',

'Intro 1'						=>	'Este script actualizará la base de datos de tu foro. El procedimiento de actualización podría tomar desde unos segundos hasta horas, dependiendo de la velocidad del servidor, y el tamaño de la base de datos del foro. No olvides hacer una copia de seguridad de la base de datos antes de continuar.',
'Intro 2'						=>	'¿Leíste las instrucciones de actualización en la documentación? Si no, comienza aquí.',
'No charset conversion'			=>	'<strong>IMPORTANTE!</strong> FluxBB ha detectado que este entorno PHP no cuenta con soporte para el mecanismo de codificación requerido para hacer conversión a UTF-8 de otros conjuntos de caracteres que no sean ISO-8859-1. Esto significa que si el conjunto de caracteres actual no es ISO-8859-1, FluxBB no será capaz de convertir la base de datos de tu foro a UTF-8, y tendrás que hacerlo manualmente. En las instrucciones de actualización se encuentra información para realizar manualmente la conversión de conjunto de caracteres.',
'Enable conversion'				=>	'<strong>Habilitar conversión:</strong> Cuando se habilita, este script de actualización convertirá todo el texto en la base de datos del conjunto de caracteres actual a UTF-f, luego de que haya hecho los cambios estructurales necesarios en la base de datos. Esta conversión es requerida si estás actualizando desde la versión 1.2.',
'Current character set'			=>	'<strong>Conjunto de caracteres actual:</strong> Si el idioma princiapl de tu foro es el inglés, puedes dejar este valor predeterminado. Sin embargo, si tu foro no está en inglés, debes introducir el conjunto de caracteres del paquete de idioma primario utilizado en el foro. <em>Elegir esto de manera errónea puede corromper tu base de datos, ¡así que no adivines simplemente!</em> Nota: Esto es requerido incluso si la base de datos antigua es UTF-8.',
'Charset conversion'			=>	'Conversión de conjuntos de caracteres',
'Enable conversion label'		=>	'<strong>Habilitar conversión</strong> (realizar conversión de conjunto de caracteres de la base de datos).',
'Current character set label'	=>	'Conjunto de caracteres predeterminado',
'Current character set info'	=>	'Aceptar el predeterminado para foros en inglés, de lo contrario, el conjunto de caracteres del paquete de idioma primario.',
'Start update'					=>	'Iniciar la actualización',
'Error converting users'		=>	'Error al convertir a los usuarios',
'Error info 1'					=>	'Hubo un error al convertir algunos usuarios. Esto puede suceder cuando se convierte desde FluxBB v1.2, si múltiples usuarios se han registrado con nombres de usuario muy similares, por ejemplo «bob» y «böb».',
'Error info 2'					=>	'Debajo está una lista de usuarios cuya conversión falló. Por favor elige un nuevo nombre de usuario para cada uno. A los usuarios renombrados se les enviará automáticamente un correo electrónico advirtiéndoles del cambio.',
'New username'					=>	'Nuevo nombre de usuario',
'Required'						=>	'(Requerido)',
'Correct errors'				=>	'Los siguientes errores deben ser corregidos:',
'Rename users'					=>	'Renombrar usuarios',
'Successfully updated'			=>	'La base de datos de tu foro se actualizó exitosamente. Ahora puedes %s.',
'go to index'					=>	'ir al índice del foro',

'Unable to lock error'			=>	'No fue posible escribir el bloqueo de actualización. Por favor, asegúrate de que PHP tenga acceso de escritura al directorio \'%s\', y que nadie más esté ejecutando el script de actualización.',

'Converting'					=>	'Convirtiendo %s…',
'Converting item'				=>	'Convirtiendo %1$s %2$s…',
'Preparsing item'				=>	'Preprocesando %1$s %2$s…',
'Rebuilding index item'			=>	'Reconstruyendo el índice para para %1$s %2$s',

'ban'							=>	'suspensión',
'categories'					=>	'categorías',
'censor words'					=>	'censurar palabras',
'configuration'					=>	'configuración',
'forums'						=>	'foros',
'groups'						=>	'grupos',
'post'							=>	'mesaje',
'report'						=>	'reporte',
'topic'							=>	'tema',
'user'							=>	'usuario',
'signature'						=>	'firma',

'Username too short error'		=>	'Los nombres de usuario deben tener una longitud de al menos 2 caracteres. Por favor elige otro nombre de usuario más largo.',
'Username too long error'		=>	'Los nombres de usuario deben tener una longitud mayor a 25 caracteres. Por favor elige otro nombre de usuario más corto.',
'Username Guest reserved error'	=>	'El nombre de usuario «guest» está reservado. Por favor elige otro nombre de usuario.',
'Username IP format error'		=>	'Los nombres de usuario no pueden ser como una dirección IP. Por favor elige otro nombre de usuario.',
'Username bad characters error'	=>	'Los nombres de usuario no pueden contener todos los caracteres \', " y [ o ] a la vez. Por favor elige otro nombre de usuario.',
'Username BBCode error'			=>	'Los nombres de usuario no pueden contener ninguna de las etiquetas de formato de texto (BBCode) utilizadas por el foro. Por favor elige otro nombre de usuario.',
'Username duplicate error'		=>	'Alguien ya está registrado con el nombre de usuario %s. El nombre de usuario que elegiste es muy similar. El nombre de usuario debe diferir de ese al menos por un carácter alfanumérico (a-z or 0-9). Por favor elige un nombre de usuario distinto.',

);
