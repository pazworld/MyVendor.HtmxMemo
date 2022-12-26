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
            tr.htmx-swapping td {
                opacity: 0;
                transition: opacity 1s ease-out;
            }
        </style>
        <script src="https://unpkg.com/htmx.org@1.8.4"></script>
    </head>
    <body>
        {{= getContent() }}
    </body>
</html>
