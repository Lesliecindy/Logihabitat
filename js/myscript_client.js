
        function loadPage(url,div){
            fetch(url)
            .then(function(reponse){
                return reponse.text()
            })
            .then(function(data){
                document.getElementById(div).innerHTML=data
            })
        }

        function favoris(){
            loadPage("page_favoris.php","connexion")
        }
        function notif(){
            loadPage("page_notification.php","connexion")
        }
        function messages(){
            loadPage("page_msg.php","connexion")
        }
        function comptes(){
            loadPage("page_compte.php","connexion")
        }