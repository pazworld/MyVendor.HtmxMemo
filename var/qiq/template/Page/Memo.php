{{ if (isset($this->memo)): }}
    {{ $id = (string) $this->memo['id'] }}
    {{ $title = $this->memo['title'] }}
    <tr hx-target="this" hx-swap="outerHTML">
        <td>{{h $title }}</td>
        <td class="td-button">
            <button hx-get="/edit-memo?id={{h $id }}" class="button is-warning">編集</button>
            <button class="button is-danger">削除</button>
        </td>
    </tr>
{{ endif }}
