# Laravel 12 追蹤和記錄連出的 HTTP 請求

引入 farayaz 的 laravel-spy 套件來擴增追蹤和記錄連出的 HTTP 請求，可用於偵錯、監控和稽核外部 API 呼叫或 HTTP 請求。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移。
```sh
$ php artisan migrate
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/github/{使用者名稱}` 來進行使用者存放區列出。
- 你可以經由 `/dog` 來進行所有狗集合中的單張隨機圖片列出。
- 你可以經由 `/spy` 來進行連出的 HTTP 請求控制面板瀏覽。

----

## 畫面截圖
![](https://i.imgur.com/gq8YIID.png)
> 使用控制面板來了解時段內連出的 HTTP 請求成功率
