
我是看這個 [[Laravel][PHP][教學] 前端與路由#01. 初探路由(routing)與更換首頁內容](https://www.youtube.com/watch?v=9OsKI_ad8LE&list=PL2SrkGHjnWcyOquWJIEd7AYAJGMAUdp-a&index=11) 在學習，但我不知道什麼時候才會看完  


起專案
```
composer create-project --prefer-dist laravel/laravel shopping-cart-php-laravel "8.*"
```


啟動
```
php artisan serve
```

啟動原則 artisan -> public/index.php  
public底下的東西直接渲染  
路由 routes -> resources/views  
public的優先度大於routes  