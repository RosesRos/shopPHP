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
                        {foreach $aside.left as $item}
                            <li><a href="#">{$item['name']}</a></li>
                            {if isset($item['children'])}
                                <ul>
                                    {foreach $item['children'] as $itemChild}
                                        <li>--<a href="#">{$itemChild['name']}</a></li>
                                    {/foreach}
                                </ul>
                            {/if}
                        {/foreach}
                    </ul>
                </nav>
                
            </aside>
    </article>
</section>