<?php
use zero\facade\Route;

/**
 * 域名路由
 */
// Route::domain('api', 'api');
// Route::domain('admin', 'index');

//路由定义
// Route::rule('news', 'api/news/index', 'GET');
// Route::rule('news/:id', 'api/news/read', 'GET');
// Route::rule('news/create', 'api/news/create', 'GET');
// Route::rule('news', 'api/news/save', 'POST');
// Route::rule('news/:id/edit', 'api/news/edit', 'GET');
// Route::rule('news/:id', 'api/news/update', 'PUT');
// Route::rule('news/:id', 'api/news/delete', 'DELETE');

Route::resource('news', 'api/news');