{append var="aside" value=array('item1', 'item2', 'item3') index="left"}
<section class="section">
    <article class="section_article">
            <aside class="section_aside" id="left">
                {assign var="titleMenu" value="<h2>menu site</h2>"}
                <div>
                    {$titleMenu}
                </div>
                <nav>
                    <ul>
                        {foreach $aside.left as $item}
                            <li>{$item}</li>
                        {/foreach}
                    </ul>
                </nav>
            </aside>
    </article>
</section>