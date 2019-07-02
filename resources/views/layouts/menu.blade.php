<!DOCTYPE html>
<html>
    <head>
        <title>Loja | Página Inicial</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/loja.css" type="text/css" rel="stylesheet">
        <link href="css/mobile-loja.css" type="text/css" rel="stylesheet">
        <script src="js/jquery-3-4-1.js"></script>
    </head>
    <body>    
    
    <!-- NOVIDADES -->
    <input type="checkbox" id="check-email" style="display:none" />
            <div class="novidades">       

                <label>Digite seu e-mail para receber nossas Novidades!</label>

                    <form action="" method="">
                        <input type="email" name="email" placeholder="Digite seu e-mail" require maxlenght="100"/>

                        <button class="btn-primary">Confirmar</button>
                        <label for="check-email" title="Fechar este formulário"><ion-icon name="close-circle" size="large"></ion-icon></label>
                    </form>                        
            </div>
    <!--  -->

        <div class="header">
            
            <!-- Mobile Menu -->
            <section class="mobile-menu">           
                
                <input type="checkbox" id="check"/>
        
                <div class="background">     

                </div>
    
                <article class="header">
                    <div class="logo">
                            <label for="check"><ion-icon size="large" name="apps"></ion-icon></label>
                        <label><img src="/img/GiSales_logo_pequena_branco.png"></label>
                    </div>
                </article>
                <nav class="resp-nav" for="check">
                    <div class="resp-menu-top">  
                    @auth
                    @if (Route::has('register'))  
                    <a href="/home" class="resp-menu-top-item">
                            <ion-icon name="person" size="large">

                            </ion-icon>
                            <span>{{ Auth::user()->name }} - Acesse sua conta</span>
                    </a>
                    @endif          
                    @else 
                    <a href="/register" class="resp-menu-top-item">
                            <ion-icon name="person" size="large">

                            </ion-icon>
                            <span>Login ou Cadastre-se</span>
                    </a>                          
                        
                    @endauth
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
            </section>
            <!-- End of Mobile Menu -->
            
            <!-- Normal Menu -->
            <section class="normal-menu">                                
                
                <div class="normal menu-body">

                </div>

            </section>
            <!-- End of Normal Menu -->
        </div>   
        
        <div class="container">            
            @yield('conteudo')
        </div>

    <script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
    </body>
</html>