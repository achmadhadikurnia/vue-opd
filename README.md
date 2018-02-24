# Vue OPD

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/bantenprov/vue-opd/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/bantenprov/vue-opd/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/bantenprov/vue-opd/badges/build.png?b=master)](https://scrutinizer-ci.com/g/bantenprov/vue-opd/build-status/master)
[![Latest Stable Version](https://poser.pugx.org/bantenprov/vue-opd/v/stable)](https://packagist.org/packages/bantenprov/vue-opd)
[![Total Downloads](https://poser.pugx.org/bantenprov/vue-opd/downloads)](https://packagist.org/packages/bantenprov/vue-opd)
[![Latest Unstable Version](https://poser.pugx.org/bantenprov/vue-opd/v/unstable)](https://packagist.org/packages/bantenprov/vue-opd)
[![License](https://poser.pugx.org/bantenprov/vue-opd/license)](https://packagist.org/packages/bantenprov/vue-opd)
[![Monthly Downloads](https://poser.pugx.org/bantenprov/vue-opd/d/monthly)](https://packagist.org/packages/bantenprov/vue-opd)
[![Daily Downloads](https://poser.pugx.org/bantenprov/vue-opd/d/daily)](https://packagist.org/packages/bantenprov/vue-opd)

### Install via composer

- Development snapshot

```bash
$ composer require bantenprov/vue-opd:dev-master
```

- Latest release:

```bash
$ composer require bantenprov/vue-opd
```

### Download via github

```bash
$ git clone https://github.com/bantenprov/vue-opd.git
```

#### Edit `config/app.php` :

```php
'providers' => [

    /*
    * Laravel Framework Service Providers...
    */
    Illuminate\Auth\AuthServiceProvider::class,
    Illuminate\Broadcasting\BroadcastServiceProvider::class,
    Illuminate\Bus\BusServiceProvider::class,
    Illuminate\Cache\CacheServiceProvider::class,
    Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    Illuminate\Cookie\CookieServiceProvider::class,
    //....
    Bantenprov\VueOpd\VueOpdServiceProvider::class,
```

#### Lakukan migrate :

```bash
$ php artisan migrate
```

#### Publish database seeder :

```bash
$ php artisan vendor:publish --tag=vue-opd-seeds
```

#### Lakukan auto dump :

```bash
$ composer dump-autoload
```

#### Lakukan seeding :

```bash
$ php artisan db:seed --class=BantenprovVueOpdSeeder
```

#### Lakukan publish component vue :

```bash
$ php artisan vendor:publish --tag=vue-opd-assets
$ php artisan vendor:publish --tag=vue-opd-public
```
#### Tambahkan route di dalam file : `resources/assets/js/routes.js` :

```javascript
{
    path: '/dashboard',
    redirect: '/dashboard/home',
    component: layout('Default'),
    children: [
        //== ...
        {
            path: '/dashboard/vue-opd',
            components: {
                main: resolve => require(['./components/views/bantenprov/vue-opd/DashboardVueOpd.vue'], resolve),
                navbar: resolve => require(['./components/Navbar.vue'], resolve),
                sidebar: resolve => require(['./components/Sidebar.vue'], resolve)
            },
            meta: {
                title: "Vue OPD"
            }
        },
        //== ...
    ]
},
```

```javascript
{
    path: '/admin',
    redirect: '/admin/dashboard/home',
    component: layout('Default'),
    children: [
        //== ...
        {
            path: '/admin/vue-opd',
            components: {
                main: resolve => require(['./components/bantenprov/vue-opd/VueOpd.index.vue'], resolve),
                navbar: resolve => require(['./components/Navbar.vue'], resolve),
                sidebar: resolve => require(['./components/Sidebar.vue'], resolve)
            },
            meta: {
                title: "Vue OPD"
            }
        },
        {
            path: '/admin/vue-opd/create',
            components: {
                main: resolve => require(['./components/bantenprov/vue-opd/VueOpd.add.vue'], resolve),
                navbar: resolve => require(['./components/Navbar.vue'], resolve),
                sidebar: resolve => require(['./components/Sidebar.vue'], resolve)
            },
            meta: {
                title: "Add Vue OPD"
            }
        },
        {
            path: '/admin/vue-opd/:id',
            components: {
                main: resolve => require(['./components/bantenprov/vue-opd/VueOpd.show.vue'], resolve),
                navbar: resolve => require(['./components/Navbar.vue'], resolve),
                sidebar: resolve => require(['./components/Sidebar.vue'], resolve)
            },
            meta: {
                title: "View Vue OPD"
            }
        },
        {
            path: '/admin/vue-opd/:id/edit',
            components: {
                main: resolve => require(['./components/bantenprov/vue-opd/VueOpd.edit.vue'], resolve),
                navbar: resolve => require(['./components/Navbar.vue'], resolve),
                sidebar: resolve => require(['./components/Sidebar.vue'], resolve)
            },
            meta: {
                title: "Edit Vue OPD"
            }
        },
        //== ...
    ]
},
```
#### Edit menu `resources/assets/js/menu.js`

```javascript
{
    name: 'Dashboard',
    icon: 'fa fa-dashboard',
    childType: 'collapse',
    childItem: [
        //== ...
        {
            name: 'Vue OPD',
            link: '/dashboard/vue-opd',
            icon: 'fa fa-angle-double-right'
        },
        //== ...
    ]
},
```

```javascript
{
    name: 'Admin',
    icon: 'fa fa-lock',
    childType: 'collapse',
    childItem: [
        //== ...
        {
            name: 'Vue OPD',
            link: '/admin/vue-opd',
            icon: 'fa fa-angle-double-right'
        },
        //== ...
    ]
},
```

#### Tambahkan components `resources/assets/js/components.js` :

```javascript
import VueOpd from './components/bantenprov/vue-opd/VueOpd.chart.vue';
Vue.component('echarts-vue-opd', VueOpd);

import VueOpdKota from './components/bantenprov/vue-opd/VueOpdKota.chart.vue';
Vue.component('echarts-vue-opd-kota', VueOpdKota);

import VueOpdTahun from './components/bantenprov/vue-opd/VueOpdTahun.chart.vue';
Vue.component('echarts-vue-opd-tahun', VueOpdTahun);

import VueOpdAdminShow from './components/bantenprov/vue-opd/VueOpdAdmin.show.vue';
Vue.component('admin-view-vue-opd-tahun', VueOpdAdminShow);

//== Echarts Angka Partisipasi Kasar

import VueOpdBar01 from './components/views/bantenprov/vue-opd/VueOpdBar01.vue';
Vue.component('vue-opd-bar-01', VueOpdBar01);

import VueOpdBar02 from './components/views/bantenprov/vue-opd/VueOpdBar02.vue';
Vue.component('vue-opd-bar-02', VueOpdBar02);

//== mini bar charts
import VueOpdBar03 from './components/views/bantenprov/vue-opd/VueOpdBar03.vue';
Vue.component('vue-opd-bar-03', VueOpdBar03);

import VueOpdPie01 from './components/views/bantenprov/vue-opd/VueOpdPie01.vue';
Vue.component('vue-opd-pie-01', VueOpdPie01);

import VueOpdPie02 from './components/views/bantenprov/vue-opd/VueOpdPie02.vue';
Vue.component('vue-opd-pie-02', VueOpdPie02);

//== mini pie charts
import VueOpdPie03 from './components/views/bantenprov/vue-opd/VueOpdPie03.vue';
Vue.component('vue-opd-pie-03', VueOpdPie03);
```
