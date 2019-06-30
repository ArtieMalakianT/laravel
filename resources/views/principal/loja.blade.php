@extends('layouts.menu')

@section('conteudo')

<!-- Slider -->
<div class="slider">
    <img id="banner-normal" src="img/banners/Banner-Super-Sale-Paisagem.jpg" alt="">
    <img id="banner-mobile" src="img/banners/Banner-Super-Sale-Retrato.jpg" alt="">
</div>

<!-- Container de Banners -->
<div class="banners-block">  
        
    <!-- Coluna 1 Banner 1 -->
    <div class="col-6">
        <div id="banner-conjuntos" class="row">                        

            <img class="img-banner" src="img/banners/Conjuntos.jpg">

            <a href="#" id="banner-mask-1" class="banner-mask"></a>

            <a class="banner-link">
                <span id="link-conjuntos">Conjuntos</span>
                <span class="link-conferir">Conferir</span>
            </a>
                        
        </div>              
    </div>
    
    <!-- Coluna 2 Banners 2 e 3 -->
    <div class="col-6">
        <div id="banner-tanga" class="row">                        

            <img class="img-banner" src="img/banners/tanga.jpg">

            <a href="" class="banner-mask"></a>

            <a class="banner-link">
                <span id="link-calcinhas">Calcinhas</span>
                <span class="link-conferir">Conferir</span>
            </a>

            
        </div>

        <div id="banner-soutiens" class="row">

            <img class="img-banner" src="img/banners/Soutiens.jpg"> 
            
            <a href="#" class="banner-mask"></a>

            <a class="banner-link">
                <span id="link-soutiens">Soutiens</span>
                <span class="link-conferir">Conferir</span>
            </a>
                        
        </div>
    </div>
        
</div>

<ul class="products">
    
    <!-- Produto 1 -->
    <li class="product">                      
        <div class="product-top">                                                
            <a class="product-mask" href="#">                                                          
                <div class="img-product-back"> 
                        <img class="tag" src="img/Etiqueta_novo.png">                    
                        <img class="img-product-secundary" src="img/products/langerie2.jpg" alt="langerie1">                            
                </div>
                <div class="img-product-front">
                        <img class="tag" src="img/Etiqueta_novo.png">                                                                    
                        <img class="img-product" src="img/products/langerie1.jpg" alt="langerie1">                                
                </div>
            </a>                        
        </div>

        <div class="product-footer">
            <p>Descrição</p>
            <label>Conjunto Verão</label>
            <a class="btn-buy" href="#">Eu Quero <ion-icon name="heart" size="large"></ion-icon></a>                        
        </div>
    </li>    
    
    <!-- Produto 2 -->
    <li class="product">                          
        <div class="product-top">                        
            <a class="product-mask" href="#">                                                          
                <div class="img-product-back"> 
                        <img class="tag" src="img/Etiqueta_novo.png">                    
                        <img class="img-product-secundary" src="img/products/langerie1.jpg" alt="langerie1">                            
                </div>
                <div class="img-product-front">
                        <img class="tag" src="img/Etiqueta_novo.png">                                                                    
                        <img class="img-product" src="img/products/langerie2.jpg" alt="langerie1">                                
                </div>
            </a>                            
        </div>
    
        <div class="product-footer">
            <p>Descrição</p>
            <label>Conjunto Rosa</label>
            <a class="btn-buy" href="#">Eu Quero <ion-icon name="heart" size="large"></ion-icon></a>                        
        </div>
    </li> 
    
    <!-- Produto 3 -->
    <li class="product">                          
            <div class="product-top">                        
            <a class="product-mask" href="#">                                                          
                <div class="img-product-back"> 
                        <img class="tag" src="img/Etiqueta_novo.png">                    
                        <img class="img-product-secundary" src="img/products/langerie3.jpg" alt="langerie1">                            
                </div>
                <div class="img-product-front">
                        <img class="tag" src="img/Etiqueta_novo.png">                                                                    
                        <img class="img-product" src="img/products/langerie4.jpg" alt="langerie1">                                
                </div>
            </a>
            </div>
    
            <div class="product-footer">
                <p>Descrição</p>
                <label>Conjunto Rosa</label>
                <a class="btn-buy" href="#">Eu Quero <ion-icon name="heart" size="large"></ion-icon></a>                        
            </div>
    </li> 

    <!-- Produto 4 -->
    <li class="product">                          
            <div class="product-top">                        
            <a class="product-mask" href="#">                                                          
                <div class="img-product-back"> 
                        <img class="tag" src="img/Etiqueta_novo.png">                    
                        <img class="img-product-secundary" src="img/products/langerie4.jpg" alt="langerie1">                            
                </div>
                <div class="img-product-front">
                        <img class="tag" src="img/Etiqueta_novo.png">                                                                    
                        <img class="img-product" src="img/products/langerie3.jpg" alt="langerie1">                                
                </div>
            </a>
            </div>
    
            <div class="product-footer">
                <p>Descrição</p>
                <label>Conjunto Preto</label>
                <a class="btn-buy" href="#">Eu Quero <ion-icon name="heart" size="large"></ion-icon></a>                        
            </div>
    </li> 

</ul>
@endsection