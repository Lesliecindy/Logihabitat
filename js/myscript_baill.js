
        function loadPage(url,div){
            fetch(url)
            .then(function(reponse){
                return reponse.text()
            })
            .then(function(data){
                document.getElementById(div).innerHTML=data
            })
        }

        function residences(){
            loadPage("page_residence2.php","connexion")
        }
        function messages(){
            loadPage("page_msg2.php","connexion")
        }
        function comptes(){
            loadPage("page_compte.php","connexion")
        }