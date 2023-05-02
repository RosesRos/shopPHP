    {include file="./header.tpl" assign="header"}
    {$header}
    
    <link type="text/css" rel="stylesheet" href="{$templateWebPath}/styles/main.css"/>
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

    {append var="products" value=$rsProduct index="center"}
    {append var="coco" value=$coco index="center"}

    <section class="section">
        <article class="section_article">
                <div class="section_container">
                    <div class="section_inner" id="centerColumn">
                        {foreach $products.center as $product name=products}
                            {* страница продукта *}
                            <h3 id="jg_photo_title" class="jg_imgtitle">
                                {$product['name']}
                                {$coco.center}
                            </h3>
                        
                        <img  width="575" id="jg_photo_big" class="jg_photo" src="/shopPHP/img/products/{$product['image']}">
                          
                        <div>
                            Price: {$product['price']}
                            <a id="removeCart_{$product['id']}" {if ! $itemInCart}class="hideme"{/if} href="#" onClick="removeFromCart({$rsProduct['id']}); return false;" alt="Удалить из корзины">Удалить из корзины</a>
                            <a id="addCart_{$product['id']}" {if $itemInCart}class="hideme"{/if} href="#" onClick="addToCart({$rsProduct['id']}); return false;" alt="Добавить в корзину">Добавить в корзину</a> 
    
                            <p> Description: <br />{$product['description']}</p>
                        </div>
                        {/foreach}
                        
                    </div>
                </div>
        </article>
    </section>

    {include file="./footer.tpl" assign="footer"}
    {$footer}

    