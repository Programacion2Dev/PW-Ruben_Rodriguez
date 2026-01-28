<!DOCTYPE html><html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nuevo Mensaje de Contacto</title>
    </head>
    <body style="font-family: Arial, sans-serif; background-color: #f4f4f4; margin: 0; padding: 20px;">
        <div style="max-width: 600px; margin: 0 auto; background-color: #ffffff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
            <h2 style="color: #333; border-bottom: 2px solid #2d6ae3; padding-bottom: 10px;">Nuevo Mensaje de Contacto</h2>
            
            <div style="margin-top: 20px;">
                <h3 style="color: #2d6ae3; margin-top: 20px;">Información del Remitente</h3>
                
                <p style="margin: 10px 0;">
                    <strong style="color: #333;">Nombre:</strong><br>
                    {{ $nombre }}
                </p>
                
                <p style="margin: 10px 0;">
                    <strong style="color: #333;">Correo:</strong><br>
                    <a href="mailto:{{ $correo }}" style="color: #2d6ae3;">{{ $correo }}</a>
                </p>
                
                @if($telefono)
                <p style="margin: 10px 0;">
                    <strong style="color: #333;">Teléfono:</strong><br>
                    {{ $telefono }}
                </p>
                @endif
                
                @if($asunto)
                <p style="margin: 10px 0;">
                    <strong style="color: #333;">Asunto:</strong><br>
                    {{ $asunto }}
                </p>
                @endif
                
                <h3 style="color: #2d6ae3; margin-top: 20px;">Mensaje</h3>
                
                <div style="background-color: #f9f9f9; padding: 15px; border-left: 4px solid #2d6ae3; margin-top: 10px;">
                    <p style="color: #555; line-height: 1.6; margin: 0; white-space: pre-wrap;">{{ $mensaje }}</p>
                </div>
            </div>
            
            <hr style="border: none; border-top: 1px solid #ddd; margin-top: 30px; margin-bottom: 20px;">
            
            <p style="color: #999; font-size: 12px; text-align: center;">
                Este es un correo automatizado. Por favor, responde directamente a {{ $correo }}
            </p>
        </div>
    </body>
</html>