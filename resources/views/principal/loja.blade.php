@extends('layouts.menu')

@section('conteudo')

<!-- Slider -->
<div class="slider">
    <img src="img/Banner_2.png" alt="">
</div>

<!-- Container de Banners -->
<div class="banners-block">  
        
    <!-- Coluna 1 Banner 1 -->
    <div class="col-6">
        <div class="row">
            <img class="img-banner" src="img/banners/Conjuntos.jpg"> 
        </div>              
    </div>
    
    <!-- Coluna 2 Banners 2 e 3 -->
    <div class="col-6">
        <div class="row">
            <img class="img-banner" src="img/banners/tanga.jpg">
        </div>

        <div class="row">
            <img class="img-banner" src="img/banners/Soutiens.jpg">
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