{append var="aside" value=$rsCategories index="left"}
<section class="section">
    <article class="section_article">
            <aside class="section_aside" id="leftColumn">
                {assign var="titleMenu" value="<h2>menu site</h2>"}
                <div>
                    {$titleMenu}
                </div>
                <nav>
                    <ul>
                        <a href="aside.tpl"></a>
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
                    </ul>
                </nav>
                
            </aside>
    </article>
</section>