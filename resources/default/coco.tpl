    {include file="./header.tpl" assign="header"}
    {$header}


    {assign var="tes" value="<span>action {$smarty.get.action}</span>"}
    <section class="section">
        <article class="section_article">
            <div class="section_container">
                <div class="section_inner">
                    <h2>{$tes}</h2>
                </div>
            </div>
        </article>
    </section>

    {include file="./footer.tpl" assign="footer"}
    {$footer}