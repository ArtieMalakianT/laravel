<!DOCTYPE html>
<html>
    <head>
        <title>Loja | Página Inicial</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/loja.css" type="text/css" rel="stylesheet">
        <script src="jquery/jquery-1.10.2.js"></script>
    </head>
    <body>     

        <header>            
                <!-- Mobile Menu -->
                <input type="checkbox" id="check"/>
        
                <div class="background">     

                </div>
    
                <section class="header">
                    <div class="logo">
                            <label for="check"><ion-icon size="large" name="apps"></ion-icon></label>
                        <label><img src="/img/GiSales_logo_pequena_branco.png"></label>
                    </div>
                </section>
                <nav class="resp-nav" for="check">
                    <div class="resp-menu-top">                
                        <a href="#" class="resp-menu-top-item"><ion-icon name="person" size="large"></ion-icon><span>Acesse sua conta</span></a>
                        <a class="resp-menu-top-item"><label for="check"><ion-icon name="close-circle" size="large"></ion-icon></label></a>
                    </div>
                    <ul class="resp-menu-body">
                        <li class="resp-menu-body-item"><a href="#">Lingerie</a></li>
                        <li class="resp-menu-body-item"><a href="#">Noite</a></li>
                        <li class="resp-menu-body-item"><a href="#">Infantil</a></li>
                        <li class="resp-menu-body-item"><a href="#">Plus Size</a></li>
                        <li class="resp-menu-body-item"><a href="#">Cuecas</a></li>
                        <li class="resp-menu-body-item"><a href="#">Kits</a></li>
                        <li class="resp-menu-body-item"><a href="#">Novidades</a></li>
                    </ul>
                    <ul class="resp-menu-foot">
                        <li class="resp-menu-foot-item"><a href="#"><ion-icon name="cash"></ion-icon>Outlet | Promoções</a></li>
                        <li class="resp-menu-foot-item"><a href="#"><ion-icon name="heart-empty"></ion-icon>Lista de Favoritos</a></li>
                        <li class="resp-menu-foot-item"><a href="#"><ion-icon name="logo-whatsapp"></ion-icon>Atendimento Whats App</a></li>
                    </ul>
                </nav>
                <!-- End of Mobile Menu -->
        </header>   
        
        <div class="container">            
            @yield('conteudo')
        </div>  

        <script>

            function btnActive(elmnt)
            {
                $('.btn-primary').each(function(){
                    $('.menu a').removeClass('btn-primary active').addClass('btn-primary');
                });
                

                $(elmnt).addClass('btn-primary active');                
            }
        </script>
    <script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
    </body>
</html>