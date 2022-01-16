<head>
    <title>Laravel Sample</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<div class="container ops-main">
    <div class="row">
        <div class="col-md-12">
            <h3 class="ops-title">ツール</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-11 col-md-offset-1">
            <div class="card">
                <div class="card-header">
                    カードのヘッダ
                </div>
                <div class="card-body">
                    <h5 class="card-title">TikTokツール</h5>
                    <p class="card-text">URL加工</p>
                    <!-- <form method="post" action="/utility/trim">
                    <input type="text" name="urltext"> -->
                    <form class="form-signin" role="form" action="/utility/trim" method="post">
                        {{-- CSRF対策 --}}
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="text" name="urltext" class="form-control" placeholder="URLを入力してください" required autofocus>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">送信</button>
                    </form>
                    {{ $message ?? '' }}
                </div>
            </div>
        </div>
    </div>
</div>