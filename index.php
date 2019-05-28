<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">    
    <link href="css/estilo.css" type="text/css" />
    <script src="js/ajax.js" type="text/javascript"></script>
    <script src="js/req_ajax.js" type="text/javascript"></script>
    <title>Document</title>
</head>
<body>
    <main>
        <fieldset>
            <legend>Minha Agenda</legend>

            <div id="retorno"></div>

            <form  id="form-contatos">
                <label>
                    Nome: <br />
                    <input id="nome" type="text" />
                </label>
                <br />
                <label>
                    Telefone: <br />
                    <input id="telefone" type="text" />
                </label>
                <br />
                <label>
                    Cidade: <br />
                    <input id="cidade" type="text" />
                </label>

                <button type="submit">Salvar</button>              
            </form>
        </fieldset>
        <div id="lista-contatos"></div>
    </main>  
</body>
</html>