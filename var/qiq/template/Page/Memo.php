{{ if (isset($this->memo)): }}
    {{ $id = (string) $this->memo['id'] }}
    {{ $title = $this->memo['title'] }}
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
{{ endif }}
