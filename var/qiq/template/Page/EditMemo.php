{{ $id = (string) $this->memo['id'] }}
{{ $title = $this->memo['title'] }}
<tr hx-target="this" hx-swap="outerHTML">
    <td>
        <input class="input" type="text" value="{{h $title }}"/>
    </td>
    <td class="td-button">
        <button class="button is-primary">登録</button>
        <button hx-get="/memo?id={{h $id }}" class="button">キャンセル</button>
    </td>
</tr>
