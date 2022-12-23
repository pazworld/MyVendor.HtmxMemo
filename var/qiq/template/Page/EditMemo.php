{{ $id = (string) $this->memo['id'] }}
{{ $title = $this->memo['title'] }}
<tr hx-target="this" hx-swap="outerHTML">
    <td>
        <input type="hidden" name="id" value="{{h $id }}"/>
        <input class="input" type="text" name="title" value="{{h $title }}"/>
    </td>
    <td class="td-button">
        <button hx-put="/edit-memo" hx-include="closest tr" class="button is-primary">登録</button>
        <button hx-get="/memo?id={{h $id }}" class="button">キャンセル</button>
    </td>
</tr>
