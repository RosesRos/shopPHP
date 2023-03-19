<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{$smarty.get.action}</title>
</head>
<body>
    <div>
        {$foo}
    </div>
    {assign var="tes" value="<span>action test</span>"}
    {$tes}
</body>
</html>