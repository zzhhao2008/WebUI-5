<?php
Router::any("/", "index");//任何人都能访问
Router::any("help", "help");
Router::any("visituser", "user/visit");
Router::any("goodspeak", "api/goodspeak");


Router::login("profile", "user/profile");//只有登陆后才能访问
Router::login("logup", "profile");
Router::login("change", "user/change");
Router::login("themeset", "user/themeset");

Router::guest("logup", "user/logup");//只有未登录才能访问

Router::admin("user_manage", "admin/user/manage");//只有管理员才能访问
Router::admin("user_edit", "admin/user/edit");
Router::admin("user_cr_rm", "admin/user/crm");
