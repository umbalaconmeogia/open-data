<?php
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use yii\helpers\Url;

NavBar::begin([
    'brandLabel' => Yii::$app->name,
    'brandUrl' => Yii::$app->homeUrl,
    'options' => ['class' => 'navbar-expand-md navbar-dark bg-dark fixed-top']
]);

$languageMenuItems = [];

$languages = [
    'en' => 'English',
    'ja' => '日本語',
    'vi' => 'Tiếng Việt',
];
$callbackUrl = Yii::$app->request->getAbsoluteUrl();

foreach ($languages as $langCode => $langName) {
    $languageMenuItems[] = ['label' => $langName, 'url' => Url::to(['/i18nui/default/set-language', 'language' => $langCode, 'callbackUrl' => $callbackUrl])];
}

$menuItems[] = ['label' => 'ZipcodeCsv', 'url' => ['/japanzipcodecsv/intro/index']];
$menuItems[] = ['label' => 'CorporateNubmerCsv', 'url' => ['/japancorpnumcsv/intro/index']];

$menuItems[] = [
    'label' => Yii::t('app', 'Language'),
    'items' => $languageMenuItems,
];

// $menuItems[] = Yii::$app->user->isGuest
//     ? ['label' => 'Login', 'url' => ['/site/login']]
//     : '<li class="nav-item">'
//         . Html::beginForm(['/site/logout'])
//         . Html::submitButton(
//             'Logout (' . Yii::$app->user->identity->username . ')',
//             ['class' => 'nav-link btn btn-link logout']
//         )
//         . Html::endForm()
//         . '</li>';

echo Nav::widget([
    'options' => ['class' => 'navbar-nav'],
    'items' => $menuItems,
]);
NavBar::end();
?>