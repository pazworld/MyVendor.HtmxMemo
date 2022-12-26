{{ $this->setLayout('layout/base') }}
<div class="box div-box">
    <h1 class="title">1行メモ</h1>
    {{ $id = (string) $this->memos[0]['id'] }}
    {{ $title = $this->memos[0]['title'] }}
    <table class="table table-memo">
        <tr>
            <th>タイトル</th>
            <th></th>
        </tr>
        {{ foreach ($this->memos as $memo): }}
            {{ $id = (string) $memo['id'] }}
            {{ $title = $memo['title'] }}
            <tr hx-target="this" hx-swap="outerHTML">
                <td>
                    <input type="hidden" name="id" value="{{h $id }}"/>
                    {{h $title }}
                </td>
                <td class="td-button">
                    <button hx-get="/edit-memo?id={{h $id }}" class="button is-warning">編集</button>
                    <button hx-delete="/memo" hx-include="closest tr" class="button is-danger" hx-swap="outerHTML swap:1s">削除</button>
                </td>
            </tr>
        {{ endforeach }}
        <tr hx-target="this" hx-swap="outerHTML">
            <td>
                <input class="input" name="title" type="text"/>
            </td>
            <td class="td-button">
                <button hx-post="/add-memo" hx-include="closest tr" class="button is-primary">追加</button>
            </td>
        </tr>
    </table>
</div>
