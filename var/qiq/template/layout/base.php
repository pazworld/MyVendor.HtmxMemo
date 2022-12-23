<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>HtmxMemo</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
        <style>
            .div-box {
                width: 50em;
                margin: auto;
            }
            .table-memo {
                width: 100%;
            }
            .td-button {
                width: 0;
                white-space: nowrap;
            }
        </style>
    </head>
    <body>
        {{= getContent() }}
    </body>
</html>
