<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Enviar Mail</title>
    </head>
    <body>
        <form action='envioemail.php' method='post'>
            De:h.silvao@profesor.duoc.cl
            <br>
            Para:<input type="text" name=para>
            <br>
            Asunto:<input type="text" name=asunto>
            <br>
            Cuerpo:<textarea name=cuerpo cols=30 rows=8></textarea>
            <br>
            <input type="submit" value='Enviar'>
        </form>
    </body>
</html>