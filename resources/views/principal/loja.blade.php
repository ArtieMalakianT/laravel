@extends('layouts.menu')

@section('conteudo')
<!-- Slider -->
<div class="slider">
    <img src="img/Banner_2.png" alt="">
</div>

<!-- Container de Banners -->
<div class="banners-block">  
        
    <!-- Banner 1-->
        <figure class="banner-body">
            <a class="link-banner" href="categorias/categorias.html">
            <img class="img-banner" src="img/banners/Conjuntos.jpg">                    
            <figcaption>
                    <h1>Conjuntos</h1>                            
            </figcaption>
            </a>                       
        </figure>               
    
    <!-- Banner 2 -->
        <figure class="banner-body">
            <a class="link-banner" href="">
                <img class="img-banner" src="img/banners/tanga.jpg">
                <figcaption>
                        <h1>Calcinhas</h1>                            
                </figcaption>
            </a>                                                
        </figure>

    <!-- Banner 3 -->
        <figure class="banner-body">
            <a class="link-banner" href="">
                <img class="img-banner" src="img/banners/Soutiens.jpg">
                <figcaption>
                        <h1>Soutiens</h1>                            
                </figcaption>
            </a>                                                
        </figure>
        
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