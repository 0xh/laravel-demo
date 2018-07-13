<?php
namespace App\Listeners;

// 事件订阅者
class UserEventSubscriber
{
    /**
     * 处理用户登录事件.
     * @translator laravelacademy.org
     */
    public function onUserLogin($event) {}

    /**
     * 处理用户退出事件.
     */
    public function onUserLogout($event) {}

    /**
     * 为订阅者注册监听器.
     *
     * @param  Illuminate\Events\Dispatcher  $events
     */
    public function subscribe($events)
    {
        $events->listen(
            'Illuminate\Auth\Events\Login',
            'App\Listeners\UserEventSubscriber@onUserLogin'
        );

        $events->listen(
            'Illuminate\Auth\Events\Logout',
            'App\Listeners\UserEventSubscriber@onUserLogout'
        );
    }

}