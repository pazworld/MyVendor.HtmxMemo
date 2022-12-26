{{ if (isset($this->memo)): }}
    {{ $id = (string) $this->memo['id'] }}
    {{ $title = $this->memo['title'] }}
    <!-- 編集行の表示 -->
    <tr>
        <td>
            <input type="hidden" name="id" value="{{h $id }}"/>
            <input class="input" type="text" name="title" value="{{h $title }}"/>
        </td>
        <td class="td-button">
            <button class="button is-primary" hx-put="/edit-memo" hx-include="closest tr">登録</button>
            <button class="button" hx-get="/memo?id={{h $id }}">キャンセル</button>
        </td>
    </tr>
{{ endif }}
