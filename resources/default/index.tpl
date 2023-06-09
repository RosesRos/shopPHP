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

    {append var="products" value=$rsProducts index="center"}


    <section class="section">
        <article class="section_article">
                <div class="section_container">
                    <div class="section_inner" id="centerColumn">
                            {foreach $products.center as $product  name=products}
                                <div class="c_items">

                                    <a href="/shopPHP/product/{$product['id']}">
                                        <img src="src/img/products/{$product['image']}" alt="{$product['name']}"/>
                                    </a>
                                    <br/>
                                    <a href="/shopPHP/product/{$product['id']}">{$product['name']}</a>

                                </div>
                                {if $smarty.foreach.products.iteration mod 3 == 0}
                                    <div class="c_clear"></div>
                                {/if}
                            {/foreach}
                    </div>
                </div>
        </article>
    </section>

    {include file="./footer.tpl" assign="footer"}
    {$footer}

    