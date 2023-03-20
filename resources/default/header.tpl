<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{$smarty.get.controller}</title>
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