    {include file="./header.tpl" assign="header"}
    {$header}

    {append var="products" value=$rsProducts index="center"}


    <section class="section">
        <article class="section_article">
                <div class="section_container">
                    <div class="section_inner" id="centerColumn">
                            {foreach $products.center as $product  name=products}
                                <div class="c_items">
<<<<<<< HEAD
                                    <a href="/shopPHP/product/{$product['id']}">
                                        <img src="src/img/products/{$product['image']}" alt="{$product['name']}"/>
                                    </a>
                                    <br/>
                                    <a href="/shopPHP/product/{$product['id']}">{$product['name']}</a>
=======
                                    <a href="/product/{$product['id']}">
                                        <img src="src/img/products/{$product['image']}" alt="{$product['name']}"/>
                                    </a>
                                    <br/>
                                    <a href="/product/{$product['id']}">{$product['name']}</a>
>>>>>>> 8fcde4bf7d1584b94c521dc791b3135dc446ceb2
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

    