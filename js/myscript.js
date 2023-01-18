
        function loadPage(url,div){
            fetch(url)
            .then(function(reponse){
                return reponse.text()
            })
            .then(function(data){
                document.getElementById(div).innerHTML=data
            })
        }

        function residence(){
            loadPage("page_residences.php","connexion")
        }
        function messages(){
            loadPage("page_messages.php","connexion")
        }
        function comptes(){
            loadPage("page_compte.php","connexion")
        }
        function commentaire(){
            loadPage("page_commentaire.php","connexion")
        }