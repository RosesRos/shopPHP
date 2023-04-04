    {include file="./header.tpl" assign="header"}
    {$header}

    {append var="products" value=$rsProducts index="center"}

    {* <section class="section">
        <article class="section_article">
                <div class="section_container">
                    <div class="section_inner" id="centerColumn">
                            {foreach $products.center as $product  name=products}
                                <div class="c_items">
                                    <a href="/product/{$product['id']}">
                                        <img src="/img/products/{$product['image']}" alt="{$product['name']}"/>
                                    </a>
                                    <br/>
                                    <a href="/product/{$product['id']}">{$product['name']}</a>
                                </div>
                                {if $smarty.foreach.products.iteration mod 3 == 0}
                                    <div class="c_clear"></div>
                                {/if}
                            {/foreach}
                    </div>
                </div>
        </article>
    </section> *}


    <section class="section">
        <article class="section_article">
                <aside class="section_aside" id="leftColumn">
                    {assign var="titleMenu" value=$rsCategory['name'] }
                    <div>
                        <h1>{$titleMenu}</h1>
                    </div>
                    <nav>
                        {* <ul>
                            {foreach $aside.left as $item}
                                <li><a href="/?controller=category&id={$item['id']}">{$item['name']}</a></li>
                                {if isset($item['children'])}
                                    <ul>
                                        {foreach $item['children'] as $itemChild}
                                            <li>--<a href="/?controller=category&id={$itemChild['id']}">{$itemChild['name']}</a></li>
                                        {/foreach}
                                    </ul>
                                {/if}
                            {/foreach}
                        </ul> *}
                    </nav>
                    
                </aside>
        </article>
    </section>

    {include file="./footer.tpl" assign="footer"}
    {$footer}

    