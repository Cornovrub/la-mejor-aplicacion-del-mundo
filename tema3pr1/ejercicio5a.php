<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 13px;
            margin: 30px;
        }

        form {
            width: 500px;
        }

        h2 {
            font-size: 18px;
            margin-bottom: 12px;
        }

        h3 {
            font-size: 16px;
            margin: 15px 0 8px;
        }

        .campo {
            display: flex;
            align-items: center;
            margin-bottom: 5px;
        }

        .campo label {
            width: 120px;
        }

        input[type="text"],
        input[type="date"],
        textarea {
            border: 1px solid #ccc;
            padding: 3px;
            font-size: 12px;
        }

        input[type="text"] {
            width: 170px;
        }

        textarea {
            width: 250px;
            height: 65px;
            resize: none;
        }

        hr {
            border: 0;
            border-top: 1px solid #999;
            margin: 12px 0;
        }

        .estudios label {
            display: block;
            margin: 2px 0;
        }

        .idiomas {
            display: flex;
            gap: 60px;
            align-items: flex-start;
        }

        select {
            width: 100px;
            height: 100px;
        }

        .checks label {
            display: block;
            margin-bottom: 4px;
        }

        .botones {
            text-align: center;
            margin-top: 15px;
        }

        button {
            font-size: 11px;
            padding: 3px 12px;
            margin: 0 3px;
        }
    </style>
</head>

<body>

<form  action="ejercicio5c.php " method="post">

    <h2>Datos personales:</h2>

    <div class="campo">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome">
    </div>

    <div class="campo">
        <label for="apelido1">Apelido 1:</label>
        <input type="text" id="apelido1" name="apelido1">
    </div>

    <div class="campo">
        <label for="apelido2">Apelido 2:</label>
        <input type="text" id="apelido2" name="apelido2">
    </div>

    <div class="campo">
        <label for="datanac">Data nacemento:</label>
        <input type="text" id="datanac" name="datanac">
    </div>

    <div class="campo">
        <label for="telefonoF">Teléfono fixo:</label>
        <input type="text" id="telefonoF" name="telefonoF">
    </div>

    <div class="campo">
        <label for="telefonoM">Teléfono móbil:</label>
        <input type="text" id="telefonoM" name="telefonoM">
    </div>

    <div class="campo">
        <label for="blog">Blog:</label>
        <input type="text" id="blog" name="blog">
    </div>

    <div class="campo">
        <label for="sinatura">Sinatura:</label>
        <textarea id="sinatura" name="sinatura"></textarea>
    </div>

    <hr>

    <h3>Estudos previos:</h3>

    <div class="estudios">

        <label>
            <input type="radio" name="estudos" value="eso">
            ESO
        </label>

        <label>
            <input type="radio" name="estudos" value="bacharelato">
            Bacharelato
        </label>

        <label>
            <input type="radio" name="estudos" value="medio">
            Ciclo formativo de grao medio
        </label>

        <label>
            <input type="radio" name="estudos" value="superior">
            Ciclo formativo de grao superior
        </label>

        <label>
            <input type="radio" name="estudos" value="universidade">
            Universidade
        </label>

    </div>

    <hr>

    <h3>Linguas que coñece:</h3>

    <div class="idiomas">

        <select name="linguas[]" multiple>
            <option name="linguas[]" value="galego">Galego</option>
            <option name="linguas[]" value="catalan">Catalán</option>
            <option name="linguas[]" value="ingles">Inglés</option>
            <option name="linguas[]" value="frances">Francés</option>
            <option name="linguas[]" value="portugues">Portugués</option>
            <option name="linguas[]" value="italiano">Italiano</option>
            <option name="linguas[]" value="xapones">Xaponés</option>
        </select>

        <div class="checks">

            <label>
                <input type="checkbox" name="practica" value="deporte">
                Practica deporte
            </label>

            <label>
                <input type="checkbox" name="fuma" value="si">
                Fuma
            </label>

        </div>

    </div>

    <div class="botones">
        <button type="submit">Rexistrar</button>
        <button type="reset">Borrar</button>
    </div>

</form>

</body>
</html>