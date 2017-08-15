<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>パプリカ操作盤</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body>
    <div class="jumbotron">
      <h2 class="display-5">パプリカ操作盤</h2>
      <p class="lead">
      <?php
        $getdata = 'S'; // 停止状態がデフォルト
        if (!empty($_GET['a'])) {
          $getdata = $_GET['a'];
          switch ($getdata) {
            case 'F':
              echo '前に進むよ';
              break;
            case 'S':
              echo '止まりまーす';
              break;
            case 'B':
              echo '後ろにさがるよ';
              break;
            case 'A':
              echo '左手を前へ';
              break;
            case 'L':
              echo '左手を戻すよ';
              break;
            case 'K':
              echo '左手を後ろへ';
              break;
            case 'T':
              echo '右手を前へ';
              break;
            case 'R':
              echo '右手を戻すよ';
              break;
            case 'E':
              echo '右手を後ろへ';
              break;
            default:
              $getdata = 'S'; // overwrite if other words
          }
        } else {
          echo 'ボタンを押して操作してね';
        }
        if ($getdata != file_get_contents('p')) {
          file_put_contents('p',$getdata);
        }
      ?>
      </p>
      <div class="row">
        <div class="col">
          <a class="btn btn-info btn-block" href="./paprika.php?a=A">左手前</a>
          <a class="btn btn-secondary btn-block" href="./paprika.php?a=L">左手中</a>
          <a class="btn btn-success btn-block" href="./paprika.php?a=K">左手後</a>
        </div><!-- .col -->
        <div class="col">
          <a class="btn btn-primary btn-block" href="./paprika.php?a=F">前進</a>
          <a class="btn btn-danger btn-block" href="./paprika.php?a=S">停止</a>
          <a class="btn btn-warning btn-block" href="./paprika.php?a=B">後進</a>
        </div><!-- .col -->
        <div class="col">
          <a class="btn btn-info btn-block" href="./paprika.php?a=T">右手前</a>
          <a class="btn btn-secondary btn-block" href="./paprika.php?a=R">右手中</a>
          <a class="btn btn-success btn-block" href="./paprika.php?a=E">右手後</a>
        </div><!-- .col -->
      </div><!-- .row -->
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>

