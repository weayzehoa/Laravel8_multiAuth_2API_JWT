## Laravel 8 - multiAuth (Users & Admins) for Web & 2 API with JWT Auth

- 兩組使用者 (Users 及 Admins) 資料表. Users 為前台使用者，Admins 為後台管理者
- 除了現有 Web, API 部分，另外新增一個 Admapi Middleware 供後台使用。
- API 及 Admapi 採用 JWT Auth 提供 token 驗證。
- 另外 提供 JWT Auth Refresh Token Middleware 做自動更新。

## Windows 測試環境 還原 Laravel 專案步驟

### 安裝軟體
1. XAMPP
2. Composer
3. node.js

### 還原步驟
1. 還原 vendor 核心目錄
    composer install
2. 還原 node_modules 目錄
    npm install

### 設定 (切換到專案根目錄)
1. 複製 .env.example 到 .env 檔案
4. 產生 APP_KEY
    php artisan key:generate
5. 產生 JWT Secret Key (執行過程中會詢問覆蓋,選擇yes覆蓋)
    php artisan jwt:secret
6. 設定 .env
    設定資料庫名稱及帳號密碼
7. 還原資料庫
    php artisan migrate
8. 產生假資料
    php artisan db:seed

### Web 操作
1. 前台路徑
    http://localhost/
    帳號: user@mail.com
    密碼: user
2. 後台路徑
    http://localhost/admin
    帳號: admin@mail.com
    密碼: admin

### API 操作
請使用Postman或其他工具
1. 前台路徑
    http://localhost/api/login <br>
    http://localhost/api/me <br>
    http://localhost/api/list <br>
    http://localhost/api/logout <br>
    帳號: user@mail.com <br>
    密碼: user <br>

2. 後台路徑
    http://localhost/api/admin/login <br>
    http://localhost/api/admin/me <br>
    http://localhost/api/admin/list <br>
    http://localhost/api/admin/logout <br>
    帳號: admin@mail.com <br>
    密碼: admin <br>
