{{ $this->setLayout('layout/base') }}
<div class="box div-box">
        <h1 class="title">1行メモ</h1>
        <table class="table table-memo">
            <tr>
                <th>タイトル</th>
                <th></th>
            </tr>
            <tr>
                <td>ねずみ</td>
                <td class="td-button">
                    <button class="button is-warning">編集</button>
                    <button class="button is-danger">削除</button>
                </td>
            </tr>
            <tr>
                <td>
                    <input class="input" type="text" value="うさぎ"/>
                </td>
                <td class="td-button">
                    <button class="button is-primary">登録</button>
                    <button class="button">キャンセル</button>
                </td>
            </tr>
            <tr>
                <td>とら</td>
                <td class="td-button">
                    <button class="button is-warning">編集</button>
                    <button class="button is-danger">削除</button>
                </td>
            </tr>
            <tr>
                <td>
                    <input class="input" type="text"/>
                </td>
                <td class="td-button">
                    <button class="button is-primary">追加</button>
                </td>
            </tr>
        </table>
    </div>
