    {include file="./header.tpl" assign="header"}
    {$header}
    
    <link type="text/css" rel="stylesheet" href="/shopPHP/{$templateWebPath}/styles/main.css"/>
</head>
<body>
    {append var="name" value="<h1 class='red'>My Shop - online shop</h1>" index="last"}
    <header class="header">
        <article class="header_article">
            <div class="header_container">
                <div class="header_header" id="header">
                    {$name.last}
                </div>
            </div>
        </article>
    </header>

    {include file="./aside.tpl" assign="aside"}
    {$aside}

    {append var="products" value=$rsProd index="center"}
    
    <section class="section">
        <article class="section_article">
                <div class="section_container">
                    <div class="section_inner" id="centerColumn">
                        <h3 id="jg_photo_title" class="jg_imgtitle">
                            {$products.center['name']}
                        </h3>
                        
                        <div>
                            <img  width="575" id="jg_photo_big" class="jg_photo" src="/shopPHP/src/img/products/{$products.center['image']}">
                        </div> 
                          
                        <div>
                            Price: {$products.center['price']}
                            <div>
                                <a id="removeCart_{$products.center['id']}" {if ! $itemInCart}class="hideme"{/if} href="#" onClick="removeFromCart({$products.center['id']}); return false;" alt="Remove from cart">Remove from cart</a>
                                <a id="addCart_{$products.center['id']}" {if $itemInCart}class="hideme"{/if} href="#" onClick="addToCart({$products.center['id']}); return false;" alt="Add to cart">Add to cart</a>
                            </div> 
    
                            <p> Description: <br />{$products.center['description']}</p>
                        </div>                        
                    </div>
                </div>
        </article>
    </section>

    <script type="text/javascript" src="/shopPHP/src/js/jquery.min.js"></script>                
    <script type="text/javascript" src="/shopPHP/src/js/main.js"></script>                
                        
    {include file="./footer.tpl" assign="footer"}
    {$footer}

    