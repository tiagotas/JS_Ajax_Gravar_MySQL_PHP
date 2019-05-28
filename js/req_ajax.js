window.onload = function() {
    enviar_requisicao();
}


function carregar_contatos() {
    var tasAjax = abreAjax();
        
    tasAjax.open('GET', "lista-contatos.php", true);
    tasAjax.onreadystatechange = function ()
    {
        if(tasAjax.readyState == 1)
        {
            document.getElementById("lista-contatos").innerHTML = "Carregando...";        
        }            
        if(tasAjax.readyState == 4)
        {
            if(tasAjax.status == 200)
            {
                document.getElementById("lista-contatos").innerHTML = tasAjax.responseText;
            }
        }
    };
    tasAjax.send(null);	
}


function enviar_requisicao() {

    document.getElementById("form-contatos").onsubmit = function() {
        
        var tasAjax = abreAjax();
        
        var nome = document.getElementById("nome").value;
        var telefone = document.getElementById("telefone").value;
        var cidade = document.getElementById("cidade").value;
        
        var dataPost = "nome=" + nome + "&telefone=" + telefone + "&cidade=" + cidade;
        
        tasAjax.open('POST', "gravar-contato.php", true);
        tasAjax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        tasAjax.onreadystatechange = function ()
        {
            if(tasAjax.readyState == 1)
            {
                document.getElementById("retorno").innerHTML = "Carregando...";          
            }            
            if(tasAjax.readyState == 4)
            {
                if(tasAjax.status == 200)
                {
                    document.getElementById("retorno").innerHTML = tasAjax.responseText; 
                }
            }
        };
        tasAjax.send(dataPost);	

        return false;
    }
}